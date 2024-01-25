<h1 class="fw-bold text-body-emphasis badge bg-info-subtle text-info-emphasis rounded-pill">Cadastro de Portifólio</h1>
<form action="{{route('recruiter.store')}}" method="POST">
    @csrf

    @if($errors->any())
    <div class="text-danger">
    {{ implode(',<br>', $errors->all()) }}
    </div>
    @endif

<div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email"  class="form-control-plaintext" name="email" required>
    </div>
    @if($errors->has('email'))
    <div class="invalid-feedback">{{ implode(',<br>', $errors->all()) }}</div>
    @endif

  </div>
  <div class="mb-3 row">
    <label for="namerecruiter" class="col-sm-2 col-form-label">Nome recrutador:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="namerecruiter" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="surname" class="col-sm-2 col-form-label">Sobrenome:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="surname">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone">
    </div>
  </div>
  <div class="mb-3 row">
    <input type="submit" value="Cadastrar" class="btn btn-primary col-2">
  </div>
</form>
