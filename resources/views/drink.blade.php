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
        <tr class="table-active">
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry the Bird</td>
          <td></td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
</div>
  @endsection