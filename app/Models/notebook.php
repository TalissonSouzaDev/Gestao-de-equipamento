<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notebook extends Model
{
    use HasFactory;

    protected $table ="notebooks";
    protected $fillable = [

        'equipamento',
        'nome',
        'tombo',
        'n_s',
        'marca',
        'modelo',
        'patrimonio',
        'unidade_setor'


    ];

    public function search($filter = null){

        $results = $this
                        ->where('n_s','LIKE',"%{$filter}%")
                        ->orwhere('tombo','LIKE',"%{$filter}%")
                        ->orwhere('nome','LIKE',"%{$filter}%")
                        ->orwhere('unidade_setor','LIKE',"%{$filter}%")
                        ->Latest()
                        ->paginate(10);

        return $results;



    }
}
