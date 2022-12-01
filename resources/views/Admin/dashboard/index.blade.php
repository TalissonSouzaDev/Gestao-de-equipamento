@extends('adminlte::page')

@section('title','EQUIPAMENTOS')

@section('content_header')

<h1>DASHBOARD</h1>


@stop

@section('content')
<div class="card">
    <h1 class="text-center"><i>Total De Todos Equipamentos</i></h1>

    <div class="card-body">

        <div class="container-fluid px-4">
            <div class="row g-3 my-2">

                    <div class="col-md-3">
                     <div class="p-3 bg-green shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                          <h4 class="fs-2"><i class="fas fa-hdd"></i> CPU</h4>
                          
                           <p class="text-center">TOTAL  {{$cpu}}</p>

                         </div>
                         <a href="{{route('cpu.index')}}" color="white"><i>Visualizar Cpu</i></a>
                </div>
            </div>
{{-- ----------------------------------------------------------------------------------------------------------------------------------------------------}}
            <div class="col-md-3">
                <div class="p-3 bg-red shadow-sm d-flex justify-content-around align-items-center rounded">
                   <div>
                     <h3 class="fs-2"><i class="fas fa-desktop"></i> MONITOR</h3>
                    
                      <p class="text-center">TOTAL  {{$monitor}}</p>
                    </div>
                    <a href="{{route('monitor.index')}}" color="white"><i>Visualizar Monitor</i></a>
           </div>
        </div>
{{-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                 <div class="col-md-3">
            <div class="p-3 bg-pink shadow-sm d-flex justify-content-around align-items-center rounded">
               <div>
                 <h3 class="fs-2"><i class="fas fa-mouse"></i> MOUSE</h3>
                        
                           <p class="text-center">TOTAL  {{$mouse}}</p>
                </div>
                <a href="{{route('mouse.index')}}" color="white"><i>Visualizar Mouse</i></a>
               </div>
               </div>
 {{-- -------------------------------------------------------------------------------------------------------------------------------------------------}}


               <div class="col-md-3">
                <div class="p-3 bg-blue shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                      <h3 class="fs-2"><i class="fas fa-keyboard"></i> TECLADO</h3>
                   
                       <p class="text-center">TOTAL  {{$teclado}}</p>
                     </div>
                     <a href="{{route('teclado.index')}}" color="white"><i>Visualizar Teclado</i></a>
                    </div>
                </div>

        </div>
        </div>

{{----------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}
        <div class="container-fluid px-4">
            <div class="row g-3 my-2">

                    <div class="col-md-3">
                     <div class="p-3 bg-info shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                          <h3 class="fs-2"><i class="fas fa-headphones-alt"></i> FONE</h3>
                       
                           <p class="text-center">TOTAL  {{$fone}}</p>
                         </div>
                         <a href="{{route('fone.index')}}" color="white"><i>Visualizar Fone</i></a>
                </div>
            </div>

{{----------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}
            <div class="col-md-3">
                <div class="p-3 bg-secondary shadow-sm d-flex justify-content-around align-items-center rounded">
                   <div>
                     <h3 class="fs-2"><i class="fas fa-camera"></i> WEBCAM</h3>
                    
                      
                           <p class="text-center">TOTAL  {{$webcam}}</p>
                    </div>
                    <a href="{{route('webcam.index')}}" color="white"><i>Visualizar Webcam</i></a>
           </div>
        </div>
{{----------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                 <div class="col-md-3">
            <div class="p-3 bg-green shadow-sm d-flex justify-content-around align-items-center rounded">
               <div>
                 <h3 class="fs-2"> ESTABILIZADOR </h3>
              
                  <p class="text-center">TOTAL  {{$estabilizador}}</p>
                </div>
                <a href="{{route('webcam.index')}}" color="white"><i>Visualizar Estabilizador</i></a>

               </div>
               </div>

{{----------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}
               <div class="col-md-3">
                <div class="p-3 bg-red shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                      <h3 class="fs-2"> <i class="fas fa-phone-alt"></i> TELEFONE</h3>
                      
                       <p class="text-center">TOTAL  {{$telefone}}</p>
                     </div>
                     <a href="{{route('telefone.index')}}" color="white"><i>Visualizar Telefone</i></a>
                    </div>
                </div>


        </div>
        </div>


{{--------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}


        <div class="container-fluid px-4">
            <div class="row g-3 my-2">

                    <div class="col-md-3">
                     <div class="p-3 bg-secondary shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                          <h3 class="fs-2"><i class="fas fa-swatchbook"></i> SWITCH</h3>
                         
                           <p class="text-center">TOTAL  {{$switchs}}</p>
                         </div>
                         <a href="{{route('switch.index')}}" color="white"><i>Visualizar switch</i></a>
                </div>
            </div>

{{--------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}

            <div class="col-md-3">
                <div class="p-3 bg-pink shadow-sm d-flex justify-content-around align-items-center rounded">
                   <div>
                     <h3 class="fs-2"><i class="fas fa-wifi"></i> ROTEADOR</h3>
                   
                      <p class="text-center">TOTAL  {{$roteador}}</p>
                    </div>
                    <a href="{{route('roteador.index')}}" color="white"><i>Visualizar Roteador</i></a>
           </div>
        </div>

{{--------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}
                 <div class="col-md-3">
            <div class="p-3 bg-info shadow-sm d-flex justify-content-around align-items-center rounded">
               <div>
                 <h3 class="fs-2"><i class="fas fa-print"></i> IMPRESSORA</h3>
                   
                      <p class="text-center">TOTAL  {{$impressora}}</p>
                </div>
                <a href="{{route('impressora.index')}}" color="white"><i>Visualizar Impressora</i></a>

               </div>
               </div>


               <div class="col-md-3">
                <div class="p-3 bg-blue shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                      <h3 class="fs-2"><i class="fas fa-caret-right"></i>MULTIMETRO</h3>
                    
                       <p class="text-center">TOTAL  {{$multimetro}}</p>
                     </div>
                     <a href="{{route('multimetro.index')}}" color="white"><i>Visualizar Multimetro</i></a>
                    </div>
                </div>


        </div>
        </div>
{{--------------------------------------------------------------------------------------------------------------------------------------------------------------------}}
<div class="container-fluid px-4">
    <div class="row g-3 my-2">

            <div class="col-md-3">
             <div class="p-3 bg-red shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                  <h3 class="fs-2"><i class="fas fa-laptop"></i> NOTEBOOK</h3>
                
                   <p class="text-center">TOTAL  {{$notebook}}</p>
                 </div>
                 <a href="{{route('notebook.index')}}" color="white"><i>Visualizar Notebook</i></a>
        </div>
    </div>

    <div class="col-md-3">
        <div class="p-3 bg-blue shadow-sm d-flex justify-content-around align-items-center rounded">
           <div>
             <h3 class="fs-2"><i class="fas fa-charging-station"></i> NOBREAK</h3>
           
              <p class="text-center">TOTAL  {{$nobreak}}</p>
            </div>
            <a href="{{route('nobreak.index')}}" color="white"><i>Visualizar No-Break</i></a>
   </div>
</div>

         <div class="col-md-3">
    <div class="p-3 bg-green shadow-sm d-flex justify-content-around align-items-center rounded">
       <div>
         <h3 class="fs-2"><i class="fas fa-server"></i> SERVIDOR</h3>
        
          <p class="text-center">TOTAL  {{$servidor}}</p>
        </div>
        <a href="{{route('servidor.index')}}" color="white"><i>Visualizar Servidor</i></a>

       </div>
       </div>


       <div class="col-md-3">
        <div class="p-3 bg-info shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
              <h3 class="fs-2"><i class="fas fa-fw fa-user"></i>USUARIO</h3>
            
                   
                      <p class="text-center">TOTAL  {{$usuario}}</p>
             </div>
             <a href="{{route('usuario.index')}}" color="white"><i>Visualizar Usuario</i></a>
            </div>
        </div>





</div>
</div>

{{----------------------------------------------------------------------------------------------------------------------------}}
<div class="card-footer">
   <h3><i>Desenvolvidor Por Talisson souza &copy;2022</i></h3>

</div>


</div>
</div>



@stop
