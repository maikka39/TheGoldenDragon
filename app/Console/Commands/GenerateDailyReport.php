<?php

namespace App\Console\Commands;

use App\Models\DailyReport;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class GenerateDailyReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily_report:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a daily report';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = date('Y-m-d');
        $orders = Order::whereDate('date', Carbon::today())->get();
        $order_items = $orders->map(function ($order) {
            return $order->menuItems()->get();
        })->flatten(1);
        $revenue = $order_items->map(function ($order_item) {
            return $order_item->price * $order_item->pivot->amount;
        })->sum();

        $spreadsheet = new Spreadsheet();
        $info_sheet = $spreadsheet->getActiveSheet();
        $info_sheet->setTitle("Info");
        $info_sheet->setCellValue('A1', 'Datum');
        $info_sheet->setCellValue('B1', $date);
        $info_sheet->setCellValue('A2', 'Bestellingen');
        $info_sheet->setCellValue('B2', count($orders));
        $info_sheet->setCellValue('A3', 'Omzet');
        $info_sheet->setCellValue('B3', $revenue);
        $info_sheet->setCellValue('A4', 'BTW');
        $info_sheet->setCellValue('B4', $revenue * 0.09);
        $info_sheet->setCellValue('A5', 'Excl. BTW');
        $info_sheet->setCellValue('B5', $revenue / 1.09);

        $order_sheet = $spreadsheet->createSheet();
        $order_sheet->setTitle("Bestellingen");
        $order_sheet->setCellValue('A1', "Bestelling nr.");
        $order_sheet->setCellValue('B1', "Totaal");

        foreach ($orders as $idx => $order) {
            $order_sheet->setCellValue('A' . $idx + 2, $order->id);
            $order_sheet->setCellValue('B' . $idx + 2, $order->menuItems()->get()->map(function ($order_item) {
                return $order_item->price * $order_item->pivot->amount;
            })->sum());
        }

        $product_sheet = $spreadsheet->createSheet();
        $product_sheet->setTitle("Producten");
        $product_sheet->setCellValue('A1', "Bestelling nr.");
        $product_sheet->setCellValue('B1', "Naam");
        $product_sheet->setCellValue('C1', "Prijs");
        $product_sheet->setCellValue('D1', "Aantal");
        $product_sheet->setCellValue('E1', "Subtotaal");

        foreach ($order_items as $idx => $order_item) {
            $product_sheet->setCellValue('A' . $idx + 2, $order_item->pivot->order_id);
            $product_sheet->setCellValue('B' . $idx + 2, $order_item->name);
            $product_sheet->setCellValue('C' . $idx + 2, $order_item->price);
            $product_sheet->setCellValue('D' . $idx + 2, $order_item->pivot->amount);
            $product_sheet->setCellValue('E' . $idx + 2, $order_item->pivot->amount * $order_item->price);
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save("public/daily_reports/" . $date . ".xlsx");

        $daily_report = new DailyReport;
        $daily_report->date = Carbon::today();
        $daily_report->filename = "daily_reports/" . $date . ".xlsx";
        $daily_report->save();

        return 0;
    }
}
