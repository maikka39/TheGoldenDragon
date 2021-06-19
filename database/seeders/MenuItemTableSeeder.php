<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->delete();

        DB::table('menu_items')->insert(array(
            0 =>
            array(
                'id' => 1,
                'number' => 1,
                'number_addition' => NULL,
                'name' => 'Soep Ling Fa',
                'price' => 3.8,
                // 'soortgerecht' => 'SOEP',
                'description' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'number' => 2,
                'number_addition' => NULL,
                'name' => 'Kippensoep',
                'price' => 2.9,
                // 'soortgerecht' => 'SOEP',
                'description' => '',
            ),
            2 =>
            array(
                'id' => 3,
                'number' => 3,
                'number_addition' => NULL,
                'name' => 'Tomatensoep',
                'price' => 2.9,
                // 'soortgerecht' => 'SOEP',
                'description' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'number' => 4,
                'number_addition' => NULL,
                'name' => 'Haaienvinnensoep',
                'price' => 3.1,
                // 'soortgerecht' => 'SOEP',
                'description' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'number' => 5,
                'number_addition' => NULL,
                'name' => 'Champignonsoep',
                'price' => 3.3,
                // 'soortgerecht' => 'SOEP',
                'description' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'number' => 6,
                'number_addition' => NULL,
                'name' => 'Pekingsoep',
                'price' => 3.8,
                // 'soortgerecht' => 'SOEP',
                'description' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'number' => 7,
                'number_addition' => NULL,
                'name' => 'Wan Tan Soep',
                'price' => 4.3,
                // 'soortgerecht' => 'SOEP',
                'description' => NULL,
            ),
            7 =>
            array(
                'id' => 8,
                'number' => 8,
                'number_addition' => NULL,
                'name' => 'Chinese Champignonsoep',
                'price' => 4.1,
                // 'soortgerecht' => 'SOEP',
                'description' => NULL,
            ),
            8 =>
            array(
                'id' => 9,
                'number' => 10,
                'number_addition' => NULL,
                'name' => 'Loempia Ling Fa',
                'price' => 6.2,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => 'met atjar, ananas en pindasaus',
            ),
            9 =>
            array(
                'id' => 10,
                'number' => 11,
                'number_addition' => NULL,
                'name' => 'Loempia Compleet',
                'price' => 6.2,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => 'met gesmoord rundvlees en pikante saus',
            ),
            10 =>
            array(
                'id' => 11,
                'number' => 12,
                'number_addition' => NULL,
                'name' => 'Loempia met Kip',
                'price' => 3.9,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            11 =>
            array(
                'id' => 12,
                'number' => 13,
                'number_addition' => NULL,
                'name' => 'Loempia',
                'price' => 3.8,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            12 =>
            array(
                'id' => 13,
                'number' => 14,
                'number_addition' => NULL,
                'name' => 'Chinese mini loempia',
                'price' => 4.9,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => '4 st.',
            ),
            13 =>
            array(
                'id' => 14,
                'number' => 14,
                'number_addition' => 'A',
                'name' => 'Vegetarische mini loempia',
                'price' => 4.9,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => '12 st.',
            ),
            14 =>
            array(
                'id' => 15,
                'number' => 15,
                'number_addition' => NULL,
                'name' => 'Kroepoek',
                'price' => 2.5,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            15 =>
            array(
                'id' => 16,
                'number' => 15,
                'number_addition' => 'A',
                'name' => 'Casave Kroepoek',
                'price' => 2.7,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            16 =>
            array(
                'id' => 17,
                'number' => 16,
                'number_addition' => NULL,
                'name' => 'Pangsit Goreng',
                'price' => 3.9,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => '7 st.',
            ),
            17 =>
            array(
                'id' => 18,
                'number' => 17,
                'number_addition' => NULL,
                'name' => 'Pisang Goreng',
                'price' => 3.4,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => '5 st.',
            ),
            18 =>
            array(
                'id' => 19,
                'number' => 18,
                'number_addition' => NULL,
                'name' => 'Chinese Dim Sum',
                'price' => 5.4,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => 'mini loempia, kerry ko, pangsit goreng, garnalenpasteitje',
            ),
            19 =>
            array(
                'id' => 20,
                'number' => 19,
                'number_addition' => NULL,
                'name' => 'Sat&eacute; Babi',
                'price' => 5.4,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => '4 st.',
            ),
            20 =>
            array(
                'id' => 21,
                'number' => 20,
                'number_addition' => NULL,
                'name' => 'Sat&eacute; Ajam',
                'price' => 5.4,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => '4 st.',
            ),
            21 =>
            array(
                'id' => 22,
                'number' => 20,
                'number_addition' => 'A',
                'name' => 'Sat&eacute; Garnalen',
                'price' => 9.9,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => '3 st.',
            ),
            22 =>
            array(
                'id' => 23,
                'number' => 21,
                'number_addition' => NULL,
                'name' => 'Fong Mei Ha',
                'price' => 8.1,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => 'krokant gepaneerd garnalen. 4 st.',
            ),
            23 =>
            array(
                'id' => 24,
                'number' => 22,
                'number_addition' => NULL,
                'name' => 'Patat',
                'price' => 2.3,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            24 =>
            array(
                'id' => 25,
                'number' => 23,
                'number_addition' => NULL,
                'name' => 'Tsa Siu Mai',
                'price' => 3.5,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => 'gebakken vleespasteitje. 4 st.',
            ),
            25 =>
            array(
                'id' => 26,
                'number' => 24,
                'number_addition' => NULL,
                'name' => 'Atjar',
                'price' => 3.0,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            26 =>
            array(
                'id' => 27,
                'number' => 25,
                'number_addition' => NULL,
                'name' => 'Witte Rijst',
                'price' => 3.0,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            27 =>
            array(
                'id' => 28,
                'number' => 26,
                'number_addition' => NULL,
                'name' => 'Grote pindasaus',
                'price' => 3.9,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            28 =>
            array(
                'id' => 29,
                'number' => 27,
                'number_addition' => NULL,
                'name' => 'Kleine pindasaus',
                'price' => 2.3,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            29 =>
            array(
                'id' => 30,
                'number' => 28,
                'number_addition' => NULL,
                'name' => 'Kippenpootje',
                'price' => 2.3,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            30 =>
            array(
                'id' => 31,
                'number' => 29,
                'number_addition' => NULL,
                'name' => 'Halve kip',
                'price' => 6.0,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            31 =>
            array(
                'id' => 32,
                'number' => 29,
                'number_addition' => 'H',
                'name' => 'Kroket',
                'price' => 1.4,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            32 =>
            array(
                'id' => 33,
                'number' => 29,
                'number_addition' => 'G',
                'name' => 'Frikandel',
                'price' => 1.4,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            33 =>
            array(
                'id' => 34,
                'number' => 180,
                'number_addition' => 'H',
                'name' => 'Kleine Sambal',
                'price' => 2.5,
                // 'soortgerecht' => 'VOORGERECHT',
                'description' => NULL,
            ),
            34 =>
            array(
                'id' => 35,
                'number' => 30,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi Goreng Ling Fa',
                'price' => 14.3,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => 'Foe Yong Hai, Babi Pangang, sat&eacute; en kippenpootje',
            ),
            35 =>
            array(
                'id' => 36,
                'number' => 31,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi Goreng met ei',
                'price' => 5.0,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => NULL,
            ),
            36 =>
            array(
                'id' => 37,
                'number' => 32,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi Goreng speciaal',
                'price' => 8.5,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => NULL,
            ),
            37 =>
            array(
                'id' => 38,
                'number' => 33,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi Goreng met sat&eacute;',
                'price' => 8.5,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => '3 st.',
            ),
            38 =>
            array(
                'id' => 39,
                'number' => 34,
                'number_addition' => NULL,
                'name' => 'Nasi Yeung Chow',
                'price' => 10.9,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => NULL,
            ),
            39 =>
            array(
                'id' => 40,
                'number' => 34,
                'number_addition' => 'A',
                'name' => 'Nasi Yeung Chow',
                'price' => 13.0,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => 'met garnaaltjes en Cha Sieuw-vlees',
            ),
            40 =>
            array(
                'id' => 41,
                'number' => 35,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi Malay',
                'price' => 9.3,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => NULL,
            ),
            41 =>
            array(
                'id' => 42,
                'number' => 36,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi met kipfilet',
                'price' => 9.3,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => NULL,
            ),
            42 =>
            array(
                'id' => 43,
                'number' => 37,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi met varkensvlees',
                'price' => 9.3,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => NULL,
            ),
            43 =>
            array(
                'id' => 44,
                'number' => 38,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi met garnalen',
                'price' => 14.3,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => NULL,
            ),
            44 =>
            array(
                'id' => 45,
                'number' => 39,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi met ossenhaas',
                'price' => 15.3,
                // 'soortgerecht' => 'BAMI EN NASI GERECHTEN',
                'description' => NULL,
            ),
            45 =>
            array(
                'id' => 46,
                'number' => 40,
                'number_addition' => NULL,
                'name' => 'Babi Pangang, Foe Yong Hani en sat&eacute;',
                'price' => 15.8,
                // 'soortgerecht' => 'COMBINATIE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            46 =>
            array(
                'id' => 47,
                'number' => 41,
                'number_addition' => NULL,
                'name' => 'Babi Pangang, Tjap Tjoy en sat&eacute;',
                'price' => 15.8,
                // 'soortgerecht' => 'COMBINATIE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            47 =>
            array(
                'id' => 48,
                'number' => 42,
                'number_addition' => NULL,
                'name' => 'Babi Pangang, Koe Loe Yuk en sat&eacute;',
                'price' => 15.8,
                // 'soortgerecht' => 'COMBINATIE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            48 =>
            array(
                'id' => 49,
                'number' => 43,
                'number_addition' => NULL,
                'name' => 'Babi Pangang, Tau Sie Kai en sat&eacute;',
                'price' => 16.5,
                // 'soortgerecht' => 'COMBINATIE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            49 =>
            array(
                'id' => 50,
                'number' => 44,
                'number_addition' => NULL,
                'name' => 'Koe Loe Yuk, Foe Yong Hai en sat&eacute;',
                'price' => 15.8,
                // 'soortgerecht' => 'COMBINATIE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            50 =>
            array(
                'id' => 51,
                'number' => 45,
                'number_addition' => NULL,
                'name' => 'Koe Loe Yuk, Tjap Tjoy en sat&eacute;',
                'price' => 15.8,
                // 'soortgerecht' => 'COMBINATIE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            51 =>
            array(
                'id' => 52,
                'number' => 46,
                'number_addition' => NULL,
                'name' => 'Foe Yong Hai, Tjap Tjoy en sat&eacute;',
                'price' => 15.8,
                // 'soortgerecht' => 'COMBINATIE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            52 =>
            array(
                'id' => 53,
                'number' => 47,
                'number_addition' => NULL,
                'name' => 'Foe Yong Hai, Kip Kerrie en Sat&eacute;',
                'price' => 16.5,
                // 'soortgerecht' => 'COMBINATIE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            53 =>
            array(
                'id' => 54,
                'number' => 50,
                'number_addition' => NULL,
                'name' => 'Mihoen Ling Fa',
                'price' => 16.4,
                // 'soortgerecht' => 'MIHOEN GERECHTEN',
                'description' => 'Foe Yong Hai, Babi Pangang, sat&eacute; en kippenpootje',
            ),
            54 =>
            array(
                'id' => 55,
                'number' => 51,
                'number_addition' => NULL,
                'name' => 'Mihoen met varkensvlees',
                'price' => 9.3,
                // 'soortgerecht' => 'MIHOEN GERECHTEN',
                'description' => NULL,
            ),
            55 =>
            array(
                'id' => 56,
                'number' => 52,
                'number_addition' => NULL,
                'name' => 'Mihoen met kipfilet',
                'price' => 10.4,
                // 'soortgerecht' => 'MIHOEN GERECHTEN',
                'description' => NULL,
            ),
            56 =>
            array(
                'id' => 57,
                'number' => 53,
                'number_addition' => NULL,
                'name' => 'Mihoen met ossenhaas',
                'price' => 16.4,
                // 'soortgerecht' => 'MIHOEN GERECHTEN',
                'description' => NULL,
            ),
            57 =>
            array(
                'id' => 58,
                'number' => 54,
                'number_addition' => NULL,
                'name' => 'Mihoen met garnalen',
                'price' => 15.3,
                // 'soortgerecht' => 'MIHOEN GERECHTEN',
                'description' => NULL,
            ),
            58 =>
            array(
                'id' => 59,
                'number' => 55,
                'number_addition' => NULL,
                'name' => 'Mihoen Singapore-style',
                'price' => 11.9,
                // 'soortgerecht' => 'MIHOEN GERECHTEN',
                'description' => 'met kleine garnaaltjes en Cha Sieuw-vlees en kerrie poeder',
            ),
            59 =>
            array(
                'id' => 60,
                'number' => 56,
                'number_addition' => NULL,
                'name' => 'Mihoen met Cha Sieuw vlees',
                'price' => 11.2,
                // 'soortgerecht' => 'MIHOEN GERECHTEN',
                'description' => NULL,
            ),
            60 =>
            array(
                'id' => 61,
                'number' => 57,
                'number_addition' => NULL,
                'name' => 'Chinese Bami Ling Fa',
                'price' => 16.9,
                // 'soortgerecht' => 'CHINESE BAMI GERECHTEN',
                'description' => 'Foe Yong Hai, Babi Pangang, sat&eacute; en kippenpootje',
            ),
            61 =>
            array(
                'id' => 62,
                'number' => 58,
                'number_addition' => NULL,
                'name' => 'Chinese Bami met varkensvlees',
                'price' => 10.1,
                // 'soortgerecht' => 'CHINESE BAMI GERECHTEN',
                'description' => NULL,
            ),
            62 =>
            array(
                'id' => 63,
                'number' => 58,
                'number_addition' => 'A',
                'name' => 'Chinese Bami met kipfilet',
                'price' => 11.2,
                // 'soortgerecht' => 'CHINESE BAMI GERECHTEN',
                'description' => NULL,
            ),
            63 =>
            array(
                'id' => 64,
                'number' => 58,
                'number_addition' => 'B',
                'name' => 'Chinese Bami met Cha Sieuw-vlees',
                'price' => 12.2,
                // 'soortgerecht' => 'CHINESE BAMI GERECHTEN',
                'description' => NULL,
            ),
            64 =>
            array(
                'id' => 65,
                'number' => 58,
                'number_addition' => 'C',
                'name' => 'Chinese Bami met garnalen',
                'price' => 15.8,
                // 'soortgerecht' => 'CHINESE BAMI GERECHTEN',
                'description' => NULL,
            ),
            65 =>
            array(
                'id' => 66,
                'number' => 58,
                'number_addition' => 'D',
                'name' => 'Chinese Bami met ossenhaas',
                'price' => 17.4,
                // 'soortgerecht' => 'CHINESE BAMI GERECHTEN',
                'description' => NULL,
            ),
            66 =>
            array(
                'id' => 67,
                'number' => NULL,
                'number_addition' => 'M1',
                'name' => 'Bami of Nasi Rames Ling Fa',
                'price' => 15.3,
                // 'soortgerecht' => 'INDISCHE GERECHTEN',
                'description' => 'Babi Pangan, Foe Yong Hai, Daging Roedjak, Atjar en kippootje',
            ),
            67 =>
            array(
                'id' => 68,
                'number' => NULL,
                'number_addition' => 'M2',
                'name' => 'Bami of Nasi Rames',
                'price' => 8.8,
                // 'soortgerecht' => 'INDISCHE GERECHTEN',
                'description' => NULL,
            ),
            68 =>
            array(
                'id' => 69,
                'number' => NULL,
                'number_addition' => 'M3',
                'name' => 'Bami of Nasi Rames speciaal',
                'price' => 10.8,
                // 'soortgerecht' => 'INDISCHE GERECHTEN',
                'description' => NULL,
            ),
            69 =>
            array(
                'id' => 70,
                'number' => NULL,
                'number_addition' => 'M4',
                'name' => 'Gado Gado',
                'price' => 7.6,
                // 'soortgerecht' => 'INDISCHE GERECHTEN',
                'description' => 'met witte rijst',
            ),
            70 =>
            array(
                'id' => 71,
                'number' => NULL,
                'number_addition' => 'M5',
                'name' => 'Daging Smoor',
                'price' => 13.3,
                // 'soortgerecht' => 'INDISCHE GERECHTEN',
                'description' => 'met witte rijst',
            ),
            71 =>
            array(
                'id' => 72,
                'number' => NULL,
                'number_addition' => 'M6',
                'name' => 'Daging Roedjak',
                'price' => 13.3,
                // 'soortgerecht' => 'INDISCHE GERECHTEN',
                'description' => 'met witte rijst',
            ),
            72 =>
            array(
                'id' => 73,
                'number' => 59,
                'number_addition' => NULL,
                'name' => 'Foe Yong Hai Ling Fa',
                'price' => 16.4,
                // 'soortgerecht' => 'EIERGERECHTEN (met witte rijst)',
                'description' => 'ossenhaas, garnalen en kipfilet',
            ),
            73 =>
            array(
                'id' => 74,
                'number' => 60,
                'number_addition' => NULL,
                'name' => 'Foe Yong Hai met varkensvlees',
                'price' => 8.8,
                // 'soortgerecht' => 'EIERGERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            74 =>
            array(
                'id' => 75,
                'number' => 61,
                'number_addition' => NULL,
                'name' => 'Foe Yong Hai met kipfilet',
                'price' => 9.2,
                // 'soortgerecht' => 'EIERGERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            75 =>
            array(
                'id' => 76,
                'number' => 62,
                'number_addition' => NULL,
                'name' => 'Foe Yong Hai met garnalen',
                'price' => 15.3,
                // 'soortgerecht' => 'EIERGERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            76 =>
            array(
                'id' => 77,
                'number' => 63,
                'number_addition' => NULL,
                'name' => 'Foe Yong Hai met krab',
                'price' => 15.3,
                // 'soortgerecht' => 'EIERGERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            77 =>
            array(
                'id' => 78,
                'number' => 63,
                'number_addition' => 'A',
                'name' => 'Foe Yong Hai met Cha Sieuw Vlees',
                'price' => 11.2,
                // 'soortgerecht' => 'EIERGERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            78 =>
            array(
                'id' => 79,
                'number' => 63,
                'number_addition' => 'B',
                'name' => 'Foe Yong Hai met ossenhaas',
                'price' => 16.4,
                // 'soortgerecht' => 'EIERGERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            79 =>
            array(
                'id' => 80,
                'number' => 64,
                'number_addition' => NULL,
                'name' => 'Tjap Tjoy Ling Fa',
                'price' => 16.4,
                // 'soortgerecht' => 'GROENTEN GERECHTEN (met witte rijst)',
                'description' => 'ossenhaas, garnalen en kipfilet',
            ),
            80 =>
            array(
                'id' => 81,
                'number' => 65,
                'number_addition' => NULL,
                'name' => 'Tjap Tjoy met varkensvlees',
                'price' => 8.8,
                // 'soortgerecht' => 'GROENTEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            81 =>
            array(
                'id' => 82,
                'number' => 66,
                'number_addition' => NULL,
                'name' => 'Tjap Tjoy met kipfilet',
                'price' => 9.2,
                // 'soortgerecht' => 'GROENTEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            82 =>
            array(
                'id' => 83,
                'number' => 67,
                'number_addition' => NULL,
                'name' => 'Tjap Tjoy met ossenhaas',
                'price' => 16.4,
                // 'soortgerecht' => 'GROENTEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            83 =>
            array(
                'id' => 84,
                'number' => 68,
                'number_addition' => NULL,
                'name' => 'Tjap Tjoy met garnalen',
                'price' => 15.3,
                // 'soortgerecht' => 'GROENTEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            84 =>
            array(
                'id' => 85,
                'number' => 70,
                'number_addition' => NULL,
                'name' => 'Babi Pangang',
                'price' => 12.2,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            85 =>
            array(
                'id' => 86,
                'number' => 71,
                'number_addition' => NULL,
                'name' => 'Babi Pangang in ketjapsaus',
                'price' => 12.3,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            86 =>
            array(
                'id' => 87,
                'number' => 72,
                'number_addition' => NULL,
                'name' => 'Cha Sieuw',
                'price' => 13.3,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => 'rood geroosterd varkensvlees',
            ),
            87 =>
            array(
                'id' => 88,
                'number' => 73,
                'number_addition' => NULL,
                'name' => 'Cha Sieuw in pikante saus',
                'price' => 13.8,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            88 =>
            array(
                'id' => 89,
                'number' => 74,
                'number_addition' => NULL,
                'name' => 'Geroosterde speenvarken',
                'price' => 13.8,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            89 =>
            array(
                'id' => 90,
                'number' => 75,
                'number_addition' => NULL,
                'name' => 'Koe Loe Yuk',
                'price' => 11.9,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => 'bolletjes vlees met zoetzure saus',
            ),
            90 =>
            array(
                'id' => 91,
                'number' => 76,
                'number_addition' => NULL,
                'name' => 'Varkenshaas met kerriesaus',
                'price' => 11.9,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            91 =>
            array(
                'id' => 92,
                'number' => 77,
                'number_addition' => NULL,
                'name' => 'Varkenshaas met ketjapsaus',
                'price' => 11.9,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            92 =>
            array(
                'id' => 93,
                'number' => 78,
                'number_addition' => NULL,
                'name' => 'Varkenshaas met tomatensaus',
                'price' => 11.9,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            93 =>
            array(
                'id' => 94,
                'number' => 78,
                'number_addition' => 'A',
                'name' => 'Varkenshaas met champignons in knoflooksaus',
                'price' => 11.9,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            94 =>
            array(
                'id' => 95,
                'number' => 78,
                'number_addition' => 'B',
                'name' => 'Varkenshaas met Chinese champignons',
                'price' => 12.2,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            95 =>
            array(
                'id' => 96,
                'number' => 79,
                'number_addition' => NULL,
                'name' => 'Varkenshaas met zwarte bonensaus',
                'price' => 12.2,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            96 =>
            array(
                'id' => 97,
                'number' => 79,
                'number_addition' => 'A',
                'name' => 'Varkenshaas met verse ananas in zoetzure saus',
                'price' => 13.3,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            97 =>
            array(
                'id' => 98,
                'number' => 79,
                'number_addition' => 'B',
                'name' => 'Yu Sian Yuk',
                'price' => 13.3,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => 'varkenshaas met licht zoet pikante kruiden saus',
            ),
            98 =>
            array(
                'id' => 99,
                'number' => 79,
                'number_addition' => 'C',
                'name' => 'SzeChuan Yuk',
                'price' => 13.3,
                // 'soortgerecht' => 'VLEES GERECHTEN (met witte rijst)',
                'description' => 'varkenshaas met pittige kruiden saus',
            ),
            99 =>
            array(
                'id' => 100,
                'number' => 80,
                'number_addition' => NULL,
                'name' => 'Ajam Pangang',
                'price' => 13.0,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            100 =>
            array(
                'id' => 101,
                'number' => 81,
                'number_addition' => NULL,
                'name' => 'Ajam Pangang in ketjapsaus',
                'price' => 13.0,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            101 =>
            array(
                'id' => 102,
                'number' => 82,
                'number_addition' => NULL,
                'name' => 'Koe Loe Kai',
                'price' => 13.0,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => 'bolletjes kip met zoetzure saus',
            ),
            102 =>
            array(
                'id' => 103,
                'number' => 83,
                'number_addition' => NULL,
                'name' => 'Kipfilet met kerriesaus',
                'price' => 13.0,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            103 =>
            array(
                'id' => 104,
                'number' => 84,
                'number_addition' => NULL,
                'name' => 'Kipfilet met champignons in knoflooksaus',
                'price' => 13.0,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            104 =>
            array(
                'id' => 105,
                'number' => 85,
                'number_addition' => NULL,
                'name' => 'Kipfilet met tomatensaus',
                'price' => 13.0,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            105 =>
            array(
                'id' => 106,
                'number' => 86,
                'number_addition' => NULL,
                'name' => 'Kipfilet met ketjapsaus',
                'price' => 13.0,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            106 =>
            array(
                'id' => 107,
                'number' => 87,
                'number_addition' => NULL,
                'name' => 'Kipfilet met broccoli in knoflooksaus',
                'price' => 13.3,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            107 =>
            array(
                'id' => 108,
                'number' => 88,
                'number_addition' => NULL,
                'name' => 'Kipfilet met Chinese champignons',
                'price' => 13.3,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            108 =>
            array(
                'id' => 109,
                'number' => 89,
                'number_addition' => NULL,
                'name' => 'Kipfilet met zwarte pepersaus',
                'price' => 13.3,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            109 =>
            array(
                'id' => 110,
                'number' => 90,
                'number_addition' => NULL,
                'name' => 'Kipfilet met verse ananas in zoetzure saus',
                'price' => 13.3,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            110 =>
            array(
                'id' => 111,
                'number' => 91,
                'number_addition' => NULL,
                'name' => 'Kipfilet met zwarte pepersaus',
                'price' => 13.3,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            111 =>
            array(
                'id' => 112,
                'number' => 92,
                'number_addition' => NULL,
                'name' => 'Tjieuw Yem Kai',
                'price' => 13.3,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => 'licht gebraden kipfilet met zout en peper',
            ),
            112 =>
            array(
                'id' => 113,
                'number' => 93,
                'number_addition' => NULL,
                'name' => 'Yao Koe Kai',
                'price' => 13.3,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => 'kipfilet met cashewnoten in licht pikante saus',
            ),
            113 =>
            array(
                'id' => 114,
                'number' => 94,
                'number_addition' => NULL,
                'name' => 'Lychee Kai',
                'price' => 13.8,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => 'licht gebraden kipfilet met lychee in zoetzure saus',
            ),
            114 =>
            array(
                'id' => 115,
                'number' => 95,
                'number_addition' => NULL,
                'name' => 'Yu Sian Kai',
                'price' => 13.3,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => 'kipfilet met licht zoet pikante kruidensaus',
            ),
            115 =>
            array(
                'id' => 116,
                'number' => 96,
                'number_addition' => NULL,
                'name' => 'Sze Chuan Kai',
                'price' => 13.8,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => 'kipfilet met pittige kruidensaus',
            ),
            116 =>
            array(
                'id' => 117,
                'number' => 97,
                'number_addition' => NULL,
                'name' => 'Kung Bao Kai',
                'price' => 13.8,
                // 'soortgerecht' => 'KIP GERECHTEN (met witte rijst)',
                'description' => 'kipfilet met cashewnoten in pittige saus',
            ),
            117 =>
            array(
                'id' => 118,
                'number' => 98,
                'number_addition' => NULL,
                'name' => 'Garnalen met champignons in knoflooksaus',
                'price' => 15.9,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            118 =>
            array(
                'id' => 119,
                'number' => 99,
                'number_addition' => NULL,
                'name' => 'Garnalen met tomatensaus',
                'price' => 15.9,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            119 =>
            array(
                'id' => 120,
                'number' => 100,
                'number_addition' => NULL,
                'name' => 'Garnalen met ketjapsaus',
                'price' => 15.9,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            120 =>
            array(
                'id' => 121,
                'number' => 101,
                'number_addition' => NULL,
                'name' => 'Garnalen met broccoli',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            121 =>
            array(
                'id' => 122,
                'number' => 102,
                'number_addition' => NULL,
                'name' => 'Garnalen met Chinese champignons',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            122 =>
            array(
                'id' => 123,
                'number' => 103,
                'number_addition' => NULL,
                'name' => 'Garnalen met kerriesaus',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            123 =>
            array(
                'id' => 124,
                'number' => 104,
                'number_addition' => NULL,
                'name' => 'Garnalen met zwarte bonensaus',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            124 =>
            array(
                'id' => 125,
                'number' => 105,
                'number_addition' => NULL,
                'name' => 'Garnalen met zwarte pepersaus',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            125 =>
            array(
                'id' => 126,
                'number' => 106,
                'number_addition' => NULL,
                'name' => 'Garnalen met chilisaus',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            126 =>
            array(
                'id' => 127,
                'number' => 107,
                'number_addition' => NULL,
                'name' => 'Yu Sian Haa',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => 'garnalen met licht zoet pikante kruidensaus',
            ),
            127 =>
            array(
                'id' => 128,
                'number' => 108,
                'number_addition' => NULL,
                'name' => 'Tjieuw Yem Haa',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => 'licht gebraden garnalen met zout en peper',
            ),
            128 =>
            array(
                'id' => 129,
                'number' => 109,
                'number_addition' => NULL,
                'name' => 'Tja Tai Haa',
                'price' => 16.1,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => 'krokant gebakken garnalen',
            ),
            129 =>
            array(
                'id' => 130,
                'number' => 110,
                'number_addition' => NULL,
                'name' => 'Sze Chuan Haa',
                'price' => 16.4,
                // 'soortgerecht' => 'GARNALEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            130 =>
            array(
                'id' => 131,
                'number' => 111,
                'number_addition' => NULL,
                'name' => 'Ossenhaas met chanpignons in knoflooksaus',
                'price' => 16.9,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            131 =>
            array(
                'id' => 132,
                'number' => 112,
                'number_addition' => NULL,
                'name' => 'Ossenhaas met tomatensaus',
                'price' => 16.9,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            132 =>
            array(
                'id' => 133,
                'number' => 113,
                'number_addition' => NULL,
                'name' => 'Ossenhaas met ketjapsaus',
                'price' => 16.9,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            133 =>
            array(
                'id' => 134,
                'number' => 114,
                'number_addition' => NULL,
                'name' => 'Ossenhaas met broccoli',
                'price' => 17.1,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            134 =>
            array(
                'id' => 135,
                'number' => 115,
                'number_addition' => NULL,
                'name' => 'Ossenhaas met Chinese champignons',
                'price' => 17.1,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            135 =>
            array(
                'id' => 136,
                'number' => 116,
                'number_addition' => NULL,
                'name' => 'Ossenhaas met kerriesaus',
                'price' => 17.1,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            136 =>
            array(
                'id' => 137,
                'number' => 117,
                'number_addition' => NULL,
                'name' => 'Ossenhaas met zwarte bonensaus',
                'price' => 17.1,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            137 =>
            array(
                'id' => 138,
                'number' => 118,
                'number_addition' => NULL,
                'name' => 'Ossenhaas met zwarte pepersaus',
                'price' => 17.1,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            138 =>
            array(
                'id' => 139,
                'number' => 119,
                'number_addition' => NULL,
                'name' => 'Yu Sian Ngau Yuk',
                'price' => 17.1,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => 'ossenhaas met licht zoet pikante kruidensaus',
            ),
            139 =>
            array(
                'id' => 140,
                'number' => 120,
                'number_addition' => NULL,
                'name' => 'Sze Chuan Ngau Yuk',
                'price' => 17.4,
                // 'soortgerecht' => 'OSSENHAAS GERECHTEN (met witte rijst)',
                'description' => 'ossenhaas met pittige kruidensaus',
            ),
            140 =>
            array(
                'id' => 141,
                'number' => 121,
                'number_addition' => NULL,
                'name' => 'Visfilet met kerriesaus',
                'price' => 14.5,
                // 'soortgerecht' => 'VISSEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            141 =>
            array(
                'id' => 142,
                'number' => 122,
                'number_addition' => NULL,
                'name' => 'Visfilet met oestersaus',
                'price' => 14.5,
                // 'soortgerecht' => 'VISSEN GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            142 =>
            array(
                'id' => 143,
                'number' => 123,
                'number_addition' => NULL,
                'name' => 'Visfilet met zoetzure saus',
                'price' => 14.5,
                // 'soortgerecht' => 'VISSEN GERECHTEN (met witte rijst)',
                'description' => 'licht gebraden visfilet in zoete pikante saus',
            ),
            143 =>
            array(
                'id' => 144,
                'number' => 124,
                'number_addition' => NULL,
                'name' => 'Hong Shau Yu',
                'price' => 14.5,
                // 'soortgerecht' => 'VISSEN GERECHTEN (met witte rijst)',
                'description' => 'licht gebraden visfilet in zoete pikante saus',
            ),
            144 =>
            array(
                'id' => 145,
                'number' => 125,
                'number_addition' => NULL,
                'name' => 'Tjeuw Yem Yu',
                'price' => 15.0,
                // 'soortgerecht' => 'VISSEN GERECHTEN (met witte rijst)',
                'description' => 'licht gebraden visfilet met zout en peper',
            ),
            145 =>
            array(
                'id' => 146,
                'number' => 126,
                'number_addition' => NULL,
                'name' => 'San Sching Po',
                'price' => 16.1,
                // 'soortgerecht' => 'VISSEN GERECHTEN (met witte rijst)',
                'description' => 'visfilet, garnalen, krab en groenten in knoflooksaus',
            ),
            146 =>
            array(
                'id' => 147,
                'number' => NULL,
                'number_addition' => 'P1',
                'name' => 'Geroosterde Peking Eend',
                'price' => 16.6,
                // 'soortgerecht' => 'PEKING EEND GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            147 =>
            array(
                'id' => 148,
                'number' => NULL,
                'number_addition' => 'P2',
                'name' => 'Peking Eend met verse ananas in zoetzure saus',
                'price' => 17.1,
                // 'soortgerecht' => 'PEKING EEND GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            148 =>
            array(
                'id' => 149,
                'number' => NULL,
                'number_addition' => 'P3',
                'name' => 'Peking Eend met Chinese champignons in oestersaus',
                'price' => 17.1,
                // 'soortgerecht' => 'PEKING EEND GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            149 =>
            array(
                'id' => 150,
                'number' => NULL,
                'number_addition' => 'P4',
                'name' => 'Yu Sian Ya',
                'price' => 17.1,
                // 'soortgerecht' => 'PEKING EEND GERECHTEN (met witte rijst)',
                'description' => 'peking eend met licht zoet pikante kruidensaus',
            ),
            150 =>
            array(
                'id' => 151,
                'number' => NULL,
                'number_addition' => 'T1',
                'name' => 'Tiepan Ling Fa',
                'price' => 17.9,
                // 'soortgerecht' => 'TIEPAN SPECIALITEITEN (met witte rijst)',
                'description' => 'garnalen, kipfilet, ossenhaas en groenten in zwarte pepersaus',
            ),
            151 =>
            array(
                'id' => 152,
                'number' => NULL,
                'number_addition' => 'T2',
                'name' => 'Tiepan Kai',
                'price' => 15.3,
                // 'soortgerecht' => 'TIEPAN SPECIALITEITEN (met witte rijst)',
                'description' => 'licht gebraden kipfilet en groenten met zoet pikante saus',
            ),
            152 =>
            array(
                'id' => 153,
                'number' => NULL,
                'number_addition' => 'T3',
                'name' => 'Tiepan San Yuk',
                'price' => 17.1,
                // 'soortgerecht' => 'TIEPAN SPECIALITEITEN (met witte rijst)',
                'description' => 'lichtgrbaden varkenshaas, kipfilet, ossenhaas en groenten met zoet pikante saus',
            ),
            153 =>
            array(
                'id' => 154,
                'number' => NULL,
                'number_addition' => 'T4',
                'name' => 'Tiepan Haa',
                'price' => 17.4,
                // 'soortgerecht' => 'TIEPAN SPECIALITEITEN (met witte rijst)',
                'description' => 'garnalen en groenten met zoet pikante saus',
            ),
            154 =>
            array(
                'id' => 155,
                'number' => NULL,
                'number_addition' => 'T5',
                'name' => 'Tiepan Ngau Yuk',
                'price' => 19.5,
                // 'soortgerecht' => 'TIEPAN SPECIALITEITEN (met witte rijst)',
                'description' => '5st. ossenhaas en groenten met zoet pikante saus',
            ),
            155 =>
            array(
                'id' => 156,
                'number' => NULL,
                'number_addition' => 'V4',
                'name' => 'Tau Fu Po',
                'price' => 15.3,
                // 'soortgerecht' => 'TIEPAN SPECIALITEITEN (met witte rijst)',
                'description' => 'sojakaas, cha sieuw garnalen en chinese paddenstoelen',
            ),
            156 =>
            array(
                'id' => 157,
                'number' => NULL,
                'number_addition' => 'V1',
                'name' => 'Vegetarische Tjap Tjoy',
                'price' => 8.3,
                // 'soortgerecht' => 'VEGETARISCHE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            157 =>
            array(
                'id' => 158,
                'number' => NULL,
                'number_addition' => 'V2',
                'name' => 'Lo Han Zhai',
                'price' => 11.2,
                // 'soortgerecht' => 'VEGETARISCHE GERECHTEN (met witte rijst)',
                'description' => 'sojakaas, Chinese paddenstoelen en groenten in knoflooksaus',
            ),
            158 =>
            array(
                'id' => 159,
                'number' => NULL,
                'number_addition' => 'V3',
                'name' => 'Vegetarische Foe Yong Hai',
                'price' => 8.3,
                // 'soortgerecht' => 'VEGETARISCHE GERECHTEN (met witte rijst)',
                'description' => NULL,
            ),
            159 =>
            array(
                'id' => 160,
                'number' => NULL,
                'number_addition' => 'K1',
                'name' => 'Frites, sat&eacute; (2st.) en ei',
                'price' => 6.5,
                // 'soortgerecht' => 'KINDERMENUS',
                'description' => NULL,
            ),
            160 =>
            array(
                'id' => 161,
                'number' => NULL,
                'number_addition' => 'K2',
                'name' => 'Frites, kippootje en ei',
                'price' => 6.5,
                // 'soortgerecht' => 'KINDERMENUS',
                'description' => NULL,
            ),
            161 =>
            array(
                'id' => 162,
                'number' => NULL,
                'number_addition' => 'K3',
                'name' => 'Frites, mini loempia (2st.) en ei',
                'price' => 6.5,
                // 'soortgerecht' => 'KINDERMENUS',
                'description' => NULL,
            ),
            162 =>
            array(
                'id' => 163,
                'number' => NULL,
                'number_addition' => 'K4',
                'name' => 'Kinder Bami of Nasi met sat&eacute; (2st.) en ei',
                'price' => 6.5,
                // 'soortgerecht' => 'KINDERMENUS',
                'description' => NULL,
            ),
            163 =>
            array(
                'id' => 164,
                'number' => NULL,
                'number_addition' => 'R1',
                'name' => 'Indische rijsttafel (voor 1 persoon)',
                'price' => 16.4,
                // 'soortgerecht' => 'RIJSTTAFELS',
                'description' => 'Gado gado, Foe Yong Hai, sat&eacute;, Daging Roedjak, Daging Smoor, Ajam Ketjap, Atjar, Pisang Goreng, Pindas en Cocos',
            ),
            164 =>
            array(
                'id' => 165,
                'number' => NULL,
                'number_addition' => 'R2',
                'name' => 'Indische rijsttafel<br>Vanaf 2 personen... Per persoon',
                'price' => 15.0,
                // 'soortgerecht' => 'RIJSTTAFELS',
                'description' => 'Ajam Ketjap, Gado Gado, Daging Smoor, Kroepoek, Daging Roedjak, Foe Yong Hai, Sat&eacute;, Sambal Goreng Boontjes, Sambal Goreng Kering, Atjar, Pisang Goreng, Pinda en Cocos',
            ),
            165 =>
            array(
                'id' => 167,
                'number' => NULL,
                'number_addition' => 'R3',
                'name' => 'Chinese Indische Rijsttafel<br>Vanaf 4 personen... per persoon',
                'price' => 16.5,
                // 'soortgerecht' => 'RIJSTTAFELS',
                'description' => 'Foe Yong Hai, Babi Pangang, Tjap Tjoy, Koe Loe Yuk, Ajam Ketjap, Daging Smoor, Daging Roedjak, Sat&eacute;, Ei, Kroepoek, Sambal Goeren boontjes, Atjar, Pisang Goreng, Pinda en Cocos',
            ),
            166 =>
            array(
                'id' => 168,
                'number' => NULL,
                'number_addition' => 'R4',
                'name' => 'Chinese Rijsttafel<br>Vanaf 2 personen... per persoon',
                'price' => 17.0,
                // 'soortgerecht' => 'RIJSTTAFELS',
                'description' => 'Kippen- of Tomatensoep, Tjap Tjoy met kipfilet, Koe Loe Yuk, Gebakken garnalen, Babi Pangang, Foe Yong Hai, sat&eacute;, kroepoek',
            ),
            167 =>
            array(
                'id' => 169,
                'number' => NULL,
                'number_addition' => 'R5',
                'name' => 'Kantones Rijsttafel<br>Vanaf 2 personen... per persoon',
                'price' => 23.0,
                // 'soortgerecht' => 'RIJSTTAFELS',
                'description' => 'Wan Tan soep, Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng, garnalen, pasteitje), Geroosterde Peking Eend, Lychee Kai (licht gebraden kipfilet met lychee in zoetzure saus), Tau Sie Haa (garnalen met zwarte bonensaus)',
            ),
            168 =>
            array(
                'id' => 170,
                'number' => NULL,
                'number_addition' => 'R6',
                'name' => 'Sze Chuan Rijsttafel<br>Vanaf 2 personen... per persoon',
                'price' => 23.0,
                // 'soortgerecht' => 'RIJSTTAFELS',
                'description' => 'Peking Soep (pittige lichtzure soep), Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng, garnalen, pastei(tje), Tjieuw Yem Kai (licht gebakken kipfilet met zout en peper), Lychee Yuk (licht gebraden varkensvlees met lychee in zoetzure saus), Yu Sian Ngau Yuk (ossenhaas met licht zoet pikante kruiden saus)',
            ),
            169 =>
            array(
                'id' => 171,
                'number' => NULL,
                'number_addition' => NULL,
                'name' => 'Buffet Menu A, per persoon',
                'price' => 12.8,
                // 'soortgerecht' => 'BUFFET',
                'description' => 'Mini Loempia\'s, Pisang Goreng, Babi Pangang, Koe Loe Yuk, Foe Yong Hai, Kipfilet met zwarte bonensaus, Tjap Tjoy met kipfilet, sat&eacute; Ajam',
            ),
            170 =>
            array(
                'id' => 172,
                'number' => NULL,
                'number_addition' => NULL,
                'name' => 'Buffet Menu B, per persoon',
                'price' => 15.0,
                // 'soortgerecht' => 'BUFFET',
                'description' => 'Mini Loempia\'s, Pisang Goreng, Babi Pangang, Foe Yong Hai, Kung Bao Kai, Hong Shau Yu, sat&eacute; Ajam, Ossenhaas met zwarte bonensaus, Kipfilet met kerriesaus',
            ),
            171 =>
            array(
                'id' => 173,
                'number' => NULL,
                'number_addition' => NULL,
                'name' => 'Bami of Nasi Goreng ipv rijst',
                'price' => 0.9,
                // 'soortgerecht' => 'DIVERSEN',
                'description' => NULL,
            ),
            172 =>
            array(
                'id' => 174,
                'number' => NULL,
                'number_addition' => NULL,
                'name' => 'Mihoen Goreng ipv rijst',
                'price' => 2.5,
                // 'soortgerecht' => 'DIVERSEN',
                'description' => NULL,
            ),
            173 =>
            array(
                'id' => 175,
                'number' => NULL,
                'number_addition' => NULL,
                'name' => 'Chinese Bami ipv rijst',
                'price' => 2.5,
                // 'soortgerecht' => 'DIVERSEN',
                'description' => NULL,
            ),
        ));
    }
}
