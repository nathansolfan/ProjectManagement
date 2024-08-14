<!-- resources/views/clients/create.blade.php -->

<x-layout title="Create Client">
    <div class="container mx-auto py-16 px-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Create a New Client</h1>

        <form action="{{ route('clients.store') }}" method="POST" class="bg-white shadow-lg rounded-lg p-8 max-w-lg mx-auto">
            @csrf <!-- This is necessary for form security in Laravel -->

            <div class="mb-6">
                <label for="name" class="block text-gray-700 text-lg font-semibold mb-2">Client Name:</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-lg font-semibold mb-2">Client Email:</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="text-center">
                <button type="submit"
                        class="bg-green-600 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                    Create Client
                </button>
            </div>
        </form>
    </div>
</x-layout>
