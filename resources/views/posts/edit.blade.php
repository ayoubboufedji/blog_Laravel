@extends('layouts/header')
@section('title', '| Edit Post')

@section('contents')
<section class="hero-wrap hero-wrap-3 js-fullheight" style="background-image: url('images/image_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Edit Your Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  @if (($post->user_id) == (Auth::user()->id))
  <div class="container" style="padding-top : 30px">

    <div class="row">
        <div class="col-md-8">
         {!! Form::model($post, ['route' => ['Articles.update', $post->id], 'method' => 'PUT']) !!}

        {!! Form::label('user_id','Your ID:') !!}
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
        {!! Form::textarea('post_content', null, array('class' => 'form-control', 'required' => '' )) !!}
        </div>
            <div class="col-md-4">
                <div class="card card-body bg-light">
                   <dl>
                    <p><label class="font-weight-bold">Created At :</label></p>
                    <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                   </dl>
                   <dl>
                    <p><label class="font-weight-bold">Last Update At :</label></p>
                    <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                   </dl>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                            {!! Html::linkRoute('Articles.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                            <!-- <a href="#" class="btn btn-primary btn-block">Edit</a> -->
                      </div>
                        <div class="col-sm-6">
                              {{ Form::submit('Save changes', ['class' => 'btn btn-success btn-block']) }}
                            <!--  <a href="#" class="btn btn-danger btn-block">Delete</a> -->
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
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

@else
<div class="container" style="padding-top : 30px">
<h1>Sorry You Can not Edit This Post</h1>
</div>
@endif

@endsection


