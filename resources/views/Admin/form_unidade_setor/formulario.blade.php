  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adiciona uma Unidade\Setor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <label for="">UNIDADE</label>
            <input type="text" name="unidade" class="form-control @error('unidade') is-invalid  @enderror" placeholder="unidade"  value="{{old('unidade')}}">

            <label for="">SETOR</label>
    <input type="text" name="setor" class="form-control @error('setor') is-invalid  @enderror" placeholder="Setor"  value="{{old('setor')}}">



          </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
          <button type="submit" class="btn btn-success">Salva</button>
        </div>
      </div>
    </div>
  </div>
