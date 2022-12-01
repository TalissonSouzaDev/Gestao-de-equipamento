@extends('adminlte::page')

@section('title','Cadastando Equipamento')

@section('content_header')
<h1><i>CADASTRAR UNIDADE|SETOR</i></h1>
@stop

@section('content')
<form action="{{route('unidadesetor.store')}}" method="post">
    @csrf
@include('Admin.form_unidade_setor.formulario')

<div class="form-group">

    <button class="btn btn-info" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">CADASTRAR</button>
</div>
</form>

 {{------------------------------- mostrando os arquivos------------------------------------------------------------------------------------------------}}
<div class="card">

    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>


                    <th>UNIDADE</th>
                    <th>SETOR</th>



            </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>

                    <td>{{$item->unidade}}</td>
                    <td width="50%">{{$item->setor}}</td>

                    <td width="10%">
                      <form action="{{route('unidadesetor.destroy',$item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </td>

                </tr>
             @endforeach
            </tbody>
        </table>
    </div>

@stop



