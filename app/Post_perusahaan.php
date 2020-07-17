<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_perusahaan extends Model
{
    protected $table = 'post_perusahaan';
    protected $fillable = ['Divisi','jenis_vendor','jenis_brg/pekerjaan','Nama_perusahaan','Almt_perusahaan','Telp/fax','email','PIC'];
}
