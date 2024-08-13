<!-- resources/views/projects/edit.blade.php -->

<x-layout title="Edit Project">
    <h1>Edit Project</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This tells Laravel it's an update -->
        <div>
            <label for="name">Project Name:</label>
            <input type="text" id="name" name="name" value="{{ $project->name }}" required>
        </div>
        <div>
            <label for="description">Project Description:</label>
            <textarea id="description" name="description" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit">Update Project</button>
    </form>
</x-layout>
