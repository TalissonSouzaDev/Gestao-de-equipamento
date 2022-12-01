<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefone extends Model
{
    use HasFactory;


    protected $table ="telefones";
    protected $fillable = [
        'equipamento',
        'tipo',
        'tombo',
        'n_s',
        'marca',
        'modelo',
        'patrimonio',
        'unidade_setor',


    ];
    public function search($filter = null){

        $results = $this
                        ->where('n_s','LIKE',"%{$filter}%")
                        ->orwhere('unidade_setor','LIKE',"%{$filter}%")
                        ->orwhere('tipo','LIKE',"%{$filter}%")
                        ->latest()
                        ->paginate(10);

        return $results;
    }
}
