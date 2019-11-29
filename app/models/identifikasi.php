<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class identifikasi extends Model
{
    protected $table = "identifikasi";
    protected $primaryKey = "id_identifikasi";
    protected $fillable = ['penyakit','tips','kategori'];
    public $timestamps = false; 
    public function get_kategori(){
        return $this->belongsTo('App\models\kategori', 'id_identifikasi');
    }
}
