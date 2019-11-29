<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id_kategori";
    protected $fillable = ['penyakit','tips','kategori'];
    public $timestamps = false; 
    public function get_identifikasi(){
        return $this->hasMany('App\models\identifikasi', 'id_kategori');
    }
}
