@extends('admin.layout.main')
@section('admin-section')


<div class="container d-flex  justify-content-center p-4">
    <h1 class="m-auto">Blogs</h1>

</div>


<section>
    <div class="container bg-light p-3">
        <div class="row  justify-content-center text-center ">
            <div class="col-2">
                <h4>No.</h4>
            </div>
            <div class="col-2">
                <h4>Title</h4>
            </div>
            <div class="col-2">
                <h4>User</h4>
            </div>
            <div class="col-2">
                <h4>Category</h4>
            </div>
            <div class="col-2">
                <h4>Date</h4>
            </div>
            <div class="col-2">
                <h4>Details</h4>
            </div>

        </div>
        <hr />

        @foreach ($postlist as $posts)
            <div class="row justify-content-center text-center p-0">
                <div class="col-2">
                    <p>{{$posts->post_id}}</p>
                </div>
                <div class="col-2">
                    <p>{{$posts->title}}</p>
                </div>
                <div class="col-2">
                    <p>{{$posts->getuser->name}}</p>
                </div>
                <div class="col-2">
                    <p>{{$posts->getcategory->category_name}}</p>
                </div>
                <div class="col-2">
                    <p>{{$posts->created_at}}</p>
                </div>
                <div class="col-2">
                    <a href="{{url('/blog/')}}/{{$posts->post_id}}">Read More</a>
                </div>
                <hr />
            </div>

        @endforeach
    </div>
</section>
@endsection