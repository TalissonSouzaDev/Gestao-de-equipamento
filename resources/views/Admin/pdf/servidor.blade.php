@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Servidor
    <br>
    Quantidade de registro = {{$servidor->count()}}</i></h1>

<table border="1" cellspacing="1" cellpadding="1">
    <thead>
        <tr>
            <th>IP</th>
            <th>TOMBO</th>
            <th>SERIE</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>PATRIMONIO</th>
            <th>UNIDADE\SETOR</th>

    </tr>
    </thead>
    <tbody>
        @foreach($servidor as $servidors)
        <tr>
            <td>{{$servidors->ip}}</td>
            <td>{{$servidors->tombo}}</td>
            <td>{{$servidors->n_s }}</td>
            <td>{{$servidors->marca }}</td>
            <td>{{$servidors->modelo }}</td>
            <td>{{$servidors->patrimonio }}</td>
            <td>{{$servidor->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
