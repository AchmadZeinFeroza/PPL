<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class permintaan extends Model
{
    protected $table = "permintaan";
    protected $primaryKey = "id_permintaan";
    public $timestamps = false;
    protected $fillable = ['bobot_stok','kadar_brix','sukrosa','glukosa','dikirim','perkiraan_riba','umur'];
}
