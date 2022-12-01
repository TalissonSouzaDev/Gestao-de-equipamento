@extends('adminlte::page')

@section('title','EQUIPAMENTOS')

@section('content_header')



    <form action="{{route('monitor.buscar')}}" method="post" class="form form-inline">
        @csrf
        <input type="text" name="filter" placeholder="Filtar por: nome tombo n° de serie" class="form-control">
        <button type="submit" class="btn btn-outline-secondary">Filtrar</button>

    </form>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1><a href="{{route('monitor.create')}}" class="btn btn-outline-primary">Cadastrar</a></h1>
    </div>
    @include('Admin.alerta.alerta')
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th >TOMBO</th>
                    <th>MARCA</th>
                    <th>UNIDADE\SETOR</th>
                    <th width="15%">Ações</th>


            </tr>
            </thead>
            <tbody>
                @foreach($monitor as $monitoo)
                <tr>
                    <td>{{$monitoo->nome }}</td>
                    <td>{{$monitoo->tombo }}</td>
                    <td>{{$monitoo->marca }}</td>

                    <td>{{$monitoo->unidade_setor }}</td>

                    <td><a href="{{route('monitor.show',$monitoo->tombo)}}" class="btn btn-outline-info btn-lg"><i class="fas fa-eye"></i></a>
                        <a href="{{route('monitor.edit',$monitoo->tombo)}}" class="btn btn-outline-warning btn-lg"><i class="fas fa-pen"></i></a>
                        <a href="{{route('index.historico')}}" class="btn btn-outline-secondary btn-lg"><i class="fas fa-landmark"></i></a>
                    </td>


                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $monitor->links() }}
        <a href="{{route('monitor.pdf')}}" target="_blank" class="btn btn-outline-danger ">Relatório PDF</a>

    </div>
</div>



@stop
