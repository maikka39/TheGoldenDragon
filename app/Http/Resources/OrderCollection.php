<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($order) {
                return $order->menuItems()->get()->map(function ($order_item) use ($order) {
                    return [
                        "date" => $order->date,
                        "name" => $order_item->name,
                        "price" => $order_item->price,
                        "amount" => $order_item->pivot->amount,
                        "subtotal" => $order_item->pivot->amount * $order_item->price,
                    ];
                });
            })->flatten(1)
        ];
    }
}
