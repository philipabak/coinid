@extends('profile.app')

@section('profile_panel')

    <div class="ln-doc-example profile-panel">
        <p>
            Your Coin ID account...<br>
        </p>

        <div class="row">
            <div class="form-horizontal">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Username</label>
                        <div class="col-sm-8 control-value">
                            {{ Auth::user()->username }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">First registered</label>
                        <div class="col-sm-8 control-value">
                            {{ date('F d, Y', strtotime(Auth::user()->created_at)) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="name" class="control-label">Verification Status</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" style="width: 75%">
                            <span class="sr-only">80% Complete (success)</span>
                        </div>
                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 25%">
                            <span class="sr-only">25% Complete (warning)</span>
                        </div>
                        {{--<div class="progress-bar progress-bar-danger" style="width: 10%">--}}
                        {{--<span class="sr-only">10% Complete (danger)</span>--}}
                        {{--</div>--}}
                    </div>
                    <p>Partly verified, a few steps to get to 100%</p>
                </div>
            </div>
        </div>

    </div>
@stop