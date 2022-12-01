@extends('Admin.pdf.layout.pdf')
@section('body')

<h1><i>Relatório De Equipamento SWITCH
    <br>
    Quantidade de registro = {{$switch->count()}}</i></h1>

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
        @foreach($switch as $switchs)
        <tr>

            <td>{{$switchs->tombo}}</td>
            <td>{{$switchs->n_s }}</td>
            <td>{{$switchs->marca }}</td>
            <td>{{$switchs->modelo }}</td>
            <td>{{$switchs->patrimonio }}</td>
            <td>{{$switchs->unidade_setor}}</td>


        </tr>
     @endforeach
    </tbody>
</table>

@endsection
