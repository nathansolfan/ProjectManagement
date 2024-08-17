<!-- resources/views/user/dashboard.blade.php -->

<x-layout title="User Dashboard">
    <h1 class="text-3xl font-bold">User Dashboard</h1>

    <div class="container mx-auto py-8">
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold">My Projects</h2>
            <ul>
                @foreach($myProjects as $project)
                    <li>{{ $project->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold">My Tasks</h2>
            <ul>
                @foreach($myTasks as $task)
                    <li>{{ $task->name }} ({{ $task->status }})</li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
