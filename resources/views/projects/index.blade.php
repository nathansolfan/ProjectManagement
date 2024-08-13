<x-layout title="Projects">

    <h1>Hello</h1>
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Create Project</a>
    <ul>
        @foreach($projects as $project)
            <li>
                <strong>{{ $project->name }}</strong>: {{ $project->description }} {{ $project->client_id}}
                <a href="{{ route('projects.show', $project->id) }}">View Details</a>
            </li>
        @endforeach
    </ul>
</x-layout>

