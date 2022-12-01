@csrf
<div class="card">
    <div class="card-body">

        <input type="hidden" name="equipamento" value="Impressora">
        <div class="form-group">
            <label for="">IP</label>
            <input type="text" name="ip" class="form-control " placeholder="IP"  value="{{$impressora->ip ?? old('ip')}}">

        </div>

        <div class="form-group">
            <label for="">PATRIMONIO</label>
            <select name="patrimonio"  class="form-control @error('patrimonio') is-invalid  @enderror">
                <option value="{{$impressora->patrimonio ?? old('patrimonio')}}">{{$impressora->patrimonio ?? 'patrimonio'}}</option>
                <option value="PRÓPRIO">PRÓPRIO</option>
                <option value="TERCEIRO-ALUGADA">TERCEIRO-ALUGADA</option>
                <option value="TERCEIRO-EMPRESTADA">TERCEIRO-EMPRESTADA</option>
            </select>
            @error('patrimonio')
            <div class="invalid-feedback">
                   {{$message}}
            </div>
           @enderror
        </div>

        <div class="form-group">
            <label for="">SETOR</label>
            <input type="text" name="setor" class="form-control @error('setor') is-invalid  @enderror" placeholder="Setor"  value="{{$impressora->setor ?? old('setor')}}">
            @error('setor')
            <div class="invalid-feedback">
                   {{$message}}
            </div>
           @enderror
        </div>


        <div class="form-group">
            <label for="">TOMBO</label>
            <input type="text" name="tombo" class="form-control  @error('tombo') is-invalid  @enderror" placeholder="Tombo"  value="{{$impressora->tombo ?? old('tombo')}}">
            @error('tombo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">NUMERO DE SERIE</label>
            <input type="text" name="n_s" class="form-control  @error('n_s') is-invalid  @enderror" placeholder="Numero de Serie"  value="{{$impressora->n_s ?? old('n_s')}}">
            @error('n_s')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">MARCA</label>
            <input type="text" name="marca" class="form-control @error('marca') is-invalid  @enderror" placeholder="Marca da impressora"  value="{{$impressora->marca ?? old('marca')}}">
            @error('marca')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">MODELO</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid  @enderror" placeholder="Modelo da impressora"  value="{{$impressora->modelo ?? old('modelo')}}">
            @error('modelo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>


        @include('Admin.form_unidade_setor.index')

    </div>
</div>
