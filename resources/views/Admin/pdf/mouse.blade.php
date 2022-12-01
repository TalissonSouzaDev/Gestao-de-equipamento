@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Mouse
    <br>
    Quantidade de registro = {{$mouse->count()}}</i></h1>

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
        @foreach($mouse as $mouses)
        <tr>

            <td>{{$mouses->n_s }}</td>
            <td>{{$mouses->marca }}</td>
            <td>{{$mouses->modelo }}</td>
            <td>{{$mouses->patrimonio }}</td>
            <td>{{$mouses->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
