<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daily Tasks App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            font-family: 'Instrument Sans', sans-serif;
            height: 100vh;
        }
        .welcome-container {
            height: 100vh;
        }
        .welcome-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container welcome-container d-flex justify-content-center align-items-center">
        <div class="welcome-card text-center">
            <h1 class="fw-bold mb-3">Daily Tasks App</h1>
            <p class="text-muted mb-4">Manage your daily tasks with Laravel, Bootstrap & MySQL</p>
            <a href="/tasks" class="btn btn-lg btn-primary shadow">View My Tasks</a>
        </div>
    </div>
</body>
</html>
