@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Impressora
    <br>
    Quantidade de registro = {{$impressora->count()}}</i></h1>

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
        @foreach($impressora as $impressoras)
        <tr>
            <td>{{$impressoras->ip}}</td>
            <td>{{$impressoras->tombo}}</td>
            <td>{{$impressoras->n_s }}</td>
            <td>{{$impressoras->marca }}</td>
            <td>{{$impressoras->modelo }}</td>
            <td>{{$impressoras->patrimonio }}</td>
            <td>{{$impressoras->setor }}</td>
            <td>{{$impressoras->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
