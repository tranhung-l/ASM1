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
            $table->id();
            $table->string('TenLT');
            $table->integer('ThuTu');
            $table->boolean('AnHien')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loaitin');
    }
};
