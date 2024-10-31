@extends('admin.layout.main')
@section('admin-section')



<section class="mt-2">
    <div class="container d-flex justify-content-center">
        <h1 class="m-auto">Users</h1>
    </div>
</section>

<div class="container pt-4">
    <table class="table text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>About user</th>
                <th>password</th>
                <th>Number</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->user_id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->about_user}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->number}}</td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>


@endsection