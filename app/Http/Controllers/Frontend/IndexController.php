<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index()
    {
    $profiles = Profile::latest()->get();
    $projects = Project::all();

        return view('frontend.index', compact('profiles', 'projects'));

    } //end method

    public function ContactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back();

    } //end method









}
