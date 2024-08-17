<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $myTasks = Task::where('assigned_to', Auth::id())->get();
        $myProjects = Project::where('tasks', function ($query) {
            $query->where('assigned_to', Auth::id());
        })->get();

        return view('users.dashboard', compact('myTasks', 'myProjects'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // put the request inside a variable to hash the pw after
        $validatedData = $request->validate([
            'name' => 'string|required|max:255',
            'email' => 'string|email|required|unique:users',
            'password' => 'string|required|min:5|confirmed',
        ]);

        // hash pw
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'User created with successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
