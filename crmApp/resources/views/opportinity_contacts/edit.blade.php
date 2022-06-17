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

<form method="post" action="/opportunities/{{$opportunities->id}}/update">
@csrf
        {{ method_field('PUT') }}
        <!-- Equivalent to... -->
<div class="form-group">
  <label class="form-label mt-4">editting exist opportunities</label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="op_name">
    <label for="floatingInput">old opportunities name --  {{$opportunities->op_name}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="op_type">
    <label for="floatingInput">old op_type -- {{$opportunities->op_type}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="op_source">
    <label for="floatingInput">old op_source -- {{$opportunities->op_source}}</label>
  </div> 
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="status">
    <label for="floatingInput">old status -- {{$opportunities->status}}</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name=" contacts_id">
    <label for="floatingInput">old contacts_id -- {{$opportunities-> contacts_id}}</label>
  </div>
       <input type="submit">
    </form>
</body>

</html>
