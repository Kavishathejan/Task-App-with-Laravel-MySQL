<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="text-center ">
        <h1>Daily tasks</h1>
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <form method="post" action="/saveTask">
                    {{csrf_field()}}
                    <input type="text" class="form-control" placeholder="Enter your task.." name="task">
                <br>
                <input type="submit" class="btn btn-primary" value="Save">
                <input type="button" class="btn btn-warning" value = "Clear">
                </form>
                <br/>
                <br>
                <br>
                <table class="table table-dark">
                <th>ID</th>
                <th>Task</th>
                <th>Completed</th>
                <th>Action</th>
                @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                            @if($task->isCompleted)
                                <button class="btn btn-success">Completed</button>
                            @else
                                <button class="btn btn-warning"> Not Completed</button>        
                            @endif
                            </td>
                            <td>
                            @if(!$task->isCompleted)
                            
                                <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                            @else
                                <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a>
                            @endif

                            <a href="/deletetask/{{$task->id}}" class="btn btn-light">Delete</a>
                            <a href="/updatetask/{{$task->id}}" class="btn btn-outline-success">Update</a>
                        
                            </td>
                        </tr>
                @endforeach
                
                </table>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>