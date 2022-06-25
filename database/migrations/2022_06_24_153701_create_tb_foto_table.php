<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_foto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rs')
                ->constrained('tb_rs_apotek')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('foto',255);
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
        Schema::dropIfExists('tb_foto');
    }
}
