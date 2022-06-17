@extends('appp')

@section('content')

<div class="container">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr class="ui-state-default">
      <th scope="col">act_name</th>
      <th scope="col">act_type</th>
      <th scope="col">description</th>
      <th scope="col">status</th>
      <th scope="col">priority</th>
      <th scope="col">account_id</th>
      <th scope="col">contacts_id</th>
      <th scope="col">leads_id</th>
    </tr>
  <tbody>
  @foreach ($activities as $activities)
    <tr>
      <td>{{ $activities->act_name }}</td>
      <td>{{ $activities->act_type }}</td>
      <td>{{ $activities->description }}</td>
      <td>{{ $activities->status }}</td>
      <td>{{ $activities->priority }}</td>
      <td>{{ $activities->account_id  }}</td>
      <td>{{ $activities->contacts_id  }}</td>
      <td>{{ $activities->leads_id  }}</td>
      <td><a href ="activities/{{ $activities->id }}/edit">edit</a></td>
      <td>  <form method="post" action="activities/{{ $activities->id}}/delete">
     {{csrf_field() }}
     {{ method_field('DELETE') }}
        <input type="submit" value = "delete">
    </form> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <br>
    <b><a href ="/activities/create" class="btn btn-outline-danger" > new activities</a></b>   
    <br>
    <br>
    <a href="\dashboard" class="btn btn-outline-danger" role="button">go to the main page</a>
    </div>
    </div>
    @endsection