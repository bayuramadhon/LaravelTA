<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persyaratanumum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persyaratanumum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Skd_No');
            $table->date('Tgl_Dom_Mul');
            $table->date('Tgl_Dom_Sel');
            $table->string('File_SDOM');
            $table->string('File_Spmr');
            $table->string('File_Ocpqrs');
            $table->string('Tdp_no');
            $table->date('Tgl_Tdp_Mul');
            $table->date('Tgl_Tdp_Sel');
            $table->string('File_Tdp');
            $table->string('File_Spkd');
            $table->integer('lama_perushndirikan');
            $table->integer('lamaprshn_krjsamapp');
            $table->string('File_prykdenganpp');
            $table->string('File_dftr_prltanpakai&srtifktkalibrasi');
            $table->string('File_Metode_plksanaan&fakroemutu+k3l');
            $table->string('srt_Agen_No');
            $table->date('Tgl_Agen_Mul');
            $table->date('Tgl_Agen_Sel');
            $table->string('File_Agen');
            $table->rememberToken();
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
        //
    }
}
