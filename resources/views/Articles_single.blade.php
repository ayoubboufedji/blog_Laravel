@extends('layouts/main')
@section('content')
<section class="row new-post">

    <div class="col-md-6 col-md-offset-3 ">

        <p><span>Author:</span>{{$post->author->name}}</p>
        <header> <h2>Content of article </h2> </header>
        <p>{{$post->post_content}}</p>

    </div>
</section>
@endsection
