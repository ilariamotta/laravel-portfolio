<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('backoffice.projects.index', compact("projects"));
    }#

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("backoffice.projects.create");
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
        $newProject->time = $data["time"];
        $newProject->description = $data["description"];

        $newProject->save();

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
    public function edit(string $id)
    {
        ;
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
