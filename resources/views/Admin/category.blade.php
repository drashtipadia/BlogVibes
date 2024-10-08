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





<!-- ====================after====================  -->

<section class="py-3">
    <div class="container">
        <div class="row  justify-content-center text-center ">
            <div class="col-3">
                <h5> ID</h5>
            </div>
            <div class="col-3">
                <h5>CATEGORY</h5>
            </div>

            <div class="col-3">
                <h5>UPDATE</h5>
            </div>

            <div class="col-3">
                <h5>DELETE</h5>
            </div>
            <hr />
        </div>
    </div>
</section>
@foreach ($category as $cat)
<section>
    <div class="container">
        <div class="row justify-content-center text-center" id="editRowCategory{{$cat->category_id}}">
            <div class="col-3">
                <h5>{{$cat->category_id}} </h5>
            </div>
            <div class="col-3">
                <h5>{{$cat->category_name}}</h5>
            </div>

            <div class="col-3">
                <h5><a href="#" class="btn btn-primary" onClick="showUpdate({{$cat->category_id}});">Update</a></h5>
            </div>
            <div class="col-3">
                <a class="btn btn-danger" href="{{url('category/delete/')}}/{{$cat->category_id}}">
                    DELETE
                </a>
            </div>

            <hr />
        </div>


        <form id="editFormCategory{{$cat->category_id}}" class="row d-none  justify-content-center text-center"
            action="{{url('updatecategory')}}" method="post">
            {{@csrf_field()}}
            <div class="col-3">
                <input type="text" disabled value="{{$cat->category_id}}" class="form-control">
                <input type="hidden" name="categoryId" value="{{$cat->category_id}}">
            </div>
            <div class="col-3">
                <input type="text" name="categoryName" class="form-control" value="{{$cat->category_name}}" required>
            </div>


            <div class="col-3">
                <h5><input type="submit" value="Save" class="btn btn-primary"></h5>

            </div>
            <div class="col-3">
                <input type="button" value="Cancel" class="btn btn-dark" onClick="cancelEdit({{$cat->category_id}});">
            </div>
            <hr />
        </form>
    </div>
</section>
@endforeach
<!-- ====================================== -->
@endsection
<script>
function showUpdate(id) {
    console.log(id);
    document.getElementById("editRowCategory" + id).classList.add("d-none");
    document.getElementById("editFormCategory" + id).classList.remove("d-none");
}

function cancelEdit(id) {
    document.getElementById("editRowCategory" + id).classList.remove("d-none");
    document.getElementById("editFormCategory" + id).classList.add("d-none");
}
</script>