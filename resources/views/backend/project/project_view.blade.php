@extends('admin.admin_master')


@section('admin')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Project</h6>
    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
    
                <tbody>

                    @foreach ($projects as $item)
                            
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td><img src="{{ asset($item->profile_photo) }}" width="70px" height="70px"></td>
                        <td>
                            <a href="" class="btn btn-info" title="Edit">Edit Data</a>
                            <a href="" class="btn btn-danger" title="Delete">Delete Data</a>
                        </td>
                    </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>
</div>

    
@endsection


