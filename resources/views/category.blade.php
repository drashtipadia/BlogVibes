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
            @foreach ($category as $val)

                <div class="col-4">
                    <div class="badge btn w-100" style="background: #79AC78;">
                        <a href="{{url('bloglist')}}/{{$val->category_id}}"
                            class="btn w-100 text-white">{{$val->category_name}}</a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>

@endsection