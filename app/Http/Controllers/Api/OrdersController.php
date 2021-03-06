<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderCollection;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function items()
    {
        return new OrderCollection(Order::all());
    }

    public function create(Request $request)
    {
        DB::transaction(function () use ($request) {
            $order = Order::create([
                'date' => Date::now(),
            ]);
            foreach ($request->all() as $item) {
                $order->menuItems()->attach($item["id"], ["amount" => $item["amount"], "remarks" => $item["remarks"]]);
            }
        });
    }
}
