@extends('layouts.main')
@push('title')
<title>Blog</title>
@endpush
@section('main-section')

<section>
    <div class="container justify-content-center p-5">

        @foreach ($posts as $val)




        <div class="">
            {{$val->title}}
        </div>
        <div class="">

            <p>content: {{$val->content}}</p>
            <p> Image : <img src="{{url('/uploads/' . $val->image)}}" height="400px" /></p>
            <p>Tags: {{$val->tags}}</p>
            <p>Category:{{$val->getcategory->category_name}}</p>
            <p>User:{{$val->getUser->name}}</p>
            <p>Date:{{$val->created_at}}</p>


        </div>
        @endforeach
        <div class="">
            <div class="container bg-light">
                <div class="row">
                    @foreach ($comments as $com)
                    <p><i class="fa-solid fa-user"></i> &nbsp;{{$com->get_user->name}}</p>
                    <p class="">{{$com->comments}} &nbsp;
                        @if($com->user_id === session('id') || $com->post_id === session('id')) <span> Hide</span>
                        @endif
                    </p>

                    @endforeach

                </div>
                <form method="post" action="{{url('addcomment')}}">
                    {{@csrf_field()}}
                    <input type="text" name="comment" required />
                    <input type="text" hidden name="postid" value="{{$val->post_id}}" />
                    <input type="text" hidden name="userid" value="{{session('id')}}" />
                    <input type="submit" value="comment">
                </form>
            </div>
        </div>



    </div>

</section>

@endsection