@csrf
<div class="card">
    <div class="card-body">
        <input type="hidden" name="equipamento" value="Notebook">
        <div class="form-group">
            <label for="">MAQUINA</label>
            <input type="text" name="nome" class="form-control @error('nome') is-invalid  @enderror " placeholder="Nome Do Notebook" value="{{$notebook->nome ?? old('nome')}}">
            @error('nome')
             <div class="invalid-feedback">
                    {{$message}}
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">TOMBO</label>
            <input type="text" name="tombo" class="form-control @error('tombo') is-invalid  @enderror" placeholder="Tombo"  value="{{$notebook->tombo ?? old('tombo')}}">

            @error('tombo')
             <div class="invalid-feedback">
                    {{$message}}
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">NUMERO DE SERIE</label>
            <input type="text" name="n_s" class="form-control @error('n_s') is-invalid  @enderror" placeholder="Numero de Serie"  value="{{$notebook->n_s ?? old('n_s')}}">

            @error('n_s')
             <div class="invalid-feedback">
                    {{$message}}
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">MARCA</label>
            <input type="text" name="marca" class="form-control @error('marca') is-invalid  @enderror" placeholder="Marca do Notebook"  value="{{$notebook->marca ?? old('marca')}}">
            @error('marca')
            <div class="invalid-feedback">
                   {{$message}}
            </div>
           @enderror
        </div>

        <div class="form-group">
            <label for="">MODELO</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid  @enderror" placeholder="Modelo do Notebook"  value="{{$notebook->modelo ?? old('modelo')}}">
            @error('modelo')
            <div class="invalid-feedback">
                   {{$message}}
            </div>
           @enderror
        </div>


        <div class="form-group">
            <label for="">PATRIMONIO</label>
            <select name="patrimonio"  class="form-control @error('patrimonio') is-invalid  @enderror">
                <option value="{{$notebook->patrimonio ?? old('patrimonio')}}">{{$notebook->patrimonio ?? 'patrimonio'}}</option>
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
