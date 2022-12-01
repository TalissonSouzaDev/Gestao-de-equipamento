<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = [


        'name',
        'email',
        'ramal',
        'unidade_setor',

    ];


    public function search($filter = null){

        $results = $this
                        ->where('nome','LIKE',"%{$filter}%")
                        ->orwhere('setor','LIKE',"%{$filter}%")
                        ->orwhere('unidade_setor','LIKE',"%{$filter}%")
                        ->Latest()
                        ->paginate(10);

        return $results;



    }
}
