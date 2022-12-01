@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Estabilizador
    <br>
    Quantidade de registro = {{$estabilizador->count()}}</i></h1>

<table border="1" cellspacing="1" cellpadding="1">
    <thead>
        <tr>
            <th>TOMBO</th>
            <th>SERIE</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>PATRIMONIO</th>
            <th>UNIDADE\SETOR</th>

    </tr>
    </thead>
    <tbody>
        @foreach($estabilizador as $estabilizadors)
        <tr>
            <td>{{$estabilizadors->tombo}}</td>
            <td>{{$estabilizadors->n_s }}</td>
            <td>{{$estabilizadors->marca }}</td>
            <td>{{$estabilizadors->modelo }}</td>
            <td>{{$estabilizadors->patrimonio }}</td>
            <td>{{$estabilizadors->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
