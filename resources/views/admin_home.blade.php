<x-layout title="Admin Dashboard">
    <div class="bg-gradient-to-r from-blue-500 to-green-500 py-20 text-center text-white">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Welcome, Admin</h1>
        <p class="text-2xl max-w-2xl mx-auto">
            Manage your projects, clients, tasks, and users effectively.
        </p>
    </div>

    <div class="container mx-auto py-16 px-6 space-y-16">
        <!-- Navigation Section -->
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Admin Navigation</h2>
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
                    <a href="{{ route('users.index') }}" class="text-blue-600 font-semibold text-2xl">Manage Users</a>
                    <p class="text-gray-600 mt-4">Manage users and assign roles.</p>
                </li>
            </ul>
        </div>
    </div>
</x-layout>
