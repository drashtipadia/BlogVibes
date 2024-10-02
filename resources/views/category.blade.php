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
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{url('/frontend/images/img2.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
    </div>
</section>

@endsection