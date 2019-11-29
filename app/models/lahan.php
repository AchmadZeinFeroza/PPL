<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class lahan extends Model
{
    protected $table = "lahan";
    protected $fillable = ['lahan','stok','luas_lahan'];
    public $timestamps = false;
    public function get_tebu(){
        return $this->hasMany('App\models\tebu', 'lahan','stok','luas_lahan','id_lahan');
    }
}
