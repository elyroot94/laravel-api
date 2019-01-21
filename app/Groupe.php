<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $fillable=['Nomgroupe'];
    protected $table="GS_groupes";
    public function classe(){
        return $this->belongsTo('App\Classe','classe_id');
    }

    public function professeurs(){
        return $this->belongsToMany('App\Professeur','groupe_professeur','groupe_id','professeur_id')->withTimestamps();
    }
    public function eleves(){
        return $this->hasMany('App\Eleve');
    }
}
