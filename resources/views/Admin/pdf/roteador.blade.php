@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Roteador
    <br>
    Quantidade de registro = {{$roteador->count()}}</i></h1>

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
        @foreach($roteador  as $roteadors)
        <tr>
            <td>{{$roteadors->ip}}</td>
            <td>{{$roteadors->tombo}}</td>
            <td>{{$roteadors->n_s }}</td>
            <td>{{$roteadors->marca }}</td>
            <td>{{$roteadors->modelo }}</td>
            <td>{{$roteadors->patrimonio }}</td>
            <td>{{$roteadors->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
