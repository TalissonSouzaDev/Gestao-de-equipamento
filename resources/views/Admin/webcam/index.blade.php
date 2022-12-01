@extends('adminlte::page')

@section('title','EQUIPAMENTOS')

@section('content_header')


<form action="{{route('webcam.buscar')}}" method="post" class="form form-inline">
    @csrf
    <input type="text" name="filter" placeholder="Filtar por: nome tombo n° de serie" class="form-control">
    <button type="submit" class="btn btn-outline-secondary">Filtrar</button>

</form>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1><a href="{{route('webcam.create')}}" class="btn btn-outline-primary">Cadastrar</a></h1>
    </div>
    @include('Admin.alerta.alerta')
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>TOMBO</th>
                     <th>N/S</th>
                    <th >MARCA</th>
                    <th>MODELO</th>
                    <th>PATRIMONIO</th>
                    <th>UNIDADE\SETOR</th>
                    <th >Ações</th>


            </tr>
            </thead>
            <tbody>
                @foreach($webcam as $webcams)
                <tr>
                    <td>{{$webcams->tombo}}</td>
                    <td>{{$webcams->n_s }}</td>
                    <td>{{$webcams->marca}}</td>
                    <td>{{$webcams->modelo}}</td>
                    <td>{{$webcams->patrimonio}}</td>

                    <td>{{$webcams->unidade_setor }}</td>
                    <td width="10%">
                        <a href="{{route('index.historico')}}" class="btn btn-outline-secondary btn-lg"><i class="fas fa-landmark"></i></a>
                        <a href="{{route('webcam.edit',$webcams->n_s)}}" class="btn btn-outline-warning btn-lg"><i class="fas fa-pen"></i></a>

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
        <form action="{{route('webcam.destroy',$webcams->n_s)}}" method="post">
            @csrf
            @method('DELETE')

        <div class="modal-body">
            <i><b>Tombo:</b> {{$webcams->tombo}}</i><br>
          <i><b>N° de Serie:</b> {{$webcams->n_s}}</i><br>
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
        {{ $webcam->links() }}
        <a href="{{route('webcam.pdf')}}" target="_blank" class="btn btn-outline-danger ">Relatório PDF</a>

    </div>
</div>



@stop
