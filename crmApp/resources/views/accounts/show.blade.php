@extends('appp')

@section('content')

<div class="container">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr class="ui-state-default">
<th scope="col">id</th>
      <th scope="col">ac_name</th>
      <th scope="col">ac_type</th>
      <th scope="col">description</th>
      <th scope="col">phone_number</th>
      <th scope="col">website</th>
      <th scope="col">email</th>
      <th scope="col">annual_revenue</th>
      <th scope="col">num_of_employees</th>
    </tr>
  <tbody>
  @foreach ($accounts as $accounts)
    <tr>
      <th scope="row">{{ $accounts->id }}</th>
      <td>{{ $accounts->ac_name }}</td>
      <td>{{ $accounts->ac_type }}</td>
      <td>{{ $accounts->description }}</td>
      <td>{{ $accounts->phone_number  }}</td>
      <td>{{ $accounts->website  }}</td>
      <td>{{ $accounts->email  }}</td>
      <td>{{ $accounts->annual_revenue  }}</td>
      <td>{{ $accounts->num_of_employees  }}</td>
      <td><a href ="account/{{ $accounts->id }}/edit">edit</a></td>
      <td>  <form method="post" action="account/{{ $accounts->id}}/delete">
     {{csrf_field() }}
     {{ method_field('DELETE') }}
        <input type="submit" value = "delete">
    </form> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <br>
    <b><a href ="/account/create" class="btn btn-outline-danger" > new account</a></b>   
    <br>
    <br>
    <br>
    <a href="\welcome" class="btn btn-outline-danger" role="button">go to the main page</a>
    </div>
    </div>
    @endsection