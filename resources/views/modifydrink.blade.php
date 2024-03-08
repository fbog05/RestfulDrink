@section( 'title', "Ital módosítás" )
@include( 'templates.nav' )
@extends( 'templates.master' )

@section( "content" )
  <div class="row mt-5 mx-auto">
      <div class="col-4">
          <form action="modify-drink" method="PUT">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$drink->id}}">
              <div class="mb-3">
                <label for="drink" class="form-label">Ital neve</label>
                <input type="text" class="form-control" id="drink" name="drink" value="{{$drink->drink}}">
              </div>
              <div class="mb-3">
                <label for="amount" class="form-label">Ital mennyisége</label>
                <input type="text" class="form-control" id="amount" name="amount" value="{{$drink->amount}}">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Ital típusa</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$drink->type->type}}">
              </div>
              <div class="mb-3">
                <label for="package" class="form-label">Ital kiszerelése</label>
                <input type="text" class="form-control" id="package" name="package" value="{{$drink->package->package}}">
              </div>
              <button type="submit" class="btn btn-warning">Módosít</button>
          </form>
      </div>
  </div>
@endsection