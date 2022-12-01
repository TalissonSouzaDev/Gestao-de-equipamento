@extends('adminlte::page')

@section('title','Cadastrando Equipamento')

@section('content_header')
<h1><i>Cadastrar Estabilizador</i></h1>
@stop

@section('content')
<form action="{{route('estabilizador.store')}}" method="post">
@include('Admin.estabilizador.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
