<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\MenuItemCollection;
use App\Models\Category;
use App\Models\Discount;
use App\Models\MenuItem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;

class MenuItemsController extends Controller
{

    public function items()
    {
        return new MenuItemCollection(MenuItem::all());
    }

    public function categories()
    {
        return new CategoryCollection(Category::all());
    }

    public function pdf()
    {
        $categories = Category::all();
        $discounts = Discount::where('expiry_date', '>', Date::yesterday())->get();
        $pdf = App::make('dompdf.wrapper');
        view()->share('categories', $categories);
        view()->share('discounts', $discounts);
        $pdf->loadView('pdf.menu');
        return $pdf->stream();
        // return $pdf->download('menu.pdf');
    }
}
