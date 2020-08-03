<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KeuPjk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Keu_pjk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NPWP_No');
            $table->string('File_NPWP');
            $table->string('Sppkp_No');
            $table->string('File_Sppkp');
            $table->string('Spt_No');
            $table->string('File_Spt');
            $table->string('Spp_No');
            $table->string('File_Spp');
            $table->string('Bank');
            $table->string('Rekening');
            $table->string('File_bank');
            $table->integer('Ekuitas');
            $table->string('Kwalifikasi');
            $table->string('File_Kap');
            $table->string('File_Kd');
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
