<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigReligionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('config_religion')->delete();

        \DB::table('config_religion')->insert(array (
            0 =>
            array (
                'id' => 1,
                'parameter' => 'ISLAM',
                'description' => NULL,
                'index' => 1,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'parameter' => 'CHRISTIAN',
                'description' => NULL,
                'index' => 2,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'parameter' => 'HINDU',
                'description' => NULL,
                'index' => 3,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'parameter' => 'BUDDHISM',
                'description' => NULL,
                'index' => 4,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
        ));


    }
}
