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
                            <h1 style="margin-left:400px;">Up To The Minute</h1>
                         </p>
                    </div>
                </section>

         <!-- ////////////////////////////////////new-->


        <div class="container"  style="margin-bottom:300px;">
            @foreach ( $posts as $post )
              <div class="row">
                  <div class="col-md-12">
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
