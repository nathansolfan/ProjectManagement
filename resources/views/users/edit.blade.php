<x-layout title="Edit User">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Edit User</h1>

        <form action="{{ Auth::user()->role === 'admin' ? route('users.update', $user->id) : route('profile.update') }}" method="POST" class="bg-white shadow-lg rounded-lg p-6 max-w-lg mx-auto">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="w-full px-4 py-2 border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                @if ($errors->has('name'))
                    <p class="text-red-500 text-sm mt-2">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full px-4 py-2 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                @if ($errors->has('email'))
                    <p class="text-red-500 text-sm mt-2">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @if ($errors->has('password'))
                    <p class="text-red-500 text-sm mt-2">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                    Cancel
                </a>
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-200">
                    Update User
                </button>
            </div>
        </form>
    </div>
</x-layout>
