<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class pabrik extends Model
{
    protected $table = "pabrik";
    protected $primaryKey = "id_pabrik";
    public $timestamps = false;
    protected $fillable = ['nama_pabrik','lokasi_pabrik','kapasitas_gudang'];
}
