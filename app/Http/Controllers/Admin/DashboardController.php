<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\cpu;
use App\Models\estabilizador;
use App\Models\fone;
use App\Models\impressora;
use App\Models\monitor;
use App\Models\mouse;
use App\Models\multimetro;
use App\Models\nobreak;
use App\Models\notebook;
use App\Models\roteador;
use App\Models\servidor;
use App\Models\switchs;
use App\Models\teclado;
use App\Models\telefone;
use App\Models\usuarios;
use App\Models\webcam;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // contagem de dados de cpus
        $cpu = cpu::all()->count();

 

        // contagem de dados de monitor
        $monitor = monitor::all()->count();
    

       // contagem de dados de mouse
        $mouse = mouse::all()->count();
     



           // contagem de dados de teclado
        $teclado = teclado::all()->count();
   
         // contagem de dados de teclado
        $fone = fone::all()->count();
     

       // contagem de dados de webcam
        $webcam = webcam::all()->count();
       
       // contagem de dados de estabilizador
        $estabilizador = estabilizador::all()->count();
  

               // contagem de dados de telefone
        $telefone = telefone::all()->count();
      

       // contagem de dados de switch
        $switchs = switchs::all()->count();
     ;

               // contagem de dados de roteador
        $roteador = roteador::all()->count();
     

       // contagem de dados de impressora
        $impressora = impressora::all()->count();
     

               // contagem de dados de multimetro
        $multimetro = multimetro::all()->count();
       

               // contagem de dados de notebook
        $notebook = notebook::all()->count();
   

               // contagem de dados de nobreak
        $nobreak = nobreak::all()->count();
    

       // contagem de dados de servidor
        $servidor = servidor::all()->count();
       

               // contagem de dados de usuario
        $usuario = usuarios::all()->count();
    


        return view('Admin.dashboard.index',compact(


            [ 'cpu',
              'monitor',
              'mouse',
              'teclado',
              'fone',
              'webcam',
              'estabilizador',
              'telefone',
              'switchs',
              'notebook',
              'nobreak',
              'servidor',
              'usuario',
              'roteador',
              'impressora',
              'multimetro',
              ]
           ));

    }
}

