@extends('admin.layout.Main')
@push('title')
    <title>Dashboard</title>
@endpush
@section('admin-section')

<!-- Comments={{$com}}
Category={{$cat}}
Contact={{$con}}
Users={{$user}} -->
<div class="container d-flex">
    <div class="justify-content-center p-5">


        <div class="badge bg-primary mx-2" style="width: 10rem; height:5rem;">
            <h5>Blogs</h5>
            <h4>{{$post}}</h4>
        </div>

        <div class=" badge bg-primary mx-2" style="width: 10rem; height:5rem;">
            <h5>Category</h5>
            <h4>{{$cat}}</h4>
        </div>

        <div class="badge bg-primary mx-2" style="width: 10rem; height:5rem;">
            <h5>Comments</h5>
            <h4>{{$com}}</h4>
        </div>

        <div class="badge bg-primary mx-2" style=" width: 10rem; height:5rem;">
            <h5>Contact</h5>
            <h4>{{$con}}</h4>
        </div>
        <div class="badge bg-primary mx-2" style="width: 10rem; height:5rem;">
            <h5>User</h5>
            <h4>{{$user}}</h4>
        </div>

    </div>
</div>

<!-- <div class="progress">
        <h6>Blogs </h6>
        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="{{$post}}" aria-valuemin="0"
            aria-valuemax="100">{{$post}}</div>
    </div> -->

@endsection