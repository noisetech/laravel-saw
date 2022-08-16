<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crips extends Model
{
    protected $fillable = [
        'kriteria_id', 'nama_crips', 'bobot'
    ];

    public function kriteria(){
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }
}
