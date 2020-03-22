@extends('layouts/main')

@section('content')
<ul>
    @foreach ( $posts as $post )

      <li>{{ $post->post_title }}</li>

    @endforeach
    </ul>

@endsection

