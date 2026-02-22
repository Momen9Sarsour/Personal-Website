<?php

namespace App\Http\Controllers\Dashboaed;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('dashboard.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'link' => 'nullable',
            'description' => 'nullable',
        ]);

        $path = $request->file('image')->store('uploads' , 'custom');

        Project::create([
            'title' => $request->title,
            'image' => $path,
            'link' => $request->link,
            'description' => $request->description,
        ]);

        flash()->success('Project created successfully!');

        return redirect()->route('projects.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'description' => 'nullable',
            'link' => 'nullable',
        ]);

        if($request->hasFile('image')){
            File::delete(public_path($project->image));
            $path = $request->file('image')->store('uploads' , 'custom');
        }

        $project->update([
            'title' => $request->title,
            'image' => $path ?? $project->image,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        flash()->success('Project updated successfully!');

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        File::delete(public_path($project->image));
        $project->delete();

        flash()->warning('Project Deleted successfully!');

        return redirect()->route('projects.index');
    }
}
