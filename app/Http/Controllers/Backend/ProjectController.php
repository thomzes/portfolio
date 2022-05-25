<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function ProjectView()
    {
        $projects = Project::latest()->get();

        return view('backend.project.project_view', compact('projects'));

    } //end method

    public function ProjectViewAdd()
    {

        return view('backend.project.project_add');


    } //end method

    public function ProjectStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/admin_projects/'.$name_gen);
        $save_url = 'upload/admin_projects/'.$name_gen;

        
        Project::insert([
            'title' => $request->title,
            'description' => $request->description,
            'project_photo' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back();



    } //end method





}
