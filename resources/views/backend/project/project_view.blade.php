@extends('admin.admin_master')


@section('admin')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Project</h6>
    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered-lg" id="dataTable" width="100%" cellspacing="0" style="table-layout: fixed">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
    
                <tbody>

                    @foreach ($projects as $item)
                            
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td><img src="{{ asset($item->project_photo) }}" width="70px" height="70px"></td>
                        <td class=>
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


