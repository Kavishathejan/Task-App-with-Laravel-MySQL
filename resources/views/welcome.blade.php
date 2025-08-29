<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Tasks App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            font-family: sans-serif;
            height: 100vh;
        }
        .welcome-card {
            background: rgba(255,255,255,0.9);
            border-radius: 22px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="welcome-card text-center">
        <h1 class="fw-bold mb-3">Daily Tasks App</h1>
        <p class="text-muted mb-4">Manage your daily tasks with Laravel, Bootstrap & MySQL</p>

        @if (Route::has('login'))
            @auth
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">View My Tasks</a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                @endif
            @endauth
        @endif
    </div>
</body>
</html>
