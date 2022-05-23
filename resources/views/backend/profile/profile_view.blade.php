@extends('admin.admin_master')


@section('admin')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Job</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
    
                <tbody>

                    @foreach ($profiles as $item)
                        
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->job }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->profile_photo }}</td>
                        <td>
                            <a href="" title="Edit"></a>
                            <a href="" title="Delete"></a>
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>
</div>

    
@endsection


