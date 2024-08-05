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
            $table->id(); 
            $table->string('TieuDe'); 
            $table->text('TomTat'); 
            $table->longText('NoiDung'); 
            $table->unsignedBigInteger('idLT'); 
            $table->string('TenLT'); 
            $table->string('img')->nullable(); 
            $table->integer('luotxem')->default(0); 
            $table->timestamps(); 
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
