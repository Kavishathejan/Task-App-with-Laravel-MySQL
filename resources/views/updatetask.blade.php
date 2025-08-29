<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Task</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        
    }
    .card {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .table th, .table td {
        vertical-align: middle;
    }
</style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Update Task</h1>
    <form method="post" action="{{ route('tasks.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $taskdata->id }}">
        <div class="mb-3">
            <input type="text" name="task" class="form-control" value="{{ $taskdata->task }}">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
