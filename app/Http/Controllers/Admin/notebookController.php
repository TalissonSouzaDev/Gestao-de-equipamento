<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarnotebook;
use App\Models\notebook;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class notebookController extends Controller
{
    private $notebook;
    protected $historico;

    public function __construct(notebook $notebook){


        return $this->notebook = $notebook;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $notebook = $this->notebook->paginate(10);

        return view('Admin.notebook.index',compact(['notebook']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.notebook.create',compact(['items']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarnotebook $request)
    {
         // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());
        $this->notebook->create($request->all());

        return redirect()->route('notebook.index')->with('sucesso','Cadastrado');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function edit($tombo)
    {
        if(!$notebook = $this->notebook->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.notebook.edita',compact(['notebook','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function update(validarnotebook $request, $tombo)
    {
        if(!$notebook = $this->notebook->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

         // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());
        $notebook->update($request->all());
        return redirect()->route('notebook.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function destroy($tombo)
    {
        if(!$notebook = $this->notebook->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $notebook->delete();
        return redirect()->route('notebook.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $notebook = $this->notebook->search($request->filter);

        return view('Admin.notebook.index',compact(['notebook']));

   }
}
