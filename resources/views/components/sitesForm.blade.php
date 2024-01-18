<h1 class="fw-bold text-body-emphasis badge bg-info-subtle text-info-emphasis rounded-pill">Cadastro de Sites</h1>
<form action="{{route('sites.store')}}" method="POST">
    @csrf
<div class="mb-3 row">
    <label for="sitename" class="col-sm-2 col-form-label">site</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control-plaintext" name="sitename" required>
    </div>
    @if($errors->has('email'))
    <div class="invalid-feedback">{{ implode(',<br>', $errors->all()) }}</div>
    @endif

  </div>
  <div class="mb-3 row">
    <label for="namerecruiter" class="col-sm-2 col-form-label">Link:</label>
    <div class="col-sm-10">
      <input type="sitelink" class="form-control" name="sitelink" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="descriptions" class="col-sm-2 col-form-label">Descrição:</label>
    <div class="col-sm-10">
      <input type="descriptions" class="form-control" name="descriptions">
    </div>
  </div>
  <div class="mb-3 row">
    <input type="submit" value="Cadastrar" class="btn btn-primary col-2">
  </div>
</form>
