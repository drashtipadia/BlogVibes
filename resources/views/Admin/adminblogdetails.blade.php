@extends('admin.layout.main')
@section('admin-section')

<section>
    <div class="container d-flex justify-content-center p-4">
        <div class="card" style="width:900px;">
            @foreach ($posts as $val)

            <div class="card-header fs-4">
                {{$val->title}}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-auto fs-5">content:</div>
                    <div class="col fs-6">{{$val->content}}</div>
                </div>
                <div class="row">
                    <div class="col-auto fs-5">Image:</div>
                    <div class="col"><img src="{{url('/uploads/' . $val->image)}}" height="300px" width="300px" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto fs-5">Tags:</div>
                    <div class="col">{{$val->tags}}</div>
                </div>
                <div class="row">
                    <div class="col-auto fs-5">Category:</div>
                    <div class="col">{{$val->getcategory->category_name}}</div>
                </div>
                <div class="row">
                    <div class="col-auto fs-5">User:</div>
                    <div class="col">{{$val->getUser->name}}</div>
                </div>
                <div class="row">
                    <div class="col-auto fs-5">Date:</div>
                    <div class="col">{{$val->created_at}}</div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

</section>

@endsection