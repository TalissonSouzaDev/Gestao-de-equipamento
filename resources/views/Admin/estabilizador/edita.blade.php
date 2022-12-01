@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Estabilizador Tombo</i> {{$estabilizador->tombo}}</h1>
@stop

@section('content')
<form action="{{route('estabilizador.update',$estabilizador->n_s)}}" method="post">
@method('PUT')

@include('Admin.estabilizador.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
