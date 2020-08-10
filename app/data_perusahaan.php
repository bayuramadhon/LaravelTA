<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_perusahaan extends Model
{
    protected $table ='data_perusahaan';
    
    protected $fillable = [
        'divisi','jenisVendor','jenisbrg_pekerjaan','namaperusahaan','almtperusahan','telp','email','PIC'
    ];
}
