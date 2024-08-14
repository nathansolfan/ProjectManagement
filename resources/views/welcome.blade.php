<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Project Management App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS here -->
</head>
<body>
    <div class="container">
        <h1>Welcome to the Project Management App</h1>
        <p>This application allows you to manage your projects, clients, tasks, and invoices.</p>

        <h2>Navigation</h2>
        <ul>
            <li><a href="{{ route('projects.index') }}">Manage Projects</a></li>
            <li><a href="{{ route('clients.index') }}">Manage Clients</a></li>
            <li><a href="{{ route('tasks.index') }}">Manage Tasks</a></li>
            {{-- <li><a href="{{ route('invoices.index') }}">Manage Invoices</a></li>  --}}
        </ul>

        <h2>Getting Started</h2>
        <p>To get started, you can:</p>
        <ul>
            <li><a href="{{ route('projects.create') }}">Create a New Project</a></li>
            <li><a href="{{ route('clients.create') }}">Add a New Client</a></li>
            <li><a href="{{ route('tasks.create') }}">Create a New Task</a></li>
            {{-- <li><a href="{{ route('invoices.create') }}">Generate a New Invoice</a></li> --}}
        </ul>
    </div>
</body>
</html>
