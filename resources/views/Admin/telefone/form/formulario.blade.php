@csrf
<div class="card">
    <div class="card-body">
        <input type="hidden" name="equipamento" value="Telefone">

        <div class="form-group">
            <label for="">TIPO DO TELEFONE</label>
            <select name="tipo" class="form-control @error('tipo') is-invalid  @enderror" >
                <option value="{{$telefone->tipo ?? old('tipo')}}">{{$telefone->tipo ?? 'tipo'}}</option>
                <option value="IP TIPO 2">IP TIPO 2</option>
                <option value="ANALOGICO TIPO 1">ANALOGICO TIPO 1</option>
                <option value="ANALOGICO TIPO 2">ANALOGICO TIPO 2</option>
            </select>
            @error('tipo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">TOMBO</label>
            <input type="text" name="tombo" class="form-control  @error('tombo') is-invalid  @enderror" placeholder="Tombo"  value="{{$telefone->tombo ?? old('tombo')}}">
            @error('tombo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">NUMERO DE SERIE</label>
            <input type="text" name="n_s" class="form-control  @error('n_s') is-invalid  @enderror" placeholder="Numero de Serie"  value="{{$telefone->n_s ?? old('n_s')}}">
            @error('n_s')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">MARCA</label>
            <input type="text" name="marca" class="form-control @error('marca') is-invalid  @enderror" placeholder="Marca do Telefone"  value="{{$telefone->marca ?? old('marca')}}">
            @error('marca')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">MODELO</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid  @enderror" placeholder="Modelo do Telefone"  value="{{$telefone->modelo ?? old('modelo')}}">
            @error('modelo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">PATRIMONIO</label>
            <select name="patrimonio"  class="form-control @error('patrimonio') is-invalid  @enderror">
                <option value="{{$telefone->patrimonio ?? old('patrimonio')}}">{{$telefone->patrimonio ?? 'patrimonio'}}</option>
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

        @include('Admin.form_unidade_setor.index')

    </div>
</div>
