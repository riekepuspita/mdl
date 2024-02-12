<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPenyewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_penyewas')->insert([
            'nama' => 'Rieke Puspita',
            'jeniskelamin' => 'perempuan',
            'alamat' => 'Kediri',
        ]);
    }
}
