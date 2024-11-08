@extends('admin.layout.main')
@push('title')
<title>User List</title>
@endpush
@section('admin-section')
<div class="container d-flex  justify-content-center p-4">
    <h1 class="m-auto">User</h1>
</div>

<section>
    <div class="container bg-light justify-content-center text-center p-3">
        <div class="row  fs-5 fw-bold ">
            <div class="col-1">No.</div>
            <div class="col-2">Name</div>
            <div class="col-2">Email</div>
            <div class="col-2">About User</div>
            <div class="col-3">Password</div>
            <div class="col-2">Number</div>

        </div>
        <hr />
        @foreach ($users as $user)
        <div class="row">
            <div class="col-1">{{$user->user_id}}</div>
            <div class="col-2">{{$user->name}}</div>
            <div class="col-2">{{$user->email}}</div>
            <div class="col-2">{{$user->about_user}}</div>
            <div class="col-3">{{$user->password}}</div>
            <div class="col-2">{{$user->number}}</div>
        </div>
        <hr />
        @endforeach


    </div>
</section>

@endsection