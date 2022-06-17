
@extends('appp')

@section('content')

<div class="container">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr>activities </tr>
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
    @foreach ($activities as $activity)
  <tr>
    <th scope="row">{{ $activity->act_name }}</th>
    <th scope="row">{{ $activity->act_type }}</th>
    <th scope="row">{{ $activity->description }}</th>
    <th scope="row">{{ $activity->status}}</th>
    <th scope="row">{{ $activity->priority }}</th>
    <th scope="row">{{ $activity->account_id }}</th>
    <th scope="row">{{ $activity->contacts_id }}</th>
    <th scope="row">{{ $activity->leads_id }}</th>
    </tr>
    @endforeach 
    </tbody>
</table>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr>accounts </tr>
    <tr class="ui-state-default">
    <th scope="col">id</th>
      <th scope="col">ac_name</th>
      <th scope="col">ac_type</th>
      <th scope="col">description</th>
      <th scope="col">phone_number</th>
      <th scope="col">website</th>
      <th scope="col">email</th>
      <th scope="col">annual_revenue</th>
      <th scope="col">num_of_employees</th>
    </tr>
  <tbody>

  @foreach ($accounts as $account)
<tr>
  <th scope="row">{{ $account->id }}</th>
  <th scope="row">{{ $account->ac_name }}</th>
  <th scope="row">{{ $account->ac_type }}</th>
  <th scope="row">{{ $account->description }}</th>
    <th scope="row">{{ $account->phone_number }}</th>
    <th scope="row">{{ $account->website }}</th>
    <th scope="row">{{ $account->email }}</th>
    <th scope="row">an rev {{ $account->annual_revenue }}</th>
    <th scope="row">an rev {{ $account->num_of_employees }}</th>
    </tr>
    @endforeach
    </tbody>
    </table>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr>contacts </tr>
    <tr class="ui-state-default">
    <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">phone_number</th>
      <th scope="col">email</th>
      <th scope="col">title</th>
      <th scope="col">department</th>
      <th scope="col">call_num</th>
      <th scope="col">email_num</th>
    </tr>  
  <tbody>   
    @foreach ($contacts as $contact)
  <tr class="table-info">
    <th scope="row">{{ $contact->first_name }} {{ $contact->last_name }}</th>
    <th scope="row">{{ $contact->description }}</th>
    <th scope="row">{{ $contact->phone_number }}</th> 
    <th scope="row">{{ $contact->email }}</th>
    <th scope="row">{{ $contact->title }}</th>
    <th scope="row">{{ $contact->department }}</th>
    <th scope="row">call:{{ $contact->call_num }} </th>
    <th scope="row"> email:{{ $contact->email_num }} </th>
    </tr>
    @endforeach 
    </tbody>
    </table>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr>leads </tr>
    <tr class="ui-state-default">
    <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">phone_number</th>
      <th scope="col">email</th>
      <th scope="col">title</th>
      <th scope="col">company</th>
       <th scope="col">website</th>
      <th scope="col">annual_revenue</th>
      <th scope="col">email_num</th>
    </tr>
  <tbody>
    @foreach ($leads as $lead)
  <tr class="table-dark">
    <th scope="row">{{ $lead->first_name }} {{ $lead->last_name }}</th>
    <th scope="row">{{ $lead->description }}</th>
    <th scope="row">{{ $lead->phone_number }}</th>
    <th scope="row">{{ $lead->email }}</th>
    <th scope="row">{{ $lead->title }}</th>
    <th scope="row">{{ $lead->company }}</th>  
    <th scope="row">{{ $lead->website }}</th>  
    <th scope="row">{{ $lead->annual_revenue }}</th>
    <th scope="row">{{ $lead->email_num }}</th>
    </tr>
    @endforeach  
    </tbody>
    </table>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-condensed searchResults">
    <tr>opportunities </tr>
    <tr class="ui-state-default">
    <th scope="col">op_name</th>
      <th scope="col">amount</th>
      <th scope="col">close_date</th>
      <th scope="col">expected_revenue</th>
      <th scope="col">probability</th>
      <th scope="col">competitors</th>
      <th scope="col">description</th>
      <th scope="col">contacts_id</th>
    </tr>
  <tbody>
    @foreach ($opportunities as $opportunity)
  <tr class="table-danger">
    <th scope="row">{{ $opportunity->op_name }}</th>
    <th scope="row">{{ $opportunity->amount }}</th>
    <th scope="row">{{ $opportunity->close_date }}</th>
    <th scope="row">{{ $opportunity->expected_revenue }}</th>
    <th scope="row">{{ $opportunity->probability }}%</th>
    <th scope="row">{{ $opportunity->competitors }}</th>
    <th scope="row">{{ $opportunity->description }} </th>
    <th scope="row">{{ $opportunity->contacts_id }} </th>
    </tr>
    @endforeach  
    </tbody>
    </table>
@endsection