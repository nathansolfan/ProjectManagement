<!-- resources/views/clients/index.blade.php -->

<x-layout title="Clients">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Clients</h1>

        <div class="flex justify-between items-center mb-8">
            <div class="text-gray-600">
                <p class="text-lg">Total Clients: {{ $clients->count() }}</p>
            </div>
            <a href="{{ route('clients.create') }}" class="bg-green-600 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                + Create New Client
            </a>
        </div>

        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($clients as $client)
                <li class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">{{ $client->name }}</h2>
                        <p class="text-gray-700 mb-4">{{ $client->email }}</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('clients.show', $client->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">
                                View Details
                            </a>
                            <a href="{{ route('clients.edit', $client
