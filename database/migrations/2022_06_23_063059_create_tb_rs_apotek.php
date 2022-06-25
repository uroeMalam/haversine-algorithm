<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRsApotek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rs_apotek', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')
                ->constrained('tb_kategori')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('id_fasilitas')
                ->constrained('tb_fasilitas')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('nama', 255);
            $table->string('kota', 255);
            $table->string('alamat', 255);
            $table->integer('lat');
            $table->integer('long');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_rs_apotek');
    }
}
