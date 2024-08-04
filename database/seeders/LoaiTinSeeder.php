<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiTinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaitin')->insert([
            ['TenLT' => 'Thời sự', 'ThuTu' => 1, 'AnHien' => 1],
            ['TenLT' => 'Giải trí', 'ThuTu' => 2, 'AnHien' => 1],
            ['TenLT' => 'Thể thao', 'ThuTu' => 3, 'AnHien' => 1],
            ['TenLT' => 'Công nghệ', 'ThuTu' => 4, 'AnHien' => 1],
        ]);
    }
}
