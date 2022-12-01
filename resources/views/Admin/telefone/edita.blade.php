@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Telefone Tombo</i> {{$telefone->tombo}}</h1>
@stop

@section('content')
<form action="{{route('telefone.update',$telefone->n_s)}}" method="post">
@method('PUT')

@include('Admin.telefone.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
