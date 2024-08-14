<!-- resources/views/tasks/show.blade.php -->

<x-layout title="Task Details">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $task->name }}</h1>
        <p class="text-lg text-gray-700 mb-4">{{ $task->description }}</p>
        <div class="flex items-center mb-4">
            <span class="font-semibold text-gray-800 mr-2">Status:</span>
            <span class="text-gray-600">{{ ucfirst($task->status) }}</span>
        </div>
        <div class="flex items-center mb-6">
            <span class="font-semibold text-gray-800 mr-2">Time Spent:</span>
            <span class="text-gray-600">{{ $task->time_spent }} hours</span>
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                Edit Task
            </a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?');" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                    Delete Task
                </button>
            </form>
            <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                Back to Tasks
            </a>
        </div>
    </div>
</x-layout>
