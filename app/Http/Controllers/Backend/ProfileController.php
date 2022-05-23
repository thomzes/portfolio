<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function ProfileView()
    {
        $profiles = Profile::latest()->get();

        return view('backend.profile.profile_view', compact('profiles'));

    } //end method

    public function ProfileStore(Request $request)
    {
        return view('backend.profile.profile_add');



    } //end method




}
