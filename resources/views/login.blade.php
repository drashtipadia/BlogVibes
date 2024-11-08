@extends('layouts.main')
@push('title')
    <title>Login</title>
@endpush
@section('main-section')
<div class="container d-flex justify-content-center p-5 ">

    <form method="post" action="{{url('user_login')}}" style="width: 600px;">
        {{@csrf_field()}}
        <div class="card border-info">
            <div class="card-header text-center">
                <h2> Login </h2>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <p>{{session()->get('success')}}</p>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        <p>{{session()->get('error')}}</p>
                    </div>

                @endif
                <div>
                    <label class="form-label" for="typeEmail">Email</label>
                    <input type="text" id="" name="loginemail" class="form-control" />
                    <div class="text-danger"> @if($errors->has('loginemail'))
                        {{$errors->first('loginemail')}}
                    @endif

                    </div>

                </div>
                <div>
                    <label class="form-label" for="typePassword">Password</label>
                    <input type="password" id="" name="loginpwd" class="form-control " />
                    <div class="text-danger"> @if($errors->has('loginpwd'))
                        {{$errors->first('loginpwd')}}
                    @endif
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex text-muted justify-content-center p-3">
                <button type="submit" class="btn btn-primary w-50 ">Login</button>
            </div>
        </div>
    </form>
</div>
@endsection