@extends('layouts.main')

@section('content')
    <h2>Articles section</h2>
    <h3 class="subheader"> Posts : <?php echo (date('Y-m-d H:i:s')) ?> </small></h3>

    <ul>
        @foreach ( $posts as $post )

        <li><a href="Articles/{{$post->post_name}}">{{ $post->post_name }}</a></li>

    @endforeach

    </ul>

    @endsection
