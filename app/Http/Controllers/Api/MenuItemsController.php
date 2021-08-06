<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\MenuItemCollection;
use App\Models\Category;
use App\Models\Discount;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class MenuItemsController extends Controller
{

    public function items()
    {
        return new MenuItemCollection(MenuItem::all());
    }

    public function update(Request $request)
    {
        DB::transaction(function () use ($request) {
            foreach ($request->all() as $item) {
                $db_item = MenuItem::find($item["id"]);

                echo $db_item;
                if ($db_item == null) {
                    $db_item = new MenuItem;
                }


                $db_item->name = $item["name"];
                $db_item->description = $item["description"];
                $db_item->price = $item["price"];
                $db_item->number = $item["number"];
                $db_item->number_addition = $item["number_addition"];
                $db_item->category_id = $item["category_id"];

                $db_item->save();
            }

            $existing_ids = collect($request->all())->map(function ($item) {
                return $item["id"];
            });

            $removed_item_ids = MenuItem::whereNotIn('id', $existing_ids)->get()->map(function ($item) {
                return $item->id;
            });

            MenuItem::destroy($removed_item_ids);
        });
    }

    public function categories()
    {
        return new CategoryCollection(Category::all());
    }

    public function pdf()
    {
        $categories = Category::all();
        $discounts = Discount::where('expiry_date', '>', Date::yesterday())->orderBy('expiry_date', 'ASC')->get();
        $pdf = App::make('dompdf.wrapper');
        view()->share('categories', $categories);
        view()->share('discounts', $discounts);
        $pdf->loadView('pdf.menu');
        return $pdf->stream();
        // return $pdf->download('menu.pdf');
    }
}
