@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento Webcam
    <br>
    Quantidade de registro = {{$webcam->count()}}

</i></h1>

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
        @foreach($webcam as $webcams)
        <tr>
            <td>{{$webcams->tombo}}</td>
            <td>{{$webcams->n_s }}</td>
            <td>{{$webcams->marca }}</td>
            <td>{{$webcams->modelo }}</td>
            <td>{{$webcams->patrimonio }}</td>
            <td>{{$webcam->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
