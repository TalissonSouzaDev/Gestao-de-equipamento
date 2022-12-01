<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarswitche;
use App\Models\switchs;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class switchController extends Controller
{
    private $switch;
    protected $historico;

    public function __construct(switchs $switch){

        return $this->switch = $switch;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $switch = $this->switch->paginate(10);

        return view('Admin.switch.index',compact(['switch']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.switch.create',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarswitche $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->switch->create($request->all());

        return redirect()->route('switch.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function edit($tombo)
    {
        if(!$switch = $this->switch->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.switch.edita',compact(['switch','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $tombo)

    {
        if(!$switch = $this->switch->where('tombo',$tombo)->first()){
            return redirect()->back();
        }
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $switch->update($request->all());
        return redirect()->route('switch.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function destroy($tombo)
    {
        if(!$switch = $this->switch->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $switch->delete();
        return redirect()->route('switch.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $switch = $this->switch->search($request->filter);

        return view('Admin.switch.index',compact(['switch']));

   }
}
