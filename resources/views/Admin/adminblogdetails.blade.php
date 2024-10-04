@extends('admin.layout.main')
@section('admin-section')

<section>
    <div class="container mt-3">
        <div class="card">
            @foreach ($posts as $data)
            <div class="card-header">
                {{$data->title}}
            </div>
            <div class="card-body">


                <p>content:{{$data->content}}</p>


                <p>Image: <img src="{{url('/uploads/img/' . $data->image)}}" /></p>
                <p>Tag:{{$data->tags}}</p>
                <p>Category:{{$data->getcategory}}</p>
                <p>User:{{$data->getUser}}</p>
                <p>Time:{{$data->created_at}}</p>
            </div>
            <div class="card-footer">

            </div>
            @endforeach
        </div>
    </div>

</section>

@endsection