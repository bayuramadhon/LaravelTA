<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AktePeru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Akte_Peru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Akte_Pendirian_No');
            $table->string('Bank');
            $table->string('Rek');
            $table->string('File_Akte');
            $table->string('File_Pengesahan');
            $table->string('Apt_No');
            $table->date('Tgl_Apt');
            $table->string('File_Apt');
            $table->date('Tgl_Direksi');
            $table->string('File_ktp');
            $table->string('File_Spm');
            $table->string('File_Sp');
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
