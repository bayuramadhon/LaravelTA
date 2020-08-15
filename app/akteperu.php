<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akteperu extends Model
{
    protected $table = 'akte_peru';
    protected $fillable = [
        'Akte_Pendirian_No','Bank','Rek','File_Akte','File_Pengesahan','Apt_No'
        ,'Tgl_Apt','File_Apt','Tgl_Direksi','File_ktp','File_Skm','File_Sp'
    ];
}
