@extends('adminlte::page')

@section('title','Cadastrando Usuario')

@section('content_header')
<h1><i>Cadastrar Usuario de Acesso</i></h1>
@stop

@section('content')
<form action="{{route('user.store')}}" method="post">
@include('Admin.user.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
