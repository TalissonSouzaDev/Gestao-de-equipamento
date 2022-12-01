@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Notebook <br>
    Quantidade de registro =
{{ $notebook->count() }}</i></h1>

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
        @foreach($notebook as $notebooks)
        <tr>
            <td>{{$notebooks->nome }}</td>
            <td>{{$notebooks->tombo }}</td>
            <td>{{$notebooks->n_s }}</td>
            <td>{{$notebooks->marca }}</td>
            <td>{{$notebooks->modelo }}</td>
            <td>{{$notebooks->tipo }}</td>
            <td>{{$notebooks->patrimonio }}</td>
            <td>{{$notebooks->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection

