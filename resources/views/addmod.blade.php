@section( 'title', "Ital hozzáadás" )
@include( 'templates.nav' )
@extends( 'templates.header' )
<div class="row">
    <div class="col-4 mx-auto">
        <form>
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
            <button type="submit" class="btn btn-warning">Módosít</button>
        </form>
    </div>
</div>