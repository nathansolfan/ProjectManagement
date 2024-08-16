<x-layout title="Welcome to Project Management App">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-500 to-green-500 py-20 text-center text-white">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Welcome to the Project Management App</h1>
        <p class="text-2xl max-w-2xl mx-auto">
            Effortlessly manage your projects, clients, tasks, and invoices with our intuitive and powerful tool.
        </p>
    </div>

    <div class="container mx-auto py-16 px-6 space-y-16">
        <!-- Authentication Section -->
        <div class="text-center">
            @if(Auth::check())
                <p class="text-gray-800">Welcome, {{ Auth::user()->name }}!</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Login
                </a>
                <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Register
                </a>
            @endif
        </div>

        <!-- Navigation Section -->
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Navigation</h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center">
                <li class="bg-gray-100 hover:bg-gray-200 p-6 rounded-lg shadow-lg transition-all duration-300">
                    <a href="{{ route('projects.index') }}" class="text-blue-600 font-semibold text-2xl">Manage Projects</a>
                    <p class="text-gray-600 mt-4">Oversee all your projects, track progress, and collaborate with your team.</p>
                </li>
                <li class="bg-gray-100 hover:bg-gray-200 p-6 rounded-lg shadow-lg transition-all duration-300">
                    <a href="{{ route('clients.index') }}" class="text-blue-600 font-semibold text-2xl">Manage Clients</a>
                    <p class="text-gray-600 mt-4">Keep track of your clients, their details, and their projects in one place.</p>
                </li>
                <li class="bg-gray-100 hover:bg-gray-200 p-6 rounded-lg shadow-lg transition-all duration-300">
                    <a href="{{ route('tasks.index') }}" class="text-blue-600 font-semibold text-2xl">Manage Tasks</a>
                    <p class="text-gray-600 mt-4">Assign, prioritize, and manage tasks efficiently across all your projects.</p>
                </li>
                <li class="bg-gray-100 hover:bg-gray-200 p-6 rounded-lg shadow-lg transition-all duration-300">
                    <a href="{{ route('users.index') }}" class="text-blue-600 font-semibold text-2xl">Users</a>
                    <p class="text-gray-600 mt-4">Manage users and assign roles.</p>
                </li>
            </ul>
        </div>

        <!-- Getting Started Section -->
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Getting Started</h2>
            <p class="text-xl text-gray-700 mb-6 max-w-xl mx-auto">
                Kickstart your project management experience by creating your first project, adding clients, or managing tasks.
            </p>
            <ul class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-center">
                <li class="bg-green-100 hover:bg-green-200 p-6 rounded-lg shadow-lg transition-all duration-300">
                    <a href="{{ route('projects.create') }}" class="text-green-600 font-semibold text-2xl">Create a New Project</a>
                    <p class="text-gray-600 mt-4">Start a new project and begin tracking its progress from the ground up.</p>
                </li>
                <li class="bg-green-100 hover:bg-green-200 p-6 rounded-lg shadow-lg transition-all duration-300">
                    <a href="{{ route('clients.create') }}" class="text-green-600 font-semibold text-2xl">Add a New Client</a>
                    <p class="text-gray-600 mt-4">Register new clients and associate them with your ongoing projects.</p>
                </li>
                <li class="bg-green-100 hover:bg-green-200 p-6 rounded-lg shadow-lg transition-all duration-300">
                    <a href="{{ route('tasks.create') }}" class="text-green-600 font-semibold text-2xl">Create a New Task</a>
                    <p class="text-gray-600 mt-4">Break down your projects into manageable tasks and get things done.</p>
                </li>
            </ul>
        </div>
    </div>
</x-layout>
