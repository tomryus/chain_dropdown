<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table ='wilayah_provinsi';

    public function city(){
        return $this->hasMany('App\City');
    }
}
