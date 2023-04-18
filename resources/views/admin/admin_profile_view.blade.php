@extends('admin.admin_master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="col-6">

                <!-- Simple card -->
                <div class="card">
                    <center>
                        <img class="card-img-top img-fluid rounded-circle avatar-xl mt-3"
                             src="{{ asset('backend/assets/images/users/avatar-4.jpg') }}"
                             alt="Card image cap">
                    </center>
                    <div class="card-body">
                        <h4 class="card-title"> {{$user_data->name}}</h4>

                        <p class="card-text">{{ $user_data->email }}</p>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted mb-0 align-self-center">{{ date('d-m-Y',strtotime($user_data->created_at)) }}</p>
                            <a href="{{route('admin.edit')}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- footer -->
        @include('admin.footer')
        <!--end  footer -->

        </div>
    </div>
@endsection