<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persyaratanumum extends Model
{
    protected $table = 'persyaratanumum';
    protected $fillable = [
        'Skd_No','Tgl_Dom_Mul','Tgl_Dom_Sel','File_SDOM','File_Spmr','Tdp_no'
        ,'Tgl_Tdp_Mul','Tgl_Tdp_Sel','File_Tdp','File_Spkd','lama_perushndirikan','lamaprshn_krjsamapp'
        ,'File_srtifktkalibrasi'
    ];
}
