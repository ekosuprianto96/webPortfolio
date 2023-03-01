<?php

namespace App\Http\Controllers;

use App\Models\Graduation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GraduationController extends Controller
{
    public function index()
    {
        $graduations = Graduation::latest()->get();
        return view('mygraduation', [
            'graduations' => $graduations,
            'active' => 'My Graduation'
        ]);
    }
    public function addGraduation(Request $request)
    {


        $image = '';
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $newName = Str::random(30) . '-' . $name;
            $file->move('assets/images/certif', $newName);
            $image = $newName;
        }
        $graduation = Graduation::create([
            'name' => $request->name,
            'description' => $request->description,
            'url_graduate' => $request->url,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image_certificate' => $image
        ]);
        return response()->json([
            'status' => true
        ]);
    }
    public function update($id)
    {
        $graduate = Graduation::find($id);

        return response()->json([
            'data' => $graduate
        ]);
    }
    public function insertUpdate(Request $request)
    {
        $graduate = Graduation::find($request->id);
        $graduate->name = $request->name;
        $graduate->description = $request->description;
        $graduate->url_graduate = $request->url;
        $graduate->start_date = $request->start_date;
        $graduate->end_date = $request->end_date;
        $image = '';
        if ($request->hasFile('file')) {
            File::delete(public_path('assets/images/certif/') . $graduate->image_certificate);
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $newName = Str::random(30) . '-' . $name;
            $file->move('assets/images/certif', $newName);
            $image =  $newName;
            $graduate->image_certificate = $image;
        }

        $graduate->save();
        return response()->json([
            'status' => true
        ]);
    }
    public function deletegraduate($id)
    {
        $graduate = Graduation::find($id);
        File::delete(public_path('assets/images/certif/') . $graduate->image_certificate);
        $graduate->delete();

        return redirect()->back();
    }
}
