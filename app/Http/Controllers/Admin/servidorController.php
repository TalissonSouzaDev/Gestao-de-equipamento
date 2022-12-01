<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarservidor;
use App\Models\servidor;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class servidorController extends Controller
{
    private $servidor;
    protected $historico;

    public function __construct(servidor $servidor){

        return $this->servidor = $servidor;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $servidor = $this->servidor->paginate(10);

        return view('Admin.servidor.index',compact(['servidor']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = unidadesetor::all();
        return view('Admin.servidor.create',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarservidor $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->servidor->create($request->all());

        return redirect()->route('servidor.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$servidor = $this->servidor->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.servidor.edita',compact(['servidor','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validarservidor $request, $n_s)

    {
        if(!$servidor = $this->servidor->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $servidor->update($request->all());
        return redirect()->route('servidor.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$servidor = $this->servidor->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $servidor->delete();
        return redirect()->route('servidor.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $servidor = $this->servidor->search($request->filter);

        return view('Admin.servidor.index',compact(['servidor']));

   }
}
