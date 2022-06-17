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
<br>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRMSYS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">dashboard
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">accounts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">opportunity</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">leads</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">more</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </div>
  
<form method="post" action="{{route ('opportunities.store')}}">
        @csrf
        <!-- Equivalent to... -->
<div class="form-group">
  <label class="form-label mt-4">create new opportunities</label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="op_name">
    <label for="floatingInput">op_name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="op_type">
    <label for="floatingInput">op_type</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="op_source">
    <label for="floatingInput">op_source</label>
  </div> 
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="status">
    <label for="floatingInput">status</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="contacts_id">
    <label for="floatingInput">contacts_id</label>
  </div>
       <input type="submit">
    </form>
</body>

</html>









