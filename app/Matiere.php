<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table="GS_matieres";
    protected $fillable=['NomMatiere','coefMatiere'];
    public function classes(){
        return $this->belongsToMany('App\Classe','classe_matiere','matiere_id','classe_id')->withTimestamps();
    }
   public function notes(){
        return $this->hasMany('App\Note');
   }
}
