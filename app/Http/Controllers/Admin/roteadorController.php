<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarroteador;
use App\Models\roteador;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class roteadorController extends Controller
{
    private $roteador;
    protected $historico;

    public function __construct(roteador $roteador){

        return $this->roteador = $roteador;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $roteador = $this->roteador->paginate(10);

        return view('Admin.roteador.index',compact(['roteador']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.roteador.create',compact(['items']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarroteador $request)
    {
        // pegando usuario autenticado de login
        auth()->User()->historics()->create($request->all());
        $this->roteador->create($request->all());

        return redirect()->route('roteador.index')->with('sucesso','Cadastrado');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function edit($tombo)
    {
        if(!$roteador = $this->roteador->where('tombo',$tombo)->first()){
            return redirect()->back();
        }
        $items = unidadesetor::all();
        return view('Admin.roteador.edita',compact(['roteador','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function update(validarroteador $request, $tombo)

    {
        if(!$roteador = $this->roteador->where('tombo',$tombo)->first()){
            return redirect()->back();
        }
       // pegando usuario autenticado de login
        auth()->User()->historics()->create($request->all());
        $roteador->update($request->all());
        return redirect()->route('roteador.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function destroy($tombo)
    {
        if(!$roteador = $this->roteador->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $roteador->delete();
        return redirect()->route('roteador.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $roteador = $this->roteador->search($request->filter);

        return view('Admin.roteador.index',compact(['roteador']));

   }
}
