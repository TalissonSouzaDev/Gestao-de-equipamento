<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validacpu;
use App\Models\cpu;
use App\Models\unidadesetor;
use App\Models\User;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    private $cpu;


  // CRIANDO UM CONSTTRUTOR E DECLANDO A MODEL , DANDO UM RETORNO
    public function __construct(cpu $cpu){

        return $this->cpu = $cpu;
    }

// PAGINA INICIAL PUXANDO OS DADOS DA MODEL E CONTANDO POR UNIDADE
     public function index()
    {
       $cpu = $this->cpu->paginate(10);
        return view ('Admin.cpu.index',compact('cpu'));

    }


    public function create()
    {  // pegando da model de unidade controller
        $items = unidadesetor::all();

        return view('Admin.cpu.create',compact('items'));
    }


    public function store(validacpu $request)
    {
         // pegando usuario autenticado de login
         auth()->User()->historics()->create($request->all());

        $this->cpu->create($request->all());


        return redirect()->route('cpu.index')->with('sucesso','Cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function show($tombo)
    {
        if(!$cpu = $this->cpu->where('tombo',$tombo)->first())
        return redirect()->back();


    return view('admin.cpu.show',['cpu'=>$cpu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function edit($tombo)
    {
        if(!$cpu = $this->cpu->where('tombo',$tombo)->first()){
            return redirect()->back();
        }
        $items = unidadesetor::all();
        return view('Admin.cpu.edita',compact(['cpu','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function update(validacpu $request, $tombo)
    {
        if(!$cpu = $this->cpu->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        // pegando usuario autenticado de login
        auth()->User()->historics()->create($request->all());

        $cpu->update($request->all());
        return redirect()->route('cpu.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tombo
     * @return \Illuminate\Http\Response
     */
    public function destroy($tombo)
    {
        if(!$cpu = $this->cpu->where('tombo',$tombo)->first()){
            return redirect()->back();
        }

        $cpu->delete();
        return redirect()->route('cpu.index')->with('sucesso','Deletado');
    }

    public function search(request $request){

        $cpu = $this->cpu->search($request->filter);

        return view('Admin.cpu.index',compact('cpu'));
    }
}
