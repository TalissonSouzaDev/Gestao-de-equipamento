@extends('adminlte::page')

@section('title','EQUIPAMENTOS')

@section('content_header')


    <form action="{{route('mouse.buscar')}}" method="post" class="form form-inline">
        @csrf
        <input type="text" name="filter" placeholder="Filtar por:n° de serie,unidade" class="form-control">
        <button type="submit" class="btn btn-outline-secondary">Filtrar</button>

    </form>




@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1><a href="{{route('mouse.create')}}" class="btn btn-outline-primary">Cadastrar</a></h1>
    </div>
    @include('Admin.alerta.alerta')
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>N/S</th>
                    <th >MARCA</th>
                    <th>MODELO</th>
                    <th>PATRIMONIO</th>

                    <th>UNIDADE\SETOR</th>
                    <th >Ações</th>


            </tr>
            </thead>
            <tbody>
                @foreach($mouse as $mousee)
                <tr>
                    <td>{{$mousee->n_s }}</td>
                    <td>{{$mousee->marca}}</td>
                    <td>{{$mousee->modelo}}</td>
                    <td>{{$mousee->patrimonio}}</td>

                    <td>{{$mousee->unidade_setor }}</td>
                    <td width="10%">
                        <a href="{{route('index.historico')}}" class="btn btn-outline-secondary btn-lg"><i class="fas fa-landmark"></i></a>
                       <a href="{{route('mouse.edit',$mousee->n_s)}}" class="btn btn-outline-warning btn-lg"><i class="fas fa-pen"></i></a>
                    </td>
                    <td>
                       <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></button>
                    </td>

            {{---------------------------------------------------------------Modal Booststrap ------------------------------}}


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><i>Deseja Realmente Excluir</i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            {{---Formulario delete ---}}
            <form action="{{route('mouse.destroy',$mousee->n_s)}}" method="post">
                @csrf
                @method('DELETE')

            <div class="modal-body">
              <i><b>N° de Serie:</b> {{$mousee->n_s}}</i>
            </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submite" class="btn btn-danger">Excluir</button>
            </form>

            </div>
          </div>
        </div>
      </div>







                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $mouse->links() }}

        <a href="{{route('mouse.pdf')}}" target="_blank" class="btn btn-outline-danger ">Relatório PDF</a>

    </div>

</div>




@stop
