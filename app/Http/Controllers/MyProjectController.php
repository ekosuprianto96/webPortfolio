<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MyProjectController extends Controller
{
    public function insert(Request $request)
    {
        $project = new Project;
        $image = '';
        if ($request->hasFile('image_prev')) {
            $file = $request->file('image_prev');
            $name = $file->getClientOriginalName();
            $newName = Str::random(10) . '-' . $name;
            $file->move(public_path('assets/images/image_project'), $newName);
            $image = $newName;
            $project->image_prev = $image;
        } else {
            $project->image_prev = 'No Image';
        }

        $project->name = $request->name;
        $project->client = $request->client;
        $project->description = $request->description;
        $project->start_project = $request->start_date;
        $project->end_project = $request->end_date;
        $project->url_web = $request->url_web;
        if ($request->status == '0') {
            $project->status = 0;
        } else if ($request->status == '1') {
            $project->status = 1;
        } else {
            $project->status = 0;
        }
        $project->save();


        return response()->json([
            'status' => true
        ]);
    }
    public function get($id)
    {
        $project = Project::find($id);

        return response()->json([
            'data' => $project
        ]);
    }
    public function update(Request $request)
    {
        $project = Project::find($request->id);

        $image = '';
        if ($request->hasFile('image_prev')) {
            File::delete(public_path('assets/images/image_project/') . $project->image_prev);
            $file = $request->file('image_prev');
            $name = $file->getClientOriginalName();
            $newName = Str::random(10) . '-' . $name;
            $file->move(public_path('assets/images/image_project'), $newName);
            $image = $newName;
            $project->image_prev = $image;
        }
        $project->name = $request->name;
        $project->client = $request->client;
        $project->description = $request->description;
        $project->start_project = $request->start_date;
        $project->end_project = $request->end_date;
        $project->url_web = $request->url_web;
        if ($request->status == '0') {
            $project->status = 0;
        } else if ($request->status == '1') {
            $project->status = 1;
        } else {
            $project->status = 0;
        }
        $project->save();
        return response()->json([
            'status' => true
        ]);
    }
    public function delete($id)
    {
        $project = Project::find($id);
        File::delete(public_path('assets/images/image_project/') . $project->image_prev);
        $project->delete();

        return redirect()->back();
    }
}
