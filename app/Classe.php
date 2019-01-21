<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable=['Nomclasse'];
    protected $table = 'GS_classes';

    public function groupes(){
        return $this->hasMany('App\Groupe');
    }

    public function matieres(){
        return $this->belongsToMany('App\Matiere','classe_matiere','classe_id','matiere_id')->withTimestamps();
    }
}
