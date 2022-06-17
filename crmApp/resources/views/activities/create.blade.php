<head>
@extends('appp')
</head>
@section('content')

<h3 class="pageTitle">   </h3>
<div class="container rowHighlight">
  <form id="newacticityForm" method="post" action="{{route  ('activities.store')}}" accept-charset="UTF-8" role="form" class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="action" value="">
  

<div class="form-group">
  <label class="form-label mt-4">create new activities</label>
  
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="act_name">
    <label for="floatingInput">act_name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="act_type">
    <label for="floatingInput">act_type</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="description">
    <label for="floatingInput">description</label>
  </div> 
  
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="status">
    <label for="floatingInput">status</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="priority">
    <label for="floatingInput">priority</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="account_id">
    <label for="floatingInput">account_id</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="contacts_id">
    <label for="floatingInput">contacts_id</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="leads_id">
    <label for="floatingInput">leads_id</label>
  </div>
  <br>
       <input type="submit">
    </form>
    @endsection









