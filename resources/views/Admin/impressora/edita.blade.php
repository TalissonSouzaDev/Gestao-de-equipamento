@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
    <h1><i>Atualizando Impressora Tombo</i> {{$impressora->tombo}}</h1>
@stop

@section('content')
<form action="{{route('impressora.update',$impressora->tombo)}}" method="post">
@method('PUT')

@include('Admin.impressora.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
