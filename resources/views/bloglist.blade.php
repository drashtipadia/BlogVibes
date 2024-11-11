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


                    <div class="card border border-success" style="height:250px">

                        <div class="row g-2 p-2">
                            <div class="col-md-4">
                                <img src="{{url('/uploads/' . $post->image)}}" class="rounded-start rounded-end"
                                    width="100%" height="230px" alt="...">
                            </div>
                            <div class="col-md-8 p-2 text-center">
                                <p>{{$post->created_at->format('F d, Y')}}</p>
                                <h2 class="mb-4" style="font-family:serif-Times New Roman;">{{substr($post->title, 0, 21)}}
                                </h2>
                                <p class="m-0">{{substr($post->content, 0, 100) . '... '}}<a
                                        href="{{url('/blogdetails/')}}/{{$post->post_id}}" class="">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>

@endsection