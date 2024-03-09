@section( "title", "Italok" )
@include( "templates.nav" )
@extends( "templates.master" )

@section( "content" )
<div>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="text-center">Ital</th>
          <th scope="col" class="text-center">Mennyiség</th>
          <th scope="col" class="text-center">Típus</th>
          <th scope="col" class="text-center">Kiszerelés</th>
        </tr>
      </thead>
      <tbody>

        @foreach ( $drinks as $drink )
        <tr>
          <td class="text-center">{{$drink->drink}}</td>
          <td class="text-center">{{$drink->amount}}</td>
          <td class="text-center">{{$drink->type->type}}</td>
          <td class="text-center">{{$drink->package->package}}</td>
          <td class="text-center"><a href='/modify/{{$drink->id}}'class="btn btn-warning">Módosítás</a></td>
          <td class="text-center">
            <form action="/delete-drink" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $drink->id }}">
                <button type="submit" class="btn btn-danger">Törlés</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
  @endsection