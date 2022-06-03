<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigCityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('config_city')->delete();
        
        \DB::table('config_city')->insert(array (
            0 => 
            array (
                'id' => 1,
                'config_state_fk' => 1,
                'parameter' => 'AYER BALOI',
                'description' => '',
                'index' => 1,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'config_state_fk' => 1,
                'parameter' => 'AYER HITAM',
                'description' => '',
                'index' => 2,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'config_state_fk' => 1,
                'parameter' => 'AYER TAWAR 2',
                'description' => '',
                'index' => 3,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'config_state_fk' => 1,
                'parameter' => 'BANDAR PENAWAR',
                'description' => '',
                'index' => 4,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'config_state_fk' => 1,
                'parameter' => 'BANDAR TENGGARA',
                'description' => '',
                'index' => 5,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'config_state_fk' => 1,
                'parameter' => 'BATU ANAM',
                'description' => '',
                'index' => 6,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'config_state_fk' => 1,
                'parameter' => 'BATU PAHAT',
                'description' => '',
                'index' => 7,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'config_state_fk' => 1,
                'parameter' => 'BEKOK',
                'description' => '',
                'index' => 8,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'config_state_fk' => 1,
                'parameter' => 'BENUT',
                'description' => '',
                'index' => 9,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'config_state_fk' => 1,
                'parameter' => 'BUKIT GAMBIR',
                'description' => '',
                'index' => 10,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'config_state_fk' => 1,
                'parameter' => 'BUKIT PASIR',
                'description' => '',
                'index' => 11,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'config_state_fk' => 1,
                'parameter' => 'CHAAH',
                'description' => '',
                'index' => 12,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'config_state_fk' => 1,
                'parameter' => 'ENDAU',
                'description' => '',
                'index' => 13,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'config_state_fk' => 1,
                'parameter' => 'GELANG PATAH',
                'description' => '',
                'index' => 14,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'config_state_fk' => 1,
                'parameter' => 'GERISEK',
                'description' => '',
                'index' => 15,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'config_state_fk' => 1,
                'parameter' => 'GUGUSAN TAIB ANDAK',
                'description' => '',
                'index' => 16,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'config_state_fk' => 1,
                'parameter' => 'ISKANDAR PUTERI',
                'description' => '',
                'index' => 17,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'config_state_fk' => 1,
                'parameter' => 'JEMENTAH',
                'description' => '',
                'index' => 18,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'config_state_fk' => 1,
                'parameter' => 'JOHOR BAHRU',
                'description' => '',
                'index' => 19,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'config_state_fk' => 1,
                'parameter' => 'JOHOR BAHRU',
                'description' => '',
                'index' => 20,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'config_state_fk' => 1,
                'parameter' => 'KAHANG',
                'description' => '',
                'index' => 21,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'config_state_fk' => 1,
                'parameter' => 'KLUANG',
                'description' => '',
                'index' => 22,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'config_state_fk' => 1,
                'parameter' => 'KOTA TINGGI',
                'description' => '',
                'index' => 23,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'config_state_fk' => 1,
                'parameter' => 'KUKUP',
                'description' => '',
                'index' => 24,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'config_state_fk' => 1,
                'parameter' => 'KULAI',
                'description' => '',
                'index' => 25,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'config_state_fk' => 1,
                'parameter' => 'LABIS',
                'description' => '',
                'index' => 26,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'config_state_fk' => 1,
                'parameter' => 'LAYANG-LAYANG',
                'description' => '',
                'index' => 27,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'config_state_fk' => 1,
                'parameter' => 'MASAI',
                'description' => '',
                'index' => 28,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'config_state_fk' => 1,
                'parameter' => 'MERSING',
                'description' => '',
                'index' => 29,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'config_state_fk' => 1,
                'parameter' => 'MUAR',
                'description' => '',
                'index' => 30,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'config_state_fk' => 1,
                'parameter' => 'PAGOH',
                'description' => '',
                'index' => 31,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'config_state_fk' => 1,
                'parameter' => 'PALOH',
                'description' => '',
                'index' => 32,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'config_state_fk' => 1,
                'parameter' => 'PANCHOR',
                'description' => '',
                'index' => 33,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'config_state_fk' => 1,
                'parameter' => 'PARIT JAWA',
                'description' => '',
                'index' => 34,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'config_state_fk' => 1,
                'parameter' => 'PARIT RAJA',
                'description' => '',
                'index' => 35,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'config_state_fk' => 1,
                'parameter' => 'PARIT SULONG',
                'description' => '',
                'index' => 36,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'config_state_fk' => 1,
                'parameter' => 'PASIR GUDANG',
                'description' => '',
                'index' => 37,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'config_state_fk' => 1,
                'parameter' => 'PEKAN NENAS',
                'description' => '',
                'index' => 38,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'config_state_fk' => 1,
                'parameter' => 'PENGERANG',
                'description' => '',
                'index' => 39,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'config_state_fk' => 1,
                'parameter' => 'PONTIAN',
                'description' => '',
                'index' => 40,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'config_state_fk' => 1,
                'parameter' => 'PULAU SATU',
                'description' => '',
                'index' => 41,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'config_state_fk' => 1,
                'parameter' => 'RENGAM',
                'description' => '',
                'index' => 42,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'config_state_fk' => 1,
                'parameter' => 'RENGIT',
                'description' => '',
                'index' => 43,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'config_state_fk' => 1,
                'parameter' => 'SEGAMAT',
                'description' => '',
                'index' => 44,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'config_state_fk' => 1,
                'parameter' => 'SEMERAH',
                'description' => '',
                'index' => 45,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'config_state_fk' => 1,
                'parameter' => 'SENAI',
                'description' => '',
                'index' => 46,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'config_state_fk' => 1,
                'parameter' => 'SENGGARANG',
                'description' => '',
                'index' => 47,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'config_state_fk' => 1,
                'parameter' => 'SERI GADING',
                'description' => '',
                'index' => 48,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'config_state_fk' => 1,
                'parameter' => 'SERI MEDAN',
                'description' => '',
                'index' => 49,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'config_state_fk' => 1,
                'parameter' => 'SIMPANG RENGAM',
                'description' => '',
                'index' => 50,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'config_state_fk' => 1,
                'parameter' => 'SUNGAI MATI',
                'description' => '',
                'index' => 51,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'config_state_fk' => 1,
                'parameter' => 'TANGKAK',
                'description' => '',
                'index' => 52,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'config_state_fk' => 1,
                'parameter' => 'ULU TIRAM',
                'description' => '',
                'index' => 53,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'config_state_fk' => 1,
                'parameter' => 'YONG PENG',
                'description' => '',
                'index' => 54,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}