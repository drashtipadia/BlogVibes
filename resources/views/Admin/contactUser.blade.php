@extends('admin.layout.main')
@section('admin-section')



<section class="mt-2">
    <div class="container d-flex justify-content-center">
        <h1 class="m-auto">Contact User</h1>
    </div>
</section>

<div class="container p-5">
    <table class="table px-4 text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)



            <tr>
                <td>{{$contact->contact_id}}</td>
                <td>{{$contact->contact_email}}</td>
                <td>{{$contact->contact_message}}</td>
                <td>{{$contact->created_at->format('d-M-Y')}}</td>
                <td><a class="btn btn-danger" href="{{url('contact/delete/')}}/{{$contact->contact_id}}"> Delete</a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>


@endsection