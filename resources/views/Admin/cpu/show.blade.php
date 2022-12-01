@extends('adminlte::page')

@section('title','EQUIPAMENTOS')

@section('content_header')
<h1>{{$cpu->nome}}</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <ul>
            <li><b>NOME DA MAQUINA: </b> {{$cpu->nome}}</li>
            <li><b>TOMBO: </b> {{$cpu->tombo}}</li>
            <li><b>NUMERO DE SERIE: </b> {{$cpu->n_s}}</li>
            <li><b>MARCA: </b> {{$cpu->marca}} </li>
            <li><b>MODELO: </b> {{$cpu->modelo}}</li> </li>
            <li><b>TIPO: </b> {{$cpu->tipo}}</li>
            <li><b>PATRIMONIO: </b> {{$cpu->patrimonio}}</li>

            <li><b>UNIDADE\SETOR: </b> {{$cpu->unidade_setor}} </li>

        </ul>


    </div>
    <div class="card-footer">

        <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></button>
    </td>

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
<form action="{{route('cpu.destroy',$cpu->tombo)}}" method="post">
@csrf
@method('DELETE')

<div class="modal-body">
    <i><b>Nome da Maquina:</b> {{$cpu->nome}}</i> <br>
    <i><b>N° de Serie:</b> {{$cpu->n_s}}</i><br>
<i><b>Tombo:</b> {{$cpu->n_s}}</i>
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
