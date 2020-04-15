@extends('layouts/header')
@section('contents')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Contact us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
@if (!session()->has('message'))

<section class="ftco-section contact-section">
        <div class="container ">
            <div class="container mt-3">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2>Get In Touch</h2>
                    <p classe="text-muted"> If you having trouble with service, please<a href="mailto:ayoubboufedjitwi@gmail.com"> ask for help.</a></p>
                        <hr>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                  <p><span>Address:</span> 11 Rue Maurice Gignoux. Résidence Le Rabot, 38000, Grenoble, France</p>
                </div>
                <div class="col-md-3">
                  <p><span>Phone:</span> <a href="tel://1234567920">+33 767 131 184</a></p>
                </div>
                <div class="col-md-3">
                  <p><span>mail:</span> <a href="mailto:info@yoursite.com">ayoubbou@gmail.com</a></p>
                </div>
                <div class="col-md-3">
                  <p><span>Website :</span> <a href="#">ReadTOLead_blog.com</a></p>
                </div>
            </div>
            </div>
        </div>
    <div class="row block-9 no-gutters">
        <div class="col-lg-6 order-md-last d-flex">

                <form action="{{ route('contact_path') }}" class="bg-light p-4 p-md-5 contact-form" method="POST">
                @csrf

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name" class="control-label">Name</label>
                <input type="text" name="name" id="name" classe="form-control" required="required" value="{{Request::old('name')}}">
                {!! $errors->first('name','<spanclasse="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" name="email" id="email" classe="form-control" required="required" value="{{Request::old('email')}}">
                    {!! $errors->first('email','<spanclasse="help-block">:message</span>') !!}
                    </div>

                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    <label for="message" class="control-label">Message</label>
                    <textarea classe="form-control" rows="10" cols="10" name="message" id="message">{{ Request::old('message') }}</textarea>
                    {!! $errors->first('message','<spanclasse="help-block">:message</span>') !!}
                    </div>

             <div class="form-group">
                <button type="submit" value="Submit" name="submit" class="btn btn-primary btn-block">Send Message</button>
            </div>
              </form>

       </div>
            <div class="col-lg-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
     </div>
</section>

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

