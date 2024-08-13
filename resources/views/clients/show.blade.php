<!-- resources/views/clients/show.blade.php -->

<x-layout title="Client Details">
    <h1>{{ $client->name }}</h1>
    <p>Email: {{ $client->email }}</p>

    <a href="{{ route('clients.edit', $client->id) }}">Edit Client</a>
    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Client</button>
    </form>
    <a href="{{ route('clients.index') }}">Back to Clients</a>
</x-layout>
