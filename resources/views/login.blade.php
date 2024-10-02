@extends('layouts.main')
@section('main-section')
<div class="container justify-content-between p-5">

    <form method="post" action="{{url('user_login')}}" class="m-4">
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
                    <input type="text" id="" name="loginemail" class="form-control" required />

                </div>
                <div>
                    <label class="form-label" for="typePassword">Password</label>
                    <input type="password" id="" name="loginpwd" class="form-control " required />

                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">login</button>
            </div>
        </div>
    </form>
</div>
@endsection