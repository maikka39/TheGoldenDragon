<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $sales = [
            [
                'menu_item_id' => 9,
                'amount' => 1,
                'date' => '2020-04-11 12:19:38.0000',
            ],
            [
                'menu_item_id' => 10,
                'amount' => 1,
                'date' => '2020-04-11 12:19:38.0000',
            ],
            [
                'menu_item_id' => 9,
                'amount' => 1,
                'date' => '2020-04-11 12:21:12.0000',
            ],
            [
                'menu_item_id' => 10,
                'amount' => 1,
                'date' => '2020-04-11 12:21:12.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-11 12:23:18.0000',
            ],
            [
                'menu_item_id' => 3,
                'amount' => 1,
                'date' => '2020-04-11 12:23:18.0000',
            ],
            [
                'menu_item_id' => 7,
                'amount' => 1,
                'date' => '2020-04-11 12:23:18.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-11 12:36:21.0000',
            ],
            [
                'menu_item_id' => 2,
                'amount' => 1,
                'date' => '2020-04-11 12:36:21.0000',
            ],
            [
                'menu_item_id' => 3,
                'amount' => 1,
                'date' => '2020-04-11 12:36:21.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-11 12:37:00.0000',
            ],
            [
                'menu_item_id' => 2,
                'amount' => 1,
                'date' => '2020-04-11 12:37:00.0000',
            ],
            [
                'menu_item_id' => 3,
                'amount' => 1,
                'date' => '2020-04-11 12:37:00.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-11 12:38:58.0000',
            ],
            [
                'menu_item_id' => 2,
                'amount' => 1,
                'date' => '2020-04-11 12:38:58.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-11 12:39:03.0000',
            ],
            [
                'menu_item_id' => 2,
                'amount' => 1,
                'date' => '2020-04-11 12:39:03.0000',
            ],
            [
                'menu_item_id' => 3,
                'amount' => 1,
                'date' => '2020-04-11 12:44:52.0000',
            ],
            [
                'menu_item_id' => 6,
                'amount' => 1,
                'date' => '2020-04-11 12:44:52.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-11 15:48:38.0000',
            ],
            [
                'menu_item_id' => 3,
                'amount' => 1,
                'date' => '2020-04-11 15:48:38.0000',
            ],
            [
                'menu_item_id' => 5,
                'amount' => 1,
                'date' => '2020-04-11 15:48:38.0000',
            ],
            [
                'menu_item_id' => 3,
                'amount' => 1,
                'date' => '2020-04-12 15:28:31.0000',
            ],
            [
                'menu_item_id' => 6,
                'amount' => 1,
                'date' => '2020-04-12 15:28:31.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-12 15:37:41.0000',
            ],
            [
                'menu_item_id' => 2,
                'amount' => 1,
                'date' => '2020-04-12 15:37:41.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-12 17:28:52.0000',
            ],
            [
                'menu_item_id' => 2,
                'amount' => 1,
                'date' => '2020-04-12 17:28:52.0000',
            ],
            [
                'menu_item_id' => 9,
                'amount' => 2,
                'date' => '2020-04-12 19:55:50.0000',
            ],
            [
                'menu_item_id' => 3,
                'amount' => 3,
                'date' => '2020-04-12 20:50:49.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 1,
                'date' => '2020-04-13 11:19:10.0000',
            ],
            [
                'menu_item_id' => 5,
                'amount' => 4,
                'date' => '2020-04-13 11:19:10.0000',
            ],
            [
                'menu_item_id' => 67,
                'amount' => 2,
                'date' => '2020-04-13 12:00:00.0000',
            ],
            [
                'menu_item_id' => 1,
                'amount' => 4,
                'date' => '2020-04-13 14:52:21.0000',
            ],
            [
                'menu_item_id' => 2,
                'amount' => 1,
                'date' => '2020-04-13 14:52:21.0000',
            ],
            [
                'menu_item_id' => 12,
                'amount' => 1,
                'date' => '2021-06-27 16:44:43.0000',
            ],
            [
                'menu_item_id' => 13,
                'amount' => 1,
                'date' => '2021-06-27 16:44:43.0000',
            ],
        ];

        foreach ($sales as $sale) {
            $order = Order::create([
                'date' => $sale["date"],
            ]);
            $order->menuItems()->attach($sale["menu_item_id"], ["amount" => $sale["amount"]]);
        }
    }
}
