<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model {
    
    protected $table = 'funcionario';

    protected $fillable = ['nome', 'data_nascimento', 'sexo', 'data_admissao', 'estado_civil_id', 'email_id', 'endereco_id'];

    use SoftDeletes;

    public function estado_civil(){
        return $this->belongsTo('App\Entities\EstadoCivil');
    }

    public function email(){
        return $this->belongsTo('App\Entities\Email');
    }

    public function endereco(){
        return $this->belongsTo('App\Entities\Endereco');
    }

    public function dependente(){
        return $this->hasMany('App\Entities\Dependente');
    }

    public function telefone(){
        return $this->belongsToMany(Telefone::class);
    }

    public function documento(){
        return $this->belongsToMany(Documento::class);
    }

    public function cargo(){
        return $this->belongsToMany(Cargo::class);
    }
}
