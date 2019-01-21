<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $table="GS_professeurs";
   protected $fillable=['nom','prenom','telephone','email','adresse'];

    public function groupes(){
        return $this->belongsToMany('App\Groupe','groupe_professeur','professeur_id','groupe_id')->withTimestamps()->withPivot('anne');
    }
}
