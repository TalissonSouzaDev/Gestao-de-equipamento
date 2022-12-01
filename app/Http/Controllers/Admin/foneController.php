<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarfone;
use App\Models\fone;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class foneController extends Controller
{
    private $fone;
    protected $historico;

    public function __construct(fone $fone){

        return $this->fone = $fone;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {

        $fone = $this->fone->paginate(10);
        return view('Admin.fone.index',compact(['fone']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = unidadesetor::all();
        return view('Admin.fone.create',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarfone $request)
    {
         // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());
        $this->fone->create($request->all());

        return redirect()->route('fone.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$fone = $this->fone->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.fone.edita',compact(['fone','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validarfone $request, $n_s)

    {
        if(!$fone = $this->fone->where('n_s',$n_s)->first()){
            return redirect()->back();
        }


        // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());
          $fone->update($request->all());
        return redirect()->route('fone.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$fone = $this->fone->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $fone->delete();
        return redirect()->route('fone.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $fone = $this->fone->search($request->filter);
        return view('Admin.fone.index',compact(['fone']));

   }
}
