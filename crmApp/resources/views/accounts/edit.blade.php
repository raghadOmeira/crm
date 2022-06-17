
@extends('appp')

@section('content')

<h3 class="pageTitle">   </h3>
<div class="container rowHighlight">
  <form id="editaccountForm" method="post" action="/account/{{$accounts->id}}/update" accept-charset="UTF-8" role="form" class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="_method" type="hidden" value="put">

  <div class="form-group">
<div class="col-sm-6">
<label for="ac_name" class="control-label ui-state-default text-nowrap col-xs-4">ac_name:</label>
    <div class="col-xs-8"><input type="text" id="ac_name" name="ac_name" class="form-control" value="{{ $accounts->ac_name }}" >
    </div>
    </div>
    </div>
   
    <div class="form-group">
<div class="col-sm-6">
<label for="ac_type" class="control-label ui-state-default text-nowrap col-xs-4">ac_type:</label>
    <div class="col-xs-8"><input type="text" id="ac_type" name="ac_type" class="form-control" value="{{ $accounts->ac_type }}">
    </div>
    </div>
    </div>
 
    <div class="form-group">
<div class="col-sm-6">
<label for="description" class="control-label ui-state-default text-nowrap col-xs-4">description:</label>
    <div class="col-xs-8"><input type="text" id="description" name="description" class="form-control" value="{{ $accounts->description }}" >
    </div>
    </div>
    </div>
   
    <div class="form-group">
<div class="col-sm-6">
<label for="phone_number" class="control-label ui-state-default text-nowrap col-xs-4">phone_number:</label>
    <div class="col-xs-8"><input type="text" id="phone_number" name="phone_number" class="form-control"value="{{ $accounts->phone_number }}" >
    </div>
    </div>
    </div>
   
    <div class="form-group">
<div class="col-sm-6">
<label for="website" class="control-label ui-state-default text-nowrap col-xs-4">website:</label>
    <div class="col-xs-8"><input type="text" id="website" name="website" class="form-control" value="{{ $accounts->website }} " >
    </div>
    </div>
    </div>
   
    <div class="form-group">
<div class="col-sm-6">
<label for="email" class="control-label ui-state-default text-nowrap col-xs-4">email:</label>
    <div class="col-xs-8"><input type="text" id="email" name="email" class="form-control" value="{{ $accounts->email }}" >
    </div>
    </div>
    </div>
    
    <div class="form-group">
<div class="col-sm-6">
<label for="annual_revenue" class="control-label ui-state-default text-nowrap col-xs-4">annual_revenue:</label>
    <div class="col-xs-8"><input type="text" id="annual_revenue" name="annual_revenue" class="form-control" value="{{ $accounts->annual_revenue }}">
    </div>
    </div>
    </div>

    <div class="form-group">
<div class="col-sm-6">
<label for="num_of_employees" class="control-label ui-state-default text-nowrap col-xs-4">num_of_employees:</label>
    <div class="col-xs-8"><input type="text" id="num_of_employees" name="num_of_employees" class="form-control" value="{{ $accounts->num_of_employees }}">
    </div>
    </div>
    </div>

    <div class="form-group form-group-sm col-sm-12 text-center">
      <input type="button" value="Save" class="btn btn-primary" onClick="submitFormAction('editaccountForm', 'save')">
      <a href="/account" class="btn btn-primary">Cancel</a>
    </div>
    </div>

  </form>
</div>

@endsection
