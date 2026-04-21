<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        $types = Type::all();
        return view('backoffice.projects.index', compact("projects", "types"));
    }#

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("backoffice.projects.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->name= $data["name"];
        $newProject->customer = $data["customer"];
        $newProject->type_id = $data["type_id"];
        $newProject->time = $data["time"];
        $newProject->description = $data["description"];

        $newProject->save();
        if ($request->has("technologies")) {
        $newProject->technologies()->attach($data["technologies"]);
        } 


        return redirect()->route("admin.projects.show", $newProject);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("backoffice.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("backoffice.projects.edit", compact('project', "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->name= $data["name"];
        $project->customer = $data["customer"];
        $project->type_id = $data["type_id"];
        $project->time = $data["time"];
        $project->description = $data["description"];

        $project->update();

        if ($request->has('technologies')) {
        $project->technologies()->sync($data["technologies"]);  
        } else {
            $project->technologies()->detach();
        }
        
        
        return redirect()->route("admin.projects.show", $project);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()-> route("admin.projects.index");
    }
}
