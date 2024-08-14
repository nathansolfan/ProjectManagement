<x-layout title="Users">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Users</h1>

        <div class="mb-6 flex justify-end">
            <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Create User
            </a>
        </div>

        <ul class="space-y-4">
            @foreach($users as $user)
                <li class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900">{{ $user->name }}</h2>
                            <p class="text-gray-600">{{ $user->email }}</p>
                        </div>
                        <div class="flex space-x-4">
                            <a href="{{ route('users.show', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                View Details
                            </a>
                            <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
