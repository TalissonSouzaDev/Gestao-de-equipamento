@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Nobreak
    <br>
    Quantidade de registro = {{$nobreak->count()}}</i></h1>

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
        @foreach($nobreak as $nobreaks)
        <tr>
            <td>{{$nobreaks->tombo}}</td>
            <td>{{$nobreaks->n_s }}</td>
            <td>{{$nobreaks->marca }}</td>
            <td>{{$nobreaks->modelo }}</td>
            <td>{{$nobreaks->patrimonio }}</td>
            <td>{{$nobreaks->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
