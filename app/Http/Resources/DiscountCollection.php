<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DiscountCollection extends ResourceCollection
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
            'data' => $this->collection->map(function ($discount) {
                $menu_item = $discount->menuItem()->get()->first();

                return [
                    "id" => $discount->id,
                    "menu_item_id" => $menu_item->id,
                    "name" => $menu_item->name,
                    "old_price" => $menu_item->price,
                    "new_price" => $discount->new_price,
                    "expiry_date" => $discount->expiry_date,
                ];
            })
        ];
    }
}
