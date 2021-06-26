<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'id' => 1,
                'name' => 'Soep',
            ],
            [
                'id' => 2,
                'name' => 'Voorgerecht',
            ],
            [
                'id' => 3,
                'name' => 'Bami en nasi gerechten',
            ],
            [
                'id' => 4,
                'name' => 'Combinatie gerechten (met witte rijst)',
            ],
            [
                'id' => 5,
                'name' => 'Mihoen gerechten',
            ],
            [
                'id' => 6,
                'name' => 'Chinese bami gerechten',
            ],
            [
                'id' => 7,
                'name' => 'Indische gerechten',
            ],
            [
                'id' => 8,
                'name' => 'Eiergerechten (met witte rijst)',
            ],
            [
                'id' => 9,
                'name' => 'Groentegerechten (met witte rijst)',
            ],
            [
                'id' => 10,
                'name' => 'Vlees gerechten (met witte rijst)',
            ],
            [
                'id' => 11,
                'name' => 'Kip gerechten (met witte rijst)',
            ],
            [
                'id' => 12,
                'name' => 'Garnalen gerechten (met witte rijst)',
            ],
            [
                'id' => 13,
                'name' => 'Ossenhaas gerechten (met witte rijst)',
            ],
            [
                'id' => 14,
                'name' => 'Vissen gerechten (met witte rijst)',
            ],
            [
                'id' => 15,
                'name' => 'Peking eend gerechten (met witte rijst)',
            ],
            [
                'id' => 16,
                'name' => 'Tiepan specialiteiten (met witte rijst)',
            ],
            [
                'id' => 17,
                'name' => 'Vegetarische gerechten (met witte rijst)',
            ],
            [
                'id' => 18,
                'name' => 'Kindermenu\'s',
            ],
            [
                'id' => 19,
                'name' => 'Rijsttafels',
            ],
            [
                'id' => 20,
                'name' => 'Buffet',
            ],
            [
                'id' => 21,
                'name' => 'Diversen',
            ]
        ]);
    }
}
