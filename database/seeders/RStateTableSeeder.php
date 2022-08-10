<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RStateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('r_state')->delete();
        
        \DB::table('r_state')->insert(array (
            0 => 
            array (
                'id' => 11,
                'state' => 'ACEH',
                'state_code' => '11',
            ),
            1 => 
            array (
                'id' => 12,
                'state' => 'SUMATERA UTARA',
                'state_code' => '12',
            ),
            2 => 
            array (
                'id' => 13,
                'state' => 'SUMATERA BARAT',
                'state_code' => '13',
            ),
            3 => 
            array (
                'id' => 14,
                'state' => 'RIAU',
                'state_code' => '14',
            ),
            4 => 
            array (
                'id' => 15,
                'state' => 'JAMBI',
                'state_code' => '15',
            ),
            5 => 
            array (
                'id' => 16,
                'state' => 'SUMATERA SELATAN',
                'state_code' => '16',
            ),
            6 => 
            array (
                'id' => 17,
                'state' => 'BENGKULU',
                'state_code' => '17',
            ),
            7 => 
            array (
                'id' => 18,
                'state' => 'LAMPUNG',
                'state_code' => '18',
            ),
            8 => 
            array (
                'id' => 19,
                'state' => 'KEPULAUAN BANGKA BELITUNG',
                'state_code' => '19',
            ),
            9 => 
            array (
                'id' => 21,
                'state' => 'KEPULAUAN RIAU',
                'state_code' => '21',
            ),
            10 => 
            array (
                'id' => 31,
                'state' => 'DKI JAKARTA',
                'state_code' => '31',
            ),
            11 => 
            array (
                'id' => 32,
                'state' => 'JAWA BARAT',
                'state_code' => '32',
            ),
            12 => 
            array (
                'id' => 33,
                'state' => 'JAWA TENGAH',
                'state_code' => '33',
            ),
            13 => 
            array (
                'id' => 34,
                'state' => 'DI YOGYAKARTA',
                'state_code' => '34',
            ),
            14 => 
            array (
                'id' => 35,
                'state' => 'JAWA TIMUR',
                'state_code' => '35',
            ),
            15 => 
            array (
                'id' => 36,
                'state' => 'BANTEN',
                'state_code' => '36',
            ),
            16 => 
            array (
                'id' => 51,
                'state' => 'BALI',
                'state_code' => '51',
            ),
            17 => 
            array (
                'id' => 52,
                'state' => 'NUSA TENGGARA BARAT',
                'state_code' => '52',
            ),
            18 => 
            array (
                'id' => 53,
                'state' => 'NUSA TENGGARA TIMUR',
                'state_code' => '53',
            ),
            19 => 
            array (
                'id' => 61,
                'state' => 'KALIMANTAN BARAT',
                'state_code' => '61',
            ),
            20 => 
            array (
                'id' => 62,
                'state' => 'KALIMANTAN TENGAH',
                'state_code' => '62',
            ),
            21 => 
            array (
                'id' => 63,
                'state' => 'KALIMANTAN SELATAN',
                'state_code' => '63',
            ),
            22 => 
            array (
                'id' => 64,
                'state' => 'KALIMANTAN TIMUR',
                'state_code' => '64',
            ),
            23 => 
            array (
                'id' => 65,
                'state' => 'KALIMANTAN UTARA',
                'state_code' => '65',
            ),
            24 => 
            array (
                'id' => 71,
                'state' => 'SULAWESI UTARA',
                'state_code' => '71',
            ),
            25 => 
            array (
                'id' => 72,
                'state' => 'SULAWESI TENGAH',
                'state_code' => '72',
            ),
            26 => 
            array (
                'id' => 73,
                'state' => 'SULAWESI SELATAN',
                'state_code' => '73',
            ),
            27 => 
            array (
                'id' => 74,
                'state' => 'SULAWESI TENGGARA',
                'state_code' => '74',
            ),
            28 => 
            array (
                'id' => 75,
                'state' => 'GORONTALO',
                'state_code' => '75',
            ),
            29 => 
            array (
                'id' => 76,
                'state' => 'SULAWESI BARAT',
                'state_code' => '76',
            ),
            30 => 
            array (
                'id' => 81,
                'state' => 'MALUKU',
                'state_code' => '81',
            ),
            31 => 
            array (
                'id' => 82,
                'state' => 'MALUKU UTARA',
                'state_code' => '82',
            ),
            32 => 
            array (
                'id' => 91,
                'state' => 'PAPUA BARAT',
                'state_code' => '91',
            ),
            33 => 
            array (
                'id' => 94,
                'state' => 'PAPUA',
                'state_code' => '94',
            ),
        ));
        
        
    }
}