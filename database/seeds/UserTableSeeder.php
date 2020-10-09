<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
                'role' => 'admin',
                'tempat_lahir'=>'garut',
                'tanggal_lahir'=>'2020-06-09 ',
                'alamat_kota'=>'3205',
                'alamat_provinsi'=>'32',
                'asal_sekolah'=>'yppt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rifan Alamsyah',
                'email' => 'rifan.alamsyah02@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 'mahasiswa',
                'tempat_lahir'=>'garut',
                'tanggal_lahir'=>'2020-06-09 ',
                'alamat_kota'=>'3205',
                'alamat_provinsi'=>'32',
                'asal_sekolah'=>'yppt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gity Putri Triani',
                'email' => 'rifan.alamsyah03@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 'mahasiswa',
                'tempat_lahir'=>'garut',
                'tanggal_lahir'=>'2020-06-09 ',
                'alamat_kota'=>'3205',
                'alamat_provinsi'=>'32',
                'asal_sekolah'=>'yppt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
