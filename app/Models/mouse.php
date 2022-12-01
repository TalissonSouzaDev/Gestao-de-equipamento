<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mouse extends Model
{
    use HasFactory;

    protected $table ="mouse";
    protected $fillable = [

        'equipamento',
        'n_s',
        'marca',
        'modelo',
        'patrimonio',
        'unidade_setor'


    ];

    public function search($filter = null){

        $results = $this
                        ->where('n_s','LIKE',"%{$filter}%")
                        ->orwhere('unidade_setor','LIKE',"%{$filter}%")
                        ->latest()
                        ->paginate(10);

        return $results;
    }
}
