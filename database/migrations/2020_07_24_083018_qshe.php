<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Qshe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QSHE', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('File_Iso');
            $table->string('Penanggung_Jwb');
            $table->string('File_OrgCV');
            $table->string('File_Teknis');
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
