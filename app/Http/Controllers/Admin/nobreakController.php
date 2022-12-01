<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarnobreak;
use App\Models\nobreak;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class nobreakController extends Controller
{
    private $nobreak;
    protected $historico;

    public function __construct(nobreak $nobreak){


        return $this->nobreak = $nobreak;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $nobreak = $this->nobreak->paginate(10);

        return view('Admin.nobreak.index',compact(['nobreak']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = unidadesetor::all();
        return view('Admin.nobreak.create',compact(['items']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarnobreak $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->nobreak->create($request->all());

        return redirect()->route('nobreak.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$nobreak = $this->nobreak->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.nobreak.edita',compact(['nobreak','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validarnobreak $request, $n_s)

    {
        if(!$nobreak = $this->nobreak->where('n_s',$n_s)->first()){
            return redirect()->back();
        }
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $nobreak->update($request->all());
        return redirect()->route('nobreak.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$nobreak = $this->nobreak->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $nobreak->delete();
        return redirect()->route('nobreak.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $nobreak = $this->nobreak->search($request->filter);

        return view('Admin.nobreak.index',compact(['nobreak']));

   }
}
