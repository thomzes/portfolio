@extends('admin.admin_master')


@section('admin')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Profile</h6>
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{ $profiles->id }}">
            <input type="hidden" name="old_image" value="{{ $profiles->profile_photo }}">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $profiles->name }}">
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" class="form-control" id="status" name="status" value="{{ $profiles->status }}">
            </div>
            <div class="form-group">
              <label for="job">Job</label>
              <input type="text" class="form-control" id="job" name="job" value="{{ $profiles->job }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="{{ $profiles->description }}"></textarea>
              </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
</div>


@endsection