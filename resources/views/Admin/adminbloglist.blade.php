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
                        <h4>{{$posts->title}}</h4>

                    </div>
                    <?php    //   echo $posts; ?>
                    <div class="card-body">

                        <h6>User: {{$posts->getUser->name}}</h6>


                        <p class="card-text">Category: {{$posts->getcategory->category_name}}</p>
                        <p class="card-text">Booking Date: {{$posts->created_at}}</p>
                        <p class="card-text">Content: {{$posts->content}} &nbsp;
                            <a href="{{url('/blog/')}}/{{$posts->post_id}}">Details</a>
                        </p>
                    </div>
                    </di>
                </div>
            </div>
            @endforeach

        </div>
</section>


@endsection