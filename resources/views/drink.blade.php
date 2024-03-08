@section( "title", "Italok" )
@include( "templates.nav" )
@extends( "templates.master" )

@section( "content" )
<div>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Ital</th>
          <th scope="col">Mennyiség</th>
          <th scope="col">Típus</th>
          <th scope="col">Kiszerelés</th>
        </tr>
      </thead>
      <tbody>

        @foreach ( $drinks as $drink )
        <tr>
          <td>{{$drink->id}}</td>
          <td>{{$drink->drink}}</td>
          <td>{{$drink->amount}}</td>
          <td>{{$drink->type->type}}</td>
          <td>{{$drink->package->package}}</td>
          <td><a href='/modify/{{$drink->id}}'class="btn btn-warning">Módosítás</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
  @endsection