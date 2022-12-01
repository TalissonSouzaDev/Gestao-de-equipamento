@extends('adminlte::page')

@section('title','Atualizando Usuario')

@section('content_header')
<h1><i>Atualizar Usuario {{$usuario->nome}}</i></h1>
@stop

@section('content')
<form action="{{route('usuario.update',$usuario->id)}}" method="post">
@method('PUT')

@include('Admin.usuario.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
