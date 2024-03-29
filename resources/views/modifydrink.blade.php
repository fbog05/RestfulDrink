@section('title', "Ital módosítás")
@include('templates.nav')
@extends('templates.master')

@section("content")
  <div class="row mt-5">
      <div class="col-4 mx-auto mt-5 border p-3 shadow rounded">
          <form action="modify-drink" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$drink->id}}">
              <div class="mb-3">
                <label for="drink" class="form-label fw-semibold">Ital neve</label>
                <input type="text" class="form-control" id="drink" name="drink" value="{{$drink->drink}}">
              </div>
              <div class="mb-3">
                <label for="amount" class="form-label fw-semibold">Ital mennyisége</label>
                <input type="text" class="form-control" id="amount" name="amount" value="{{$drink->amount}}">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label fw-semibold">Ital típusa</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$drink->type->type}}">
              </div>
              <div class="mb-3">
                <label for="package" class="form-label fw-semibold">Ital kiszerelése</label>
                <input type="text" class="form-control" id="package" name="package" value="{{$drink->package->package}}">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-warning">Módosít</button>
              </div>
          </form>
      </div>
  </div>
@endsection