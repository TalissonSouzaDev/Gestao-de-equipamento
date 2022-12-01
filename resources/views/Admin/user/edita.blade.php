@extends('adminlte::page')

@section('title','Atualizando Usuario')

@section('content_header')
<h1><i>Altera Senha \ Atualizar Usuario {{$user->name}}</i></h1>
@stop

@section('content')
<form action="{{route('user.update',$user->id)}}" method="post">
@method('PUT')

@include('Admin.user.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
