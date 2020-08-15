<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keupajak extends Model
{
    protected $table = 'keu_pjk';
    protected $fillable = [
        'NPWP_No','File_NPWP','Sppkp_No','File_Sppkp','Spt_No','File_Spt','Spp_No','File_Spp',
        'Ekuitas','Kwalifikasi','File_Kd'
    ];
}
