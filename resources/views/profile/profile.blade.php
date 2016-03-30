@extends('profile.app')

@section('profile_panel')

    <div class="ln-doc-example profile-panel">
        <p>
            Your personal details...<br>
        </p>

        <div class="row">
            {{--<div class="form-group form-horizontal">--}}
            {!! Form::open(['id' => 'profileform', 'class' => 'form-horizontal']) !!}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="account" class="col-sm-4 control-label">Coin ID</label>
                        <div class="col-sm-8 control-value">{{ Auth::user()->oidc_id }}</div>
                    </div>
                    @if (app('request')->input('edit') !== null)
                        <div class="form-group">
                            <label for="firstname" class="col-sm-4 control-label">First name</label>
                            <div class="col-sm-8">{!! Form::text('firstname', Auth::user()->given_name, ['class' => 'form-control', 'placeholder' => 'Enter first name', 'title' => 'Please enter your first name']) !!}</div>
                        </div>
                        <div class="form-group">
                            <label for="middlename" class="col-sm-4 control-label">Middle name</label>
                            <div class="col-sm-8">{!! Form::text('middlename', null, ['class' => 'form-control', 'placeholder' => 'Enter middle name', 'title' => 'Please enter your middle name']) !!}</div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-sm-4 control-label">Last name</label>
                            <div class="col-sm-8">{!! Form::text('lastname', Auth::user()->family_name, ['class' => 'form-control', 'placeholder' => 'Enter last name', 'title' => 'Please enter your last name']) !!}</div>
                        </div>
                    @else
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Full name</label>
                            <div class="col-sm-8 control-value">{{ Auth::user()->given_name }} Auth::user()->middle_name {{ Auth::user()->family_name }}</div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="dob" class="col-sm-4 control-label">Date of birth</label>
                        @if (app('request')->input('edit') !== null)
                            <div class="col-sm-8">{!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Enter dd-mm-yyyy', 'title' => 'Please enter your date of birth']) !!}</div>
                        @else
                            <div class="col-sm-8 control-value">x-27 August 1974</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="mobile" class="col-sm-4 control-label">Mobile number</label>
                        @if (app('request')->input('edit') !== null)
                            <div class="col-sm-8">{!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Enter mobile number', 'title' => 'Please enter your mobile number']) !!}</div>
                        @else
                            <div class="col-sm-8 control-value">x-61474778450</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">Email address</label>
                        @if (app('request')->input('edit') !== null)
                            <div class="col-sm-8">{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email address', 'title' => 'Please enter your email address']) !!}</div>
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
                    @if (app('request')->input('edit') !== null)
                        <a class="btn small primary" href="/profile/profile" role="button">Cancel</a>
                        {!! Form::submit('Save',['class' => 'btn small primary']) !!}
                    @else
                        <a class="btn small primary" href="/profile/profile?edit" role="button">Edit</a>
                    @endif
                    <div class="result"></div>
                </div>
                {{--@if (app('request')->input('edit') !== null)--}}
                {!! Form::close() !!}
                {{--@endif--}}
            {{--</div>--}}
        </div>

    </div>

@stop