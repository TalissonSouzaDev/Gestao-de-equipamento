<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cpu extends Model
{
    use HasFactory;
    protected $table ="cpus";
    protected $fillable = [

        'equipamento',
        'nome',
        'tombo',
        'n_s',
        'marca',
        'modelo',
        'tipo',
        'patrimonio',
        'unidade_setor',


    ];


    public function search($filter = null){

        $results = $this
                        ->where('n_s','LIKE',"%{$filter}%")
                        ->orwhere('tombo','LIKE',"%{$filter}%")
                        ->orwhere('unidade_setor','LIKE',"%{$filter}%")
                        ->orwhere('nome','LIKE',"%{$filter}%")

                        ->Latest()
                        ->paginate(10);

        return $results;
}
}
