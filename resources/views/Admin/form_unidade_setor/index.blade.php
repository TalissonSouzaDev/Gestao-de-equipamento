
  {{-- fim do modal--}}

  <div class="form-group">
    <label for=""> UNIDADE\SETOR</label> <!-- Button do para chama o modal -->
    <a class="btn btn-info btn-xs"href="{{route('unidadesetor.create')}}" ><i class="fas fa-plus"></i></a>
    <select name="unidade_setor" class="form-control" >
        @foreach ($items as $item)

        <option value="{{$item->unidade}}\ {{$item->setor}}">{{$item->unidade}}\{{$item->setor}} </option>

        @endforeach

    </select>



</div>

