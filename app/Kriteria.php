<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $fillable = [
        'nama_kriteria', 'atribut', 'bobot'
    ];

    public function  crip(){
        return $this->hasmA;
    }
}
