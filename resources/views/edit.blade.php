<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h3 class="my-5 text-center">Edit Todo {{$id}}</h3>
    <div class="container mx-auto">
        <div class="mb-3">
            <form action="{{route("edit_todo_api",$id)}}"  method="POST">
                @csrf() 
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input  value="{{$todo->title}}" type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="name@example.com">
            @error("title")
              <span class="text-danger">{{$message}}<span>
          @enderror
          </div>
          
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea  class="form-control" name="todo-body" id="exampleFormControlTextarea1" rows="3">{{$todo->body}}</textarea>
            @error("todo-body")
            <span class="text-danger">{{$message}}<span>
        @enderror
          </div>

          <button class="btn btn-primary ms-auto px-5 mt-4" type="submit">Edit</button>
        </form>
    </div>
</body>
</html>