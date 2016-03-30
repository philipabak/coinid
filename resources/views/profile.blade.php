@extends('app')

@section('content')
    <header class="page-header profile-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Profile - TEST</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="mt-small">
        <div class="container">

            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('profiletest') ? 'active' : '' }}"><a href="/profile">Overview</a></li>
                <li role="presentation" class="{{ Request::is('profile/profile') ? 'active' : '' }}"><a href="/profile/profile">Profile</a></li>
                <li role="presentation" class="{{ Request::is('profile/mfa') ? 'active' : '' }}"><a href="/profile/mfa">Two Factor Auth</a></li>
                <li role="presentation" class="{{ Request::is('profile/verify') ? 'active' : '' }}"><a href="/profile/verify">ID Verification</a></li>
                <li role="presentation" class="{{ Request::is('profile/auths') ? 'active' : '' }}"><a href="/profile/auths">Authorised Sites</a></li>
            </ul>

            <div class="ln-doc-example profile-panel">
                <p>
                    Your personal details...<br>
                </p>

                <div class="row">
                    <div class="form-group form-horizontal">
                    {{--{!! Form::open(['id' => 'profileform', 'class' => 'form-horizontal']) !!}--}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account" class="col-sm-4 control-label">Coin ID account</label>
                                <div class="col-sm-8 control-value">x-897&3yh87239922323</div>
                            </div>
                            @if (app('request')->input('edit') !== null)
                                <div class="form-group">
                                    <label for="firstname" class="col-sm-4 control-label">First name</label>
                                    <div class="col-sm-8">{!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'Enter first name', 'title' => 'Please enter your first name']) !!}</div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-sm-4 control-label">Last name</label>
                                    <div class="col-sm-8">{!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Enter last name', 'title' => 'Please enter your last name']) !!}</div>
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="name" class="col-sm-4 control-label">Full name</label>
                                    <div class="col-sm-8 control-value">x-Kim Beveridge</div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="dob" class="col-sm-4 control-label">Date of birth</label>
                                @if (app('request')->input('edit') !== null)
                                    <div class="col-sm-8">{!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Enter dd-mm-yyy', 'title' => 'Please enter your date of birth']) !!}</div>
                                @else
                                    <div class="col-sm-8 control-value">x-27 August 1974</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="mobile" class="col-sm-4 control-label">Mobile number</label>
                                @if (app('request')->input('edit') !== null)
                                    <div class="col-sm-8">{!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Enter mobile nummber', 'title' => 'Please enter your mobile number']) !!}</div>
                                @else
                                    <div class="col-sm-8 control-value">x-61474778450</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">Email address</label>
                                @if (app('request')->input('edit') !== null)
                                    <div class="col-sm-8">{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email', 'title' => 'Please enter your email address']) !!}</div>
                                @else
                                    <div class="col-sm-8 control-value">x-kim@rhinoloft.com</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            @if (app('request')->input('edit') !== null)
                                <div class="form-group">
                                    <label for="country" class="col-sm-4 control-label">Country</label>
                                    <div class="col-sm-8">{!! Form::select('country',  array('0' => 'Select..','AUD' => 'Australia'), null, ['class' => 'form-control','title' => 'Please select your state']) !!}</div>
                                </div>
                            @endif
                            @if (app('request')->input('edit') !== null)
                                <div class="form-group">
                                    <label for="unit" class="col-sm-4 control-label">Unit number</label>
                                    <div class="col-sm-8">{!! Form::text('unit', null, ['class' => 'form-control', 'placeholder' => 'Enter unit number', 'title' => 'Please enter your unit number']) !!}</div>
                                </div>
                                <div class="form-group">
                                    <label for="streetnumber" class="col-sm-4 control-label">Street number</label>
                                    <div class="col-sm-8">{!! Form::text('streetnumner', null, ['class' => 'form-control', 'placeholder' => 'Enter street number', 'title' => 'Please enter your street number']) !!}</div>
                                </div>
                                <div class="form-group">
                                    <label for="streetname" class="col-sm-4 control-label">Street name</label>
                                    <div class="col-sm-8">{!! Form::text('streetname', null, ['class' => 'form-control', 'placeholder' => 'Enter street name', 'title' => 'Please enter your street name']) !!}</div>
                                </div>
                                <div class="form-group">
                                    <label for="streettype" class="col-sm-4 control-label">Street number</label>
                                    <div class="col-sm-8">{!! Form::select('streettype',  array('0' => 'Select..','Alley' => 'Alley','Approach' => 'Approach','Arcade' => 'Arcade','Avenue' => 'Avenue','Boulevard' => 'Boulevard','Brow' => 'Brow','Bypass' => 'Bypass','Causeway' => 'Causeway','Circuit' => 'Circuit','Circus' => 'Circus','Close' => 'Close','Copse' => 'Copse','Corner' => 'Corner','Cove' => 'Cove','Court' => 'Court','Crescent' => 'Crescent','Drive' => 'Drive','End' => 'End','Esplanande' => 'Esplanande','Flat' => 'Flat','Freeway' => 'Freeway','Frontage' => 'Frontage','Gardens' => 'Gardens','Glade' => 'Glade','Glen' => 'Glen','Green' => 'Green','Grove' => 'Grove','Heights' => 'Heights','Highway' => 'Highway','Lane' => 'Lane','Link' => 'Link','Loop' => 'Loop','Mall' => 'Mall','Mews' => 'Mews','Packet' => 'Packet','Parade' => 'Parade','Park' => 'Park','Parkway' => 'Parkway','Place' => 'Place','Promenade' => 'Promenade','Reserve' => 'Reserve','Ridge' => 'Ridge','Rise' => 'Rise','Road' => 'Road','Row' => 'Row','Square' => 'Square','Street' => 'Street','Strip' => 'Strip','Tarn' => 'Tarn','Terrace' => 'Terrace','Thoroughfare' => 'Thoroughfare','Track' => 'Track','Trunkway' => 'Trunkway','View' => 'View','Vista' => 'Vista','Walk' => 'Walk','Way' => 'Way','Walkway' => 'Walkway','Yard' => 'Yard'), null, ['class' => 'form-control','title' => 'Please select your street type']) !!}</div>
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="address" class="col-sm-4 control-label">Address</label>
                                    <div class="col-sm-8 control-value">x-10 South Hidden Valley Circuit</div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="suburb" class="col-sm-4 control-label">Suburb \ City</label>
                                @if (app('request')->input('edit') !== null)
                                    <div class="col-sm-8">{!! Form::text('suburb', null, ['class' => 'form-control', 'placeholder' => 'Enter suburb', 'title' => 'Please enter your suburb']) !!}</div>
                                @else
                                    <div class="col-sm-8 control-value">x-Beaconsfield</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="state" class="col-sm-4 control-label">State</label>
                                @if (app('request')->input('edit') !== null)
                                    <div class="col-sm-8">{!! Form::select('state',  array('0' => 'Select..','NSW' => 'New South Wales','VIC' => 'Victoria','QLD' => 'Queensland','ACT' => 'Australian Capital Territory','WA' => 'Western Australia','SA' => 'South Australia','TAS' => 'Tasmania','NT' => 'Northern Territory'), null, ['class' => 'form-control','title' => 'Please select your state']) !!}</div>
                                @else
                                    <div class="col-sm-8 control-value">x-Victoria</div>
                                @endif
                            </div>
                            @if (app('request')->input('edit') !== null)
                            @else
                                    <div class="form-group">
                                        <label for="country" class="col-sm-4 control-label">Country</label>
                                        <div class="col-sm-8 control-value">x-Australia 3807</div>
                                    </div>
                            @endif
                            @if (app('request')->input('edit') !== null)
                                <div class="form-group">
                                <label for="postcode" class="col-sm-4 control-label">Post code</label>
                                    <div class="col-sm-8">{!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => 'Enter post code', 'title' => 'Please enter your post code']) !!}</div>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-12 text-center">
                            <br>
                            <a class="btn small primary" href="/profiletest?edit" role="button">Edit</a>
{{--                            {!! Form::submit('Edit',['class' => 'btn primary']) !!}--}}
                            <div class="result"></div>
                        </div>
{{--                    {!! Form::close() !!}--}}
                    </div>
                </div>



            </div>

            {{--<div class="btn-group btn-group-justified" role="group" aria-label="...">--}}
            {{--<div class="btn-group" role="group">--}}
            {{--<button type="button" class="btn btn-default">Left</button>--}}
            {{--</div>--}}
            {{--<div class="btn-group" role="group">--}}
            {{--<button type="button" class="btn btn-default">Middle</button>--}}
            {{--</div>--}}
            {{--<div class="btn-group" role="group">--}}
            {{--<button type="button" class="btn btn-default">Right</button>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<br><br>--}}
            {{--<p class="pb">--}}
            {{--This is a protected page--}}
            {{--</p>--}}

            {{--<!-- sub menu -->--}}
            {{--<aside id="sidebar" class="col-md-3">--}}
            {{--<nav class="sidebar-menu mb-xs">--}}
            {{--<ul>--}}
            {{--<li><a class="active" href="#">Solace of a lonely highway</a></li>--}}
            {{--<li><a href="#">Write with purpose</a></li>--}}
            {{--<li><a href="#">Tree on a lake</a></li>--}}
            {{--<li><a href="#">Don’t stop questioning</a></li>--}}
            {{--<li><a href="#">Overheard this morning</a></li>--}}
            {{--</ul>--}}
            {{--</nav>--}}
            {{--</aside>--}}



            {{--<div class="progress">--}}
            {{--<div class="progress-bar progress-bar-success" style="width: 35%">--}}
            {{--<span class="sr-only">35% Complete (success)</span>--}}
            {{--</div>--}}
            {{--<div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">--}}
            {{--<span class="sr-only">20% Complete (warning)</span>--}}
            {{--</div>--}}
            {{--<div class="progress-bar progress-bar-danger" style="width: 10%">--}}
            {{--<span class="sr-only">10% Complete (danger)</span>--}}
            {{--</div>--}}
            {{--</div>--}}


        </div>

    </section>
@stop