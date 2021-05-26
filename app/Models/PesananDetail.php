<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
   public function sayur(){
       return $this->belongsTo('App\Sayur','sayur_id','id');
   }

   public function pesanan(){
       return $this->belongsTo('App\Pesanan','pesanan_id','id');
}
}
