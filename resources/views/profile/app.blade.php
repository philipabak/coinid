@extends('app')

@section('content')
    <header class="page-header profile-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Profile - {{ Auth::user()->given_name }} {{ Auth::user()->family_name }}</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="mt-small">
        <div class="container">

            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('profile') ? 'active' : '' }}"><a href="/profile">Overview</a></li>
                <li role="presentation" class="{{ Request::is('profile/profile') ? 'active' : '' }}"><a href="/profile/profile">Profile</a></li>
                <li role="presentation" class="{{ Request::is('profile/security') ? 'active' : '' }}"><a href="/profile/security">Security</a></li>
                <li role="presentation" class="{{ Request::is('profile/verify') ? 'active' : '' }}"><a href="/profile/verify">ID Verification</a></li>
                <li role="presentation" class="{{ Request::is('profile/auths') ? 'active' : '' }}"><a href="/profile/auths">Authorised Sites</a></li>
            </ul>

            @yield('profile_panel')

        </div>
    </section>
@stop