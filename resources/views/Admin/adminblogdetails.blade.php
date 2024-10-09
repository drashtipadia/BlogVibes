@extends('admin.layout.main')
@section('admin-section')

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
                <p> Image : <img src="{{url('/uploads/img/' . $val->image)}}" /></p>
                <p>Tags: {{$val->tags}}</p>
                <p>Category:{{$val->getcategory->category_name}}</p>
                <p>User:{{$val->getUser->name}}</p>
                <p>Date:{{$val->created_at}}</p>


            </div>
            <div class="card-footer">

            </div>


        </div>
    </div>

</section>

@endsection