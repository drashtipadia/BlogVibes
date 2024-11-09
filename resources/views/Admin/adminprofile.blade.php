@extends('admin.layout.main')
@push('title')
    <title>Admin Profile</title>
@endpush
@section('admin-section')


<section id="adminProfileSection" class="mt-5">
    <div class="container d-flex justify-content-center">
        <h1 class="m-auto">Admin Profile</h1>
    </div>
</section>
<section id="adminprofile" class="py-5">
    <div class="container justify-content-around border border-primary-5 p-5 bg-light">
        <div class="row justify-content-around text-center">
            @foreach ($res as $val)
                <h4>username: <span class="fs-3">{{$val->admin_name}}</span></h4>

            @endforeach

            <div class="justify-content-center d-flex mt-3">
                @if (session()->has('success'))
                    <div class="alert alert-success w-25">
                        <p>{{session()->get('success')}}</p>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger w-25">
                        <p>{{session()->get('error')}}</p>
                    </div>

                @endif
            </div>




            <div class="col-6 p-4" id="changepassword">
                <div class="w-80">
                    <h3 class="text-center">Change Password</h3>
                    <form id="changepasswordForm" class="row g-3 m-auto bg-light" method="POST"
                        action="{{url('updateadminpwd')}}">
                        {{@csrf_field()}}
                        <input type="text" hidden name="id" value="{{session('a_id')}}" />
                        <div class="col-12 ">
                            <input type="password" name="adminoldpwd" placeholder="Old Password"
                                class="form-control w-100 border-1" />
                            <div class="text-danger"> @if($errors->has('adminoldpwd'))
                                {{$errors->first('adminoldpwd')}}
                            @endif

                            </div>

                        </div>
                        <div class="col-12 ">
                            <input type="password" name="adminnewpwd" placeholder="New Password"
                                class="form-control w-100 border-1" />
                            <div class="text-danger"> @if($errors->has('adminnewpwd'))
                                {{$errors->first('adminnewpwd')}}
                            @endif

                            </div>

                        </div>
                        <div class="col-12 ">
                            <input type="password" name="admincpwd" placeholder="Confirm Password"
                                class="form-control w-100 border-1" />
                            <div class="text-danger"> @if($errors->has('admincpwd'))
                                {{$errors->first('admincpwd')}}
                            @endif

                            </div>

                        </div>
                        <div class="col-12 pb-4">
                            <button type="submit" class="btn btn-primary w-100"
                                onclick="{{url('updateadminpwd')}}">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</section>

@endsection