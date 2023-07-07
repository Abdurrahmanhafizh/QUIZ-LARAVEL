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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->tinyInteger('pel_id_gol');
            $table->string('pel_no')->nullable();
            $table->string('pel_nama');
            $table->string('pel_alamat',);
            $table->string('pel_hp');
            $table->string('pel_ktp')->nullable();
            $table->string('pel_seri')->nullable();
            $table->integer('pel_meteran')->nullable();
            $table->enum('pel_aktif', ['Y', 'N'])->nullable();
            $table->integer('pel_id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
