<x-layout title="Create Project">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Create a New Project</h1>

        <form action="{{ route('projects.store') }}" method="POST" class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-8">
            @csrf <!-- This is necessary for form security in Laravel -->

            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-bold mb-2">Project Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-bold mb-2">Project Description</label>
                <textarea id="description" name="description" rows="4" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>

            <div class="mb-6">
                <label for="client_id" class="block text-gray-700 font-bold mb-2">Client</label>
                <select id="client_id" name="client_id" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-green-600 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                    Create Project
                </button>
                <a href="{{ route('projects.index') }}" class="text-gray-600 hover:text-gray-800 font-bold py-2 px-4 rounded-lg">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
