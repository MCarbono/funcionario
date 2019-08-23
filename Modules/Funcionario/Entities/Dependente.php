<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model {
    
    protected $table = 'dependente';

    protected $fillable = ['nome', 'mora_junto', 'funcionario_id', 'parentesco_id'];

    public function funcionario(){
        return $this->belongsTo('App\Entities\Funcionario');
    }

    public function parentesco(){
        return $this->belongsTo('App\Entities\Parentesco');
    }


}
