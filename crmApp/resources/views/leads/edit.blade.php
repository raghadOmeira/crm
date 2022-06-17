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

<form method="post" action="/lead/{{$leads->id}}/update">
@csrf
        {{ method_field('PUT') }}
        <!-- Equivalent to... -->
<div class="form-group">
  <label class="form-label mt-4">editting exist leads</label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="first_name">
    <label for="floatingInput">old leads name --  {{$leads->first_name}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="last_name">
    <label for="floatingInput">old last name -- {{$leads->last_name}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="description">
    <label for="floatingInput">old description -- {{$leads->description}}</label>
  </div> 
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="phone_number">
    <label for="floatingInput">old phone_number -- {{$leads->phone_number}}</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="title">
    <label for="floatingInput">old title --  {{$leads->title}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="email">
    <label for="floatingInput">old email -- {{$leads->email}}</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="company">
    <label for="floatingInput">old company --  {{$leads->company}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="website">
    <label for="floatingInput">old website -- {{$leads->website}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="annual_revenue">
    <label for="floatingInput">old annual_revenue -- {{$leads->annual_revenue}}</label>
  </div> 
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="email_num">
    <label for="floatingInput">old email_num -- {{$leads->email_num}}</label>
  </div>
       <input type="submit">
    </form>
</body>

</html>
