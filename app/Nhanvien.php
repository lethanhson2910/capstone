<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    //
    protected $table = "nhanvien";
    public function khoa()
    {
        return $this->belongsTo('App\Khoa','id_khoa','id');
    }
}
