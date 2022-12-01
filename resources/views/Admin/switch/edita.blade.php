@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Switch tombo</i> {{$switch->tombo}}</h1>
@stop

@section('content')
<form action="{{route('switch.update',$switch->tombo)}}" method="post">
@method('PUT')

@include('Admin.switch.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
