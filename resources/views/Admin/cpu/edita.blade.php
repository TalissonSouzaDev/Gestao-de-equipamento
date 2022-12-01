@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Cpu Nome Da Maquina</i> {{$cpu->nome_maquina}}</h1>
@stop

@section('content')
<form action="{{route('cpu.update',$cpu->tombo)}}" method="post">
@method('PUT')

@include('Admin.cpu.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
