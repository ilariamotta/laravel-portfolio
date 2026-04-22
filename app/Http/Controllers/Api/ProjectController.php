<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::with("type")->get();

        // dd($projects);

        return response()->json([
            "success"=> true,
            "data"=>$projects
        ]);
    }

    public function show(Project $project) {
        $project->load("type", "technologies");
        // dd($project);
        return response()->json([
            "success"=> true,
            "data"=>$project
        ]);
    }
}
