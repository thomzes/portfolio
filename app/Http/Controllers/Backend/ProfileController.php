<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function ProfileView()
    {
        return view('backend.profile.profile_view');


    } //end method




}