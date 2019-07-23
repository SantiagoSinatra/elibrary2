<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $guarded = [];

    protected $dates = ['created_at'];

    public function categoria(){
        return $this->belongsTo('\App\Categoria');
    }
}
