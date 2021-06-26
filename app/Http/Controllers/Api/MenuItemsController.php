<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\MenuItemCollection;
use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\Support\Facades\App;

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
        $data = Category::all();
        $pdf = App::make('dompdf.wrapper');
        view()->share('categories', $data);
        $pdf->loadView('pdf.menu', $data);
        return $pdf->stream();
        // return $pdf->download('menu.pdf');
    }
}
