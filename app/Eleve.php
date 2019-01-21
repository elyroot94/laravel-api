<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $table="GS_eleves";
    protected $fillable=['nom','prenom','adresse','matricule','telephone','correspondantTelephone','groupe_id'];
    public function groupe(){
        return $this->belongsTo('App\Groupe','groupe_id');
    }

    public function notes(){
        return $this->hasMany('App\Note');
    }
}
