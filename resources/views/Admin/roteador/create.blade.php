@extends('adminlte::page')

@section('title','Cadastrar Equipamento')

@section('content_header')
<h1><i>Cadastrar Roteador</i></h1>
@stop

@section('content')
<form action="{{route('roteador.store')}}" method="post">
@include('Admin.roteador.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
