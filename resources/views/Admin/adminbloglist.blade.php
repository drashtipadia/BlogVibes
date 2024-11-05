@extends('admin.layout.main')
@section('admin-section')


<div class="container d-flex  justify-content-center p-4">
    <h1 class="m-auto">Blogs</h1>

</div>


<section>
    <div class="container justify-content-center text-center bg-light p-3">
        <div class="row fs-5 fw-bold  ">
            <div class="col-2">
                No.
            </div>
            <div class="col-2">
                Title
            </div>
            <div class="col-2">
                User
            </div>
            <div class="col-2">
                Category
            </div>
            <div class="col-2">
                Date
            </div>
            <div class="col-2">
                Details
            </div>

        </div>
        <hr />

        @foreach ($postlist as $posts)
            <div class="row ">
                <div class="col-2">
                    <h5>{{$posts->post_id}}</h5>
                </div>
                <div class="col-2">
                    <h5>{{$posts->title}}</h5>
                </div>
                <div class="col-2">
                    <h5>{{$posts->getuser->name}}</h5>
                </div>
                <div class="col-2">
                    <h5>{{$posts->getcategory->category_name}}</h5>
                </div>
                <div class="col-2">
                    <h5>
                        {{$posts->created_at->format('d-M-Y')}}
                    </h5>
                </div>
                <div class="col-2">
                    <a href="{{url('/blog/')}}/{{$posts->post_id}}">Read More</a>
                </div>

            </div>
            <hr />

        @endforeach
    </div>
</section>
@endsection