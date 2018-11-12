<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    //
    protected $table = "khoa";
    public function nhanvien()
    {
        return $this->hasMany('App\Nhanvien','id_khoa','id');
    }
}
