<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\unidadesetor;
use App\Models\User;
use Illuminate\Http\Request;


class userController extends Controller
{
    private $user;

    public function __construct(User $user){

        return $this->user = $user;
    }

    public function index()
    {
     $user = $this->user->all();

     return view('Admin.user.index',compact('user'));
    }


    public function create()
    {

        $items = unidadesetor::all();
        return view('Admin.user.create',compact('items'));
    }


    public function store(Request $request)
    {

          // pegando usuario autenticado de login
        $requests = $request->all();
        $requests['password']  = bcrypt($request->password);

        auth()->User()->historics()->create($request->all());
        $this->user->create($requests);

        return redirect()->route('user.index')->with('registrado','USUARIO CRIADO COM SUCESSO');
    }


    public function edit($id)
    {
        if(!$user = $this->user->where('id',$id)->first()){
            return redirect()->back();
        }
        $items = unidadesetor::all();
        return view('Admin.user.edita',compact(['user','items']));
    }

    public function update(Request $request, $id)
    {

        if(!$user = $this->user->where('id',$id)->first()){
            return redirect()->back();
        }
        $requests = $request->all();
        $requests['password']  = bcrypt($request->password);

        auth()->User()->historics()->create($request->all());
        $user->update($requests);
        return redirect()->route('user.index')->with('registrado','USUARIO ALTERADO COM SUCESSO');

    }

    public function destroy($id)
    {
        if(!$user = $this->user->where('id',$id)->first()){
            return redirect()->back();
        }

        $user->delete();
        return redirect()->route('user.index')->with('registrado','USUARIO DELETADO COM SUCESSO');
    }
}
