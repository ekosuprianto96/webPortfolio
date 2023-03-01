<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\PenggunaWeb;
use App\Models\Profile;
use App\Models\Project;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        $pengguna = PenggunaWeb::get()->count();
        $contact = Contact::latest();
        return view('dashboard', [
            'active' => 'Dashboard',
            'pengguna' => $pengguna,
            'pengunjung' => Visitor::get()->count(),
            'message' => $contact->count(),
            'contact' => $contact->paginate(10)
        ]);
    }
    public function myprofile()
    {
        $user = Auth::user();
        $profile = Profile::first();
        return view('myprofile', [
            'profile' => $profile,
            'active' => 'My Profile'
        ]);
    }
    public function socialmedia()
    {
        return view('socialmedia', [
            'active' => 'My Profile'
        ]);
    }
    public function myproject()
    {
        $project = Project::latest()->get();
        return view('myproject', [
            'project' => $project,
            'active' => 'My Project'
        ]);
    }
}
