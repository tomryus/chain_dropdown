<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table ='wilayah_kabupaten';

    public function Province(){
        return $this->belongsTo('App\Province');
    }
    public function kecamatan()
    {
        return $this->hasMany('App\Kecamatan');
    }
}
