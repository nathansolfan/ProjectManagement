<!-- resources/views/clients/create.blade.php -->

<x-layout title="Create Client">
    <h1>Create a New Client</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf <!-- This is necessary for form security in Laravel -->
        <div>
            <label for="name">Client Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Client Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">Create Client</button>
    </form>
</x-layout>
