@extends('adminlte::page')

@section('title','Cadastrando Equipamento')

@section('content_header')
<h1><i> CADASTRAR TECLADO</i></h1>
@stop

@section('content')
<form action="{{route('teclado.store')}}" method="post">
@include('Admin.teclado.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
