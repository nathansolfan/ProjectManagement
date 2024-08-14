<x-layout title="Create Task">
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <strong class="font-bold">Whoops!</strong> Something went wrong.
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Create Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Task Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>
            <div class="mb-6">
                <label for="status" class="block text-gray-700 font-semibold mb-2">Status</label>
                <select name="status" id="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    <option value="pending">Pending</option>
                    <option value="in_progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="mb-6">
                <label for="assigned_to" class="block text-gray-700 font-semibold mb-2">Assigned To (User ID)</label>
                <input type="number" name="assigned_to" id="assigned_to" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <label for="time_spent" class="block text-gray-700 font-semibold mb-2">Time Spent (hours)</label>
                <input type="number" name="time_spent" id="time_spent" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" min="0">
            </div>
            <div class="mb-6">
                <label for="project_id" class="block text-gray-700 font-semibold mb-2">Project</label>
                <select name="project_id" id="project_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Create Task
                </button>
            </div>
        </form>

    </div>
</x-layout>
