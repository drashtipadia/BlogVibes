@extends('layouts.main')
@push('title')
    <title>Profile</title>
@endpush
@section('main-section')

<div class="container h-200">
    <div class="row">
        <div class="col m-5 text-center">
            <h1>My Profile</h1>
        </div>

    </div>
</div>


<div class="container bg-light">

    <div class="row py-3">
        <div class="col text-center">
            <h3>USER INFO </h3>
            <span class="line"></span>
        </div>
    </div>


    <div class="row px-4">
        @foreach ($user as $val)
            <div class="col-6 justify-content-around">
                <div class="card h-100">
                    <h1 class="text-center m-3">Details</h1>
                    @if (session()->has('userinfosuccess'))
                        <div class="px-5">
                            <div class="alert alert-success ">
                                <p>{{session()->get('userinfosuccess')}}</p>
                            </div>
                        </div>
                    @endif
                    <form method="POST" action="{{url('infoupdate')}}">
                        {{@csrf_field()}}
                        <input type="hidden" name="id" value="{{$val->user_id}}">
                        <div class="px-5 mb-3 border-3 ">
                            <input type="text" name="name" class="form-control" placeholder="Your Name"
                                Value="{{$val->name}}" required>

                        </div>
                        <div class="px-5 mb-3 border-3">
                            <input type="text" class="form-control" placeholder="Your Email" Value="{{$val->email}}"
                                disabled />
                        </div>
                        <div class="px-5 mb-3 border-3 ">
                            <input type="text" name="number" class="form-control" placeholder="Your Number"
                                Value="{{$val->number}}" required />
                            <div class="text-danger"> @if($errors->has('number'))
                                {{$errors->first('number')}}
                            @endif
                            </div>
                        </div>
                        <div class="px-5 mb-3 border-3 ">
                            <input type="text" name="userinfo" class="form-control" placeholder="About yourself"
                                Value="{{$val->about_user}}" required>


                        </div>
                        <div class="px-5 mb-3 border-3 text-center">
                            <button type="submit" class="btn btn-primary w-100 mb-4 ">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="col-6 justify-content-around">
            <div class="card h-100">
                <h1 class="text-center m-3">Change Password</h1>
                @if (session()->has('pwdsuccess'))
                    <div class="px-5">
                        <div class="alert alert-success ">
                            <p>{{session()->get('pwdsuccess')}}</p>
                        </div>
                    </div>
                @endif
                @if (session()->has('pwderror'))
                    <div class="px-5">
                        <div class="alert alert-danger ">
                            <p>{{session()->get('pwderror')}}</p>
                        </div>
                    </div>
                @endif
                <form method="POST" action="{{url('passwordupdate')}}" class="py-4">
                    {{@csrf_field()}}
                    <input type="hidden" name="id" value="{{session('id')}}" />
                    <div class="px-5 mb-3 border-3 ">
                        <input type="password" name="oldpwd" class="form-control" placeholder="Old Password...."
                            required />
                    </div>

                    <div class="px-5 mb-3 border-3">
                        <input type="password" name="newpwd" class="form-control" placeholder="New Password...."
                            required />
                    </div>
                    <div class="px-5 mb-3 border-3">
                        <input type="password" name="confirmpwd" class="form-control" placeholder="Confirm Password...."
                            required />
                        <div class="text-danger"> @if($errors->has('confirmpwd'))
                            {{$errors->first('confirmpwd')}}
                        @endif
                        </div>
                    </div>
                    <div class="px-5 mb-3 border-3 text-center">
                        <button type="submit" class="btn btn-primary w-100 mb-4">Change Password</button>
                    </div>
                </form>
            </div>

        </div>


    </div>
</div>
<div class="container bg-light py-3 mb-5">

    <div class="row px-4">
        <div class="col-6 justify-content-around ">
            <div class="card h-100">
                <h1 class="text-center m-3">Blogs</h1>
                @if (session()->has('bloguptodate'))
                    <div class="alert alert-success">
                        <p>{{session()->get('bloguptodate')}}</p>
                    </div>
                @endif
                @foreach ($post as $data)
                    <div class="row px-5 mt-3">
                        <div class="col-3 p-0">
                            <p>{{$data->title}}</p>
                        </div>
                        <div class="col-3"><a href="{{url('blogdetails/')}}/{{$data->post_id}}" class="btn w-100"
                                style="background: #79AC78;">View</a>
                        </div>
                        <div class="col-3"><a href="{{url('blogupdate/')}}/{{$data->post_id}}"
                                class="btn btn-info w-100">Update</a></div>
                        <div class="col-3"><a href="{{url('blogdelete/')}}/{{$data->post_id}}"
                                class="btn btn-danger w-100">Delete</a>
                        </div>




                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-6 justify-content-around">
            <div class="card  h-100">
                <h1 class="text-center m-3">Comments</h1>

                @foreach ($comment as $com)
                    <div class="row px-4 mt-3">
                        <div class="col-auto">
                            <span class="fst-italic"><a href="{{url('blogdetails/')}}/{{$com->post_id}}"
                                    class="text-decoration-none">{{$com->get_post->title}}</a></span> :
                            {{$com->comments}}
                        </div>
                        <div class="col-auto p-0">
                            @if ($com->com_status === 1)
                                <span class="btn btn-success">Active</span>
                            @endif
                            @if ($com->com_status === 0)
                                <span class="btn btn-danger">Hide</span>
                            @endif
                        </div>
                        <div class="col-auto">
                            <a href="{{url('deletecomment/')}}/{{$com->comment_id}}" class="text-danger"> <i
                                    class="fa-solid fa-trash"></i></a>

                        </div>

                    </div>
                    <hr />
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection