@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento CPU <br>
    Quantidade de registro =
{{ $cpu->count() }}</i></h1>

<table border="1" cellspacing="1" cellpadding="1">
    <thead>
        <tr>
            <th>NOME</th>
            <th>TOMBO</th>
            <th>SERIE</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>TIPO</th>
            <th>PATRIMONIO</th>
            <th>UNIDADE\SETOR</th>

    </tr>
    </thead>
    <tbody>
        @foreach($cpu as $cpuu)
        <tr>
            <td>{{$cpuu->nome }}</td>
            <td>{{$cpuu->tombo }}</td>
            <td>{{$cpuu->n_s }}</td>
            <td>{{$cpuu->marca }}</td>
            <td>{{$cpuu->modelo }}</td>
            <td>{{$cpuu->tipo }}</td>
            <td>{{$cpuu->patrimonio }}</td>
            <td>{{$cpuu->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection

