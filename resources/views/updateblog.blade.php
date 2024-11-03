@extends('layouts.main')
@section('main-section')
<div class="container justify-content-between p-5">
    @foreach ($posts as $val)


        <form method="post" action="{{url('updateblog')}}" class="m-4" enctype="multipart/form-data">
            {{@csrf_field()}}
            <div class="card border-info">
                <div class="card-header text-center">
                    <h2> Update Blog </h2>
                </div>
                <div class="card-body">
                    <input type="text" hidden name="postid" class="form-control" value="{{$val->post_id}}" />

                    <div class="row g-3 mb-3">
                        <div class="col-auto"><label class="form-label" for="typeTitle">Title</label>
                        </div>
                        <div class="col"><input type="text" id="" name="title" class="form-control" value="{{$val->title}}"
                                required /></div>

                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-auto"><label class="form-label" for="typecontent">Content</label></div>
                        <div class="col"><input name="content" class="form-control" required value="{{$val->content}}"
                                height="20" />
                        </div>

                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-auto"><label class="form-label" for="typeimage">Image</label></div>
                        <div class="col"><input type="file" name="blogimg" class="form-control"></div>
                        <div class="col"><img src="{{url('/uploads/img/' . $val->image)}}" width="100px" height="100px">
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-auto"><label class="form-label" for="typetags">Tags</label></div>
                        <div class="col"><input type="text" name="tags" class="form-control" required
                                value="{{$val->tags}}"></div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-auto"><label class="form-label" for="typecategory">Category</label></div>
                        <div class="col"><select class="form-select" aria-label="Default select example" name="category">
                                <option hidden selected>Open this select menu</option>
                                @foreach ($categorys as $category)
                                                        <option value="{{$category->category_id}}" @if (
                                                            $val->category_id ===
                                                            $category->category_id
                                                        ) selected @endif>{{$category->category_name}}</option>
                                @endforeach
                            </select></div>
                    </div>
                    <input type="hidden" name="userid" value="{{session('id')}}">
                </div>
                <div class="card-footer align-item-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('profile')}}" type="submit" class="btn btn-primary">Cancel</a>
                </div>
            </div>
        </form>
    @endforeach
</div>
@endsection