@extends('layouts.main')

@section('main-section')

<div class="contianer p-5">
    <div class="row bg-light">
        <div class="col-6">
            @foreach ($user as $val)
            <h1>Profile</h1>
            <p>Name: <span class="fs-6">{{$val->name}}</span></p>
            <p>Email: <span class="fs-6">{{$val->email}}</span></p>
            <p>Your Info. : <span class="fs-6">{{$val->about_user}}</span></p>
            <p>Password: <span class="fs-6">{{$val->password}}</span></p>
            <p>Number: <span class="fs-6">{{$val->number}}</span></p>
            <p>Status: <span class="fs-6">{{$val->status}}</span></p>
            @endforeach
        </div>
        <div class="col-6">
            <h1 class="text-center ">Blogs</h1>
            @foreach ($post as $data)
            <div class="row p-3">
                <div class="col-3">
                    <p class="fs-4">{{$data->title}}</p>
                </div>
                <div class="col-3"><a href="{{url('blogdetails/')}}/{{$data->post_id}}" class="btn btn-info">View</a>
                </div>
                <div class="col-3"><a href="{{url('blogupdate/')}}/{{$data->post_id}}"
                        class="btn btn-primary">Update</a></div>
                <div class="col-3"><a href="{{url('blogdelete/')}}/{{$data->post_id}}" class="btn btn-danger">Delete</a>
                </div>




            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection