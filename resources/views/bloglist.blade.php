@extends('layouts.main')
@section('main-section')

<section>
    <div class="container p-5">

        <div class="row g-3">
            <div class="col-6">
                @foreach ($posts as $post)

                <div class="card">
                    <div class="card-header">{{$post->title}}</div>
                    <div class="card-body">


                        <div class="row g-2">
                            <div class="col-md-4">
                                <img src="{{url('/uploads/img/' . $post->image)}}" class="img-fluid rounded-start"
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

                @endforeach
            </div>
        </div>
    </div>

</section>

@endsection