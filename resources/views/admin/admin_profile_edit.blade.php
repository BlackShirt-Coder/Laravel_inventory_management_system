@extends('admin.admin_master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="col-12">

                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Profile | Edit</h4>
                        <p class="card-title-desc"
                           class="highlighter-rouge"></p>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$user_data->name}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="search" value="{{$user_data->email}}"
                                       id="example-search-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-url-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file"
                                       id="example-url-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img class="rounded avatar-lg"
                                     src="{{ asset('backend/assets/images/users/avatar-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="example-email-input" class="col-sm-2 col-form-label"></label>

                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                    Change
                                </button>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
    @include('admin.footer')
    <!--end  footer -->

    </div>
@endsection