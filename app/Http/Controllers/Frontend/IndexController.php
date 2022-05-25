<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    $profiles = Profile::latest()->get();

        return view('frontend.index', compact('profiles'));

    } //end method









}
