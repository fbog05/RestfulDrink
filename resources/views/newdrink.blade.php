@section( 'title', "Ital hozzáadás" )
@include( 'templates.nav' )
@extends( 'templates.master' )

@section( "content" )
  <div class="row mt-5">
      <div class="col-4 mx-auto">
          <form action="add-drink" method="POST">
            {{csrf_field()}}
              <div class="mb-3">
                <label for="name" class="form-label">Ital neve</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="mb-3">
                <label for="amount" class="form-label">Ital mennyisége</label>
                <input type="text" class="form-control" id="amount" name="amount">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Ital típusa</label>
                <input type="text" class="form-control" id="type" name="type">
              </div>
              <div class="mb-3">
                <label for="package" class="form-label">Ital kiszerelése</label>
                <input type="text" class="form-control" id="package" name="package">
              </div>
              <button type="submit" class="btn btn-primary">Felvesz</button>
          </form>
      </div>
  </div>
  <div class="row mt-5">
    <div class="col-4 mx-auto">
        <form action="add-type" method="POST">
          {{csrf_field()}}
            <div class="mb-3">
              <label for="name" class="form-label">Típus</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Felvesz</button>
        </form>
    </div>
</div>
<div class="row mt-5">
  <div class="col-4 mx-auto">
      <form action="add-package" method="POST">
        {{csrf_field()}}
          <div class="mb-3">
            <label for="name" class="form-label">Kiszerelés</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <button type="submit" class="btn btn-primary">Felvesz</button>
      </form>
  </div>
</div>
@endsection