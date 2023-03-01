<?php

namespace App\Http\Controllers;

use App\Models\Socialmedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url_social' => 'required',
            'icon_social' => 'required'
        ]);

        $social = new Socialmedia();
        $social->name = $request->name;
        $social->url_social = $request->url_social;
        $social->icon_social = $request->icon_social;
        $social->save();

        return redirect()->back();
    }
    public function delete($id)
    {
        $social = Socialmedia::find($id);
        $social->delete();

        return redirect()->back();
    }
}
