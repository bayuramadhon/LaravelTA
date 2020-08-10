<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keupajak extends Model
{
    protected $fillable = [
        'NPWP_No','File_NPWP','Sppkp_No','File_Sppkp','Spt_No','File_Spt','Spp_No','File_Spp','Ekuitas','Kwalifikasi'
        ,'File_Kap','File_Kd'
    ];
}
