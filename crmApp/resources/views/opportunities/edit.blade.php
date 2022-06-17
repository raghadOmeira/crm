@extends('appp')

@section('content')

<h3 class="pageTitle">Edit Opportunity</h3>


<div class="container rowHighlight">
  <form id="editOpportunityForm" method="post" action="/opportunities/{{$opportunities->id}}/update" accept-charset="UTF-8" role="form" class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="_method" type="hidden" value="put">


    <div class="form-group">
  <div class="col-sm-6">
    <label for="op_name" class="control-label ui-state-default text-nowrap col-xs-4">op_name:</label>
    <div class="col-xs-8"><input type="text" id="op_name" name="op_name" class="form-control" value="{{ $opportunities->op_name }}"></div>
  </div>
  </div>

<div class="form-group">
  <div class="col-sm-6">
    <label for="amount" class="control-label ui-state-default text-nowrap col-xs-4">Amount:</label>
    <div class="col-xs-8"><input type="text" id="amount" name="amount" class="form-control" value="{{ $opportunities->amount}}"></div>
    </div>
    </div>

    <div class="form-group">
  <div class="col-sm-6">
    <label for="expected_revenue" class="control-label ui-state-default text-nowrap col-xs-4">Expected Revenue:</label>
    <div class="col-xs-8"><input type="text" id="expected_revenue" name="expected_revenue" class="form-control" value="{{ $opportunities->expected_revenue }}"></div>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-6">
    <label for="probability" class="control-label ui-state-default text-nowrap col-xs-4">Probability:</label>
    <div class="col-xs-8"><input type="text" id="probability" name="probability" class="form-control" value="{{ $opportunities->probability }}"></div>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-6">
    <label for="close_date" class="control-label ui-state-default text-nowrap col-xs-4">Close Date:</label>
    <div class="col-xs-8"><input type="text" id="close_date" name="close_date" class="form-control" value="{{ $opportunities->close_date }}"></div>
    </div>
    </div>

<div class="form-group">
  <div class="col-sm-6">
    <label for="competitors" class="control-label ui-state-default text-nowrap col-xs-4 col-sm-2">Competitors:</label>
    <div class="col-xs-8 col-sm-10"><input type="text" id="competitors" name="competitors" class="form-control" value="{{ $opportunities->competitors }}"></div>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-6">
    <label for="description" class="control-label ui-state-default text-nowrap col-xs-4">Description:</label>
    <div class="col-xs-8"><textarea id="description" name="description" class="form-control">{{ $opportunities->description }}</textarea></div>
    </div>
    </div>

  <div class="form-group">
  <div class="col-sm-6">
    <label for="contacts_id" class="control-label ui-state-default text-nowrap col-xs-4">contacts_id:</label>
    <div class="col-xs-8"><textarea id="contacts_id" name="contacts_id" class="form-control">{{ $opportunities->contacts_id }}</textarea></div>
  </div>
</div>

    <hr class="soften" />
      <div class="form-group form-group-sm col-sm-12 text-center">
      <input type="submit" value="Save" class="btn btn-primary">
      <a href="/opportunities/{{ $opportunities->id }}" class="btn btn-primary">Cancel</a>
    </div>

  </form>
</div>

@endsection