<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show all opportunities</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
        
</head>

<body class="index-wrapper">
<br>
    <h1 class="name">opportunities  </h1>
    <p>This is show all opportunities </p>
    <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">op_name</th>
      <th scope="col">op_type</th>
      <th scope="col">op_source</th>
      <th scope="col">status</th>
      <th scope="col">contacts_id</th>
    </tr>
  </thead>  
  <tbody>
  @foreach ($opportunities as $opportunities)
    <tr class="table-danger">
      <th scope="row">{{ $opportunities->id }}</th>
      <td>{{ $opportunities->op_name }}</td>
      <td>{{ $opportunities->op_type }}</td>
      <td>{{ $opportunities->op_source }}</td>
      <td>{{ $opportunities->status}}</td>
      <td>{{ $opportunities->contacts_id}}</td>
      <td><a href ="opportunities/{{ $opportunities->id }}/edit">edit</a></td>
      <td>  <form method="post" action="opportunities/{{ $opportunities->id}}/delete">
     {{csrf_field() }}
     {{ method_field('DELETE') }}
        <input type="submit" value = "delete">
    </form> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <br>
    <b><a href ="/opportunities/create" class="btn btn-outline-danger" > new opportunities</a></b>   
    <br>
    <br>
    <a href="\welcome" class="btn btn-outline-danger" role="button">go to the main page</a>
  </body>

</html>
