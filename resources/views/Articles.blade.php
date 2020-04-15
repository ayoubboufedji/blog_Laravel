@extends('layouts/header')

@section('title', '| All Posts')

@section('contents')

<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Read TO Lead Blog.</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Articles <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
<div class="container">
<div class="row">
    <div class="col-md-10">
        <h1>All Posts</h1>
        </div>

    <div class="col-md-2">
    <a href="{{ route('Articles.create') }}" class="btn btn-block btn-info btn-h1-spacing ">Create new Post</a>
    </div>
    <div class="col-md-12">
        <hr>
  </div>
</div> <!-- end of .row -->
</div>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
            </thead>

            <tbody>

                @foreach ( $post as $posts )
                    <tr>
                       <th>{{ $posts->id }}</th>
                       <td>{{ substr($posts->post_title, 0, 20) }}{{ strlen($posts->title) > 20 ? "..." : "" }}</td>
                       <td>{{ substr(strip_tags($posts->post_content), 0, 30) }}{{ strlen(strip_tags($posts->post_content)) > 30 ? "..." : "" }}</td>
                       <td>{{ date('M j, Y', strtotime($posts->created_at)) }}</td>

                       @if (($posts->user_id) == (Auth::user()->id))
                        <td><a href="{{ route('Articles.show', $posts->id) }}" class="btn btn-outline-dark btn-sm">View</a>
                            <a href="{{ route('Articles.edit', $posts->id) }}" class="btn btn-outline-dark btn-sm">Edit</a></td>
                    @else
                        <td><a href="{{ route('Articles.show', $posts->id) }}" class="btn btn-outline-dark btn-sm">View</a></td>
                    @endif
                    </tr>

                    @endforeach
            </tbody>
        </table>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="block-27">
                                    {!! $post->links(); !!}
                                </div>
                             </div>
                        </div>
                    </div>
                </div>

</div>
</div>
@endsection

