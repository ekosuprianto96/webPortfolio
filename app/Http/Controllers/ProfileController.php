<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function updateprofile(Request $request)
    {
        $data = Profile::first();
        $data1 = $request->get('image');
        $image = '';
        if ($request->hasFile('file')) {
            File::delete(public_path('assets/images/fotoProfile/') . $data->image);
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $newNameFile = mt_rand(100000, 1000000) . '-' . $name;
            $file->move('assets/images/fotoProfile', $newNameFile);
            $image = $newNameFile;
            $data->image = $image;
            if ($data->save()) {
                return response()->json([
                    'message' => 'Success Update Image!',
                    'status' => 'true'
                ]);
            } else {
                return response()->json([
                    'message' => 'Updated Image Is Failed!',
                    'status' => 'false'
                ]);
            }
        }


        // $image = '';
        // if ($request->hasFile('file')) {
        //     File::delete(public_path('assets/images/fotoProfile/') . $data->image);
        //     $file = $request->file('file');
        //     $nameFile = $file->getClientOriginalName();
        //     $newNameFile = mt_rand(100000, 1000000) . '-' . $nameFile;
        //     $file->move('assets/images/fotoProfile', $newNameFile);
        //     $image = $newNameFile;
        //     $data->image = $image;
        // }
        $data->name = $request->fullname;
        $data->email = $request->email;
        $data->phone_number = $request->phoneNumber;
        $data->birthdate = $request->date;
        $data->address = $request->address;
        $data->text_about = $request->text_about;
        $data->save();

        return redirect()->back();
    }
}
