<x-layout title="User Details">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">User Details</h1>

        <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">{{ $user->name }}</h2>
            <p class="text-gray-600"><strong>Email:</strong> {{ $user->email }}</p>

            <div class="mt-6 flex justify-between">
                <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
