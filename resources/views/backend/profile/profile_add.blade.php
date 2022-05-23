@extends('admin.admin_master')


@section('admin')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Profile</h6>
    </div>
    <div class="card-body">

        <form>
            <div class="form-group">
              <label for="name">Name</label><span class="text-danger">*</span>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name..." required>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" class="form-control" id="status" name="status" placeholder="Enter Status...">
              <small id="emailHelp" class="form-text text-muted">If You're not input the status, status default is Student </small>

            </div>
            <div class="form-group">
              <label for="job">Job</label><span class="text-danger">*</span>
              <input type="text" class="form-control" id="job" placeholder="Enter Job..." name="job">
            </div>
            <div class="form-group">
                <label for="description">Description</label><span class="text-danger">*</span>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter Description..." required></textarea>
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