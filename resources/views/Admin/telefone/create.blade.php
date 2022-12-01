@extends('adminlte::page')

@section('title','Cadastrando Equipamento')

@section('content_header')
<h1><i>Cadastrar Telefone</i></h1>
@stop

@section('content')
<form action="{{route('telefone.store')}}" method="post">
@include('Admin.telefone.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
