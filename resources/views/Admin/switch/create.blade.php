@extends('adminlte::page')

@section('title','Cadastrando Equipamento')

@section('content_header')
<h1><i>Cadastrar Switch</i></h1>
@stop

@section('content')
<form action="{{route('switch.store')}}" method="post">
@include('Admin.switch.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
