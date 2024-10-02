<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" />
    <title>Admin Login</title>
</head>


<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card " style="border-radius: 1rem;">
                    <div class="card-body p-4 text-center">
                        <h3 class="mb-4">Admin Login</h3>
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            <p>{{session()->get('error')}}</p>
                        </div>

                        @endif
                        <form method="post" action="{{url('adminlogin')}}">
                            {{@csrf_field()}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">Username</label>
                                <input type="text" id="adminname" name="adminname" class="form-control form-control-lg"
                                    required />

                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="typePasswordX-2">Password</label>
                                <input type="password" id="adminpwd" name="adminpwd"
                                    class="form-control form-control-lg" required />

                            </div>

                            <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Navbar End -->
<script src="{{url('frontend/js/bootstrap.js')}}"></script>
<script src="{{url('frontend/js/all.min.js')}}"></script>
</body>

</html>