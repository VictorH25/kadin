<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('types')->delete();
        
        DB::table('types')->insert(array (
            
            array (
                'id' => 2,
                'name' => 'Sanduiches Simples',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 3,
                'name' => 'Sanduiches Especiais',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 4,
                'name' => 'Bebidas',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 0,
            ),
            
            array (
                'id' => 5,
                'name' => 'Petiscos',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 0,
            ),
            
            array (
                'id' => 6,
                'name' => 'Suco',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 0,
            ),
            
            array (
                'id' => 8,
                'name' => 'Taxa de entrega',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5001,
                'name' => 'Pizza Tradicional',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5002,
                'name' => 'Pizza Especial',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5003,
                'name' => 'Pizza Doce',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5004,
                'name' => 'Meia G',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5005,
                'name' => 'Meia M',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5006,
                'name' => 'Macarronada',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5007,
                'name' => 'Petisco',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5008,
                'name' => 'Batata suiça',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5009,
                'name' => 'Sucos',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5010,
                'name' => 'Bebidas',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5011,
                'name' => 'Embalagem',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
            
            array (
                'id' => 5012,
                'name' => 'Confeitos',
                'created_at' => '2023-02-05 04:43:57',
                'updated_at' => '2023-02-05 04:43:57',
                'active' => 1,
            ),
        ));
        
        
    }
}