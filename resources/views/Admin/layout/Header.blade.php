<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/adminstyle.css')}}" rel="stylesheet" />



</head>

<body>

    <nav class="navbar navbar-dark bg-dark py-4">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1 ">Welcome {{session('a_name')}} </h1>
            <a class="btn btn-light" href="{{url('adminlogout')}}" type="button">Logout</a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg secondnavbar">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('indexAdmin')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('categorydisplay')}}">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admincomments')}}">Comments</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('adminBlogs')}}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('users')}}">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contactList')}}">Conatct user</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Profile</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>



    <script src="{{url('frontend/js/bootstrap.js')}}"></script>
    <script src="{{url('frontend/js/all.min.js')}}"></script>
</body>

</html>