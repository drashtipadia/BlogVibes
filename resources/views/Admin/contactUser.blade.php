@extends('admin.layout.main')
@push('title')
    <title>Contact User List</title>
@endpush
@section('admin-section')
<div class="container d-flex  justify-content-center p-4">
    <h1 class="m-auto">Contact User</h1>
</div>
<section>
    <div class="container bg-light justify-content-center text-center p-3">
        <div class="row  fs-5 fw-bold ">
            <div class="col-2">No.</div>
            <div class="col-2">Email</div>
            <div class="col-4">Message</div>
            <div class="col-2">Date</div>
            <div class="col-2">Delete</div>
        </div>
        <hr />
        @foreach ($contacts as $contact)
            <div class="row">
                <div class="col-2">{{$contact->contact_id}}</div>
                <div class="col-2">{{$contact->contact_email}}</div>
                <div class="col-4">{{$contact->contact_message}}</div>
                <div class="col-2">{{$contact->created_at->format('d-M-Y')}}</div>
                <div class="col-2"><a class="btn btn-danger" href="{{url('contact/delete/')}}/{{$contact->contact_id}}">
                        Delete</a></div>

            </div>
            <hr />

        @endforeach
    </div>
</section>


@endsection