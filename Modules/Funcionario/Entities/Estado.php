<?php
namespace app\Entities;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model{

    protected $table = 'estado';

    protected $fillable = ['nome', 'uf'];

    public $timestamps = false;

    public function cidades(){
        return $this->hasMany('App\Entities\Cidade');
    }
    
}   