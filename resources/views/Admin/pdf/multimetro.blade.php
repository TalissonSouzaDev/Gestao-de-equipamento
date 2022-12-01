@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento multimetro
    <br>
    Quantidade de registro = {{$multimetro->count()}}</i></h1>

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
        @foreach($multimetro as $multimetros)
        <tr>
           <td>{{$multimetro->tombo}}</td>
            <td>{{$multimetros->n_s }}</td>
            <td>{{$multimetros->marca }}</td>
            <td>{{$multimetros->modelo }}</td>
            <td>{{$multimetros->patrimonio }}</td>
            <td>{{$multimetros->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
