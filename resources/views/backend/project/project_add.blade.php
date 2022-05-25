@extends('admin.admin_master')


@section('admin')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Project</h6>
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label for="title">Title</label><span class="text-danger">*</span>
              <input type="text" class="form-control" id="title" name="title" placeholder="Enter the Title..." required>
            </div>
            <div class="form-group">
              <label for="desc">Description</label>
              <input type="text" class="form-control" id="desc" name="description" placeholder="Description...">
            </div>
            <div class="form-group">
              <label for="image">Image</label><span class="text-danger">*</span>
              <input type="file" class="form-control" id="image" name="image" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
</div>


@endsection