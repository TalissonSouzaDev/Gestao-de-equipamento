@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizando Notebook {{$notebook->nome_maquina}}</i></h1>
@stop

@section('content')
<form action="{{route('notebook.update',$notebook->tombo)}}" method="post">
@method('PUT')

@include('Admin.notebook.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
