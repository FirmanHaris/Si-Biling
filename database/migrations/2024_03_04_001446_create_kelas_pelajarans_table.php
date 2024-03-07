<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_pelajarans', function (Blueprint $table) {
            $table->id('id_kelasPelajaran');
            $table->foreignId('id_mapel');
            $table->foreignId('id_guru');
            $table->foreignId('id_kelas');
            $table->foreign('id_mapel')->references('id_mapel')->on('pelajarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_guru')->references('id_guru')->on('gurus')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_pelajarans');
    }
};
