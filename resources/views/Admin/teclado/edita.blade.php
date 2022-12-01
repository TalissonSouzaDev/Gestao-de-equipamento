@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Teclado N° de Serie</i> {{$teclado->n_s}}</h1>
@stop

@section('content')
<form action="{{route('teclado.update',$teclado->n_s)}}" method="post">
@method('PUT')

@include('Admin.teclado.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
