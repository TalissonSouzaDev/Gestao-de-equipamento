@extends('adminlte::page')

@section('title','EQUIPAMENTOS')

@section('content_header')
<h1>{{$monitor->nome}}</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <ul>
            <li><b>NOME: </b> {{$monitor->nome}}</li>
            <li><b>TOMBO: </b> {{$monitor->tombo}}</li>
            <li><b>NUMERO DE SERIE: </b> {{$monitor->n_s}}</li>
            <li><b>MARCA: </b> {{$monitor->marca}} </li>
            <li><b>MODELO: </b> {{$monitor->modelo}}</li>
            <li><b>PATRIMONIO: </b> {{$monitor->patrimonio}}</li>
            <li><b>UNIDADE: </b> {{$monitor->unidade_setor}} </li>

        </ul>


    </div>
    <div class="card-footer">


        <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></button>


{{---------------------------------------------------------------Modal Booststrap ------------------------------}}


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel"><i>Deseja Realmente Excluir</i></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

{{---Formulario delete ---}}
<form action="{{route('monitor.destroy',$monitor->tombo)}}" method="post">
@csrf
@method('DELETE')

<div class="modal-body">
    <i><b>Monitor:</b> {{$monitor->nome}}</i> <br>
    <i><b>N° de Serie:</b> {{$monitor->n_s}}</i><br>
    <i><b>Tombo:</b> {{$monitor->tombo}}</i>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
<button type="submite" class="btn btn-danger">Excluir</button>
</form>

</div>
</div>
</div>
</div>



@stop
