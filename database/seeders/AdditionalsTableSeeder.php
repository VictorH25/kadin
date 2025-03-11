<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdditionalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {       

        DB::table('additionals')->delete();
        
        DB::table('additionals')->insert(array (
            
            array (
                'id' => 1,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 2,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 3,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 4,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 5,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 6,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 7,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 8,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 9,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 10,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 11,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 12,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 13,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 14,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 15,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 16,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 17,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 18,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 19,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 20,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 21,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 22,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 23,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 24,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 25,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 26,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 27,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 28,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 29,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 30,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 31,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 32,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 33,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 34,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 35,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 36,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 37,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 38,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 39,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 40,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 41,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 42,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 43,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 44,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 45,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 46,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 47,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 48,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 49,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 50,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 51,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 52,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 53,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 54,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 55,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 56,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 57,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 58,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 59,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 60,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 61,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 62,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 63,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 64,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 65,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 66,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 67,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 68,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 69,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 70,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 71,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 72,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 73,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 74,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 75,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 76,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 77,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 78,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 79,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 80,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 81,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 82,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 83,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 84,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 85,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 86,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 87,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 88,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 89,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 90,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 91,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 92,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 93,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 94,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 95,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 96,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 97,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 98,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 99,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 100,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 101,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 102,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 103,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 104,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 105,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 106,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 107,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 108,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 109,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 110,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 111,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 112,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 113,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 114,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 115,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 116,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 117,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 118,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 119,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 120,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 121,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 122,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 123,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 124,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 125,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 126,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 127,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 128,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 129,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 130,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 131,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 132,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 133,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 134,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 135,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 136,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 137,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 138,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 139,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 140,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 141,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 142,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 143,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 144,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 145,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 146,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 147,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 148,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 149,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 150,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 151,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 152,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 153,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 154,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 155,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 156,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 157,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 158,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 159,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 160,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 161,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 162,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 163,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 164,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 165,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 166,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 167,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 168,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 169,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 170,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 171,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 172,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 173,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 174,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 175,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 176,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 177,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 178,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 179,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 180,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 181,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 182,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 183,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 184,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 185,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 186,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 187,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 188,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 189,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 190,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 191,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 192,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 193,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 194,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 195,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 196,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 197,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 198,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 199,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 200,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 201,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 202,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 203,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 204,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 205,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 206,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 207,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 208,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 209,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 210,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 211,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 212,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 213,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 214,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 215,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 216,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 217,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 218,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 219,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 220,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 221,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 222,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 223,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 224,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 225,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 226,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 227,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 228,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 229,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 230,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 231,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 232,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 233,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 234,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 235,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 236,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 237,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 238,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 239,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 240,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 241,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 242,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 243,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 244,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 245,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 246,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 247,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 248,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 249,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 250,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 251,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 252,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 253,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 254,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 255,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 256,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 257,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 258,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 259,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 260,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 261,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 262,
                'name' => 'Calabresa',
                'value' => '4.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 263,
                'name' => 'Bacon',
                'value' => '4.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 264,
                'name' => 'Hamburguer',
                'value' => '2.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 265,
                'name' => 'Queijo',
                'value' => '2.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 266,
                'name' => 'Presunto',
                'value' => '2.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 267,
                'name' => 'Ovo',
                'value' => '2.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 268,
                'name' => 'Batata Fritas',
                'value' => '5.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 269,
                'name' => 'Hamburguer Caseiro',
                'value' => '9.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 270,
                'name' => 'Quejo Cheddar',
                'value' => '4.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 271,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 52,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 272,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 52,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 273,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 53,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 274,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 53,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 275,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 54,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 276,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 54,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 277,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 55,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 278,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 55,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 279,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 56,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 280,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 56,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 281,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 57,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 282,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 57,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 283,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 58,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 284,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 58,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 285,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 59,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 286,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 59,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 287,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 60,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 288,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 60,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 289,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 62,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 290,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 62,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 291,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 63,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 292,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 63,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 293,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 64,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 294,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 64,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 295,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 65,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 296,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 65,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 297,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 66,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 298,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 66,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 299,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 67,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 300,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 67,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 301,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 68,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 302,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 68,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 303,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 69,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 304,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 69,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 305,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 70,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 306,
                'name' => 'S/ Açúcar',
                'value' => '0.00',
                'product_id' => 70,
                'active' => 1,
                'created_at' => '2023-02-05 02:51:07',
                'updated_at' => '2023-02-05 02:51:07',
            ),
            
            array (
                'id' => 307,
                'name' => 'S bacon',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 308,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 52,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 309,
                'name' => 'C/ Leite',
                'value' => '0.00',
                'product_id' => 53,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 310,
                'name' => 'C/ Leite',
                'value' => '0.00',
                'product_id' => 54,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 311,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 55,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 312,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 56,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 313,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 57,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 314,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 58,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 315,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 59,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 316,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 60,
                'active' => 1,
                'created_at' => '2023-02-05 20:59:13',
                'updated_at' => '2023-02-05 20:59:13',
            ),
            
            array (
                'id' => 317,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 318,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 319,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 320,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 321,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 322,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 323,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 324,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 325,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 326,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 327,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 328,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 329,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 330,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 331,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 332,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 333,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 334,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 335,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 336,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 337,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 338,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 339,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 340,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 341,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 342,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 343,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 344,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 345,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 346,
                'name' => 'S/ Presunto',
                'value' => '0.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 347,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 348,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 349,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 350,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 351,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 352,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 353,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 354,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 355,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 356,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 357,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 358,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 359,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 360,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 361,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 362,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 363,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 364,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 365,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 366,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 367,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 368,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 369,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 370,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 371,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 372,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 373,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 374,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 375,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 376,
                'name' => 'S/ Queijo',
                'value' => '0.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 377,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 378,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 379,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 380,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 381,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 382,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 383,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 384,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 385,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 386,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 387,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 388,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 389,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 390,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 391,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 392,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 393,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 394,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 395,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 396,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 397,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 398,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 399,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 400,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 401,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 402,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 403,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 404,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 405,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 406,
                'name' => 'S/ Hambúrguer',
                'value' => '0.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 407,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 408,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 409,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 410,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 411,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 412,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 413,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 414,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 415,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 416,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 417,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 418,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 419,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 420,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 421,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 422,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 423,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 424,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 425,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 426,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 427,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 428,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 429,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 430,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 431,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 432,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 433,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 434,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 435,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 436,
                'name' => 'S/ Ovo',
                'value' => '0.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 437,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 2,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 438,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 3,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 439,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 4,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 440,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 5,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 441,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 6,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 442,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 7,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 443,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 8,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 444,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 9,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 445,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 10,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 446,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 11,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 447,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 12,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 448,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 13,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 449,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 450,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 451,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 452,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 453,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 454,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 455,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 456,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 457,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 458,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 459,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 460,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 461,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 462,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 463,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 464,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 465,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 466,
                'name' => 'S/ Salada',
                'value' => '0.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 467,
                'name' => 'Sukita',
                'value' => '0.00',
                'product_id' => 36,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 468,
                'name' => 'Peps',
                'value' => '0.00',
                'product_id' => 36,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 469,
                'name' => 'Soda',
                'value' => '0.00',
                'product_id' => 36,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 470,
                'name' => 'Guaraná',
                'value' => '0.00',
                'product_id' => 36,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 471,
                'name' => 'Coca Cola',
                'value' => '0.00',
                'product_id' => 36,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 472,
                'name' => 'Fanta',
                'value' => '0.00',
                'product_id' => 34,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 473,
                'name' => 'Guaraná',
                'value' => '0.00',
                'product_id' => 34,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 474,
                'name' => 'Coca Cola',
                'value' => '0.00',
                'product_id' => 34,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 475,
                'name' => 'S/ Requeijão',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 476,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 477,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 478,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 479,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 480,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 481,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 482,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 483,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 21,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 484,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 485,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 23,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 486,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 24,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 487,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 25,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 488,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 26,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 489,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 27,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 490,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 28,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 491,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 29,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 492,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 30,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 493,
                'name' => 'S/ Salsicha',
                'value' => '0.00',
                'product_id' => 31,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 494,
                'name' => 'S/ Bacon',
                'value' => '0.00',
                'product_id' => 14,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 495,
                'name' => 'S/ Bacon',
                'value' => '0.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 496,
                'name' => 'S/ Bacon',
                'value' => '0.00',
                'product_id' => 16,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 497,
                'name' => 'S/ Bacon',
                'value' => '0.00',
                'product_id' => 17,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 498,
                'name' => 'S/ Bacon',
                'value' => '0.00',
                'product_id' => 18,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 499,
                'name' => 'S/ Bacon',
                'value' => '0.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
            
            array (
                'id' => 500,
                'name' => 'S/ Bacon',
                'value' => '0.00',
                'product_id' => 20,
                'active' => 1,
                'created_at' => '2023-02-05 02:24:25',
                'updated_at' => '2023-02-05 02:24:25',
            ),
        ));
        DB::table('additionals')->insert(array (
            
            array (
                'id' => 501,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 502,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 503,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 504,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 505,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 506,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 507,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 508,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 509,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 510,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 511,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 512,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 513,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 514,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 515,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 516,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 517,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 518,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 519,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 520,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 521,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 522,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 523,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 524,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 525,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 526,
                'name' => 'Meia/Pizza de Charque',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 527,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 528,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 529,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 530,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 531,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 532,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 533,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 534,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 535,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 536,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 537,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 538,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 539,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 540,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 541,
                'name' => 'Meia/Pizza de Charque',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 542,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 543,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 544,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 545,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 546,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 547,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 548,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 549,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 550,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 551,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 552,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 553,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 554,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 555,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 556,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 557,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 558,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 559,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 560,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 561,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 562,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 563,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 564,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 565,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 566,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 567,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 568,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 569,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 570,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 571,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 572,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 573,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 574,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 575,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 576,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 577,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 578,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 579,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 580,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 581,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 582,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 583,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 584,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 585,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 586,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 587,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 588,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 589,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 590,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 591,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 592,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 593,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 594,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 595,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 596,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 597,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 598,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 599,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 600,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 601,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 602,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 603,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 604,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 605,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 606,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 607,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 608,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 609,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 610,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 611,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 612,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 613,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 614,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 615,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 616,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 617,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 618,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 619,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 83,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 620,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 82,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 621,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 622,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 623,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 624,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 625,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 626,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 627,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 628,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 629,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 630,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 631,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 632,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 633,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 634,
                'name' => 'Meia/Pizza Charque',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 635,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 636,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 637,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 638,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 639,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 640,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 641,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 642,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 643,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 644,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 645,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 646,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 647,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 648,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 649,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 650,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 651,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 652,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 653,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 654,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 655,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 656,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 657,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 658,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 659,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 660,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 661,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 662,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 663,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 664,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 665,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 666,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 667,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 668,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 669,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 670,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 671,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 672,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 673,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 674,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 675,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 676,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 677,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 678,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 679,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 680,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 681,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 682,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 75,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 683,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 74,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 684,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 685,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 94,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 686,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 96,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 687,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 688,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 689,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 690,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 691,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 692,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 693,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 694,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 695,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 696,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 697,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 97,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 698,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 699,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 22,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 700,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 91,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 701,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 702,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 713,
                'name' => 'Meia/4 Queijos',
                'value' => '0.00',
                'product_id' => 19,
                'active' => 1,
                'created_at' => '2023-02-22 21:33:29',
                'updated_at' => '2023-02-22 21:33:29',
            ),
            
            array (
                'id' => 714,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 715,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 101,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 716,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 100,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 717,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 718,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 719,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 97,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 720,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 96,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 721,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 95,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 722,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 94,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 723,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 724,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 725,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 726,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 727,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 74,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 728,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 729,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 730,
                'name' => 'redbull',
                'value' => '12.00',
                'product_id' => 66,
                'active' => 1,
                'created_at' => '2023-02-24 20:16:19',
                'updated_at' => '2023-02-24 20:16:19',
            ),
            
            array (
                'id' => 731,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 74,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 732,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 74,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 733,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 74,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 734,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 75,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 735,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 75,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 736,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 75,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 737,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 738,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 739,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 76,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 740,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 741,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 742,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 77,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 743,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 744,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 745,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 78,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 746,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 747,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 748,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 79,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 749,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 750,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 751,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 80,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 752,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 753,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 754,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 81,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 755,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 82,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 756,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 82,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 757,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 82,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 758,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 83,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 759,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 83,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 760,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 83,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 761,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 762,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 763,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 84,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 764,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 765,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 766,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 85,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 767,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 86,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 768,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 86,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 769,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 86,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 770,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 87,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 771,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 87,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 772,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 87,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 773,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 88,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 774,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 88,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 775,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 88,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 776,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 89,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 777,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 89,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 778,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 89,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 779,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 90,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 780,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 90,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 781,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 90,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 782,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 91,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 783,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 91,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 784,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 91,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 785,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 786,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 787,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 92,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 788,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 789,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 790,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 93,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 791,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 94,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 792,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 94,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 793,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 94,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 794,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 95,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 795,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 95,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 796,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 95,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 797,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 96,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 798,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 96,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 799,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 96,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 800,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 97,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 801,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 97,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 802,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 97,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 803,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 98,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 804,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 98,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 805,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 98,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 806,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 99,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 807,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 99,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 808,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 99,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 809,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 810,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 811,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 812,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 813,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 814,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 815,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 816,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 817,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 106,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 818,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 819,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 108,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 820,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 821,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 110,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 822,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 823,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 824,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 825,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 826,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 827,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 828,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 829,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 830,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 831,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 832,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 833,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 834,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 835,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 836,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 837,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 838,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 839,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 840,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 841,
                'name' => 'Meia/ Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 95,
                'active' => 1,
                'created_at' => '2023-02-25 19:41:46',
                'updated_at' => '2023-02-25 19:41:46',
            ),
            
            array (
                'id' => 842,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 2005,
                'active' => 1,
                'created_at' => '2023-02-27 18:49:59',
                'updated_at' => '2023-02-27 18:49:59',
            ),
            
            array (
                'id' => 843,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 2005,
                'active' => 1,
                'created_at' => '2023-02-27 18:49:59',
                'updated_at' => '2023-02-27 18:49:59',
            ),
            
            array (
                'id' => 844,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 2005,
                'active' => 1,
                'created_at' => '2023-02-27 18:56:49',
                'updated_at' => '2023-02-27 18:56:49',
            ),
            
            array (
                'id' => 845,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 2005,
                'active' => 1,
                'created_at' => '2023-02-27 18:56:50',
                'updated_at' => '2023-02-27 18:56:50',
            ),
            
            array (
                'id' => 846,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 2005,
                'active' => 1,
                'created_at' => '2023-02-27 19:16:52',
                'updated_at' => '2023-02-27 19:16:52',
            ),
            
            array (
                'id' => 847,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 2005,
                'active' => 1,
                'created_at' => '2023-02-27 19:16:52',
                'updated_at' => '2023-02-27 19:16:52',
            ),
            
            array (
                'id' => 848,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 2005,
                'active' => 1,
                'created_at' => '2023-02-27 19:16:52',
                'updated_at' => '2023-02-27 19:16:52',
            ),
            
            array (
                'id' => 849,
                'name' => 'Meia/ Camarão catupiry',
                'value' => '0.00',
                'product_id' => 113,
                'active' => 1,
                'created_at' => '2023-03-04 20:56:01',
                'updated_at' => '2023-03-04 20:56:01',
            ),
            
            array (
                'id' => 850,
                'name' => 'Coca-coca zero',
                'value' => '6.50',
                'product_id' => 2008,
                'active' => 1,
                'created_at' => '2023-03-11 18:57:09',
                'updated_at' => '2023-03-11 18:57:09',
            ),
            
            array (
                'id' => 851,
                'name' => 'Pergola',
                'value' => '23.00',
                'product_id' => 2005,
                'active' => 1,
                'created_at' => '2023-03-26 22:52:41',
                'updated_at' => '2023-03-26 22:52:41',
            ),
            
            array (
                'id' => 852,
                'name' => 'Meia',
                'value' => '0.00',
                'product_id' => 90,
                'active' => 1,
                'created_at' => '2023-04-28 18:47:27',
                'updated_at' => '2023-04-28 18:47:27',
            ),
            
            array (
                'id' => 853,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 3,
                'active' => 0,
                'created_at' => '2023-04-28 19:26:25',
                'updated_at' => '2023-04-28 19:34:11',
            ),
            
            array (
                'id' => 854,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 21,
                'active' => 0,
                'created_at' => '2023-04-28 19:28:10',
                'updated_at' => '2023-04-28 19:28:10',
            ),
            
            array (
                'id' => 855,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 35,
                'active' => 0,
                'created_at' => '2023-04-28 19:28:34',
                'updated_at' => '2023-04-28 19:28:34',
            ),
            
            array (
                'id' => 856,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 23,
                'active' => 0,
                'created_at' => '2023-04-28 19:34:37',
                'updated_at' => '2023-04-28 19:34:37',
            ),
            
            array (
                'id' => 857,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 23,
                'active' => 0,
                'created_at' => '2023-04-28 19:40:50',
                'updated_at' => '2023-04-28 19:40:50',
            ),
            
            array (
                'id' => 858,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 96,
                'active' => 1,
                'created_at' => '2023-04-28 19:42:44',
                'updated_at' => '2023-04-28 19:42:44',
            ),
            
            array (
                'id' => 859,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 21,
                'active' => 0,
                'created_at' => '2023-04-28 19:42:58',
                'updated_at' => '2023-04-28 19:42:58',
            ),
            
            array (
                'id' => 860,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 0,
                'active' => 0,
                'created_at' => '2023-04-28 19:45:15',
                'updated_at' => '2023-04-28 19:45:15',
            ),
            
            array (
                'id' => 861,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 108,
                'active' => 1,
                'created_at' => '2023-04-28 19:45:39',
                'updated_at' => '2023-04-28 19:45:39',
            ),
            
            array (
                'id' => 862,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 94,
                'active' => 1,
                'created_at' => '2023-04-28 19:48:10',
                'updated_at' => '2023-04-28 19:48:10',
            ),
            
            array (
                'id' => 863,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 95,
                'active' => 1,
                'created_at' => '2023-04-28 19:51:22',
                'updated_at' => '2023-04-28 19:51:22',
            ),
            
            array (
                'id' => 864,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 97,
                'active' => 1,
                'created_at' => '2023-04-28 19:51:51',
                'updated_at' => '2023-04-28 19:51:51',
            ),
            
            array (
                'id' => 865,
                'name' => 'Queijo',
                'value' => '7.00',
                'product_id' => 15,
                'active' => 1,
                'created_at' => '2023-05-02 20:47:08',
                'updated_at' => '2023-05-02 20:47:08',
            ),
            
            array (
                'id' => 5001,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5001,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5002,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5001,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5003,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5001,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5004,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5002,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5005,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5002,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5006,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5002,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5007,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5003,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5008,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5003,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5009,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5003,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5010,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5004,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5011,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5004,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5012,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5004,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5013,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5005,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5014,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5005,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5015,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5005,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5016,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5006,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5017,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5006,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5018,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5006,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5019,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5007,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5020,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5007,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5021,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5007,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5022,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5008,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5023,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5008,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5024,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5008,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5025,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5009,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5026,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5009,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5027,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5009,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5028,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5010,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5029,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5010,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5030,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5010,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5031,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5011,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5032,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5011,
                'active' => 1,
                'created_at' => '2023-02-06 04:43:57',
                'updated_at' => '2023-02-06 04:43:57',
            ),
            
            array (
                'id' => 5033,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5011,
                'active' => 1,
                'created_at' => '2023-02-07 04:43:57',
                'updated_at' => '2023-02-07 04:43:57',
            ),
            
            array (
                'id' => 5034,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5012,
                'active' => 1,
                'created_at' => '2023-02-08 04:43:57',
                'updated_at' => '2023-02-08 04:43:57',
            ),
            
            array (
                'id' => 5035,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5012,
                'active' => 1,
                'created_at' => '2023-02-09 04:43:57',
                'updated_at' => '2023-02-09 04:43:57',
            ),
            
            array (
                'id' => 5036,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5012,
                'active' => 1,
                'created_at' => '2023-02-10 04:43:57',
                'updated_at' => '2023-02-10 04:43:57',
            ),
            
            array (
                'id' => 5037,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5013,
                'active' => 1,
                'created_at' => '2023-02-08 04:43:57',
                'updated_at' => '2023-02-08 04:43:57',
            ),
            
            array (
                'id' => 5038,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5013,
                'active' => 1,
                'created_at' => '2023-02-09 04:43:57',
                'updated_at' => '2023-02-09 04:43:57',
            ),
            
            array (
                'id' => 5039,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5013,
                'active' => 1,
                'created_at' => '2023-02-10 04:43:57',
                'updated_at' => '2023-02-10 04:43:57',
            ),
            
            array (
                'id' => 5040,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5014,
                'active' => 1,
                'created_at' => '2023-02-08 04:43:57',
                'updated_at' => '2023-02-08 04:43:57',
            ),
            
            array (
                'id' => 5041,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5014,
                'active' => 1,
                'created_at' => '2023-02-09 04:43:57',
                'updated_at' => '2023-02-09 04:43:57',
            ),
            
            array (
                'id' => 5042,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5014,
                'active' => 1,
                'created_at' => '2023-02-10 04:43:57',
                'updated_at' => '2023-02-10 04:43:57',
            ),
            
            array (
                'id' => 5043,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5015,
                'active' => 1,
                'created_at' => '2023-02-08 04:43:57',
                'updated_at' => '2023-02-08 04:43:57',
            ),
            
            array (
                'id' => 5044,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5015,
                'active' => 1,
                'created_at' => '2023-02-08 04:43:57',
                'updated_at' => '2023-02-08 04:43:57',
            ),
            
            array (
                'id' => 5045,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5015,
                'active' => 1,
                'created_at' => '2023-02-09 04:43:57',
                'updated_at' => '2023-02-09 04:43:57',
            ),
            
            array (
                'id' => 5046,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5016,
                'active' => 1,
                'created_at' => '2023-02-10 04:43:57',
                'updated_at' => '2023-02-10 04:43:57',
            ),
            
            array (
                'id' => 5047,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5016,
                'active' => 1,
                'created_at' => '2023-02-11 04:43:57',
                'updated_at' => '2023-02-11 04:43:57',
            ),
            
            array (
                'id' => 5048,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5016,
                'active' => 1,
                'created_at' => '2023-02-12 04:43:57',
                'updated_at' => '2023-02-12 04:43:57',
            ),
            
            array (
                'id' => 5049,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5017,
                'active' => 1,
                'created_at' => '2023-02-13 04:43:57',
                'updated_at' => '2023-02-13 04:43:57',
            ),
            
            array (
                'id' => 5050,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5017,
                'active' => 1,
                'created_at' => '2023-02-14 04:43:57',
                'updated_at' => '2023-02-14 04:43:57',
            ),
            
            array (
                'id' => 5051,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5017,
                'active' => 1,
                'created_at' => '2023-02-15 04:43:57',
                'updated_at' => '2023-02-15 04:43:57',
            ),
            
            array (
                'id' => 5052,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5018,
                'active' => 1,
                'created_at' => '2023-02-16 04:43:57',
                'updated_at' => '2023-02-16 04:43:57',
            ),
            
            array (
                'id' => 5053,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5018,
                'active' => 1,
                'created_at' => '2023-02-17 04:43:57',
                'updated_at' => '2023-02-17 04:43:57',
            ),
            
            array (
                'id' => 5054,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5018,
                'active' => 1,
                'created_at' => '2023-02-18 04:43:57',
                'updated_at' => '2023-02-18 04:43:57',
            ),
            
            array (
                'id' => 5055,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5019,
                'active' => 1,
                'created_at' => '2023-02-19 04:43:57',
                'updated_at' => '2023-02-19 04:43:57',
            ),
            
            array (
                'id' => 5056,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5019,
                'active' => 1,
                'created_at' => '2023-02-20 04:43:57',
                'updated_at' => '2023-02-20 04:43:57',
            ),
            
            array (
                'id' => 5057,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5019,
                'active' => 1,
                'created_at' => '2023-02-21 04:43:57',
                'updated_at' => '2023-02-21 04:43:57',
            ),
            
            array (
                'id' => 5058,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5086,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5059,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5086,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5060,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5086,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5061,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5087,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5062,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5087,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5063,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5087,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5064,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5020,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5065,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5020,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5066,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5020,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5067,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5027,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5068,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5027,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5069,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5027,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5070,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5028,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5071,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5028,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5072,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5028,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5073,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5023,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5074,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5023,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5075,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5023,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5076,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5024,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5077,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5024,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5078,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5024,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5079,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5021,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5080,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5021,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5081,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5021,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5082,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5022,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5083,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5022,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5084,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5022,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5085,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5090,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5086,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5090,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5087,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5090,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5088,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5091,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5089,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5091,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5090,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5091,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5091,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5037,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5092,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5038,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5093,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5033,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5094,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5034,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5095,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5031,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5096,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5032,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5097,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5035,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5098,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5036,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5099,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5029,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5100,
                'name' => 'Borda Chocolate',
                'value' => '8.00',
                'product_id' => 5030,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5101,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5056,
                'active' => 1,
                'created_at' => '2023-02-14 04:43:57',
                'updated_at' => '2023-02-14 04:43:57',
            ),
            
            array (
                'id' => 5102,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5056,
                'active' => 1,
                'created_at' => '2023-02-15 04:43:57',
                'updated_at' => '2023-02-15 04:43:57',
            ),
            
            array (
                'id' => 5103,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5056,
                'active' => 1,
                'created_at' => '2023-02-16 04:43:57',
                'updated_at' => '2023-02-16 04:43:57',
            ),
            
            array (
                'id' => 5104,
                'name' => 'C/ Leite',
                'value' => '0.00',
                'product_id' => 5056,
                'active' => 1,
                'created_at' => '2023-02-17 04:43:57',
                'updated_at' => '2023-02-17 04:43:57',
            ),
            
            array (
                'id' => 5105,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5057,
                'active' => 1,
                'created_at' => '2023-02-18 04:43:57',
                'updated_at' => '2023-02-18 04:43:57',
            ),
            
            array (
                'id' => 5106,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5057,
                'active' => 1,
                'created_at' => '2023-02-19 04:43:57',
                'updated_at' => '2023-02-19 04:43:57',
            ),
            
            array (
                'id' => 5107,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5057,
                'active' => 1,
                'created_at' => '2023-02-20 04:43:57',
                'updated_at' => '2023-02-20 04:43:57',
            ),
            
            array (
                'id' => 5108,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5057,
                'active' => 1,
                'created_at' => '2023-02-21 04:43:57',
                'updated_at' => '2023-02-21 04:43:57',
            ),
            
            array (
                'id' => 5109,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5058,
                'active' => 1,
                'created_at' => '2023-02-22 04:43:57',
                'updated_at' => '2023-02-22 04:43:57',
            ),
            
            array (
                'id' => 5110,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5058,
                'active' => 1,
                'created_at' => '2023-02-23 04:43:57',
                'updated_at' => '2023-02-23 04:43:57',
            ),
            
            array (
                'id' => 5111,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5058,
                'active' => 1,
                'created_at' => '2023-02-24 04:43:57',
                'updated_at' => '2023-02-24 04:43:57',
            ),
            
            array (
                'id' => 5112,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5058,
                'active' => 1,
                'created_at' => '2023-02-25 04:43:57',
                'updated_at' => '2023-02-25 04:43:57',
            ),
            
            array (
                'id' => 5113,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5059,
                'active' => 1,
                'created_at' => '2023-02-26 04:43:57',
                'updated_at' => '2023-02-26 04:43:57',
            ),
            
            array (
                'id' => 5114,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5059,
                'active' => 1,
                'created_at' => '2023-02-27 04:43:57',
                'updated_at' => '2023-02-27 04:43:57',
            ),
            
            array (
                'id' => 5115,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5059,
                'active' => 1,
                'created_at' => '2023-02-28 04:43:57',
                'updated_at' => '2023-02-28 04:43:57',
            ),
            
            array (
                'id' => 5116,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5059,
                'active' => 1,
                'created_at' => '2023-03-01 04:43:57',
                'updated_at' => '2023-03-01 04:43:57',
            ),
            
            array (
                'id' => 5117,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5060,
                'active' => 1,
                'created_at' => '2023-03-02 04:43:57',
                'updated_at' => '2023-03-02 04:43:57',
            ),
            
            array (
                'id' => 5118,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5060,
                'active' => 1,
                'created_at' => '2023-03-03 04:43:57',
                'updated_at' => '2023-03-03 04:43:57',
            ),
            
            array (
                'id' => 5119,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5060,
                'active' => 1,
                'created_at' => '2023-03-04 04:43:57',
                'updated_at' => '2023-03-04 04:43:57',
            ),
            
            array (
                'id' => 5120,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5060,
                'active' => 1,
                'created_at' => '2023-03-05 04:43:57',
                'updated_at' => '2023-03-05 04:43:57',
            ),
            
            array (
                'id' => 5121,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5061,
                'active' => 1,
                'created_at' => '2023-03-06 04:43:57',
                'updated_at' => '2023-03-06 04:43:57',
            ),
            
            array (
                'id' => 5122,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5061,
                'active' => 1,
                'created_at' => '2023-03-07 04:43:57',
                'updated_at' => '2023-03-07 04:43:57',
            ),
            
            array (
                'id' => 5123,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5061,
                'active' => 1,
                'created_at' => '2023-03-08 04:43:57',
                'updated_at' => '2023-03-08 04:43:57',
            ),
            
            array (
                'id' => 5124,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5061,
                'active' => 1,
                'created_at' => '2023-03-09 04:43:57',
                'updated_at' => '2023-03-09 04:43:57',
            ),
            
            array (
                'id' => 5125,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5062,
                'active' => 1,
                'created_at' => '2023-03-10 04:43:57',
                'updated_at' => '2023-03-10 04:43:57',
            ),
            
            array (
                'id' => 5126,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5062,
                'active' => 1,
                'created_at' => '2023-03-11 04:43:57',
                'updated_at' => '2023-03-11 04:43:57',
            ),
            
            array (
                'id' => 5127,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5062,
                'active' => 1,
                'created_at' => '2023-03-12 04:43:57',
                'updated_at' => '2023-03-12 04:43:57',
            ),
            
            array (
                'id' => 5128,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5062,
                'active' => 1,
                'created_at' => '2023-03-13 04:43:57',
                'updated_at' => '2023-03-13 04:43:57',
            ),
            
            array (
                'id' => 5129,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5063,
                'active' => 1,
                'created_at' => '2023-03-14 04:43:57',
                'updated_at' => '2023-03-14 04:43:57',
            ),
            
            array (
                'id' => 5130,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5063,
                'active' => 1,
                'created_at' => '2023-03-15 04:43:57',
                'updated_at' => '2023-03-15 04:43:57',
            ),
            
            array (
                'id' => 5131,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5063,
                'active' => 1,
                'created_at' => '2023-03-16 04:43:57',
                'updated_at' => '2023-03-16 04:43:57',
            ),
            
            array (
                'id' => 5132,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5063,
                'active' => 1,
                'created_at' => '2023-03-17 04:43:57',
                'updated_at' => '2023-03-17 04:43:57',
            ),
            
            array (
                'id' => 5133,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5064,
                'active' => 1,
                'created_at' => '2023-03-24 04:43:57',
                'updated_at' => '2023-03-24 04:43:57',
            ),
            
            array (
                'id' => 5134,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5064,
                'active' => 1,
                'created_at' => '2023-03-25 04:43:57',
                'updated_at' => '2023-03-25 04:43:57',
            ),
            
            array (
                'id' => 5135,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5064,
                'active' => 1,
                'created_at' => '2023-03-26 04:43:57',
                'updated_at' => '2023-03-26 04:43:57',
            ),
            
            array (
                'id' => 5136,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5064,
                'active' => 1,
                'created_at' => '2023-03-27 04:43:57',
                'updated_at' => '2023-03-27 04:43:57',
            ),
            
            array (
                'id' => 5137,
                'name' => 'S/ Açucar',
                'value' => '0.00',
                'product_id' => 5065,
                'active' => 1,
                'created_at' => '2023-03-28 04:43:57',
                'updated_at' => '2023-03-28 04:43:57',
            ),
            
            array (
                'id' => 5138,
                'name' => 'C/ Açucar',
                'value' => '0.00',
                'product_id' => 5065,
                'active' => 1,
                'created_at' => '2023-03-29 04:43:57',
                'updated_at' => '2023-03-29 04:43:57',
            ),
            
            array (
                'id' => 5139,
                'name' => 'S/ Leite',
                'value' => '0.00',
                'product_id' => 5065,
                'active' => 1,
                'created_at' => '2023-03-30 04:43:57',
                'updated_at' => '2023-03-30 04:43:57',
            ),
            
            array (
                'id' => 5140,
                'name' => 'C/ Leite',
                'value' => '1.00',
                'product_id' => 5065,
                'active' => 1,
                'created_at' => '2023-03-31 04:43:57',
                'updated_at' => '2023-03-31 04:43:57',
            ),
            
            array (
                'id' => 5141,
                'name' => 'Pepsi',
                'value' => '0.00',
                'product_id' => 5071,
                'active' => 1,
                'created_at' => '2023-02-19 04:43:57',
                'updated_at' => '2023-02-19 04:43:57',
            ),
            
            array (
                'id' => 5142,
                'name' => 'Guaraná',
                'value' => '0.00',
                'product_id' => 5071,
                'active' => 1,
                'created_at' => '2023-02-19 04:43:57',
                'updated_at' => '2023-02-19 04:43:57',
            ),
            
            array (
                'id' => 5143,
                'name' => 'Soda',
                'value' => '0.00',
                'product_id' => 5071,
                'active' => 1,
                'created_at' => '2023-02-20 04:43:57',
                'updated_at' => '2023-02-20 04:43:57',
            ),
            
            array (
                'id' => 5144,
                'name' => 'Sukita',
                'value' => '0.00',
                'product_id' => 5071,
                'active' => 1,
                'created_at' => '2023-02-21 04:43:57',
                'updated_at' => '2023-02-21 04:43:57',
            ),
            
            array (
                'id' => 5145,
                'name' => 'Coca-cola',
                'value' => '0.00',
                'product_id' => 5072,
                'active' => 1,
                'created_at' => '2023-02-20 04:43:57',
                'updated_at' => '2023-02-20 04:43:57',
            ),
        ));
        DB::table('additionals')->insert(array (
            
            array (
                'id' => 5146,
                'name' => 'Guaraná',
                'value' => '0.00',
                'product_id' => 5072,
                'active' => 1,
                'created_at' => '2023-02-21 04:43:57',
                'updated_at' => '2023-02-21 04:43:57',
            ),
            
            array (
                'id' => 5147,
                'name' => 'Coca-cola',
                'value' => '0.00',
                'product_id' => 5073,
                'active' => 1,
                'created_at' => '2023-02-21 04:43:57',
                'updated_at' => '2023-02-21 04:43:57',
            ),
            
            array (
                'id' => 5148,
                'name' => 'Sukita',
                'value' => '0.00',
                'product_id' => 5073,
                'active' => 1,
                'created_at' => '2023-02-21 04:43:57',
                'updated_at' => '2023-02-21 04:43:57',
            ),
            
            array (
                'id' => 5149,
                'name' => 'Pepsi',
                'value' => '0.00',
                'product_id' => 5073,
                'active' => 1,
                'created_at' => '2023-02-21 04:43:57',
                'updated_at' => '2023-02-21 04:43:57',
            ),
            
            array (
                'id' => 5150,
                'name' => 'Guaraná',
                'value' => '0.00',
                'product_id' => 5073,
                'active' => 1,
                'created_at' => '2023-02-21 04:43:57',
                'updated_at' => '2023-02-21 04:43:57',
            ),
            
            array (
                'id' => 5151,
                'name' => 'Pizza de Queijo',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5152,
                'name' => 'Pizza de Frango Catupry G',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5153,
                'name' => 'Pizza de Frango Catupry M',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5154,
                'name' => 'Pizza de Frango G',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5155,
                'name' => 'Pizza de Frango M',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5156,
                'name' => 'Pizza de Frango Caipira G',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5157,
                'name' => 'Pizza de Frango Caipira M',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5158,
                'name' => 'Pizza de Portuguesa G',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5159,
                'name' => 'Pizza de Portuguesa M',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5160,
                'name' => 'Pizza de Calabresa G',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5161,
                'name' => 'Pizza de Calabresa M',
                'value' => '10.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5162,
                'name' => 'Pizza de 4 Queijos G',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5163,
                'name' => 'Pizza de 4 Queijos M',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5164,
                'name' => 'Pizza de Frango Com Bacon G',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5165,
                'name' => 'Pizza de Frango Com Bacon M',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5166,
                'name' => 'Pizza De Filé G',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5167,
                'name' => 'Pizza De Filé M',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5168,
                'name' => 'Pizza De Atum G',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5169,
                'name' => 'Pizza De Atum M',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5170,
                'name' => 'Pizza de Charque G',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5171,
                'name' => 'Pizza de Charque M',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5172,
                'name' => 'Pizza de Camarão Com Catupiry G',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5173,
                'name' => 'Pizza de Camarão Com Catupiry M',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5174,
                'name' => 'Pizza de Carne De Sol G',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5175,
                'name' => 'Pizza de Carne De Sol M',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5176,
                'name' => 'Pizza de Baiana G',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5177,
                'name' => 'Pizza de Baiana M',
                'value' => '20.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5178,
                'name' => 'Pizza Romeu E Julieta G',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5179,
                'name' => 'Pizza Romeu E Julieta M',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5180,
                'name' => 'Pizza de Farinha Lactea G',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5181,
                'name' => 'Pizza de Farinha Lactea M',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5182,
                'name' => 'Pizza de Disquete G',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5183,
                'name' => 'Pizza de Disquete M',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5184,
                'name' => 'Pizza de Kitkat G',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5185,
                'name' => 'Pizza de Kitkat M',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5186,
                'name' => 'Pizza Cartola G',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5187,
                'name' => 'Pizza Cartola M',
                'value' => '30.00',
                'product_id' => 7000,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5188,
                'name' => 'Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5189,
                'name' => 'Pizza de Frango Catupry G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5190,
                'name' => 'Pizza de Frango Catupry M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5191,
                'name' => 'Pizza de Frango G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5192,
                'name' => 'Pizza de Frango M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5193,
                'name' => 'Pizza de Frango Caipira G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5194,
                'name' => 'Pizza de Frango Caipira M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5195,
                'name' => 'Pizza de Portuguesa G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5196,
                'name' => 'Pizza de Portuguesa M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5197,
                'name' => 'Pizza de Calabresa G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5198,
                'name' => 'Pizza de Calabresa M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5199,
                'name' => 'Pizza de 4 Queijos G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5200,
                'name' => 'Pizza de 4 Queijos M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5201,
                'name' => 'Pizza de Frango Com Bacon G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5202,
                'name' => 'Pizza de Frango Com Bacon M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5203,
                'name' => 'Pizza De Filé G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5204,
                'name' => 'Pizza De Filé M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5205,
                'name' => 'Pizza De Atum G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5206,
                'name' => 'Pizza De Atum M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5207,
                'name' => 'Pizza de Charque G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5208,
                'name' => 'Pizza de Charque M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5209,
                'name' => 'Pizza de Camarão Com Catupiry G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5210,
                'name' => 'Pizza de Camarão Com Catupiry M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5211,
                'name' => 'Pizza de Carne De Sol G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5212,
                'name' => 'Pizza de Carne De Sol M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5213,
                'name' => 'Pizza de Baiana G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5214,
                'name' => 'Pizza de Baiana M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5215,
                'name' => 'Pizza Romeu E Julieta G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5216,
                'name' => 'Pizza Romeu E Julieta M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5217,
                'name' => 'Pizza de Farinha Lactea G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5218,
                'name' => 'Pizza de Farinha Lactea M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5219,
                'name' => 'Pizza de Disquete G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5220,
                'name' => 'Pizza de Disquete M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5221,
                'name' => 'Pizza de Kitkat G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5222,
                'name' => 'Pizza de Kitkat M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5223,
                'name' => 'Pizza Cartola G',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5224,
                'name' => 'Pizza Cartola M',
                'value' => '0.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5225,
                'name' => 'Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5226,
                'name' => 'Pizza de Frango Catupry G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5227,
                'name' => 'Pizza de Frango Catupry M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5228,
                'name' => 'Pizza de Frango G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5229,
                'name' => 'Pizza de Frango M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5230,
                'name' => 'Pizza de Frango Caipira G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5231,
                'name' => 'Pizza de Frango Caipira M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5232,
                'name' => 'Pizza de Portuguesa G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5233,
                'name' => 'Pizza de Portuguesa M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5234,
                'name' => 'Pizza de Calabresa G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5235,
                'name' => 'Pizza de Calabresa M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5236,
                'name' => 'Pizza de 4 Queijos G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5237,
                'name' => 'Pizza de 4 Queijos M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5238,
                'name' => 'Pizza de Frango Com Bacon G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5239,
                'name' => 'Pizza de Frango Com Bacon M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5240,
                'name' => 'Pizza De Filé G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5241,
                'name' => 'Pizza De Filé M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5242,
                'name' => 'Pizza De Atum G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5243,
                'name' => 'Pizza De Atum M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5244,
                'name' => 'Pizza de Charque G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5245,
                'name' => 'Pizza de Charque M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5246,
                'name' => 'Pizza de Camarão Com Catupiry G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5247,
                'name' => 'Pizza de Camarão Com Catupiry M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5248,
                'name' => 'Pizza de Carne De Sol G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5249,
                'name' => 'Pizza de Carne De Sol M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5250,
                'name' => 'Pizza de Baiana G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5251,
                'name' => 'Pizza de Baiana M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5252,
                'name' => 'Pizza Romeu E Julieta G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5253,
                'name' => 'Pizza Romeu E Julieta M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5254,
                'name' => 'Pizza de Farinha Lactea G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5255,
                'name' => 'Pizza de Farinha Lactea M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5256,
                'name' => 'Pizza de Disquete G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5257,
                'name' => 'Pizza de Disquete M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5258,
                'name' => 'Pizza de Kitkat G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5259,
                'name' => 'Pizza de Kitkat M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5260,
                'name' => 'Pizza Cartola G',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5261,
                'name' => 'Pizza Cartola M',
                'value' => '0.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5262,
                'name' => 'Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5263,
                'name' => 'Pizza de Frango Catupry G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5264,
                'name' => 'Pizza de Frango Catupry M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5265,
                'name' => 'Pizza de Frango G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5266,
                'name' => 'Pizza de Frango M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5267,
                'name' => 'Pizza de Frango Caipira G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5268,
                'name' => 'Pizza de Frango Caipira M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5269,
                'name' => 'Pizza de Portuguesa G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5270,
                'name' => 'Pizza de Portuguesa M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5271,
                'name' => 'Pizza de Calabresa G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5272,
                'name' => 'Pizza de Calabresa M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5273,
                'name' => 'Pizza de 4 Queijos G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5274,
                'name' => 'Pizza de 4 Queijos M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5275,
                'name' => 'Pizza de Frango Com Bacon G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5276,
                'name' => 'Pizza de Frango Com Bacon M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5277,
                'name' => 'Pizza De Filé G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5278,
                'name' => 'Pizza De Filé M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5279,
                'name' => 'Pizza De Atum G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5280,
                'name' => 'Pizza De Atum M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5281,
                'name' => 'Pizza de Charque G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5282,
                'name' => 'Pizza de Charque M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5283,
                'name' => 'Pizza de Camarão Com Catupiry G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5284,
                'name' => 'Pizza de Camarão Com Catupiry M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5285,
                'name' => 'Pizza de Carne De Sol G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5286,
                'name' => 'Pizza de Carne De Sol M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5287,
                'name' => 'Pizza de Baiana G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5288,
                'name' => 'Pizza de Baiana M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5289,
                'name' => 'Pizza Romeu E Julieta G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5290,
                'name' => 'Pizza Romeu E Julieta M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5291,
                'name' => 'Pizza de Farinha Lactea G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5292,
                'name' => 'Pizza de Farinha Lactea M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5293,
                'name' => 'Pizza de Disquete G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5294,
                'name' => 'Pizza de Disquete M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5295,
                'name' => 'Pizza de Kitkat G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5296,
                'name' => 'Pizza de Kitkat M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5297,
                'name' => 'Pizza Cartola G',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5298,
                'name' => 'Pizza Cartola M',
                'value' => '0.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5299,
                'name' => 'Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5300,
                'name' => 'Pizza de Frango Catupry G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5301,
                'name' => 'Pizza de Frango Catupry M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5302,
                'name' => 'Pizza de Frango G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5303,
                'name' => 'Pizza de Frango M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5304,
                'name' => 'Pizza de Frango Caipira G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5305,
                'name' => 'Pizza de Frango Caipira M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5306,
                'name' => 'Pizza de Portuguesa G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5307,
                'name' => 'Pizza de Portuguesa M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5308,
                'name' => 'Pizza de Calabresa G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5309,
                'name' => 'Pizza de Calabresa M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5310,
                'name' => 'Pizza de 4 Queijos G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5311,
                'name' => 'Pizza de 4 Queijos M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5312,
                'name' => 'Pizza de Frango Com Bacon G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5313,
                'name' => 'Pizza de Frango Com Bacon M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5314,
                'name' => 'Pizza De Filé G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5315,
                'name' => 'Pizza De Filé M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5316,
                'name' => 'Pizza De Atum G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5317,
                'name' => 'Pizza De Atum M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5318,
                'name' => 'Pizza de Charque G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5319,
                'name' => 'Pizza de Charque M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5320,
                'name' => 'Pizza de Camarão Com Catupiry G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5321,
                'name' => 'Pizza de Camarão Com Catupiry M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5322,
                'name' => 'Pizza de Carne De Sol G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5323,
                'name' => 'Pizza de Carne De Sol M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5324,
                'name' => 'Pizza de Baiana G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5325,
                'name' => 'Pizza de Baiana M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5326,
                'name' => 'Pizza Romeu E Julieta G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5327,
                'name' => 'Pizza Romeu E Julieta M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5328,
                'name' => 'Pizza de Farinha Lactea G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5329,
                'name' => 'Pizza de Farinha Lactea M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5330,
                'name' => 'Pizza de Disquete G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5331,
                'name' => 'Pizza de Disquete M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5332,
                'name' => 'Pizza de Kitkat G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5333,
                'name' => 'Pizza de Kitkat M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5334,
                'name' => 'Pizza Cartola G',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5335,
                'name' => 'Pizza Cartola M',
                'value' => '0.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5336,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5108,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5337,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5108,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5338,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5108,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5339,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5108,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5340,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5108,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5341,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5108,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5342,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5343,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5344,
                'name' => 'Meia/Pizza de Farinha Láctea',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5345,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5346,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5347,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5348,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5349,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5350,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5351,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5110,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5352,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5110,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5353,
                'name' => 'Meia/Pizza de Farinha Láctea',
                'value' => '0.00',
                'product_id' => 5110,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5354,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5110,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5355,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5110,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5356,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5110,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5357,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5358,
                'name' => 'Meia/Pizza de Farinha Láctea',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5359,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5360,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5361,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5362,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5363,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5364,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5365,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5366,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5367,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5368,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5369,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5370,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5371,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5372,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5373,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5374,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5375,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5106,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5376,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5106,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5377,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5106,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5378,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5106,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5379,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5106,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5380,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5106,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5381,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5382,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5383,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5384,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5385,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5386,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5387,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5388,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5389,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5390,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5391,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5392,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5393,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5394,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5395,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5396,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5397,
                'name' => 'Meia/',
                'value' => '0.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5398,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5399,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5400,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5401,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5402,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5403,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5404,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5405,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5406,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5407,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5408,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5409,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5410,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5411,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5412,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5413,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5414,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5415,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5416,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5417,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5418,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5419,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5420,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5421,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5422,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5423,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5424,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5425,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5426,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5427,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5428,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5429,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5430,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5431,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5432,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5433,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5434,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5435,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5436,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5437,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5438,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5439,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5440,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5441,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5442,
                'name' => 'Meia/Pizza de Camarão Com Catupiry',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5443,
                'name' => 'Meia/Pizza de Charque',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5444,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5445,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5446,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5447,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5448,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5449,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5450,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5451,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5452,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5453,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5454,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5455,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5456,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5457,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5458,
                'name' => 'Meia/Pizza de Camarão Com Catupiry',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5459,
                'name' => 'Meia/Pizza de Charque',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5460,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5461,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5462,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5463,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5464,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5465,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5466,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5467,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5468,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5469,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5470,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5471,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5472,
                'name' => 'Meia/Pizza de Charque',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5473,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5474,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5475,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5476,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5477,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5478,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5479,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5480,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5481,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5482,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5483,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5484,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5485,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5486,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5487,
                'name' => 'Meia/Pizza de Charque',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5488,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5489,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5490,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5491,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5492,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5493,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5494,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5495,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5496,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5497,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5498,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5499,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5500,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5501,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5502,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5503,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5504,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5505,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5506,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5507,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5508,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5509,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5510,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5511,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5512,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5513,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5514,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5515,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5516,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5517,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5518,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5519,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5520,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5521,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5522,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5523,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5524,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5525,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5526,
                'name' => 'Meia/Pizza de Charque',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5527,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5528,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5529,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5530,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5531,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5532,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5533,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5534,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5535,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5536,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5537,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5538,
                'name' => 'Meia/Pizza de Atum',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5539,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5540,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5541,
                'name' => 'Meia/Pizza de Charque',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5542,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5543,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5544,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5545,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5546,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5547,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5548,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5549,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5550,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5551,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5552,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5553,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5554,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5555,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5556,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5557,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5558,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5559,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5560,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5561,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5562,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5563,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5564,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5565,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5566,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5567,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5568,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5569,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5570,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5571,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5572,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5573,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5574,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5575,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5576,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5577,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5578,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5579,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5580,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5581,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5582,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5583,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5584,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5585,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5586,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5587,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5588,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5589,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5590,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5591,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5592,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5593,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5594,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5595,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5596,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5597,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5598,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5599,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5600,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5601,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5602,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5603,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5604,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5605,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5606,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5607,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5608,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5609,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5610,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5611,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5612,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5613,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5614,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5615,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5616,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5617,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5618,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5619,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5083,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5620,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5082,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5621,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5622,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5623,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5624,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5625,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5626,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5627,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5628,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5629,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5630,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5631,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5632,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5633,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5634,
                'name' => 'Meia/Pizza Charque',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5635,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5636,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5637,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5638,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5639,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5640,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5641,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5642,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5643,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5644,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5645,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
        ));
        DB::table('additionals')->insert(array (
            
            array (
                'id' => 5646,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5647,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5648,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5649,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5650,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5651,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5652,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5653,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5654,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5655,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5656,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5657,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5658,
                'name' => 'Meia/Pizza de Frango Catupiry',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5659,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5660,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5661,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5662,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5663,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5664,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5665,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5666,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5667,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5668,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5669,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5670,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5671,
                'name' => 'Meia/Pizza de Queijo',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5672,
                'name' => 'Meia/Pizza Cartola',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5673,
                'name' => 'Meia/Pizza Baiana',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5674,
                'name' => 'Meia/Pizza Calabresa',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5675,
                'name' => 'Meia/Pizza de Disquete',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5676,
                'name' => 'Meia/Pizza de Farinha Lactea',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5677,
                'name' => 'Meia/Pizza de Frango Caipira',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5678,
                'name' => 'Meia/Pizza de Frango',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5679,
                'name' => 'Meia/Pizza de Kitkat',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5680,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5681,
                'name' => 'Meia/Pizza Romeu E Julieta',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5682,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5075,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5683,
                'name' => 'Meia/Pizza de Portuguesa',
                'value' => '0.00',
                'product_id' => 5074,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5684,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5685,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5686,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5687,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5688,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5689,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5690,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5691,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5692,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5693,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5694,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5695,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5696,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5697,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5698,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5699,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5022,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5700,
                'name' => 'Meia/Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5091,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5701,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5702,
                'name' => 'Meia/Pizza de Baiana',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5713,
                'name' => 'Meia/4 Queijos',
                'value' => '0.00',
                'product_id' => 5019,
                'active' => 1,
                'created_at' => '2023-02-22 21:33:29',
                'updated_at' => '2023-02-22 21:33:29',
            ),
            
            array (
                'id' => 5714,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5715,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5716,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5717,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5718,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5719,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5720,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5721,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5722,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5723,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5724,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5725,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5726,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5727,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5074,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5728,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5729,
                'name' => 'Meia/Pizza 4 Queijos',
                'value' => '0.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
            array (
                'id' => 5730,
                'name' => 'redbull',
                'value' => '12.00',
                'product_id' => 5066,
                'active' => 1,
                'created_at' => '2023-02-24 20:16:19',
                'updated_at' => '2023-02-24 20:16:19',
            ),
            
            array (
                'id' => 5731,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5074,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5732,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5074,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5733,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5074,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5734,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5075,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5735,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5075,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5736,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5075,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5737,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5738,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5739,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5076,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5740,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5741,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5742,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5077,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5743,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5744,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5745,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5078,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5746,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5747,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5748,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5079,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5749,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5750,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5751,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5080,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5752,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5753,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5754,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5081,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5755,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5082,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5756,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5082,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5757,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5082,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5758,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5083,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5759,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5083,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5760,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5083,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5761,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5762,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5763,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5084,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5764,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5765,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5766,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5085,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5767,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5086,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5768,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5086,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5769,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5086,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5770,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5087,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5771,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5087,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5772,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5087,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5773,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5774,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5775,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5088,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5776,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5777,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5778,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5089,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5779,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5090,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5780,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5090,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5781,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5090,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5782,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5091,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5783,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5091,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5784,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5091,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5785,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5786,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5787,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5092,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5788,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5789,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5790,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5093,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5791,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5792,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5793,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5794,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5795,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5796,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5797,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5798,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5799,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5800,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5801,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5802,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5803,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5804,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5805,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5098,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5806,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5807,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5808,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5099,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5809,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5100,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5810,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5811,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5812,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5101,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5813,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5102,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5814,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5103,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5815,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5104,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5816,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5105,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5817,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5106,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5818,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5107,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5819,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5108,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5820,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5109,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5821,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5110,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5822,
                'name' => 'Borda de Chocolate',
                'value' => '7.00',
                'product_id' => 5111,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5823,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5824,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5825,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5112,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5826,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5827,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5828,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5829,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5830,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5831,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5114,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5832,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5833,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5834,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5115,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5835,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5836,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5837,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5116,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5838,
                'name' => 'Borda Mussarela',
                'value' => '7.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5839,
                'name' => 'Borda Catupiry',
                'value' => '7.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5840,
                'name' => 'Borda Cheddar',
                'value' => '7.00',
                'product_id' => 5117,
                'active' => 1,
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
            ),
            
            array (
                'id' => 5841,
                'name' => 'Meia/ Pizza de Frango com Bacon',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-02-25 19:41:46',
                'updated_at' => '2023-02-25 19:41:46',
            ),
            
            array (
                'id' => 5842,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 7005,
                'active' => 1,
                'created_at' => '2023-02-27 18:49:59',
                'updated_at' => '2023-02-27 18:49:59',
            ),
            
            array (
                'id' => 5843,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 7005,
                'active' => 1,
                'created_at' => '2023-02-27 18:49:59',
                'updated_at' => '2023-02-27 18:49:59',
            ),
            
            array (
                'id' => 5844,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 7005,
                'active' => 1,
                'created_at' => '2023-02-27 18:56:49',
                'updated_at' => '2023-02-27 18:56:49',
            ),
            
            array (
                'id' => 5845,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 7005,
                'active' => 1,
                'created_at' => '2023-02-27 18:56:50',
                'updated_at' => '2023-02-27 18:56:50',
            ),
            
            array (
                'id' => 5846,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 7005,
                'active' => 1,
                'created_at' => '2023-02-27 19:16:52',
                'updated_at' => '2023-02-27 19:16:52',
            ),
            
            array (
                'id' => 5847,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 7005,
                'active' => 1,
                'created_at' => '2023-02-27 19:16:52',
                'updated_at' => '2023-02-27 19:16:52',
            ),
            
            array (
                'id' => 5848,
                'name' => 'entrega',
                'value' => '2.00',
                'product_id' => 7005,
                'active' => 1,
                'created_at' => '2023-02-27 19:16:52',
                'updated_at' => '2023-02-27 19:16:52',
            ),
            
            array (
                'id' => 5849,
                'name' => 'Meia/ Camarão catupiry',
                'value' => '0.00',
                'product_id' => 5113,
                'active' => 1,
                'created_at' => '2023-03-04 20:56:01',
                'updated_at' => '2023-03-04 20:56:01',
            ),
            
            array (
                'id' => 5850,
                'name' => 'Coca-coca zero',
                'value' => '6.50',
                'product_id' => 7008,
                'active' => 1,
                'created_at' => '2023-03-11 18:57:09',
                'updated_at' => '2023-03-11 18:57:09',
            ),
            
            array (
                'id' => 5851,
                'name' => 'Pergola',
                'value' => '23.00',
                'product_id' => 7005,
                'active' => 1,
                'created_at' => '2023-03-26 22:52:41',
                'updated_at' => '2023-03-26 22:52:41',
            ),
            
            array (
                'id' => 5852,
                'name' => 'Meia',
                'value' => '0.00',
                'product_id' => 5090,
                'active' => 1,
                'created_at' => '2023-04-28 18:47:27',
                'updated_at' => '2023-04-28 18:47:27',
            ),
            
            array (
                'id' => 5853,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5003,
                'active' => 0,
                'created_at' => '2023-04-28 19:26:25',
                'updated_at' => '2023-04-28 19:34:11',
            ),
            
            array (
                'id' => 5854,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5021,
                'active' => 0,
                'created_at' => '2023-04-28 19:28:10',
                'updated_at' => '2023-04-28 19:28:10',
            ),
            
            array (
                'id' => 5855,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5035,
                'active' => 0,
                'created_at' => '2023-04-28 19:28:34',
                'updated_at' => '2023-04-28 19:28:34',
            ),
            
            array (
                'id' => 5856,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5023,
                'active' => 0,
                'created_at' => '2023-04-28 19:34:37',
                'updated_at' => '2023-04-28 19:34:37',
            ),
            
            array (
                'id' => 5857,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5023,
                'active' => 0,
                'created_at' => '2023-04-28 19:40:50',
                'updated_at' => '2023-04-28 19:40:50',
            ),
            
            array (
                'id' => 5858,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5096,
                'active' => 1,
                'created_at' => '2023-04-28 19:42:44',
                'updated_at' => '2023-04-28 19:42:44',
            ),
            
            array (
                'id' => 5859,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5021,
                'active' => 0,
                'created_at' => '2023-04-28 19:42:58',
                'updated_at' => '2023-04-28 19:42:58',
            ),
            
            array (
                'id' => 5860,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5000,
                'active' => 0,
                'created_at' => '2023-04-28 19:45:15',
                'updated_at' => '2023-04-28 19:45:15',
            ),
            
            array (
                'id' => 5861,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5108,
                'active' => 1,
                'created_at' => '2023-04-28 19:45:39',
                'updated_at' => '2023-04-28 19:45:39',
            ),
            
            array (
                'id' => 5862,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5094,
                'active' => 1,
                'created_at' => '2023-04-28 19:48:10',
                'updated_at' => '2023-04-28 19:48:10',
            ),
            
            array (
                'id' => 5863,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5095,
                'active' => 1,
                'created_at' => '2023-04-28 19:51:22',
                'updated_at' => '2023-04-28 19:51:22',
            ),
            
            array (
                'id' => 5864,
                'name' => 'Meia/ Filé',
                'value' => '0.00',
                'product_id' => 5097,
                'active' => 1,
                'created_at' => '2023-04-28 19:51:51',
                'updated_at' => '2023-04-28 19:51:51',
            ),
            
            array (
                'id' => 5865,
                'name' => 'Queijo',
                'value' => '7.00',
                'product_id' => 5015,
                'active' => 1,
                'created_at' => '2023-05-02 20:47:08',
                'updated_at' => '2023-05-02 20:47:08',
            ),
        ));
        
        
    }
}