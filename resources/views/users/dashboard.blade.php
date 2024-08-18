<!-- resources/views/users/dashboard.blade.php -->

<x-layout title="User Dashboard">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">User Dashboard</h1>

    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">My Tasks</h2>
        <ul>
            @foreach($myTasks as $task)
                <li class="flex justify-between items-center mb-2">
                    <span>{{ $task->name }} - {{ $task->status }}</span>
                    @if($task->status !== 'completed')
                    {{-- task.complete from the route ->name() --}}
                        <form action="{{ route('tasks.complete', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to make this change?')">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Mark as Completed
                            </button>
                        </form>
                    @else
                        <span class="text-green-500 font-bold">Completed</span>
                    @endif
                </li>
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
