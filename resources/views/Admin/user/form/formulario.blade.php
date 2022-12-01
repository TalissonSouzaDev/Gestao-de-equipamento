@csrf
<div class="card">
    <div class="card-body">

        <div class="form-group">
            <label for="">NOME</label>
            <input type="text" name="name" class="form-control"    value="{{$user->name ?? old('name')}}">
        </div>


        <div class="form-group">
            <label for="">USUARIO</label>
            <input type="text" name="email" class="form-control "  value="{{$user->email ?? old('email')}}">

        </div>

        <div class="form-group">
            <label for="">SENHA</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">RAMAL</label>
            <input type="text" name="ramal" class="form-control "  value="{{$user->ramal ?? old('ramal')}}">

        </div>



        @include('Admin.form_unidade_setor.index')



    </div>
</div>
