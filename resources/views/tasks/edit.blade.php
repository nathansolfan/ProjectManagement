<x-layout title="Edit Task">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Edit Task</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-8">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-bold mb-2">Task Name</label>
                <input type="text" name="name" id="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $task->name }}" required>
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $task->description }}</textarea>
            </div>

            <div class="mb-6">
                <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
                <select name="status" id="status" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="assigned_to" class="block text-gray-700 font-bold mb-2">Assigned To (User ID)</label>
                <input type="number" name="assigned_to" id="assigned_to" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $task->assigned_to }}">
            </div>

            <div class="mb-6">
                <label for="time_spent" class="block text-gray-700 font-bold mb-2">Time Spent (hours)</label>
                <input type="number" name="time_spent" id="time_spent" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $task->time_spent }}" min="0">
            </div>

            <div class="mb-6">
                <label for="project_id" class="block text-gray-700 font-bold mb-2">Project</label>
                <select name="project_id" id="project_id" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}" {{ $task->project_id == $project->id ? 'selected' : '' }}>
                            {{ $project->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                    Update Task
                </button>
                <a href="{{ route('tasks.index') }}" class="text-gray-600 hover:text-gray-800 font-bold py-2 px-4 rounded-lg">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
