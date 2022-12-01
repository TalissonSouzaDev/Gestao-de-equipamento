@extends('adminlte::page')

@section('title','Atualizando Equipamento')
@section('content_header')
<h1> <i>Atualizar Mouse N° De Serie</i> {{$mouse->n_s}}</h1>
@stop

@section('content')
<form action="{{route('mouse.update',$mouse->n_s)}}" method="post">
@method('PUT')

@include('Admin.mouse.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
