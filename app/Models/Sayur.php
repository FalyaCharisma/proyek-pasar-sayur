<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayur extends Model
{
    public function pesanan_detail(){
        return $this->hasMany('App\PesananDetail','sayur_id','id');
    }
}
