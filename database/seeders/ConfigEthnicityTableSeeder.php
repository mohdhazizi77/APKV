<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigEthnicityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('config_ethnicity')->delete();

        \DB::table('config_ethnicity')->insert(array (
            0 =>
            array (
                'id' => 1,
                'parameter' => 'MALAY',
                'description' => NULL,
                'index' => 1,
                'created_at' => '2022-01-1 00:00:00',
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'parameter' => 'CHINESE',
                'description' => NULL,
                'index' => 2,
                'created_at' => '2022-01-1 00:00:00',
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'parameter' => 'INDIAN',
                'description' => NULL,
                'index' => 3,
                'created_at' => '2022-01-1 00:00:00',
                'updated_at' => NULL,
            ),
        ));


    }
}
