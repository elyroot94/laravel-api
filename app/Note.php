<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table="GS_notes";
    protected $fillable=['note','matiere_id','eleve_id'];

    public function eleve(){
        return $this->belongsTo('App\Eleve','eleve_id');
    }
    public function matiere(){
        return $this->belongsTo('App\Matiere','matiere_id');
    }
    public function trimeste(){
        return $this->belongsTo('App\Trimeste','trimeste_id');
    }
}
