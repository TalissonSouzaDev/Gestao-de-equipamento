<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\unidadesetor;
use App\Models\usuarios;
use Illuminate\Http\Request;
use App\Models\User;

class usuarioController extends Controller
{
    private $usuario;

    public function __construct(usuarios $usuario){


        return $this->usuario = $usuario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $usuario = $this->usuario->paginate(10);

        return view('Admin.usuario.index',compact(['usuario']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.usuario.create',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        auth()->User()->historics()->create($request->all());
        $this->usuario->create($request->all());

        return redirect()->route('usuario.index')->with('sucesso','Cadastrado');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$usuario = $this->usuario->where('id',$id)->first()){
            return redirect()->back();
        }
        $items = unidadesetor::all();
        return view('Admin.usuario.edita',compact(['usuario'.'items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)

    {
        if(!$usuario = $this->usuario->where('id',$id)->first()){
            return redirect()->back();
        }

        auth()->User()->historics()->create($request->all());
        $usuario->update($request->all());
        return redirect()->route('usuario.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$usuario = $this->usuario->where('id',$id)->first()){
            return redirect()->back();
        }

        $usuario->delete();
        return redirect()->route('usuario.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $usuario = $this->usuario->search($request->filter);


        return view('Admin.usuario.index',compact(['usuario']));

   }
}
