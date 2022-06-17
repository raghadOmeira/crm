@extends('appp')

@section('content')

<div class="container">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr class="ui-state-default">
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">phone_number</th>
      <th scope="col">email</th>
      <th scope="col">title</th>
      <th scope="col">company</th>
       <th scope="col">website</th>
      <th scope="col">annual_revenue</th>
      <th scope="col">email_num</th>
    </tr>
  <tbody>
  @foreach ($leads as $leads)
    <tr>
      <td>{{ $leads->first_name }} {{ $leads->last_name }}</td>
      <td>{{ $leads->description }}</td>
      <td>{{ $leads->phone_number  }}</td>
      <td>{{ $leads->email }}</td>
      <td>{{ $leads->title }}</td>
      <td>{{ $leads->company }}</td>
      <td>{{ $leads->website  }}</td>
      <td>{{ $leads->annual_revenue }}</td>
      <td>{{ $leads->email_num  }}</td>
      <td><a href ="lead/{{ $leads->id }}/edit">edit</a></td>
      <td>  <form method="post" action="lead/{{ $leads->id}}/delete">
     {{csrf_field() }}
     {{ method_field('DELETE') }}
        <input type="submit" value = "delete">
    </form> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <br>
    <b><a href ="/lead/create" class="btn btn-outline-danger" > new leads</a></b>   
    <br>
    <br>
    <a href="\dashboard" class="btn btn-outline-danger" role="button">go to the main page</a>
    </div>
    </div>
    @endsection