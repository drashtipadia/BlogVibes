@extends('admin.layout.main')
@section('admin-section')



<section class="mt-2">
    <div class="container d-flex justify-content-center">
        <h1 class="m-auto">Category</h1>
    </div>
</section>

<section class="py-4">
    <div class="container bg-light py-3">

        <div class="justify-content-center text-center m-2">

            <h3> Add New Category </h3>


            <form method="post" id="addcategory" action="{{url('category')}}">
                {{@csrf_field()}}

                <div class="justify-content-center row mt-3">
                    <div class="col-auto">
                        <input type="text" name="categoryname" id="categoryname" class="form-control"
                            placeholder="Catrgory..." required>
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary w-100" value="ADD" />
                    </div>
                </div>

            </form>
            <div class="justify-content-center row mt-3 mb-0">
                @if (session()->has('success'))
                    <div class="alert alert-success w-25 p-3">
                        {{session()->get('success')}}
                    </div>
                @endif
            </div>
        </div>
</section>


<div class="container pt-0">
    <table class="table px-4 text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $cat)


                <tr id="editRowservice{{$cat->category_id}}">
                    <td>{{$cat->category_id}}</td>
                    <td>{{$cat->category_name}}</td>
                    <td><a class="btn btn-primary" href=""> Edit</a></td>
                    <td><a class="btn btn-danger" href="{{url('category/delete/')}}/{{$cat->category_id}}"> Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="{{url('frontend/js/adminscript.js')}}"></script>
@endsection