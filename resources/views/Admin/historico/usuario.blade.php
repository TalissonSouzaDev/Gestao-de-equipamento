@extends('adminlte::page')

@section('title','USUARIO')

@section('content_header')

<h1><i>Historico de Registro</i></h1>


<form action="{{route('historicousuario.buscar')}}" method="post" class="form form-inline">
    @csrf
    <input type="text" name="filter" placeholder="Filtar por: nome tombo n° de serie" class="form-control">
    <button type="submit" class="btn btn-outline-secondary">Filtrar</button>

</form>

@stop

@section('content')
<div class="card">
    <div class="card-header">

        <ul class="breadcrumb">
            <li><a href="{{route('index.historico')}}">Equipamentos</a> | </li>
            <li><a href="{{route('indexusuario.historico')}}">Usuarios</a></li>


          </ul>

    </div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>

                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>RAMAL</th>
                    <th>UNIDADE\SETOR</th>
                    <th>DATA E HORA</th>
                     <th>ADM</th>

            </tr>
            </thead>
            <tbody>
                @foreach($historico as $historicos)
                <tr>

                    <td>{{$historicos->name ?? '*****'}}</td>
                    <td>{{$historicos->email ?? '*****'}}</td>
                    <td>{{$historicos->ramal ?? '*****'}}</td>
                    <td>{{$historicos->unidade_setor ?? '*****'}}</td>
                    <td>{{$historicos->created_at ?? '*****'}}</td>
                    <td>{{$historicos->user->email}}</td>


                </tr>
             @endforeach
            </tbody>
        </table>
    </div>






</div>



@stop
