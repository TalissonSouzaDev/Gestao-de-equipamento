@extends('adminlte::page')

@section('title','Atualizando Equipamento')

@section('content_header')
<h1><i>Atualizar Monitor</i> {{$monitor->monitor}}</h1>
@stop

@section('content')
<form action="{{route('monitor.update',$monitor->tombo)}}" method="post">
@method('PUT')

@include('Admin.monitor.form.formulario')

<div class="form-group">

    <button class="btn btn-dark">Atualizar</button>
</div>
</form>
@stop
