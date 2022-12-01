@extends('adminlte::page')

@section('title','Cadastrando Equipamento')

@section('content_header')
<h1><i>Cadastrar Fone De Ouvido</i></h1>
@stop

@section('content')
<form action="{{route('fone.store')}}" method="post">
@include('Admin.fone.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
