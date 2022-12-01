@csrf
<div class="card">
    <div class="card-body">

        <div class="form-group">
            <label for="">NOME</label>
            <input type="text" name="name" class="form-control @error('nome') is-invalid @enderror"  placeholder="nome do usuario"  value="{{$usuario->nome ?? old('nome')}}">
           @error('nome')
          <div class="invalid-feedback">
              {{$message}}
          </div>
           @enderror
        </div>


        <div class="form-group">
            <label for="">EMAIL</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email de usuario"  value="{{$usuario->email ?? old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
             @enderror
        </div>

        <div class="form-group">
            <label for="">RAMAL</label>
            <input type="text" name="ramal" class="form-control @error('ramal') is-invalid @enderror" placeholder="Ramal opcional"  value="{{$usuario->ramal ?? old('ramal')}}">
            @error('ramal')
            <div class="invalid-feedback">
                {{$message}}
            </div>
             @enderror
        </div>

        @include('Admin.form_unidade_setor.index')


    </div>
</div>
