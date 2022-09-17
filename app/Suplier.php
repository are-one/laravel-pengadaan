<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'suplier';
    protected $primaryKey = 'id_suplier';
    protected $fillable = ['id_suplier', 'nama_usaha', 'email', 'alamat', 'no_npwp', 'password','token', 'status'];
}