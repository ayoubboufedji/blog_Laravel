@extends('layouts/header')

@section('contents')
<section class="hero-wrap hero-wrap-3 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Your Blog</h1>
        </div>
      </div>
    </div>
  </section>
    <!-- end section -->
<div class="container" style="margin-top:50px;">
	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<h2 class="margin-left:500px;">DELETE THIS COMMENT?</h2>
			<p>
				<strong>Author:</strong><h3>{{ $comment->name }}</h3><br>
				<strong>Email:</strong><h3>{{ $comment->email }}</h3><br>
				<strong>Comment:</strong> {!! $comment->comment !!}
			</p>

			{{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
				{{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-lg btn-block btn-danger', 'style' => 'margin-top:50px;']) }}
			{{ Form::close() }}
		</div>
	</div>
</div>
    @section('scripts')


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    @endsection
    @endsection
