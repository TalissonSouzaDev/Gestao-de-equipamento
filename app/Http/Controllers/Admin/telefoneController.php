<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validartelefone;
use App\Models\telefone;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class telefoneController extends Controller
{
    private $telefone;
    protected $historico;

    public function __construct(telefone $telefone){

        return $this->telefone = $telefone;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $telefone = $this->telefone->paginate(10);


        return view('Admin.telefone.index',compact(['telefone']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.telefone.create',compact(['items']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validartelefone $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->telefone->create($request->all());
        return redirect()->route('telefone.index')->with('sucesso','Cadastrado');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$telefone = $this->telefone->where('n_s',$n_s)->first()){
            return redirect()->back();
        }
        $items = unidadesetor::all();
        return view('Admin.telefone.edita',compact(['telefone','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validartelefone $request, $n_s)

    {
        if(!$telefone = $this->telefone->where('n_s',$n_s)->first()){
            return redirect()->back();
        }
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $telefone->update($request->all());

        return redirect()->route('telefone.index')->with('sucesso','Atualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$telefone = $this->telefone->where('n_s',$n_s)->first()){


            return redirect()->back();
        }

        $telefone->delete();

        return redirect()->route('telefone.index')->with('sucesso','Deletado');

    }

    public function search(request $request){
        $telefone = $this->telefone->search($request->filter);

        return view('Admin.telefone.index',compact(['telefone']));

   }
}
