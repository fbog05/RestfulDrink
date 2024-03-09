@section('title', "Ital hozzáadás")
@include('templates.nav')
@extends('templates.master')

@section("content")
  <div class="row mt-5 px-5">
      <div class="col-6 border p-3 shadow rounded">
          <form action="submit-drink" method="POST">
            {{csrf_field()}}
              <div class="mb-3">
                <label for="drink" class="form-label fw-semibold">Ital neve</label>
                <input type="text" class="form-control" id="drink" name="drink">
              </div>
              <div class="mb-3">
                <label for="amount" class="form-label fw-semibold">Ital mennyisége</label>
                <input type="text" class="form-control" id="amount" name="amount">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label fw-semibold">Ital típusa</label>
                <input type="text" class="form-control" id="type" name="type">
              </div>
              <div class="mb-3">
                <label for="package" class="form-label fw-semibold">Ital kiszerelése</label>
                <input type="text" class="form-control" id="package" name="package">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Felvesz</button>
              </div>
          </form>
      </div>
      <div class="col-6">
        <form action="add-type" method="POST" class="border p-3 shadow rounded">
          {{csrf_field()}}
            <div class="mb-3">
              <label for="type" class="form-label fw-semibold">Típus</label>
              <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Felvesz</button>
            </div>
        </form>
        
        <form action="add-package" method="POST" class="border p-3 shadow rounded">
          {{csrf_field()}}
            <div class="mb-3">
              <label for="package" class="form-label fw-semibold">Kiszerelés</label>
              <input type="text" class="form-control" id="package" name="package">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Felvesz</button>
            </div>
        </form>
    </div>
  </div>
@endsection