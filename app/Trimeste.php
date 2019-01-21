<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trimeste extends Model
{
    protected $table="GS_trimestes";
    protected $fillable=['trimeste','anne'];
    public function notes(){
        return $this->hasMany('App\Note');
    }
}
