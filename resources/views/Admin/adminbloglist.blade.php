@extends('admin.layout.main')
@section('admin-section')

<section>
    <div class="container p-5 bg-light">
        <div class="row py-3 g-3">
            <div class="col text-center">
                <h3>Blogs List</h3>
            </div>
        </div>
        <div class="row p-3">
            @foreach ($postlist as $posts)

            <div class="col-6 p-2">
                <div class="card">
                    <div class="card-header">
                        <h4>UserName</h4>
                    </div>
                    <?php    echo $posts; ?>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h6>{{$posts->title}}</h6>
                        </h5>
                        <p class="card-text">Category: {{$posts->getcategory->category_name}}</p>
                        <p class="card-text">Booking Date: {{$posts->created_at}}</p>
                        <p class="card-text">Content: {{$posts->content}} &nbsp;
                            <a href="#">Details</a>
                        </p>
                    </div>
                    </di>
                </div>
            </div>
            @endforeach

        </div>
</section>


@endsection