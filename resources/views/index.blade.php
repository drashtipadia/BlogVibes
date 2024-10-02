@extends('layouts.main')
@section('main-section')
<!-- page Wrapper -->
<!-- <section class="container">
        <div class="post-slider">
            <h1 class="slider-title text-center">Trending Posts</h1>
            <div class="post-wrapper">
                <div class="card post" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        1
                    </div>
                </div>
                <div class="card post" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        2
                    </div>
                </div>
                <div class="card post" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        3
                    </div>
                </div>
                <div class="card post" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        4
                    </div>
                </div>
                <div class="card post" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        5
                    </div>
                </div>

            </div>
        </div>

    
</section> -->

<!-- user review start -->
<section class="mt-5 mb-0">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3>Trending Posts </h3>
                <span class="line"></span>
            </div>
        </div>
    </div>
</section>
<section class="mb-5">

    <div class="container home-back  py-3">

        <div class="row justify-content-around">

            <div class="col-lg-4 col-md-6">
                <div class="card w-100 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Welcome</h5>

                        <p class="card-text">Posts 1</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card w-100 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Welcome</h5>

                        <p class="card-text">Posts 2</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card w-100 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Welcome</h5>

                        <p class="card-text">Posts 3</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- content start -->
<section class="container content">
    <div class="row">
        <div class="main-content col-8">
            <h1 class="recent-post-title">Recent Posts</h1>

            <div class="card mb-3" style="max-width:100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{url('/frontend/images/img1.jpg')}}" class="img-fluid rounded-start" alt="..."
                            style="height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-white">
                            <h5 class="card-title"><a href="#">The strongest and sweetesr song yet remian to
                                    besung</a></h5>
                            <i class="fa-solid fa-user"></i> Anaya Pande
                            &nbsp;
                            <i class="fa-solid fa-calendar-days"></i>11 march 2019
                            <br />
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Earum reprehenderit accusamus animi repellat eius debitis.
                            </p>
                            <div class="d-grid d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-light rounded-1 border border-dark"
                                    style="color:black;" type="button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{url('/frontend/images/img1.jpg')}}" class="img-fluid rounded-start" alt="..."
                            style="height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-white">
                            <h5 class="card-title"><a href="#">The strongest and sweetesr song yet remian to
                                    besung</a></h5>
                            <i class="fa-solid fa-user"></i> Anaya Pande
                            &nbsp;
                            <i class="fa-solid fa-calendar-days"></i>11 march 2019
                            <br />
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Earum reprehenderit accusamus animi repellat eius debitis.
                            </p>
                            <div class="d-grid d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-light rounded-1 border border-dark"
                                    style="color:black;" type="button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{url('/frontend/images/img1.jpg')}}" class="img-fluid rounded-start" alt="..."
                            style="height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-white">
                            <h5 class="card-title"><a href="#">The strongest and sweetesr song yet remian to
                                    besung</a></h5>
                            <i class="fa-solid fa-user"></i> Anaya Pande
                            &nbsp;
                            <i class="fa-solid fa-calendar-days"></i>11 march 2019
                            <br />
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Earum reprehenderit accusamus animi repellat eius debitis.
                            </p>
                            <div class="d-grid d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-light rounded-1 border border-dark"
                                    style="color:black;" type="button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{url('/frontend/images/img1.jpg')}}" class="img-fluid rounded-start" alt="..."
                            style="height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-white">
                            <h5 class="card-title"><a href="#">The strongest and sweetesr song yet remian to
                                    besung</a></h5>
                            <i class="fa-solid fa-user"></i> Anaya Pande
                            &nbsp;
                            <i class="fa-solid fa-calendar-days"></i>11 march 2019
                            <br />
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Earum reprehenderit accusamus animi repellat eius debitis.
                            </p>
                            <div class="d-grid d-md-flex justify-content-md-end">
                                <a href="#" class="btn btn-outline-light rounded-1 border border-dark"
                                    style="color:black;" type="button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="sidebar col-4">
            <div class="row">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- content end -->

<!-- user review end -->

<section class="py-4 home-back">
    <div class="container">
        <div class="row text-center text-white" id="counterSection">
            <div class="col">
                <h1 class="text-center" id="counter">200</h1>
                <p>Blogger</p>
            </div>
            <div class="col">
                <h1 class="text-center" id="counter1">500</h1>
                <p>Blog</p>
            </div>
            <div class="col">
                <h1>2023</h1>
                <p>Since</p>
            </div>
        </div>
    </div>
</section>


<script src="{{url('/frontend/js/script.js')}}"></script>
@endsection