<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarestabilizador;
use App\Models\estabilizador;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class estabilizadorController extends Controller
{
    protected $historico;
    private $estabilizador;

    public function __construct(estabilizador $estabilizador){

        return $this->estabilizador = $estabilizador;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $estabilizador = $this->estabilizador->paginate(10);


        return view('Admin.estabilizador.index',compact('estabilizador'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $items = unidadesetor::all();
        return view('Admin.estabilizador.create',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarestabilizador $request)
    {
        // pegando usuario autenticado de login
        auth()->User()->historics()->create($request->all());
        $this->estabilizador->create($request->all());

        return redirect()->route('estabilizador.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$estabilizador = $this->estabilizador->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.estabilizador.edita',compact(['estabilizador','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validarestabilizador $request, $n_s)

    {
        if(!$estabilizador = $this->estabilizador->where('n_s',$n_s)->first()){
            return redirect()->back();
        }


         // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());
        $estabilizador->update($request->all());
        return redirect()->route('estabilizador.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$estabilizador = $this->estabilizador->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $estabilizador->delete();
        return redirect()->route('estabilizador.index')->with('sucesso','Deletado');
    }

    public function search(request $request){

        $estabilizador = $this->estabilizador->search($request->filter);

        return view('Admin.estabilizador.index',compact(['estabilizador']));

   }
}
