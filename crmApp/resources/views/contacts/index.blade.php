
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
      <th scope="col">department</th>
      <th scope="col">call_num</th>
      <th scope="col">email_num</th>
    </tr>  
  <tbody>
  @foreach ($contacts as $contacts)
    <tr>
      <td>{{ $contacts->first_name }} {{ $contacts->last_name }}</td>
      <td>{{ $contacts->description }}</td>
      <td>{{ $contacts->phone_number  }}</td>
      <td>{{ $contacts->email }}</td>
      <td>{{ $contacts->title }}</td>
      <td>{{ $contacts->department }}</td>
      <td>{{ $contacts->call_num }}</td>
      <td>{{ $contacts->email_num }}</td>
      <td><a href ="contact/{{ $contacts->id }}/edit">edit</a></td>
      <td>  <form method="post" action="contact/{{ $contacts->id}}/delete">
     {{csrf_field() }}
     {{ method_field('DELETE') }}
        <input type="submit" value = "delete">
    </form> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <br>
    <b><a href ="/contact/create" class="btn btn-outline-danger" >new cont</a></b>
    <br>
    <a href="\dashboard" class="btn btn-outline-danger" role="button">go to the main page</a>
    </div>
    </div>
    @endsection