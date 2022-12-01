<?php

namespace App\Http\Controllers\unidadesetor;

use App\Http\Controllers\Controller;
use App\Models\unidadesetor;
use Illuminate\Http\Request;

class UnidadesetorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = unidadesetor::all();

        return view('Admin.form_unidade_setor.index',compact('items'));
    }

    public function create(){
        $items = unidadesetor::all();

        return view('Admin.form_unidade_setor.create',compact('items'));
    }


    public function store(Request $request)
    {
        $unidadesetor = unidadesetor::create($request->all());

        return redirect()->back();
    }




    public function destroy($id)
    {
        echo 'Unidadesetor';
        if(!$item = unidadesetor::where('id', $id)->first()){
            return redirect()->back();
        }

        $item->delete();

        return redirect()->back();
    }
}
