<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DiscountCollection;
use App\Models\Discount;
use App\Models\MenuItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DiscountsController extends Controller
{
    public function items()
    {
        return new DiscountCollection(Discount::all());
    }

    public function create(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->all();

            $menu_item = MenuItem::find($data["menu_item_id"]);

            $discount = $menu_item->discounts()->create([
                'new_price' => $data["new_price"],
                'expiry_date' => Carbon::parse($data["expiry_date"])->format('Y-m-d'),
            ]);
        });
    }
}
