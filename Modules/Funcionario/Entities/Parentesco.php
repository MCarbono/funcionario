<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $table = 'parentesco';

    protected $fillable = ['nome'];

    public function dependente(){
        return $this->hasMany('App\Entities\Dependente');
    }
}
