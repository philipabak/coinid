@extends('app')

@section('content')
    <section class="image-background cid-home-1 fullscreen light-color" id="animated-header">
        <canvas id="animated-bubble"></canvas>
        <div class="mask opacity-2">
            <div class="container v-align-center">
                <div class="row pt-large pb-large">
                    <div class="col-md-12 text-center">
                        <h1 class="x-large text-light" data-nekoanim="fadeInUp" data-nekodelay="200">Verified <br>Single Sign-On</h1>
                        <h2 class="text-light" data-nekoanim="fadeIn" data-nekodelay="800">Verify your identity with us and log in to our member’s websites instantly</h2>
                        <br>
                        @if (!Auth::check())
                            <p class="text-light">
                            <a href="/login" class="anchor-link btn default">Sign Up \ Log in</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="image-background cid-home-2 no-padding dark-color">
        <div class="mask opacity-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-light mb text-center">
                        <div class="header-6-header-space"></div>
                        <h2 class="cid1">Protecting and simplifying your online experience</h2>
                    </div>
                </div>
                <div class="row pb-medium">
                    <div class="col-md-4 col-sm-6">
                        <article class="box-icon">
                            <span class="glyphicons glyphicons-old-man x3"></span>
                            <h3>Identity Verification</h3>
                            <p>Provide simple methods of identification for your Coin ID and you’re good to go.</p>
                        </article>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <article class="box-icon">
                            <span class="glyphicons glyphicons-show-thumbnails x3"></span>
                            <h3>Single Sign-On</h3>
                            <p>Use your Coin ID credentials for online shopping, bitcoin exchanges, remittance services and more.</p>
                        </article>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <article class="box-icon">
                            <span class="glyphicons glyphicons-keys x3"></span>
                            <h3>Secure</h3>
                            <p>Coin ID takes your security seriously. Customer’s credentials are protected through centralized transaction monitoring.</p>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="image-background cid-home-3 no-padding dark-color col-md-6">
        <div class="mask opacity-6">
            <div class="container-fluid">
                <div class="row pb-medium">
                    <div class="col-md-12 col-sm-12 text-center text-light">
                        <div class="header-6-header-space"></div>
                        <h2 class="cid2">Customers</h2>
                        <p>Keep your credentials safe in one location and relieve yourself from having to constantly provide your personal information on numerous websites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="image-background cid-home-4 no-padding dark-color col-md-6">
        <div class="mask opacity-6">
            <div class="container-fluid">
                <div class="row pb-medium">
                    <div class="col-md-12 col-sm-12 text-center text-light">
                        <div class="header-6-header-space"></div>
                        <h2 class="cid2">Businesses</h2>
                        <p>Enter the online market quickly and easily by becoming a member and letting Coin ID manage your verification process.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="image-background cid-home-5 no-padding dark-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-light">
                    <div class="header-6-header-space"></div>
                    <h2 class="cid2">Our members</h2>
                    <div class="col-md-12 pb-medium text-center text-light">Use Coin ID and gain easy access to these services<div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pb-medium">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="https://www.coinloft.com.au" target="_blank"><img src="assets/images/members/CoinLoft.png" alt="Coin Loft" class="img-responsive"></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <img src="assets/images/members/logo2-white.png" alt="EDENA premium website template" class="img-responsive">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <img src="assets/images/members/logo3-white.png" alt="EDENA premium website template" class="img-responsive">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <img src="assets/images/members/logo4-white.png" alt="EDENA premium website template" class="img-responsive">
                </div>
            </div>

        </div>
    </section>
@stop