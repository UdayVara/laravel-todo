<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center mt-4 mb-4">
        View Todo
    </h3>
    <div class="container ">
        <h4 class="mb-4 mt-5 pt-2">My TODO's</h4>
        <div class="d-flex gap-4 justify-content-start flex-wrap">

            @foreach ($todos as $todo)
            <div class="px-4 py-3 rounded " style="width: 300px;background-color: #e3e3e0">
                <h4>{{$todo->title}}</h4>
                <p>{{$todo->body}}</p>
                <div class="d-flex gap-4">
                    <a href="{{route("edit_todo",$todo->id)}}" class="btn btn-primary" style="width: 80px">Edit</a>
                    <a href="{{route("delete_todo_api",$todo->id)}}" class="btn btn-danger" style="width: 80px">Delete</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>