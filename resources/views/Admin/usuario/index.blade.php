@extends('adminlte::page')

@section('title','Usuarios')

@section('content_header')



<form action="{{route('usuario.buscar')}}" method="post" class="form form-inline">
    @csrf
    <input type="text" name="filter" placeholder="Filtar por: nome tombo n° de serie" class="form-control">
    <button type="submit" class="btn btn-outline-secondary">Filtrar</button>

</form>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1><a href="{{route('usuario.create')}}" class="btn btn-outline-primary">Cadastrar</a></h1>
    </div>
    @include('Admin.alerta.alerta')
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>RAMAL</th>
                    <th>UNIDADE\SETOR</th>
                    <th width="10%" >Ações</th>


            </tr>
            </thead>
            <tbody>
                @foreach($usuario as $usuarios)
                <tr>
                    <td>{{$usuarios->nome}}</td>
                    <td>{{$usuarios->email }}</td>
                    <td>{{$usuarios->ramal }}</td>
                    <td>{{$usuarios->unidade_setor }}</td>
                    <td>
                        <a  witdh="50px" href="{{route('usuario.edit',$usuarios->id)}}" class="btn btn-outline-warning btn-lg"><i class="fas fa-pen"></i></a>
                        <form action="{{route('estabilizador.destroy',$usuarios->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i></button>
                    </form>

                    </td>


                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {!! $usuario->links() !!}

    </div>
</div>



@stop
