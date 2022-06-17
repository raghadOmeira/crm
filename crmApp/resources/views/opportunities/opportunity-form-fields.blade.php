<div class="form-group">
  <div class="col-sm-6">
    <label for="op_name" class="control-label ui-state-default text-nowrap col-xs-4">op_name:</label>
    <div class="col-xs-8"><input type="text" id="op_name" name="op_name" class="form-control" value="{{ $opportunities->op_name }}"></div>
  </div>
<div class="form-group">
  <div class="col-sm-6">
    <label for="amount" class="control-label ui-state-default text-nowrap col-xs-4">Amount:</label>
    <div class="col-xs-8"><input type="text" id="amount" name="amount" class="form-control" value="{{ $opportunities->amount}}"></div>
  </div>

  <div class="col-sm-6">
    <label for="expected_revenue" class="control-label ui-state-default text-nowrap col-xs-4">Expected Revenue:</label>
    <div class="col-xs-8"><input type="text" id="expected_revenue" name="expected_revenue" class="form-control" value="{{ $opportunities->expected_revenue }}"></div>
  </div>
</div>
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

<div class="form-group">
  <div class="col-sm-12">
    <label for="competitors" class="control-label ui-state-default text-nowrap col-xs-4 col-sm-2">Competitors:</label>
    <div class="col-xs-8 col-sm-10"><input type="text" id="competitors" name="competitors" class="form-control" value="{{ $opportunities->competitors }}"></div>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-6">
    <label for="description" class="control-label ui-state-default text-nowrap col-xs-4">Description:</label>
    <div class="col-xs-8"><textarea id="description" name="description" class="form-control">{{ $opportunities->description }}</textarea></div>
  </div>

  <div class="col-sm-6">
    <label for="contacts_id" class="control-label ui-state-default text-nowrap col-xs-4">Contact:</label>
    <div class="col-xs-8">
      <div id="contact_name" style="margin-top:5px"><strong>{{ \App\AppHelper::valueFromDB('contacts', $opportunities->contact_id) }}</strong></div>
      <input type="hidden" id="contacts_id" name="contacts_id" class="form-control" value="{{ $opportunities->contacts_id }}">
    </div>
  </div>

</div>

</div>

