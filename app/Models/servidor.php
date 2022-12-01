<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servidor extends Model
{
    use HasFactory;

    protected $table ="servidors";
    protected $fillable = [
        'equipamento',
         'ip',
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
                        ->orwhere('unidade_setor','LIKE',"%{$filter}%")
                        ->orwhere('ip','LIKE',"%{$filter}%")

                        ->Latest()
                        ->paginate(10);
              return $results;
}
}
