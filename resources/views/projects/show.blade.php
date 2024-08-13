<!-- resources/views/projects/show.blade.php -->

<x-layout title="Project Details">
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->description }}</p>
    <a href="{{ route('projects.edit', $project->id) }}">Edit Project</a>
    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Project</button>
    </form>
    <a href="{{ route('projects.index') }}">Back to Projects</a>
</x-layout>
