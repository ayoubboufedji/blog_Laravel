@extends('layouts/header')

@section('contents')
<section class="hero-wrap hero-wrap-3 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Your Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
    <!-- end section -->
    <div>
     @if (session()->has('success'))
         <div class="alert alert-success" role="alert">
          {{ session()->get('success') }}
          </div>
     @endif
    </div>
    @if (!session()->has('message'))

      <div class="container" style="padding-top : 20px">
        <div class="row">
         <div class="col-md-8">
            <div class="about-author d-flex p-4 bg-light">
                <div class="bio mr-5">
                  <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
                </div>
                <div class="desc">
                  <h3>{{$post->author->name}}</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
              </div>
                <div class="container" style="padding-top : 20px">
                  <div class="row">
                    <div class="col-lg-12 ftco-animate">
                        <p class="mb-1">
                        <h2 class="mb-3">{{ $post->post_title }}</h2>
                        <img src="{{ asset('images/image_1.jpg') }}" alt="" class="img-fluide">
                      </p>
                      <p>{{  $post->post_content }}</p>
                      <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                          <a href="#" class="tag-cloud-link">Life</a>
                          <a href="#" class="tag-cloud-link">Sport</a>
                          <a href="#" class="tag-cloud-link">Tech</a>
                          <a href="#" class="tag-cloud-link">Travel</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
        </div>
            <div class="col-md-4">
                <div class="card card-body bg-light">
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
                            {!! Html::linkRoute('Articles.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                            <!-- <a href="#" class="btn btn-primary btn-block">Edit</a> -->
                        </div>

                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['Articles.destroy', $post->id], 'method' => 'DELETE']) !!}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
                            <!--  <a href="#" class="btn btn-danger btn-block">Delete</a> -->
                             {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! Html::linkRoute('Articles.index', '<< See All Posts',[], array('class' => 'btn btn-primary btn-block btn-h1-spacing')) !!}
                    </div>
                </div>

                <div class="col-lg-12 sidebar" style="padding-top : 80px">
                    <div class="sidebar-box ftco-animate">
                      <h3>Recent Blog</h3>
                      <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{ asset('images/image_1.jpg') }});"></a>
                        <div class="text">
                          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                          <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span>{{ date('M j, Y', strtotime($post->created_at)) }}</a></div>
                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>

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
@endsection
