@extends('appp')

@section('content')

<div class="container">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr class="ui-state-default">
    <th scope="col">id</th>
      <th scope="col">source_name</th>
      <th scope="col">leads_id</th>
    </tr>

  <tbody>
  @foreach ($leadsources as $leadsources)
    <tr class="table-danger">
      <th scope="row">{{ $leadsources->id }}</th>
      <td>{{ $leadsources->source_name }}</td>
      <td>{{ $leadsources->leads_id  }}</td>
     
      <td><a href ="leadsource/{{ $leadsources->id }}/edit">edit</a></td>
      <td>  <form method="post" action="leadsource/{{ $leadsources->id}}/delete">
     {{csrf_field() }}
     {{ method_field('DELETE') }}
        <input type="submit" value = "delete">
    </form> </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    <br>
    <b><a href ="/leadsource/create" class="btn btn-outline-danger" > new leadsource</a></b>   
    <br>
    <a href="\welcome" class="btn btn-outline-danger" role="button">go to the main page</a>
    </div>
    </div>
    @endsection