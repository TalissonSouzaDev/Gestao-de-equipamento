@extends('adminlte::page')

@section('title','Cadastrando Equipamento')
@section('content_header')
<h1><i>Cadastrar Mouse</i></h1>
@stop

@section('content')
<form action="{{route('mouse.store')}}" method="post">
@include('Admin.mouse.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
