<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarmultimetro;
use App\Models\multimetro;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class multimetroController extends Controller
{
    private $multimetro;
    protected $historico;

    public function __construct(multimetro $multimetro){

        return $this->multimetro = $multimetro;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $multimetro = $this->multimetro->paginate(10);

        return view('Admin.multimetro.index',compact(['multimetro']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.multimetro.create',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarmultimetro $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->multimetro->create($request->all());

        return redirect()->route('multimetro.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$multimetro = $this->multimetro->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.multimetro.edita',compact(['multimetro','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validarmultimetro $request, $n_s)

    {
        if(!$multimetro = $this->multimetro->where('n_s',$n_s)->first()){
            return redirect()->back();
        }
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $multimetro->update($request->all());
        return redirect()->route('multimetro.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$multimetro = $this->multimetro->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $multimetro->delete();
        return redirect()->route('multimetro.index')->with('sucesso','Deletado');
    }

    public function search(request $request){


        return view('Admin.multimetro.index',compact(['multimetro']));

   }
}
