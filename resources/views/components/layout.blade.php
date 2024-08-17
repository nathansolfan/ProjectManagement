<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'My Project Management App' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-gray-800 p-4">
        <ul class="flex space-x-4">
            <li><a href="{{ route('dashboard') }}" class="text-white">Dashboard</a></li>

            @if(Auth::check() && Auth::user()->role === 'admin')
                <li><a href="{{ route('users.index') }}" class="text-white">Manage Users</a></li>
                <li><a href="{{ route('clients.index') }}" class="text-white">Manage Clients</a></li>
                <li><a href="{{ route('projects.index') }}" class="text-white">Manage Projects</a></li>
                <li><a href="{{ route('tasks.index') }}" class="text-white">Manage Tasks</a></li>
                <li><a href="{{ route('invoice.index') }}" class="text-white">Manage Invoices</a></li>
            @endif

            <li><a href="{{ route('tasks.index') }}" class="text-white">My Tasks</a></li>
            <li><a href="{{ route('projects.index') }}" class="text-white">My Projects</a></li>
            <li>
                <a href="{{ route('logout') }}"
                    class="text-white"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <div class="container mx-auto mt-8">
        {{ $slot }}
    </div>
</body>
</html>
