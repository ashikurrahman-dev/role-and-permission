@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1> Edit Role</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-9">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Role</h5>

                        <!-- General Form Elements -->
                        <form action={{ "/panel/role/edit/" . $role->id }} method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $role->name }}" class="form-control">
                                </div>
                            </div>                            

                            <div class="row mb-3">
                                <div class="col-sm-10" style="text-align: right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>


        </div>
    </section>
@endsection
