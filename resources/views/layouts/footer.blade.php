<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" />
</head>

<body>

    <footer class="text-light py-5 footer">
        <div class="container">
            <div class="row">

                <!-- First Section -->
                <div class="col-md-4 p-3 footer-about">
                    <h4>BlogVibes</h4>
                    <p class="lead">GoodVibes is functional blogger website...............</p>
                    <div class="contact">
                        <span><i class="fa-solid fa-phone" style="color: #ffffff;"></i>&nbsp;123-456-789 </span><br />
                        <span><i class="fa-solid fa-envelope" style="color: #ffffff;"></i>&nbsp; goodvibes@gmail.com
                        </span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fa-brands fa-facebook fa-lg" style="color: #ffffff;"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram fa-lg" style="color: #ffffff;"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter fa-lg" style="color: #ffffff;"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube fa-lg  " style="color: #ffffff;"></i></a>
                    </div>
                </div>
                <!-- Second section -->
                <div class="col-md-4 p-3 footer-link">
                    <h4> Quick Links</h4>
                    <ul class="footer-link">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('about')}}">About us</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="{{url('category')}}">Category</a></li>
                    </ul>
                </div>

                <!-- Third Section -->
                <div class="col-md-4 p-3 footer-contact">
                    <h4>Contact Us</h4>
                    <form action="{{url('contact')}}" method="post" class="mt-3">
                        {{@csrf_field()}}
                        <div class="mb-3">
                            <input type="email" class="form-control" name="contactemail" aria-describedby="emailHelp"
                                placeholder="Your Email Address">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" type="text" name="contactmessage" row="3"
                                placeholder="Your Message here.."></textarea>

                        </div>

                        <button type="submit" class="btn btn-light" style="width: 100%;;"><i
                                class="fa-solid fa-envelope"></i>
                            Send</button>

                    </form>


                </div>
            </div>
        </div>
    </footer>

    <footer class="footer-bottom text-light py-2 footer text-center">
        <p>&copy; CopyRight | Designed by Drashti Padia</p>
    </footer>



    <script src="{{url('frontend/js/bootstrap.js')}}"></script>
    <script src="{{url('frontend/js/all.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
</body>

</html>