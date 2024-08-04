<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tin')->insert([
            [
                'TieuDe' => 'Tin tức 1',
                'TomTat' => 'Tóm tắt tin tức 1',
                'NoiDung' => 'Nội dung chi tiết tin tức 1',
                'idLT' => 1, // ID loại tin
                'TenLT' => 'Thời sự',
                'img' => 'image1.jpg',
                'luotxem' => 100,
            ],
            [
                'TieuDe' => 'Tin tức 2',
                'TomTat' => 'Tóm tắt tin tức 2',
                'NoiDung' => 'Nội dung chi tiết tin tức 2',
                'idLT' => 2, // ID loại tin
                'TenLT' => 'Giải trí',
                'img' => 'image2.jpg',
                'luotxem' => 200,
            ],
        ]);
    }
}
