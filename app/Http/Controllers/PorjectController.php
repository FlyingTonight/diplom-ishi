<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hostingPlans = auth()->user()->hostingPlan;
        return view('projects.create', compact('hostingPlans'));
    }

    /**
     * Store a newly created project in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'domain' => 'required|unique:projects',
            'repository_url' => 'nullable|url',
            'hosting_plan_id' => 'required|exists:hosting_plans,id',
        ]);

        $project = new Project();
        $project->name = $validatedData['name'];
        $project->description = $validatedData['description'];
        $project->domain = $validatedData['domain'];
        $project->repository_url = $validatedData['repository_url'];
        $project->user_id = auth()->user()->id;
        $project->hosting_plan_id = $validatedData['hosting_plan_id'];
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = auth()->user()->projects()->findOrFail($id);
        return view('projects.show', compact('project'));
    }

}
