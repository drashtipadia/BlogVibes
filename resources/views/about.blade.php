@extends('layouts.main')
@push('title')
<title>About us</title>
@endpush
@section('main-section')
<section id="page-name">
    <div class="container h-200">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>About us</h1>
            </div>
        </div>
    </div>
</section>
<!-- page header end -->
<!-- mission -->
<section id="mission" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3>Our Mission</h3>
                <span class="line"></span>
                <p class="lead"> <i class="fa-solid fa-quote-left fa-2xl" style="color: #ffd43b;"></i> Established in
                    2020,
                    BlogVibes is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae alias sed
                    voluptates impedit ipsam laudantium reprehenderit? Mollitia earum eos soluta quaerat? Commodi
                    officiis
                    <i class="fa-solid fa-quote-right fa-2xl" style="color: #ffd43b;"></i>
                </p>
                </i>
            </div>
        </div>
    </div>
</section>
<!-- mission -->
<!-- page 2 part start -->
<section class="aboutus">
    <div class="container">
        <div class="about py-5">
            <div class="row">
                <div class=" text-center py-1">
                    <h1> Welcome to BlogVibes</h1>
                    <span class="line"></span>
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="py-5">
                                Best Blog create platform
                            </h1>
                            <P class="lead">
                                BlogVibes is a Ahemdabad-based firm, established in 2020, and the best home help agency
                                in
                                Ahemdabad,
                                offering part-time and full-time maids, cooks, babysitters, home nurses (male and
                                female), home
                                attendants, senior citizen care, new-born baby care, Etc. in all over Ahemdabad, Narol,
                                Isaon,
                                Maninagar,Naravrangura and Neharunagr locations.
                                We presently have more than 35,000 male and female staff and caretakers with us, and we
                                have offered
                                exemplary services for the last 14 years. We are currently serving 18,000+ homes in
                                Mumbai.
                            </P>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="{{url('/frontend/images/BlogVibes.png')}}" class="img-fluid w-100 h-100  py-5" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection