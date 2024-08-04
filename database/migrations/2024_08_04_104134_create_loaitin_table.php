<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loaitin', function (Blueprint $table) {
            $table->id(); // id tự động tăng
            $table->string('TenLT'); // tên loại tin
            $table->integer('ThuTu'); // thứ tự
            $table->boolean('AnHien')->default(1); // ẩn hiện
            $table->timestamps(); // thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loaitin');
    }
};
