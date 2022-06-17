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

<form method="post" action="/activities/{{$activities->id}}/update">
@csrf
        {{ method_field('PUT') }}
        <!-- Equivalent to... -->
<div class="form-group">
  <label class="form-label mt-4">editting exist activities</label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="act_name">
    <label for="floatingInput">old activities name --  {{$activities->act_name}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="act_type">
    <label for="floatingInput">old ac type -- {{$activities->act_type}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="description">
    <label for="floatingInput">old description -- {{$activities->description}}</label>
  </div> 

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name=" status">
    <label for="floatingInput">old status -- {{$activities-> status}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="priority">
    <label for="floatingInput">old priority -- {{$activities->priority}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="account_id">
    <label for="floatingInput">old account id -- {{$activities->account_id}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name=" contacts_id">
    <label for="floatingInput">old contact id -- {{$activities-> contacts_id}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="leads_id">
    <label for="floatingInput">old lead id -- {{$activities->leads_id}}</label>
  </div>
  
       <input type="submit">
    </form>    
</body>

</html>
