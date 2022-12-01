@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Telefone
    <br>
    Quantidade de registro = {{$telefone->count()}}</i></h1>

<table border="1" cellspacing="1" cellpadding="1">
    <thead>
        <tr>
            <th>TIPO</th>
            <th>TOMBO</th>
            <th>SERIE</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>PATRIMONIO</th>
            <th>UNIDADE\SETOR</th>

    </tr>
    </thead>
    <tbody>
        @foreach($telefone as $telefones)
        <tr>
            <td>{{$telefones->tipo}}</td>
            <td>{{$telefones->tombo}}</td>
            <td>{{$telefones->n_s }}</td>
            <td>{{$telefones->marca }}</td>
            <td>{{$telefones->modelo }}</td>
            <td>{{$telefones->patrimonio }}</td>
            <td>{{$telefones->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
