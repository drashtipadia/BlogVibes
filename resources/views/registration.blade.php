@extends('layouts.main')
@push('title')
<title>Registration</title>
@endpush
@section('main-section')

<div class="container d-flex justify-content-center p-5">

    <form method="post" action="{{url('user_register')}}" style="width: 600px;">
        {{@csrf_field()}}
        <div class="card border-info">
            <div class="card-header text-center">
                <h2> Registration </h2>
            </div>
            <div class="card-body">
                <div>
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="rname" name="rname" class="form-control" />
                    <div class="text-danger">@if ($errors->has('rname'))
                        {{$errors->first('rname')}}
                        @endif
                    </div>
                </div>
                <div>
                    <label class="form-label" for="typeEmail">Email</label>
                    <input type="text" id="remail" name="email" class="form-control" />
                    <div class="text-danger">@if ($errors->has('email'))
                        {{$errors->first('email')}}
                        @endif
                    </div>

                </div>
                <div>
                    <label class="form-label" for="number">Phone number</label>
                    <input type="text" id="rnumber" name="rnumber" class="form-control" />
                    <div class="text-danger">@if ($errors->has('rnumber'))
                        {{$errors->first('rnumber')}}
                        @endif
                    </div>

                </div>
                <div>
                    <label class="form-label" for="about">About YourSelf</label>
                    <textarea id="about" name="aboutuser" class="form-control"></textarea>
                    <div class="text-danger">@if ($errors->has('aboutuser'))
                        {{$errors->first('aboutuser')}}
                        @endif
                    </div>

                </div>
                <div>
                    <label class="form-label" for="typePassword">Password</label>
                    <input type="password" id="rpassword" name="rpassword" class="form-control" />
                    <div class="text-danger">@if ($errors->has('rpassword'))
                        {{$errors->first('rpassword')}}
                        @endif
                    </div>
                </div>
                <div>
                    <label class="form-label" for="typePassword">Confirm Password</label>
                    <input type="password" id="rcpassword" name="rcpassword" class="form-control" />
                    <div class="text-danger">@if ($errors->has('rcpassword'))
                        {{$errors->first('rcpassword')}}
                        @endif
                    </div>

                </div>
            </div>
            <div class="card-footer d-flex justify-content-center p-3">

                <input type="submit" class="btn btn-primary w-50" value="Submit"></input>

            </div>
        </div>

</div>
</form>
</div>



@endsection