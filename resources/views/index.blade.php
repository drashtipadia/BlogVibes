@extends('layouts.main')
@push('title')
<title>Index</title>
@endpush
@section('main-section')
<section class="m-5">

    <div class="container py-3">
        <div class="row">
            @foreach ($randomblog as $blog)


            <div class="col-md-4 ">

                <div class=" text-center bg-light">
                    <div class="py-2"><a href="{{url('bloglist')}}/{{$blog->category_id}}"
                            class="text-dark">{{$blog->getcategory->category_name}}</a></div>
                    <p class="fs-5 FacultyGlyphic mb-2">{{$blog->title}}</p>


                    <a href="{{url('/blogdetails/')}}/{{$blog->post_id}}">
                        <img src="{{url('/uploads/')}}/{{$blog->image}}" class="w-100" height="300px">
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section>
<section class="container">
    <hr />
    <div class="justify-content-center d-flex p-4"><i class="fa-solid fa-heart fa-2xl" style="color: #3a6139;"></i>
    </div>
    <div class="text-center fw-bold" style="font-family: EduAus;">
        <p class="lead fs-3">"This is Message from the Blogger,</p>
        <p class="lead fs-3">Write Something Inspirational for</p>
        <p class="lead fs-3">the Readers To Enjoy"</p>
    </div>
    <hr />
</section>
<!-- content start -->
<section class="container content">
    <div class="row">
        <div class="main-content col-lg-8 ">
            <h1 class="recent-post-title m-3 FacultyGlyphic">Recent Posts</h1>

            @foreach ($recent as $rec)

            <div class="card m-3 w-100">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{url('/uploads/')}}/{{$rec->image}}" class="rounded-start rounded-end" alt="..."
                            width="100%" height="248px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-white p-0">
                            <h4 class="card-title py-3 FacultyGlyphic">{{$rec->title}}</h4>
                            <i class="fa-solid fa-user"></i> {{$rec->getUser->name}}
                            &nbsp;
                            <i class="fa-solid fa-calendar-days"></i>&nbsp;{{$rec->created_at->format('d-M-Y')}}
                            <br />
                            <p class=" mt-2">
                                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Earum reprehenderit accusamus animi repellat eius debitis. -->
                                {{substr($rec->content, 0, 159) . '...'}}

                            </p>

                        </div>
                        <div class="d-md-flex justify-content-md-end px-2">
                            <a href="{{url('blogdetails/')}}/{{$rec->post_id}}"
                                class="btn btn-outline-light rounded-1 border border-dark" style="color:black;"
                                type="button">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="sidebar col-lg-4 py-5">
            <div class="row">
                <form class="d-flex" method="post" action="{{url('/searching')}}">
                    {{@csrf_field()}}
                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- content end -->

<!-- user review end -->

<section class="py-4 home-back">
    <div class="container">
        <div class="row text-center text-white" id="counterSection">
            <div class="col">
                <h1 class="text-center" id="counter">{{$usercount}}</h1>
                <p>Blogger</p>
            </div>
            <div class="col">
                <h1 class="text-center" id="counter1">{{$blogcount}}</h1>
                <p>Blog</p>
            </div>
            <div class="col">
                <h1>2024</h1>
                <p>Since</p>
            </div>
        </div>
    </div>
</section>


<script src="{{url('/frontend/js/script.js')}}"></script>
@endsection