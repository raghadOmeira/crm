@extends('appp')
@section('content')
@if ($activities!==null)
<div class="container">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr class="ui-state-default">
      <th colspan="10">Your processing activities</th>
    </tr>
    <tr class="ui-state-default">
        <th>id</th>
        <th>name</th>
        <th>type</th>
        <th>status</th>
        <th>&nbsp;</th>
      </tr>
      @if (count($activities))
        @foreach ($activities as $record)
            <td>{{ $record->id }}</td>
            <td>{{ $record->act_name }}</td>
            <td>{{ $record->act_type }}</td>
            <td>{{ $record->status }}</td>
            <td class="text-small"><a href="/activities/{{ $record->id }}">View</a>&nbsp;&nbsp;&nbsp;<a href="/activities/{{ $record->id }}/edit">Edit</a></td>
          </tr>
        @endforeach
      @else
        <tr><td colspan="11"><strong>No records were found!</strong></td>
      @endif
    </table>
  </div>
</div>
@endif
@endsection


