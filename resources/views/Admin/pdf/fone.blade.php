@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Headset
    <br>
    Quantidade de registro = {{$fone->count()}}</i></h1>

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
        @foreach($fone as $fones)
        <tr>
            <td>{{$fones->tombo}}</td>
            <td>{{$fones->n_s }}</td>
            <td>{{$fones->marca }}</td>
            <td>{{$fones->modelo }}</td>
            <td>{{$fones->patrimonio }}</td>
            <td>{{$fones->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
