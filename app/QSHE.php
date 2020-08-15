<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QSHE extends Model
{
    protected $table = ('qshe');
    protected $fillable = [
        'File_iso','Penanggung_jwb','File_OrgCV','File_Teknis'
    ];
}
