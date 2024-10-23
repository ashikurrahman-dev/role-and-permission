@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Role</h1>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Role List</h5>
                <a href="/panel/role/add" class="btn btn-primary">Add Role</a>
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <th scope="row">{{ $role->id }}</th>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->created_at }}</td>
                            <td class="">
                                <a href={{ "/panel/role/edit/" . $role->id }} class="btn btn-sm btn-primary">Edit</a>
                                <a href={{ "/panel/role/delete/" . $role->id }} class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>

    </div>
@endsection
