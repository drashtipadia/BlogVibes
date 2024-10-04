@extends('layouts.main')
@section('main-section')

<div class="container justify-content-between p-5">

    <form method="post" action="{{url('user_register')}}">
        {{@csrf_field()}}
        <div class="card border-info">
            <div class="card-header text-center">
                <h2> Registration </h2>
            </div>
            <div class="card-body">
                <div>
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="rname" name="rname" class="form-control" required />


                </div>
                <div>
                    <label class="form-label" for="typeEmail">Email</label>
                    <input type="email" id="remail" name="remail" class="form-control" required />

                </div>
                <div>
                    <label class="form-label" for="number">Phone number</label>
                    <input type="text" id="rnumber" name="rnumber" class="form-control" required />

                </div>
                <div>
                    <label class="form-label" for="about">About YourSelf</label>
                    <textarea id="about" name="aboutuser" class="form-control" required></textarea>

                </div>
                <div>
                    <label class="form-label" for="typePassword">Password</label>
                    <input type="password" id="rpassword" name="rpassword" class="form-control " required />

                </div>
                <div>
                    <label class="form-label" for="typePassword">Confirm Password</label>
                    <input type="password" id="rcpassword" name="rcpassword" class="form-control " required />

                </div>
            </div>
            <div class="card-footer text-muted">
                <!-- <input type="reset" class="btn btn-secondary" value="Reset"></input> -->
                <!-- class="btn btn-secondary" -->
                <input type="submit" class="btn btn-primary" value="Submit"></input>
                <!-- class="btn btn-primary" -->
            </div>
        </div>

</div>
</form>
</div>



@endsection