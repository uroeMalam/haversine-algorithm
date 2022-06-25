<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFasilitasRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_fasilitas_rs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rs_apotek')
                ->constrained('tb_rs_apotek')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('id_fasilitas')
                ->constrained('tb_fasilitas')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('keterangan',255);
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
        Schema::dropIfExists('fasilitas_rs');
    }
}
