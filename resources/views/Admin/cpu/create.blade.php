@extends('adminlte::page')

@section('title','Cadastando Equipamento')

@section('content_header')
<h1><i>Cadastrar Cpu</i></h1>
@stop

@section('content')
<form action="{{route('cpu.store')}}" method="post">
@include('Admin.cpu.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">CADASTRAR</button>
</div>
</form>
@stop
