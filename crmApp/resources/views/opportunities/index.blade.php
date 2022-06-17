@extends('appp')

@section('content')
<div class="container">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr class="ui-state-default">
      <th scope="col">op_name</th>
      <th scope="col">amount</th>
      <th scope="col">close_date</th>
      <th scope="col">expected_revenue</th>
      <th scope="col">probability</th>
      <th scope="col">competitors</th>
      <th scope="col">description</th>
      <th scope="col">contacts_id</th>
    </tr>
  <tbody>
  @foreach ($opportunities as $opportunities)
    <tr >
      <td>{{ $opportunities->op_name }}</td>
      <td>{{ $opportunities->amount }}</td>
      <td>{{ $opportunities->close_date }}</td>
      <td>{{ $opportunities->expected_revenue}}</td>
       <td>{{ $opportunities->probability }}%</td>
      <td>{{ $opportunities->competitors }}</td>
      <td>{{ $opportunities->description}}</td>
      <td>{{ $opportunities->contacts_id}}</td>
      <td><a href ="opportunities/{{ $opportunities->id }}/edit">edit</a></td>
      <td>  <form method="post" action="opportunities/{{ $opportunities->id}}/delete">
     {{csrf_field() }}
     {{ method_field('DELETE') }}
        <input type="submit" value = "delete">
    </form> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <b><a href ="/opportunities/create" class="btn btn-outline-danger" > new opportunities</a></b>   
    <a href="\dashboard" class="btn btn-outline-danger" role="button">go to the main page</a>
    </div>
    </div>
    @endsection
