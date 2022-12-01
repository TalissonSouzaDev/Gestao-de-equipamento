<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarteclado;
use App\Models\teclado;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class tecladoController extends Controller
{
    private $teclado;
   // protected $historico;

    public function __construct(teclado $teclado){


        return $this->teclado = $teclado;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $teclado = $this->teclado->paginate(10);


        return view('Admin.teclado.index',compact(['teclado']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.teclado.create',compact(['items']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarteclado $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->teclado->create($request->all());

        return redirect()->route('teclado.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$teclado = $this->teclado->where('n_s',$n_s)->first()){
            return redirect()->back();
        }


        $items = unidadesetor::all();
        return view('Admin.teclado.edita',compact(['teclado','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validarteclado $request, $n_s)

    {
        if(!$teclado = $this->teclado->where('n_s',$n_s)->first()){
            return redirect()->back();
        }


         // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());
        $teclado->update($request->all());
        return redirect()->route('teclado.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$teclado = $this->teclado->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $teclado->delete();
        return redirect()->route('teclado.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $teclado = $this->teclado->search($request->filter);


        return view('Admin.teclado.index',compact(['teclado']));

   }
}
