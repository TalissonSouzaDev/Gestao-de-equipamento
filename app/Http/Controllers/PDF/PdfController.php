<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Models\{
    cpu,
    monitor,
    mouse,
    teclado,
    fone,
    webcam,
    estabilizador,
    usuarios,
    telefone,
    switchs,
    roteador,
    impressora,
    multimetro,
    notebook,
    nobreak,
    servidor,

};
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function cpu(){

        $cpu = cpu::all();

        return PDF::LoadView('Admin.pdf.cpu',compact('cpu'))
        ->stream();
    }

    // Controller do pdf monitor
    public function monitor(){

        $monitor = monitor::all();

        return PDF::LoadView('Admin.pdf.monitor',compact('monitor'))
        ->stream();
    }

    // Controller do mouse
    public function mouse(){

        $mouse = mouse::all();

        return PDF::LoadView('Admin.pdf.mouse',compact('mouse'))
        ->stream();
    }

     // Controller do teclado
     public function teclado(){

        $teclado = teclado::all();

        return PDF::LoadView('Admin.pdf.teclado',compact('teclado'))
        ->stream();
    }

     // Controller do fone
     public function fone(){

        $fone = fone::all();

        return PDF::LoadView('Admin.pdf.fone',compact('fone'))
        ->stream();
    }

     // Controller do webcam
     public function webcam(){

        $webcam = webcam::all();

        return PDF::LoadView('Admin.pdf.webcam',compact('webcam'))
        ->stream();
    }

     // Controller do estabilizador
     public function estabilizador(){

        $estabilizador = estabilizador::all();

        return PDF::LoadView('Admin.pdf.estabilizador',compact('estabilizador'))
        ->stream();
    }

     // Controller do usuario
     public function usuario(){

        $usuario = usuarios::all();

        return PDF::LoadView('Admin.pdf.usuario',compact('usuario'))
        ->stream();
    }

     // Controller do telefone
     public function telefone(){

        $telefone = telefone::all();

        return PDF::LoadView('Admin.pdf.telefone',compact('telefone'))
        ->stream();
    }

     // Controller do switchs
     public function switch(){

        $switch = switchs::all();

        return PDF::LoadView('Admin.pdf.switchs',compact('switch'))
        ->stream();
    }


     // Controller do roteador
     public function roteador(){

        $roteador = roteador::all();

        return PDF::LoadView('Admin.pdf.roteador',compact('roteador'))
        ->stream();
    }


     // Controller do impressora
     public function impressora(){

        $impressora = impressora::all();

        return PDF::LoadView('Admin.pdf.impressora',compact('impressora'))
        ->stream();
    }


     // Controller do multimetro
     public function multimetro(){

        $multimetro = multimetro::all();

        return PDF::LoadView('Admin.pdf.multimetro',compact('multimetro'))
        ->stream();
    }


     // Controller do notebook
     public function notebook(){

        $notebook = notebook::all();

        return PDF::LoadView('Admin.pdf.notebook',compact('notebook'))
        ->stream();
    }

     // Controller do nobreak
     public function nobreak(){

        $nobreak = nobreak::all();

        return PDF::LoadView('Admin.pdf.nobreak',compact('nobreak'))
        ->stream();
    }

     // Controller do servidor
     public function servidor(){

        $servidor = servidor::all();

        return PDF::LoadView('Admin.pdf.servidor',compact('servidor'))
        ->stream();
    }






}
