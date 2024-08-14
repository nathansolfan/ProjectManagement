<x-layout title="Edit Task">

    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Task Name</label>
            <input type="text" name="name" class="form-control" value="{{ $task->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="assigned_to">Assigned To (User ID)</label>
            <input type="number" name="assigned_to" class="form-control" value="{{ $task->assigned_to }}">
        </div>
        <div class="form-group">
            <label for="time_spent">Time Spent (hours)</label>
            <input type="number" name="time_spent" class="form-control" value="{{ $task->time_spent }}" min="0">
        </div>
        <div class="form-group">
            <label for="project_id">Project</label>
            <select name="project_id" class="form-control" required>
                @foreach($projects as $project)
                    <option value="{{ $project->id }}" {{ $task->project_id == $project->id ? 'selected' : '' }}>
                        {{ $project->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>

</x-layout>
