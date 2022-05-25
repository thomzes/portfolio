<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    $profiles = Profile::latest()->get();
    $projects = Project::all();

        return view('frontend.index', compact('profiles', 'projects'));

} //end method









}
