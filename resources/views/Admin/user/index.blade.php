@extends('adminlte::page')

@section('title','users')

@section('content_header')
<h1><i>Usuario do Sistema</i></h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1><a href="{{route('user.create')}}" class="btn btn-outline-primary">Cadastrar</a></h1>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th >USUARIO</th>
                    <th >RAMAL</th>
                    <th width="50%">UNIDADE\SETOR</th>
                    <th>Ações</th>


            </tr>
            </thead>
            <tbody>
                @foreach($user as $users)
                <tr>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email }}</td>
                    <td>{{$users->ramal}}</td>
                    <td>{{$users->unidade_setor }}</td>
                    <td width="5%">
                        <a href="{{route('user.edit',$users->id)}}" class="btn btn-outline-warning btn-lg"><i class="fas fa-pen"></i></a>
                    </td>
                    <td>
                        <form action="{{route('user.destroy',$users->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-outline-danger btn-lg"><i class="fas fa-trash-alt"></i></button>
                    </form>

                    </td>


                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">

    </div>
</div>



@stop
