@csrf
<div class="card">
    <div class="card-body">


            <input type="hidden" name="equipamento" value="Cpu">


        <div class="form-group">
            <label for="">MAQUINA</label>
            <input type="text" name="nome" class="form-control @error('nome') is-invalid  @enderror " placeholder="Nome da Maquina" value="{{$cpu->nome ?? old('nome')}}">
            @error('nome')
             <div class="invalid-feedback">
                    {{$message}}
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">TOMBO</label>
            <input type="text" name="tombo" class="form-control @error('tombo') is-invalid  @enderror" placeholder="Tombo"  value="{{$cpu->tombo ?? old('tombo')}}">

            @error('tombo')
             <div class="invalid-feedback">
                    {{$message}}
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">NUMERO DE SERIE</label>
            <input type="text" name="n_s" class="form-control @error('n_s') is-invalid  @enderror" placeholder="Numero de Serie"  value="{{$cpu->n_s ?? old('n_s')}}">

            @error('n_s')
             <div class="invalid-feedback">
                    {{$message}}
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">MARCA</label>
            <input type="text" name="marca" class="form-control @error('marca') is-invalid  @enderror" placeholder="MARCA DA MAQUINA"  value="{{$cpu->marca ?? old('marca')}}">
            @error('marca')
            <div class="invalid-feedback">
                   {{$message}}
            </div>
           @enderror
        </div>

        <div class="form-group">
            <label for="">MODELO</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid  @enderror" placeholder="MODELO DA MAQUINA"  value="{{$cpu->modelo ?? old('modelo')}}">
            @error('modelo')
            <div class="invalid-feedback">
                   {{$message}}
            </div>
           @enderror
        </div>

        <div class="form-group">
            <label for="">TIPO DO COMPUTADOR</label>
            <select name="tipo"  class="form-control @error('tipo') is-invalid  @enderror">
                <option value="{{$cpu->tipo ?? old('tipo')}}">{{$cpu->tipo ?? 'Tipo do computador'}}</option>
                <option value="Grafica">GRAFICA</option>
                <option value="Intermediaria">INTERMEDIARIA</option>
                <option value="Basica">BASICA</option>
            </select>
            @error('tipo')
            <div class="invalid-feedback">
                   {{$message}}
            </div>
           @enderror
        </div>

        <div class="form-group">
            <label for="">PATRIMONIO</label>
            <select name="patrimonio"  class="form-control @error('patrimonio') is-invalid  @enderror">
                <option value="{{$cpu->patrimonio ?? old('patrimonio')}}">{{$cpu->patrimonio ?? 'patrimonio'}}</option>
                <option value="PR??PRIO">PR??PRIO</option>
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
