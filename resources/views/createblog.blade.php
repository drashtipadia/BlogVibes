@extends('layouts.main')
@section('main-section')
<div class="container justify-content-between p-5">

    <form method="post" action="{{url('addblog')}}" class="m-4" enctype="multipart/form-data">
        {{@csrf_field()}}
        <div class="card border-info">
            <div class="card-header text-center">
                <h2> Blog Details </h2>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    <p>{{session()->get('success')}}</p>
                </div>
                @endif

                <!--  @if (session()->has('error'))
                    <div class="alert alert-danger">
                        <p>{{session()->get('error')}}</p>
                    </div>

                @endif -->
                <div class="row g-3 mb-3">
                    <div class="col-auto"><label class="form-label" for="typeTitle">Title</label>
                    </div>
                    <div class="col"><input type="text" id="" name="title" class="form-control" required /></div>

                </div>
                <div class="row g-3 mb-3">
                    <div class="col-auto"><label class="form-label" for="typecontent">Content</label></div>
                    <div class="col"><textarea name="content" class="form-control" required rows="8"></textarea>
                    </div>

                </div>
                <div class="row g-3 mb-3">
                    <div class="col-auto"><label class="form-label" for="typeimage">Image</label></div>
                    <div class="col"><input type="file" name="blogimg" class="form-control" required></div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-auto"><label class="form-label" for="typetags">Tags</label></div>
                    <div class="col"><input type="text" name="tags" class="form-control" required></div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-auto"><label class="form-label" for="typecategory">Category</label></div>
                    <div class="col"><select class="form-select" aria-label="Default select example" name="category">
                            <option hidden selected>Open this select menu</option>
                            @foreach ($categorys as $category)
                            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select></div>
                </div>
                <input type="hidden" name="userid" value="{{session('id')}}">
            </div>
            <div class="card-footer align-item-center">
                <button type="submit" class="btn btn-primary">Add Post</button>
            </div>
        </div>
    </form>
</div>
@endsection