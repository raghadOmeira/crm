@extends('appp')

@section('content')

<div class="container">

<form method="post" action="{{route ('leadsource.store')}}">
        @csrf
        <!-- Equivalent to... -->

<div class="form-group">
  <label class="form-label mt-4">create new leadsource</label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="source_name">
    <label for="floatingInput">source_name</label>
  </div>
  
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="leads_id">
    <label for="floatingInput">leads_id</label>
  </div>
       <input type="submit">
    </form>
</div>
@endsection







