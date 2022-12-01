@extends('adminlte::page')

@section('title','Cadastrando Equipamento')

@section('content_header')
<h1><i>Cadastar Servidor</i></h1>
@stop

@section('content')
<form action="{{route('servidor.store')}}" method="post">
@include('Admin.servidor.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
