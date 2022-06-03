<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigStateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('config_state')->delete();
        
        \DB::table('config_state')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parameter' => 'JOHOR',
                'description' => NULL,
                'index' => 1,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parameter' => 'KEDAH',
                'description' => NULL,
                'index' => 2,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parameter' => 'KELANTAN',
                'description' => NULL,
                'index' => 3,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parameter' => 'MELAKA',
                'description' => NULL,
                'index' => 4,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parameter' => 'NEGERI SEMBILAN',
                'description' => NULL,
                'index' => 5,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parameter' => 'PAHANG',
                'description' => NULL,
                'index' => 6,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'parameter' => 'PERAK',
                'description' => NULL,
                'index' => 7,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'parameter' => 'PERLIS',
                'description' => NULL,
                'index' => 8,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'parameter' => 'PULAU PINANG',
                'description' => NULL,
                'index' => 9,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'parameter' => 'SABAH',
                'description' => NULL,
                'index' => 10,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'parameter' => 'SARAWAK',
                'description' => NULL,
                'index' => 11,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'parameter' => 'SELANGOR',
                'description' => NULL,
                'index' => 12,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'parameter' => 'WILAYAH PERSEKUTUAN KUALA LUMPUR',
                'description' => NULL,
                'index' => 13,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'parameter' => 'WILAYAH PERSEKUTUAN LABUAN',
                'description' => NULL,
                'index' => 14,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'parameter' => 'WILAYAH PERSEKUTUAN PUTRAJAYA',
                'description' => NULL,
                'index' => 15,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}