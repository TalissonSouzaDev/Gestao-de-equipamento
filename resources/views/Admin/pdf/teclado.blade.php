@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Teclado
    <br>
    Quantidade de registro = {{$teclado->count()}}</i></h1>

<table border="1" cellspacing="1" cellpadding="1">
    <thead>
        <tr>
            <th>SERIE</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>PATRIMONIO</th>
            <th>UNIDADE\SETOR</th>

    </tr>
    </thead>
    <tbody>
        @foreach($teclado as $teclados)
        <tr>

            <td>{{$teclados->n_s }}</td>
            <td>{{$teclados->marca }}</td>
            <td>{{$teclados->modelo }}</td>
            <td>{{$teclados->patrimonio }}</td>
            <td>{{$teclados->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
