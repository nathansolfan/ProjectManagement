<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:pending,in_progress,completed',
            'assigned_to' => 'nullable|integer|exists:users,id',
            'time_spent' => 'nullable|integer|min:0',
            'project_id' => 'required|exists:projects,id',
        ]);

        Task::create($request->all());

        redirect()->route('tasks.index')->with('success', 'task created with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        $projects = Project::all();
        return view('tasks.edit', compact('task', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:pending,in_progress,completed',
            'assigned_to' => 'nullable|integer|exists:users,id',
            'time_spent' => 'nullable|integer|min:0',
            'project_id' => 'required|exists:projects,id',
        ]);

        // find the ID
        $task = Task::findOrFail($id);

        // Set each attribute explicitly
        // $task->name = $request->input('name');
        // $task->description = $request->input('description')......

        // update
        $task->update($request->all());

        return redirect()->route('tasks.show', $task->id)->with('success', 'Task updated with success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrfail($id);
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}
