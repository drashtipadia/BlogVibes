@extends('admin.layout.main')
@push('title')
    <title>Blog Details</title>
@endpush
@section('admin-section')

<section>
    <div class="container d-flex justify-content-center p-4 bg-light">

        <div class="text-center px-5">
            @foreach ($posts as $val)
                <h1 class="">{{$val->title}}</h1>
                <hr />
                <h5 class="text-center">Content </h5>
                <p>{{$val->content}}</p>
                <h5 class="text-center">Image </h5>
                <img src="{{url('/uploads/' . $val->image)}}" height="300px" width="500px" />

                <div class="mt-4"><span class="fs-5 fw-bold">Tags : &nbsp;</span><span>{{$val->tags}}
                    </span></div>

                <div><span class="fs-5 fw-bold">Category:
                        &nbsp;</span><span>{{$val->getcategory->category_name}}</span></div>
                <div><span class="fs-5 fw-bold">User:
                        &nbsp;</span><span>{{$val->getUser->name}}</span></div>
                <div><span class="fs-5 fw-bold">Date:
                        &nbsp;</span><span>{{$val->created_at->format('d-M-Y')}}</span></div>
                <div><span class="fs-5 fw-bold"> Status: </span>
                    @if($val->status === 1)
                        <span class="text-success">
                            Active
                        </span>
                    @endif
                    @if($val->status === 0)
                        <span class="text-danger">
                            Hide
                        </span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>


</section>

@endsection