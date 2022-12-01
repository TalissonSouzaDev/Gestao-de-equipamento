<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarmonitor;
use App\Models\monitor;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class monitorController extends Controller
{
    private $monitor;
    protected $historico;

    public function __construct(monitor $monitor){

        return $this->monitor = $monitor;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $monitor = $this->monitor->paginate(10);

        return view('Admin.monitor.index',compact(['monitor']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.monitor.create',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarmonitor $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->monitor->create($request->all());

        return redirect()->route('monitor.index')->with('sucesso','Cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function show($tombo)
    {
        if(!$monitor = $this->monitor->where('tombo',$tombo)->first())
        return redirect()->back();


    return view('admin.monitor.show',['monitor'=>$monitor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function edit($tombo)
    {
        if(!$monitor = $this->monitor->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $items = unidadesetor::all();
        return view('Admin.monitor.edita',compact(['monitor','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function update(validarmonitor $request, $tombo)

    {
        if(!$monitor = $this->monitor->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $monitor->update($request->all());
        return redirect()->route('monitor.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function destroy($tombo)
    {
        if(!$monitor = $this->monitor->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $monitor->delete();
        return redirect()->route('monitor.index')->with('sucesso','Deletado');
    }

    public function search(request $request){

        $monitor = $this->monitor->search($request->filter);


        return view('Admin.monitor.index',compact(['monitor']));

    }
}
