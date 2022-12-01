<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\validarwebcam;
use App\Models\unidadesetor;
use App\Models\webcam;
use Illuminate\Http\Request;

class webcamController extends Controller
{
    private $webcam;

    public function __construct(webcam $webcam){

        return $this->webcam = $webcam;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $webcam = $this->webcam->paginate(10);

        return view('Admin.webcam.index',compact(['webcam']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = unidadesetor::all();
        return view('Admin.webcam.create',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validarwebcam $request)
    {
          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $this->webcam->create($request->all());

        return redirect()->route('webcam.index')->with('sucesso','Cadastrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function edit($n_s)
    {
        if(!$webcam = $this->webcam->where('n_s',$n_s)->first()){
            return redirect()->back();
        }
        $items = unidadesetor::all();
        return view('Admin.webcam.edita',compact(['webcam','items']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function update(validarwebcam $request, $n_s)

    {
        if(!$webcam = $this->webcam->where('n_s',$n_s)->first()){
            return redirect()->back();
        }


          // pegando usuario autenticado de login
          auth()->User()->historics()->create($request->all());
        $webcam->update($request->all());
        return redirect()->route('webcam.index')->with('sucesso','Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $n_s
     * @return \Illuminate\Http\Response
     */
    public function destroy($n_s)
    {
        if(!$webcam = $this->webcam->where('n_s',$n_s)->first()){
            return redirect()->back();
        }

        $webcam->delete();
        return redirect()->route('webcam.index')->with('sucesso','Deletado');
    }

    public function search(request $request){
        $webcam = $this->webcam->search($request->filter);
        $simm = $this->webcam->where('unidade','SIMM')->count();
        $semdec = $this->webcam->where('unidade','SEMDEC')->count();
        $sac = $this->webcam->where('unidade','SAC EMPREENDEDOR')->count();
        $nautico = $this->webcam->where('unidade','SAC NAUTICO')->count();

        return view('Admin.webcam.index',compact(['webcam']));

   }
}
