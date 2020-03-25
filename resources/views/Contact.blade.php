@extends('layouts/main')

@section('content')
@if (!session()->has('message'))
        <div class="container">
            <div class="row">
            <div class="col- md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>
                <p classe="text-muted"> If you having trouble with service, please<a href="mailto:ayoubboufedjitwi@gmail.com"> ask for help.</a></p>


        <form action="{{ route('contact_path') }}" method="POST">
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
            <label for="message" class="control-label sr-only">Massage</label>
            <textarea classe="form-control" rows="10" cols="10" required="required" name="message" id="message">{{ Request::old('message') }}</textarea>
            {!! $errors->first('message','<spanclasse="help-block">:message</span>') !!}

        </div>

            <div class="form-group">
            <input type="submit" name="submit" value="Submit" />
            <!--<button classe="btn btn-primary btn-block" type="submit">submit</button>-->
            </div>
        </form>
        </div>
            </div>
        </div>
@endif
@endsection

