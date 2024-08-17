<!-- resources/views/users/dashboard.blade.php -->

<x-layout title="User Dashboard">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">User Dashboard</h1>

    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">My Tasks</h2>
        <ul>
            @foreach($myTasks as $task)
                <li>{{ $task->name }} - {{ $task->status }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">My Projects</h2>
        <ul>
            @foreach($myProjects as $project)
                <li>{{ $project->name }}</li>
            @endforeach
        </ul>
    </div>
</x-layout>
