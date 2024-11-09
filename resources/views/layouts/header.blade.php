<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" />
    <link rel="icon" href="{{url('frontend/images/BlogVibes.png')}}">
    @stack('title')
</head>

<body>
    <div class="container-fluid position-relative head">

        <nav class="navbar navbar-expand-lg  py-3 py-lg-0 px-0 px-lg-5">
            <a href="{{url('/')}}" class="navbar-brand font-weight-bold ">BlogVibes</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon">
                    <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <div class="navbar-nav font-weight-bold mx-auto py-0 px-3">
                    <a href="{{url('/')}}" class="nav-item nav-link ">Home</a>
                    <a href="{{url('category')}}" class="nav-item nav-link">Category</a>
                    <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{url('blogs')}}" class="nav-item nav-link">Blogs</a>
                </div>


                <a class="btn auth-btn px-4 m-2" type="button" href="{{url('createblog')}}">Create Blog</a>
                @if (session()->has('id'))

                    <a class="btn auth-btn px-4 m-2" type="button" href="{{url('profile')}}">{{session('name')}}</a>

                    <a class="btn auth-btn px-4" type="button" href="{{url('logout')}}">Logout</a>



                @else
                    <a class="btn auth-btn px-4" type="button" href="{{url('login')}}">Login</a>
                    <a class="btn auth-btn px-4 m-2" type="button" href="{{url('registration')}}">Register</a>

                @endif



        </nav>
    </div>
    <!-- Navbar End -->

    <script src="{{url('frontend/js/bootstrap.js')}}"></script>
    <script src="{{url('frontend/js/all.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
</body>

</html>