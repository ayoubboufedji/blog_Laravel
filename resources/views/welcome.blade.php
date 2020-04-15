    @extends('layouts.main')

    @section('content')
    <!--  <h2>Articles section</h2>
        <h3 class="subheader"> Posts : <?php echo (date('Y-m-d H:i:s')) ?> </small></h3>-->
        <div class="container">
            <div class="row">


      <!-- ////////////////////////////////////new-->
                <section class="ftco-section">
                    <div class="container">
                        <p class="lead">
                            <a class="btn btn-info btn-lg" href="#" role="button">Popular Post</a>
                         </p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="case">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                            <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url(images/image_1.jpg);"></a>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                            <div class="text w-100 pl-md-3">
                                                <span class="subheading">Illustration</span>
                                                <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates</a></h2>
                                                <ul class="media-social list-unstyled">
                                     <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                     <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                     <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                   </ul>
                                                <div class="meta">
                                                    <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                   </div>
                 </div>
                    </div>
                </section>

         <!-- ////////////////////////////////////new-->


        <div class="container">
            @foreach ( $posts as $post )
              <div class="row">
                  <div class="col-md-8">
                    <div class="post">
                      <h3>{{ $post->post_name }}</h3>
                      <p>{{ substr(strip_tags($post->post_content), 0, 300) }}{{ strlen(strip_tags($post->post_content)) > 300 ? "..."  : "" }}</p>
                      <a href="{{ route('Articles.show', $post->id) }}" class="btn btn-primary">Read more</a>

                   </div>

                   <hr>

                 </div>
             </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
