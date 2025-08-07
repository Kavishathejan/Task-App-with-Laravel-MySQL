<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <br><br><br><br>
        <form action="/updatetasks" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
            <input type="hidden"  name="id" value="{{$taskdata->id}}"/>
            <br>
            <input type="submit" class="btn btn-warning" value="Update">
            &nbsp;&nbsp;
            <input type="submit" class="btn btn-danger" value="Cansel">
        </form>
    </div>
</body>
</html>