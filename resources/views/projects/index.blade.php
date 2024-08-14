<x-layout title="Projects">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Projects</h1>

        <div class="flex justify-between items-center mb-8">
            <div class="text-gray-600">
                <p class="text-lg">Total Projects: {{ $projects->count() }}</p>
            </div>
            <a href="{{ url('/') }}" class="bg-green-600 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                + HomePage
            </a>
            <a href="{{ route('projects.create') }}" class="bg-green-600 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                + Create New Project
            </a>

        </div>

        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <li class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">{{ $project->name }}</h2>
                        <p class="text-gray-700 mb-4">{{ Str::limit($project->description, 100) }}</p>
                        <p class="text-sm text-gray-500 mb-2">
                            <span class="font-bold">Client ID:</span> {{ $project->client_id }}
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('projects.show', $project->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">
                                View Details
                            </a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded shadow-md">
                                Edit
                            </a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
