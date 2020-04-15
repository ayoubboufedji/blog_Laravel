@extends('layouts/header')

@section('contents')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread hero-wrap-3">Blog Single</h1>
          <p class="breadcrumbs"><span class="mr-2 hero-wrap-3 "><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2 hero-wrap-3 "><a href="Article/create">Article<i class="ion-ios-arrow-forward"></i></a></span> <span>Creat New Article <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <div>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
         {{ session()->get('success') }}
         </div>
    @endif
   </div>

  @if (!session()->has('message'))
<div class="container" style="margin-top:50px;">
<div class="row">
 <div class="col-md-8 col-md-offset-2">
     <h1>Creat New Post</h1>
     <hr>

     {!! Form::open(array('route' => 'Articles.store', 'data-parsley-validate' => '')) !!}
     @csrf
     @if ($errors->any())
     @dd($errors){{-- for check error bag --}}
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $message)
                 <li>{{ $message }}</li>
             @endforeach
         </ul>
     </div>
 @endif
     {!! Form::label('user_id','Your Id:') !!}
     {!! Form::text('user_id', null, array('class' => 'form-control', 'required' => '', 'maxlenght' => '250' )) !!}

     {!! Form::label('post_name','Post Name:') !!}
     {!! Form::text('post_name', null, array('class' => 'form-control ', 'required' => '', 'maxlenght' => '250' )) !!}

     {!! Form::label('post_title','Title:') !!}
     {!! Form::text('post_title', null, array('class' => 'form-control', 'required' => '', 'maxlenght' => '250' )) !!}

     {!! Form::label('post_category','Category:') !!}
     {!! Form::text('post_category', null, array('class' => 'form-control', 'required' => '', 'maxlenght' => '250' )) !!}

     {!! Form::label('post_type','Post Type:') !!}
     {!! Form::text('post_type', null, array('class' => 'form-control', 'required' => '', 'maxlenght' => '250' )) !!}

     {!! Form::label('post_status','Post Status:') !!}
     {!! Form::text('post_status', null, array('class' => 'form-control', 'required' => '', 'maxlenght' => '250' )) !!}

     {!! Form::label('post_content','Post Content:') !!}
     {!! Form::textarea('post_content', null, array('class' => 'form-control')) !!}

     {{ Form::submit('Creat Post', ['class' => 'btn btn-success btn-block','style' => 'margin-top: 20px;']) }}

 </div>
</div>
</div>
@endif

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
<hr>
@endsection

