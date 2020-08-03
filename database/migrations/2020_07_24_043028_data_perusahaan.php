<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataPerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Data_Perusahaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('divisi');
            $table->string('jenisVendor');
            $table->string('jenisbrg_pekerjaan');
            $table->string('namaperusahaan');
            $table->string('almtperusahan');
            $table->integer('telp');
            $table->string('email');
            $table->string('PIC');
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
