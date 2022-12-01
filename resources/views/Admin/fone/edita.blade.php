@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Fone de Ouvido Tombo</i> {{$fone->tombo}}</h1>
@stop

@section('content')
<form action="{{route('fone.update',$fone->n_s)}}" method="post">
@method('PUT')

@include('Admin.fone.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
