<head>
@extends('appp')
</head>
@section('content')

<h3 class="pageTitle">   </h3>
<div class="container rowHighlight">
  <form id="newcontactForm" method="post" action="{{route  ('contact.store')}}" accept-charset="UTF-8" role="form" class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="action" value="">

<div class="form-group">
  <label class="form-label mt-4">create new account</label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="first_name">
    <label for="floatingInput">first_name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="last_name">
    <label for="floatingInput">last_name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="description">
    <label for="floatingInput">description</label>
  </div> 
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="phone_number">
    <label for="floatingInput">phone_number</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="account_id">
    <label for="floatingInput">account_id</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="leads_id">
    <label for="floatingInput">leads_id</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="email">
    <label for="floatingInput">email</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="title">
    <label for="floatingInput">title</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="department">
    <label for="floatingInput">department</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="call_num">
    <label for="floatingInput">call_num</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="email_num">
    <label for="floatingInput">email_num</label>
  </div>

       <input type="submit">
    </form>
</body>
@endsection









