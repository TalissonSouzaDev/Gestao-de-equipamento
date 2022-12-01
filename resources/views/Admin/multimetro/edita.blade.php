@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Multimetro Tombo</i> {{$multimetro->tombo}}</h1>
@stop

@section('content')
<form action="{{route('multimetro.update',$multimetro->n_s)}}" method="post">
@method('PUT')

@include('Admin.multimetro.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
