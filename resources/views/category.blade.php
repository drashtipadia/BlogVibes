@extends('layouts.main')
@section('main-section')

<section class="mt-5 mb-0">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3>Category </h3>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="container p-5 d-flex justify-content-center">
        <div class="row g-3">
            @foreach ($category as $val)


            <a href="{{url('bloglist')}}/{{$val->category_id}}" class="btn btn-primary">{{$val->category_name}}</a>


            @endforeach
        </div>
    </div>
</section>

@endsection