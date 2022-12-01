<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarimpressora;
use App\Models\impressora;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class impressoraController extends Controller
{
    private $impressora;
    protected $historico;

    public function __construct(impressora $impressora){

        return $this->impressora = $impressora;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $impressora = $this->impressora->paginate(10);

        return view('Admin.impressora.index',compact(['impressora']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = unidadesetor::all();
        return view('Admin.impressora.create',compact(['items']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarimpressora $request)
    {
         // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());
        $this->impressora->create($request->all());

        return redirect()->route('impressora.index')->with('sucesso','Cadastrado');
    }



     /**
     * Display the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function show($tombo)
    {
        if(!$impressora = $this->impressora->where('tombo',$tombo)->first())
        return redirect()->back();



    return view('admin.impressora.show',['impressora'=>$impressora]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function edit($tombo)
    {
        if(!$impressora = $this->impressora->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.impressora.edita',compact(['impressora','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function update(validarimpressora $request, $tombo)

    {
        if(!$impressora = $this->impressora->where('tombo',$tombo)->first()){
            return redirect()->back();
        }


          // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());
        $impressora->update($request->all());
        return redirect()->route('impressora.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function destroy($tombo)
    {
        if(!$impressora = $this->impressora->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $impressora->delete();
        return redirect()->route('impressora.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $impressora = $this->impressora->search($request->filter);


        return view('Admin.impressora.index',compact(['impressora']));

   }
}
