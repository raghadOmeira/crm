
@extends('appp')

@section('content')

<div class="container">
<form method="post" action="/leadsource/{{$leadsources->id}}/update">
@csrf
        {{ method_field('PUT') }}
        <!-- Equivalent to... -->
<div class="form-group">
  <label class="form-label mt-4">editting exist leadsource</label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="source_name">
    <label for="floatingInput">old leadsource name --  {{$leadsources->source_name}}</label>
  </div>
  
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="leads_id">
    <label for="floatingInput">old lead id -- {{$leadsources->leads_id}}</label>
  </div>
       <input type="submit">
    </form>
</div>
@endsection