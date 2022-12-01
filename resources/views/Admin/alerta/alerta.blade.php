@if (session('sucesso'))
<div class="alert alert-success alert-dismissible">
   <p>Equipamento  <strong>{{session('sucesso')}}</strong> Com sucesso</p>
  </div>
@endif
