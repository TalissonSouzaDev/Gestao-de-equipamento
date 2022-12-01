@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Nobreak Tombo</i> {{$nobreak->tombo}}</h1>
@stop

@section('content')
<form action="{{route('nobreak.update',$nobreak->n_s)}}" method="post">
@method('PUT')

@include('Admin.nobreak.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
