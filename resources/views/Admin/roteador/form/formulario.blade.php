@csrf
<div class="card">
    <div class="card-body">
        <input type="hidden" name="equipamento" value="Roteador">
        <div class="form-group">
            <label for="">IP</label>
            <input type="text" name="ip" class="form-control " placeholder="IP"  value="{{$roteador->ip ?? old('ip')}}">

        </div>
        <div class="form-group">
            <label for="">PATRIMONIO</label>
            <select name="patrimonio"  class="form-control @error('patrimonio') is-invalid  @enderror">
                <option value="{{$roteador->patrimonio ?? old('patrimonio')}}">{{$roteador->patrimonio ?? 'patrimonio'}}</option>
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
            <label for="">TOMBO</label>
            <input type="text" name="tombo" class="form-control  @error('tombo') is-invalid  @enderror" placeholder="Tombo"  value="{{$roteador->tombo ?? old('tombo')}}">
            @error('tombo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">NUMERO DE SERIE</label>
            <input type="text" name="n_s" class="form-control  @error('n_s') is-invalid  @enderror" placeholder="Numero de Serie"  value="{{$roteador->n_s ?? old('n_s')}}">
            @error('n_s')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">MARCA</label>
            <input type="text" name="marca" class="form-control @error('marca') is-invalid  @enderror" placeholder="Marca do Roteador"  value="{{$roteador->marca ?? old('marca')}}">
            @error('marca')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">MODELO</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid  @enderror" placeholder="Modelo do Roteador"  value="{{$roteador->modelo ?? old('modelo')}}">
            @error('modelo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        @include('Admin.form_unidade_setor.index')



    </div>
</div>
