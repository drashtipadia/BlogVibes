@extends('admin.layout.main')
@section('admin-section')

<section>
    <div class="container mt-3">
        <div class="card">

            <div class="card-header">
                {{$data['post']->title}}
            </div>
            <div class="card-body">

                <p>content: {{$data['post']->content}}</p>
                <p> Image : <img src="{{url('/uploads/img/' . $data['post']->image)}}" /></p>
                <p>Tags: {{$data['post']->tags}}</p>
                <p>Category:{{$data['category']}}</p>
                <p>User:{{$data['username']}}</p>
                <p>Date:{{$data['post']->created_at}}</p>
            </div>
            <div class="card-footer">

            </div>


        </div>
    </div>

</section>

@endsection