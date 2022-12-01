@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Monitor<br>
    Quantidade de registro =
{{$monitor->count()}} </i></h1>

<table border="1" cellspacing="1" cellpadding="1">
    <thead>
        <tr>
            <th>NOME</th>
            <th>TOMBO</th>
            <th>SERIE</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>PATRIMONIO</th>
            <th>UNIDADE\SETOR</th>

    </tr>
    </thead>
    <tbody>
        @foreach($monitor as $monitors)
        <tr>
            <td>{{$monitors->nome }}</td>
            <td>{{$monitors->tombo }}</td>
            <td>{{$monitors->n_s }}</td>
            <td>{{$monitors->marca }}</td>
            <td>{{$monitors->modelo }}</td>
            <td>{{$monitors->patrimonio }}</td>
            <td>{{$monitors->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
