<?php
namespace app\Entities;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model{

    protected $table = 'tipo_documento';

    protected $fillable = ['nome'];

    public $timestamps = false;
    
    public function documento(){
        return $this->hasMany('App\Entities\Documento');
    }
}   