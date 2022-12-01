@extends('adminlte::page')

@section('title','Cadastrando Equipamento')

@section('content_header')
<h1><i>Cadastrar Multimetro</i></h1>
@stop

@section('content')
<form action="{{route('multimetro.store')}}" method="post">
@include('Admin.multimetro.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
