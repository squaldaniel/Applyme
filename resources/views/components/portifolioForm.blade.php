<h1 class="fw-bold text-body-emphasis badge bg-info-subtle text-info-emphasis rounded-pill">Cadastro de Portifólio</h1>
<form action="{{route('portifolio.store')}}" method="POST">
    @csrf
    @if($errors->any())
    <div class="text-danger">
    {{ implode(',<br>', $errors->all()) }}
    </div>
    @endif

<div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Nome Projeto</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control-plaintext" name="projectname" required>
    </div>
    @if($errors->has('email'))
    <div class="invalid-feedback">{{ implode(',<br>', $errors->all()) }}</div>
    @endif

  </div>
  <div class="mb-3 row">
    <label for="namerecruiter" class="col-sm-2 col-form-label">Descrição:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="projectdescricion" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="surname" class="col-sm-2 col-form-label">image:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="projectphoto">
    </div>
  </div>
  <div class="mb-3 row">
    <input type="submit" value="Cadastrar" class="btn btn-primary col-2">
  </div>
</form>
