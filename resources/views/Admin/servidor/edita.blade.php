@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizando Servidor Tombo</i> {{$servidor->tombo}}</h1>
@stop

@section('content')
<form action="{{route('servidor.update',$servidor->n_s)}}" method="post">
@method('PUT')

@include('Admin.servidor.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
