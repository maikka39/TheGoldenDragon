<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DiscountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $discounts = [
            [
                'menu_item_id' => 6,
                'new_price' => 2,
                'expiry_date' => Date::now()->endOfWeek(),
            ],
            [
                'menu_item_id' => 98,
                'new_price' => 12.95,
                'expiry_date' => Date::now()->endOfWeek(),
            ],
            [
                'menu_item_id' => 5,
                'new_price' => 2.5,
                'expiry_date' => Date::now()->endOfWeek(),
            ],
        ];

        foreach ($discounts as $discount) {
            $menu_item = MenuItem::find($discount["menu_item_id"]);

            $discount = $menu_item->discounts()->create([
                'new_price' => $discount["new_price"],
                'expiry_date' => $discount["expiry_date"],
            ]);
        }
    }
}
