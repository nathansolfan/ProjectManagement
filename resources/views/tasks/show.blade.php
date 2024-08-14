<x-layout title="Task Details">

    <h1>{{ $task->name }}</h1>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->status }}</p>
    <p><strong>Assigned To:</strong> {{ $task->assigned_to }}</p>
    <p><strong>Time Spent:</strong> {{ $task->time_spent }} hours</p>
    <p><strong>Project:</strong> {{ $task->project->name }}</p>

    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Tasks</a>
    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>

</x-layout>
