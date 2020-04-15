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

    <div>
     @if (session()->has('success'))
         <div class="alert alert-success" role="alert">
          {{ session()->get('success') }}
          </div>
     @endif
    </div>
    @if (!session()->has('message'))

      <div class="container" style="margin-top:20px;">
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
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 ftco-animate">
                        <p class="mb-1">
                        <h2 class="mb-3">{{ $post->post_title }}</h2>
                        <img src="{{ asset('images/image_1.jpg') }}" alt="">
                      </p>
                      <p style="margin-bottom:80px;">{!!  $post->post_content !!}</p>
                    </div>
                        <div class="col-md-12">
                            <h3 class="comments-title"><svg class="bi bi-chat-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 00-2 2v8a2 2 0 002 2h2.5a1 1 0 01.8.4l1.9 2.533a1 1 0 001.6 0l1.9-2.533a1 1 0 01.8-.4H14a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                              </svg>{{ $post->comments()->count() }} Comments</h3>
                            @foreach ($post->comments as $comment)
                            <div class="row">
                            <div class="col-md-8 comment">
                                <div class="author-info">
                                    <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?.s=200&d=monsterid" }}" class="author-image">
                                    <div class="author-name">
                                    <h5>{{ $comment->name }}</h5>
                                    <p class="author-time">{{ date('F nS, Y - G:i', strtotime($comment->created_at)) }}</p>
                                    </div>
                                </div>
                                <div class="comment-content">
                                {!! $comment->comment !!}
                               </div>
                                </div>
                               @if ($comment->user_id == Auth::user()->id)
                                <div class="comment col-md-4" style="margin-top:80px;">
                                    <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-info"><svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
                                      </svg></a>
                                      <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
                                      </svg></a>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>

                    <div id="comment-form" class="col-md-12" style="margin-top:100px; margin-bottom:100px;">
                        {!! Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) !!}
                        @csrf

                                                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                             <div class="row">
                                <div class="col-md-6">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null, ['classe' => 'form-control']) !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::text('email', null, ['classe' => 'form-control']) !!}
                                </div>
                                <div class="col-md-12">
                                    {!! Form::label('comment', 'Comment : ') !!}
                                    {!! Form::textarea('comment', null, ['classe' => 'form-control', 'rows' => '5']) !!}
                                </div>

                                <div class="col-md-12">
                                    {!! Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:20px;']) !!}
                                </div>
                            </div>
                        {{ Form::close() }}

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
                    @if (($post->user_id) == (Auth::user()->id))
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('Articles.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                            <!-- <a href="#" class="btn btn-primary btn-block">Edit</a> -->
                        </div>

                        <div class="col-sm-6">
                            {!! Html::linkRoute('Articles.delete', 'DELETE', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! Html::linkRoute('Articles.index', '<< See All Posts',[], array('class' => 'btn btn-primary btn-block btn-h1-spacing')) !!}
                    </div>
                    @else
                    <div class="col-md-12">
                        {!! Html::linkRoute('Articles.index', '<< See All Posts',[], array('class' => 'btn btn-primary btn-block btn-h1-spacing')) !!}
                    </div>
                    @endif
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
