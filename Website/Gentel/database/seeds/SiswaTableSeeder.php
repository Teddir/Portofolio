<?php

use app\Siswa;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Siswa::create([
            'name' => 'admin',
            'email' => 'admin@wadidaw.com',
            'password' => bcrypt(12345678),
        ]);
    }
}
