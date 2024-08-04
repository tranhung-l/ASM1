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
        Schema::create('tin', function (Blueprint $table) {
            $table->id(); // id tự động tăng
            $table->string('TieuDe'); // tiêu đề
            $table->text('TomTat'); // tóm tắt
            $table->longText('NoiDung'); // nội dung
            $table->unsignedBigInteger('idLT'); // khóa ngoại loại tin
            $table->string('TenLT'); // tên loại tin
            $table->string('img')->nullable(); // hình ảnh
            $table->integer('luotxem')->default(0); // lượt xem
            $table->timestamps(); // thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin');
    }
};
