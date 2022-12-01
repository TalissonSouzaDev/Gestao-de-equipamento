@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Roteador Tombo</i> {{$roteador->tombo}}</h1>
@stop

@section('content')
<form action="{{route('roteador.update',$roteador->tombo)}}" method="post">
@method('PUT')

@include('Admin.roteador.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
