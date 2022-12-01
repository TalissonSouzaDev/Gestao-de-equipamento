<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historico extends Model
{
    use HasFactory;

    protected $table = 'historicos';
    protected $fillable = [
        'equipamento',
        'nome',
        'tipo',
        'ip',
        'tombo',
        'n_s',
        'marca',
        'modelo',
        'patrimonio',
        'unidade_setor',

        'name',
        'email',
        'ramal',
        'user_id',
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function search($search){
        $resultado = $this->where('nome','LIKE',"%{$search}%")
        ->orwhere('unidade_setor','LIKE',"%{$search}%")
        ->orwhere('ip','LIKE',"%{$search}%")
        ->orwhere('tombo','LIKE',"%{$search}%")
        ->orwhere('n_s','LIKE',"%{$search}%")
        ->orwhere('equipamento','LIKE',"%{$search}%")
        ->paginate(10);


        return $resultado;
    }

}
