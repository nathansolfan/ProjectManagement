<!-- resources/views/clients/index.blade.php -->

<x-layout title="Clients">
    <h1>Clients</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Create Client</a>
    <ul>
        @foreach($clients as $client)
            <li>
                <a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a> - {{ $client->email }}
            </li>
        @endforeach
    </ul>
</x-layout>
