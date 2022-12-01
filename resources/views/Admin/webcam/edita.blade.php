@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Webcam Tombo</i> {{$webcam->tombo}}</h1>
@stop

@section('content')
<form action="{{route('webcam.update',$webcam->n_s)}}" method="post">
@method('PUT')

@include('Admin.webcam.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
