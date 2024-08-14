<x-layout title="Tasks">

    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    <ul>
        @foreach($tasks as $task)
            <li>
                <strong>{{ $task->name }}</strong>: {{ $task->description }} (Status: {{ $task->status }})
                <br>
                <small>Project: {{ $task->project->name }}</small>
                <a href="{{ route('tasks.show', $task->id) }}">View Details</a>
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>

</x-layout>
