<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<form method="post" action="/contact/{{$contacts->id}}/update">
@csrf
        {{ method_field('PUT') }}
        <!-- Equivalent to... -->
<div class="form-group">
  <label class="form-label mt-4">editting exist contact</label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="first_name">
    <label for="floatingInput">old first name --  {{$contacts->first_name}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="last_name">
    <label for="floatingInput">old last name -- {{$contacts->last_name}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="desription">
    <label for="floatingInput">old desription -- {{$contacts->desription}}</label>
  </div> 
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="phone_number">
    <label for="floatingInput">old phone_number -- {{$contacts->phone_number}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="account_id">
    <label for="floatingInput">old account id -- {{$contacts->account_id}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="leads_id">
    <label for="floatingInput">old leads id -- {{$contacts->leads_id}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="email">
    <label for="floatingInput">old email -- {{$contacts->email}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="title">
    <label for="floatingInput">old title -- {{$contacts->title}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="call_num">
    <label for="floatingInput">old call_num -- {{$contacts->call_num}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="email_num">
    <label for="floatingInput">old email_num -- {{$contacts->email_num}}</label>
  </div>

       <input type="submit">
    </form>
</body>
</html>
