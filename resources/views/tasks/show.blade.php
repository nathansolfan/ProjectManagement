<!-- resources/views/tasks/show.blade.php -->

<x-layout title="Task Details">
    <h1>{{ $task->name }}</h1>
    <p>{{ $task->description }}</p>
    <p>Status: {{ ucfirst($task->status) }}</p>
    <p>Time Spent: {{ $task->time_spent }} hours</p>

    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
        Edit Task
    </a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete Task</button>
    </form>
    <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Tasks</a>
</x-layout>
