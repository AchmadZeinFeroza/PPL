<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tebu extends Model
{
    protected $table = "tebu";
    protected $primaryKey = "id_tebu";
    public $timestamps = false;
    protected $fillable = ['kadar_brick','tinggi','bobot_tebu','umur','kualitas','id_lahan'];
    public function get_lahan(){
        return $this->belongsTo('App\models\lahan', 'id_lahan', 'id_lahan');
    }
}
