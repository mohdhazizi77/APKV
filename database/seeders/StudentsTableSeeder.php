<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students')->delete();
        
        \DB::table('students')->insert(array (
            0 => 
            array (
                'address' => 'PV21',
                'config_city_fk' => 1,
                'config_ethnicity_fk' => 1,
                'config_religion_fk' => 1,
                'config_state_fk' => 1,
                'contact_number' => '01125072831',
                'created_at' => NULL,
                'email' => 'mohdhaziziak@gmail.com',
                'id' => 2,
                'name' => 'MOHD HAZIZI',
                'nric' => '940309125873',
                'postcode' => '89600',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'address' => 'PV21',
                'config_city_fk' => 2,
                'config_ethnicity_fk' => 1,
                'config_religion_fk' => 1,
                'config_state_fk' => 1,
                'contact_number' => '0198565590',
                'created_at' => NULL,
                'email' => 'nooraishah@gmail.com',
                'id' => 3,
                'name' => 'NOOR AISHAH',
                'nric' => '940528125080',
                'postcode' => '89600',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}