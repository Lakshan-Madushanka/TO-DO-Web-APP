<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://127.0.0.1:8000/resources/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1 class="text-center"> TODO APP</h1>

<div class="row justify-content-center">
<div class="col-md-8">
<div class="card card-default">
    <div class="card-header">
        Todos
    </div>
    <div class="card-body">
        <ul class="list-group">
        @foreach($todos as $todo)
            <li class="list-group-item">
                {{$todo->name}}
                <button class="btn btn-primary btn-sm float-right">View</button>
            </li>
        @endforeach
        </ul>
    </div>
</div>
</div>
</div>
</body>
</html>

