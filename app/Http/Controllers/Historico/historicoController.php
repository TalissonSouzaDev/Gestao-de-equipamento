<?php

namespace App\Http\Controllers\Historico;

use App\Http\Controllers\Controller;
use App\Models\historico;
use Illuminate\Http\Request;
use PDF;

class historicoController extends Controller
{
    protected $historico;

    public function __construct(historico $historico){

          return [$this->historico = $historico];
      }


//------------------------------------------------------------------------------------------------------------------------
      public function usuario(){

        $historico = $this->historico->with('User')->latest()->paginate(15);
        return view('Admin.historico.usuario',compact('historico'));
    }

    public function searchusuario(request $request){
        $historico = $this->historico->search($request->filter);

        return view('Admin.historico.usuario',compact(['historico']));

   }



// ------------------------------------------------------------------------------------------------------------
    public function indexequipamento(){

        $historico = $this->historico->with('User')->latest()->paginate(15);
        return view('Admin.historico.index',compact('historico'));
    }

      public function searchequipamento(request $request){
          $historico = $this->historico->search($request->filter);

          return view('Admin.historico.index',compact(['historico']));

     }
}
