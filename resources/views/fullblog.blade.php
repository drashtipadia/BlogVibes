@extends('layouts.main')
@push('title')
    <title>Blog</title>
@endpush
@section('main-section')

<section>
    <div class="container p-5 bg-light">

        @foreach ($posts as $val)
            <div class="">
                <div class="fs-1 text-center mb-3 FacultyGlyphic">{{$val->title}}</div>

                <div class="m-2 fs-5">{{$val->created_at->format('F d, Y')}} by <span
                        class="fst-italic text-decoration-underline">{{$val->getUser->name}}</span></div>

                <p class="fw-normal">&emsp; &emsp; &emsp; &emsp; {{$val->content}}</p>
                <div class="justify-content-center d-flex p-3"> <img src="{{url('/uploads/' . $val->image)}}" width="600px"
                        height="350px" />
                </div>
                <div><i class="fa-solid fa-tag"></i>&emsp;{{$val->tags}}</div>
                <div><i class="fa-solid fa-folder"></i>&emsp;{{$val->getcategory->category_name}}</div>

            </div>
        @endforeach
    </div>

    <div class="container px-5 mb-3 bg-light">
        <h5><i class="fa-solid fa-comments"></i> Comments</h5>
        @foreach ($comments as $com)

            <div class="border border-dark m-2 p-2">
                <i class="fa-solid fa-user"></i> &nbsp; {{$com->get_user->name}}

                <br />
                {{$com->comments}} &nbsp;
                @if ($com->get_post->user_id === session('id'))

                    <a href="{{url('comstatuschange/')}}/{{$com->comment_id}}">Hide</a>

                @endif
                @if($com->user_id === session('id') || $com->post_id === session('id'))
                    <a href="{{url('deletecomment/')}}/{{$com->comment_id}}" class="text-danger"> <i
                            class="fa-solid fa-trash"></i></a>
                @endif

            </div>

        @endforeach

        <form method="post" action="{{url('addcomment')}}" class="py-3">
            {{@csrf_field()}}
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <input type="text" class="form-control" name="comment" required />
                </div>
                <input type="text" hidden name="postid" value="{{$val->post_id}}" />
                <input type="text" hidden name="userid" value="{{session('id')}}" />
                <div class="col-auto"><input type="submit" class="form-control btn btn-secondary" value="comment"></div>
            </div>
        </form>

    </div>






</section>

@endsection