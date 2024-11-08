@extends('layouts.main')
@push('title')
<title>Blogs</title>
@endpush
@section('main-section')

<section>
    <div class="container p-5">

        <div class="row g-3">
            @foreach ($posts as $post)
            <div class="col-6">


                <div class="card">
                    <div class="card-header">{{$post->title}}</div>
                    <div class="card-body">


                        <div class="row g-2">
                            <div class="col-md-4">
                                <img src="{{url('/uploads/' . $post->image)}}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">


                                <p class="contentlimit"> {{$post->content}}</p>
                                <p> {{$post->tags}}</p>

                                <a href="{{url('/blogdetails/')}}/{{$post->post_id}}">Read more....</a>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
            @endforeach
        </div>
    </div>

</section>

@endsection