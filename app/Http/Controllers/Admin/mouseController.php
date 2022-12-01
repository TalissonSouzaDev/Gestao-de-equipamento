<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarmouse;
use App\Models\mouse;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class mouseController extends Controller
{
    private $mouse;
    protected $historico;

    public function __construct(mouse $mouse){

        return $this->mouse = $mouse;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $mouse = $this->mouse->paginate(10);

        return view('Admin.mouse.index',compact(['mouse']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = unidadesetor::all();
        return view('Admin.mouse.create',compact(['items']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarmouse $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->mouse->create($request->all());

        return redirect()->route('mouse.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$mouse = $this->mouse->where('n_s',$n_s)->first()){
            return redirect()->back();
        }
        $items = unidadesetor::all();
        return view('Admin.mouse.edita',compact(['mouse','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validarmouse $request, $n_s)

    {
        if(!$mouse = $this->mouse->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $mouse->update($request->all());
        return redirect()->route('mouse.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$mouse = $this->mouse->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $mouse->delete();
        return redirect()->route('mouse.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
         $mouse = $this->mouse->search($request->filter);

         return view('Admin.mouse.index',compact(['mouse']));

    }
}
