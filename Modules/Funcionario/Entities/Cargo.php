<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cargo extends Model {
    
    protected $table = 'cargo';

    protected $fillable = ['nome', 'horas_semanais', 'salario'];

    use SoftDeletes;

    public function funcionario(){
        return $this->belongsToMany(Funcionario::class);
    }

}
