@extends('layouts.main')
@push('title')
<title>Blogs</title>
@endpush
@section('main-section')

<section class="mt-5 mb-0">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3>Blogs </h3>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="row g-3">
            @if ($posts->isEmpty())
            <h1>No Blogs</h1>
            @else
            @foreach ($posts as $post)
            <div class="col-lg-6">
                <div class="card border border-success">
                    <div class="row g-2 p-2">
                        <div class="col-lg-4">
                            <img src="{{url('/uploads/' . $post->image)}}" class="rounded-start rounded-end"
                                width="100%" height="230px" alt="...">
                        </div>
                        <div class="col-lg-8 p-2 text-center">
                            <p>{{$post->created_at->format('F d, Y')}}</p>
                            <h2 class="mb-4" style="font-family:serif-Times New Roman;">{{$post->title}}
                                <!-- {{substr($post->title, 0, 21)}} -->
                            </h2>
                            <p class="m-0">{{substr($post->content, 0, 100) . '... '}}<a
                                    href="{{url('/blogdetails/')}}/{{$post->post_id}}" class="">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

</section>

@endsection