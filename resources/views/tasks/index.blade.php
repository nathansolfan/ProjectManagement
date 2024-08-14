<x-layout title="Tasks">

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Tasks</h1>

        <div class="flex justify-between items-center mb-8">
            <a href="{{ url('/') }}" class="bg-green-600 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                + HomePage
            </a>

            <a href="{{ route('tasks.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Create Task
            </a>
        </div>

        <ul class="space-y-4">
            @foreach($tasks as $task)
                <li class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900">{{ $task->name }}</h2>
                            <p class="text-gray-600">{{ $task->description }}</p>
                            <p class="text-sm text-gray-500 mt-2">
                                <span class="font-bold">Status:</span> {{ $task->status }}
                            </p>
                            <p class="text-sm text-gray-500">
                                <span class="font-bold">Project:</span> {{ $task->project->name }}
                            </p>
                        </div>
                        <div class="flex space-x-4">
                            <a href="{{ route('tasks.show', $task->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                View Details
                            </a>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</x-layout>
