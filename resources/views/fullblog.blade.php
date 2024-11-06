@extends('layouts.main')
@section('main-section')

<section>
    <div class="container mt-3">
        <div class="card">
            @foreach ($posts as $val)

            @endforeach


            <div class="card-header">
                {{$val->title}}
            </div>
            <div class="card-body">

                <p>content: {{$val->content}}</p>
                <p> Image : <img src="{{url('/uploads/' . $val->image)}}" height="400px" /></p>
                <p>Tags: {{$val->tags}}</p>
                <p>Category:{{$val->getcategory->category_name}}</p>
                <p>User:{{$val->getUser->name}}</p>
                <p>Date:{{$val->created_at}}</p>


            </div>
            <div class="card-footer">
                <div class="container">
                    <div class="row">
                        @foreach ($comments as $com)
                        <p>{{$com->comment_id}}</p>
                        <p>{{$com->comments}}</p>
                        <p>{{$com->get_user->name}}</p>
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
    </div>

</section>

@endsection