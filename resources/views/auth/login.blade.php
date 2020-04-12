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

<div class="row">
    <div class="col-md-6 col-md-offset-3">

            {!! Form::open() !!}

            {!! Form::label('email','Email:') !!}
            {!! Form::text('email', null, array('class' => 'form-control')) !!}

            {!! Form::label('password','Password:') !!}
            {!! Form::text('password', null, ['class' => 'form-control']) !!}

            <br>
            {!! Form::checkbox('remember') !!}{!! Form::label('remember','Remember Me:') !!}

            <br>
            {!! Form::submit('Login', array('class' => 'btn btn-primary')) !!}


          <!--  {!! Form::label('post_type','Post Type:') !!}
            {!! Form::text('post_type', null, array('class' => 'form-control', 'required' => '', 'maxlenght' => '250' )) !!}

            {!! Form::label('post_status','Post Status:') !!}
            {!! Form::text('post_status', null, array('class' => 'form-control', 'required' => '', 'maxlenght' => '250' )) !!}

            {!! Form::label('post_content','Post Content:') !!}
            {!! Form::textarea('post_content', null, array('class' => 'form-control', 'required' => '' )) !!} -->


            {!! Form::close()  !!}

    </div>
</div>


















<!--


    <div class="container">
        <div class="row">
            <form class="col s12" id="reg-form">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate" required>
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate" required>
                  <label for="last_name">Last Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" required>
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate" minlength="6" required>
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <div class="gender-male">
                    <input class="with-gap" name="gender" type="radio" id="male" required />
                    <label for="male">Male</label>
                  </div>
                  <div class="gender-female">
                    <input class="with-gap" name="gender" type="radio" id="female" required />
                    <label for="female">Female</label>
                  </div>
                </div>

                <div class="input-field col s6">
                  <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">Register
                    <i class="material-icons right">done</i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <a title="Login" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a>
        </div>


    -->













@endsection
