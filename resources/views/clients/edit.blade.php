<!-- resources/views/clients/edit.blade.php -->

<x-layout title="Edit Client">
    <h1>Edit Client</h1>
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This tells Laravel to use the PUT method -->
        <div>
            <label for="name">Client Name:</label>
            <input type="text" id="name" name="name" value="{{ $client->name }}" required>
        </div>
        <div>
            <label for="email">Client Email:</label>
            <input type="email" id="email" name="email" value="{{ $client->email }}" required>
        </div>
        <button type="submit">Update Client</button>
    </form>
</x-layout>
