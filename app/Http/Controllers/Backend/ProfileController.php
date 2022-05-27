<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function ProfileView()
    {
        $profiles = Profile::latest()->get();

        return view('backend.profile.profile_view', compact('profiles'));

    } //end method

    public function ProfileViewAdd()
    {
        return view('backend.profile.profile_add');

    } //end method

    public function ProfileStore(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/admin_images/'.$name_gen);
        $save_url = 'upload/admin_images/'.$name_gen;

        
        Profile::insert([
            'name' => $request->name,
            'status' => $request->status,
            'job' => $request->job,
            'description' => $request->description,
            'profile_photo' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back();

    } //end method

    public function ProfileEdit($id)
    {
        $profiles = Profile::findOrFail($id);

        return view('backend.profile.profile_edit', compact('profiles'));

    } //end method

    public function ProfileUpdate(Request $request)
    {
        $profile_id = $request->id;
        $old_image = $request->old_image;

        if($request->file('image')) {

            unlink($old_image);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/admin_images/'.$name_gen);
            $save_url = 'upload/admin_images/'.$name_gen;

            Profile::findOrFail($profile_id)->update([
                'name' => $request->name,
                'status' => $request->status,
                'job' => $request->job,
                'description' => $request->description,
                'profile_photo' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('profile.view');

        }else {
            Profile::findOrFail($profile_id)->update([
                'name' => $request->name,
                'status' => $request->status,
                'job' => $request->job,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('profile.view');

        }

    } //end method




}
