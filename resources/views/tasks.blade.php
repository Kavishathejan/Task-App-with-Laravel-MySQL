<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Daily Tasks</title>
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

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1  style="color: black; font-weight:bold">My Daily Tasks</h1>
        <div class="d-flex align-items-center gap-2">
            <span class="color: black; font-weight:bold">Hello, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
        </div>
    </div>

    <!-- Add Task Form -->
    <div class="card p-4 mb-4">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="input-group">
                <input type="text" name="task" class="form-control" placeholder="Enter your task">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
            @error('task')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </form>
    </div>

    <!-- Tasks Table -->
    <div class="card p-4">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->task }}</td>
                        <td>
                            @if($task->isCompleted)
                                <span class="badge bg-success">Completed</span>
                            @else
                                <span class="badge bg-warning text-dark">Not Completed</span>
                            @endif
                        </td>
                        <td class="d-flex gap-1">
                            @if(!$task->isCompleted)
                                <a href="{{ route('tasks.complete', $task->id) }}" class="btn btn-sm btn-primary">Complete</a>
                            @else
                                <a href="{{ route('tasks.notcomplete', $task->id) }}" class="btn btn-sm btn-warning">Not Complete</a>
                            @endif
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <a href="{{ route('tasks.delete', $task->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">No tasks yet. Add one above!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
