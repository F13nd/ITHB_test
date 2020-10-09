<?php

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinsi')->delete();
        
        \DB::table('provinsi')->insert(array (
            0 => 
            array (
                'id' => 11,
                'nama_provinsi' => 'ACEH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'nama_provinsi' => 'SUMATERA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 13,
                'nama_provinsi' => 'SUMATERA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 14,
                'nama_provinsi' => 'RIAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 15,
                'nama_provinsi' => 'JAMBI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 16,
                'nama_provinsi' => 'SUMATERA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 17,
                'nama_provinsi' => 'BENGKULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 18,
                'nama_provinsi' => 'LAMPUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 19,
                'nama_provinsi' => 'KEPULAUAN BANGKA BELITUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 21,
                'nama_provinsi' => 'KEPULAUAN RIAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 31,
                'nama_provinsi' => 'DKI JAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 32,
                'nama_provinsi' => 'JAWA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 33,
                'nama_provinsi' => 'JAWA TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 34,
                'nama_provinsi' => 'DI YOGYAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 35,
                'nama_provinsi' => 'JAWA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 36,
                'nama_provinsi' => 'BANTEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 51,
                'nama_provinsi' => 'BALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 52,
                'nama_provinsi' => 'NUSA TENGGARA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 53,
                'nama_provinsi' => 'NUSA TENGGARA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 61,
                'nama_provinsi' => 'KALIMANTAN BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 62,
                'nama_provinsi' => 'KALIMANTAN TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 63,
                'nama_provinsi' => 'KALIMANTAN SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 64,
                'nama_provinsi' => 'KALIMANTAN TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 65,
                'nama_provinsi' => 'KALIMANTAN UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 71,
                'nama_provinsi' => 'SULAWESI UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 72,
                'nama_provinsi' => 'SULAWESI TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 73,
                'nama_provinsi' => 'SULAWESI SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 74,
                'nama_provinsi' => 'SULAWESI TENGGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 75,
                'nama_provinsi' => 'GORONTALO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 76,
                'nama_provinsi' => 'SULAWESI BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 81,
                'nama_provinsi' => 'MALUKU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 82,
                'nama_provinsi' => 'MALUKU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 91,
                'nama_provinsi' => 'PAPUA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 94,
                'nama_provinsi' => 'PAPUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}