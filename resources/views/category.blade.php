@extends('layouts.main')
@push('title')
<title>Category</title>
@endpush
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
            @if ($category->isEmpty())
            <h1>No Category Available</h1>
            @else

            @foreach ($category as $val)

            <div class="col-lg-4 col-md-4 w-100">
                <div class="card w-100" style="background: #79AC78;">
                    <a href="{{url('bloglist')}}/{{$val->category_id}}"
                        class="btn text-white">{{$val->category_name}}</a>
                </div>

            </div>
            @endforeach

            @endif
        </div>
    </div>
</section>

@endsection