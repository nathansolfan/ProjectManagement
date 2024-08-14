<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate incoming data request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'client_id' => 'required|exists:clients,id'
        ]);

        // create new project
        Project::create($request->only('name', 'description', 'client_id'));

        return redirect()->route('projects.index')->with('success', 'Project created with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // find the ID
        $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'client_id' => 'required|exists:clients,id'
        ]);

        // find the ID
        $project = Project::findOrFail($id);

        // Update with validaded data - name/descrip
        $project->update($request->only('name', 'description'));

        return redirect()->route('projects.show', $project->id)->with('success', 'Project changed correctly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted okay');
    }
}
