@extends('layouts/main')

@section('content')
<ul>
    @foreach ( $post as $posts )

      <li>{{ $posts->post_content }}</li>

    @endforeach
    </ul>

@endsection

