@extends('app')

@section('content')
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="mt-medium">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <address>
                    <p class="address">
                        Suite 504 365 Little Collins Street<br>
                        Melbourne, Vic 3000<br>
                        <a href="mailto:contact@coinid.com">contact@coinid.com</a>
                    </p>
                </address>
            </div>

            {!! Form::open(['id' => 'contactform', 'class' => 'form-minimal']) !!}
                <div class="col-sm-4">
                    <div class="form-group">
                        {!! Form::label('name','Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name', 'title' => 'Please enter your name (at least 2 characters)']) !!}
                        <div class="form-line"></div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','Email') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email', 'title' => 'Please enter a valid email address']) !!}
                        <div class="form-line"></div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone','Phone') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control required digits', 'placeholder' => 'Enter phone', 'title' => 'Please enter a valid phone number', 'size' => '30']) !!}
                        <div class="form-line"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        {!! Form::label('comment','Comments') !!}
                        {!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Enter your message..', 'title' => 'Please enter your message (at least 10 characters)', 'cols' => '3', 'rows' => '5']) !!}
                        <div class="form-line"></div>
                    </div>

                    <fieldset class="clearfix securityCheck">
                        <label for="captcha">Security</label>
                        <div class="form-group">
                            <img height="40" src="{!! $captchaStringData !!}" alt="captcha"/>
                            <br><br>
                            {!! Form::text('captcha', null, ['class' => 'form-control required', 'placeholder' => 'Enter the security code', 'title' => 'Please enter the 6 character code']) !!}
                            <div class="form-line"></div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-8 col-md-offset-4 text-center">
                    <br>
                    {!! Form::submit('Submit',['class' => 'btn primary']) !!}
                    <div class="result"></div>
                </div>
            {!! Form::close() !!}
        </div>
        <br><br><br>
    </div>
</section>
@stop