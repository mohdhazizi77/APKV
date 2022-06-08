<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ConfigStateTableSeeder::class);
        $this->call(ConfigCityTableSeeder::class);
        $this->call(ConfigReligionTableSeeder::class);
        $this->call(ConfigEthnicityTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
    }
}
