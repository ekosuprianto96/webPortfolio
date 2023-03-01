<?php

namespace App\Http\Controllers;

use App\Models\Graduation;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $graduate = Graduation::latest()->get();
        $profile = Profile::first()->get();
        $project = Project::latest()->get();
        return view('frontend.index', [
            'profile' => $profile,
            'graduate' => $graduate,
            'project' => $project
        ]);
    }
}
