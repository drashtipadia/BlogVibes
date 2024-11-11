@extends('admin.layout.main')
@push('title')
    <title>Comment List</title>
@endpush

@section('admin-section')

<div class="container d-flex  justify-content-center p-4">
    <h1 class="m-auto">Comments</h1>
</div>
<section>
    <div class="justify-content-center mt-3 mb-0">
        @if (session()->has('comstatus'))
            <div class="alert alert-primary w-25 p-3">
                {{session()->get('comstatus')}}
            </div>
        @endif
    </div>
    <div class="container bg-light justify-content-center text-center p-3">
        <div class="row  fs-5 fw-bold ">
            <div class="col-2 ">No.</div>
            <div class="col-4">Comments</div>
            <div class="col-2">Post</div>
            <div class="col-2">User</div>
            <div class="col-2">Status</div>

        </div>
        <hr />

        @foreach ($com as $val)
            <div class="row">
                <div class="col-2">
                    <h5>{{$val->comment_id}}</h5>
                </div>
                <div class="col-4">
                    <h5>{{$val->comments}}</h5>
                </div>
                <div class="col-2">
                    <h5>{{$val->get_post->title}}</h5>
                </div>
                <div class="col-2">
                    <h5>{{$val->get_user->name}}</h5>
                </div>
                <div class="col-2">
                    @if ($val->com_status === 1)
                        <a href="{{url('comstatuschange/')}}/{{$val->comment_id}}" class="btn btn-success">Active</a>
                    @else
                        <a href="{{url('comstatuschange/')}}/{{$val->comment_id}}" class="btn btn-danger">Hide</a>
                    @endif
                </div>

            </div>
            <hr />

        @endforeach
    </div>
</section>


@endsection