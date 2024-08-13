<!-- resources/views/projects/create.blade.php -->

<x-layout title="Create Project">
    <h1>Create a New Project</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf <!-- This is necessary for form security in Laravel -->
        <div>
            <label for="name">Project Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="description">Project Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit">Create Project</button>
    </form>
</x-layout>
