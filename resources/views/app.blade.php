<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Coin ID</title>
        <meta name="description" content="Verified Single sign-on">
        <meta name="author" content="Coin ID">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="/assets/custom-icons/css/custom-icons.css">
        <link type="text/css" rel="stylesheet" href="/assets/neko-framework/external-plugins/external-plugins.min.css">
        <link type="text/css" rel="stylesheet" href="/assets/neko-framework/css/layout/neko-framework-layout.css">
        <link type="text/css" rel="stylesheet" id="color" href="/assets/neko-framework/css/color/neko-framework-color.css">
        <link type="text/css" rel="stylesheet" href="/assets/css/glyphicons.css">
        <link type="text/css" rel="stylesheet" href="/assets/css/glyphicons-bootstrap.css">
        <link type="text/css" rel="stylesheet" href="/assets/css/custom.css">

        <!-- Web font  -->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
        <link rel="manifest" href="/assets/images/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/assets/images/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- JS -->
        <script src="/assets/neko-framework/external-plugins/modernizr/modernizr.custom.js"></script>

    </head>

   {!! Request::is('/') ? '<body class="activate-appear-animation header-6 parallaxed-footer">'
                        : '<body class="activate-appear-animation header-7 parallaxed-footer">' !!}

        <div id="preloader" class="v-align-translate">
            <div class="neko-preloader"></div>
        </div>

        <div id="global-wrapper">
            <header class="menu-header navbar-fixed-top" role="banner">
                <div class="container">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <!-- hamburger button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- / hamburger button -->

                            <!-- Logo -->
                            <a class="navbar-brand" href="/">
                                <img src="/assets/images/CoinID.png" alt="CoinID Logo" class="main-logo" height=60/>
                                <img src="/assets/images/CoinID-light.png" alt="CoinID Logo" class="main-logo-light" height=60/>
                            </a>
                            <!-- /Logo -->
                        </div>
                        <div class="collapse navbar-collapse">
                            <!-- Main navigation -->
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/how" class="{{ Request::is('how') ? 'active' : '' }}">How it works</a></li>
                                <li><a href="/faq" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a></li>
                                <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                                @if (Auth::check())
                                    <li><a href="/profile" class="{{ Request::is('profile') ? 'active' : '' }}">Profile</a></li>
                                    <li><a href="/logout" class="btn border small">Log out</a></li>
                                @else
                                    <li><a href="/login" class="btn border small">Sign up \ Log in</a></li>
                                @endif
                            </ul>
                            <!-- /Main navigation -->
                        </div>
                    </nav>
                </div>
            </header>

            <main id="content">
                @yield('content')
            </main>

            <footer id="main-footer">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-3 footer-left">
                            <div class="footer-widget">
                            </div>
                        </div>

                        <div class="col-sm-6 text-center">
                            <div class="footer-widget">
                                <ul class="footnav">
                                    <li><a href="/terms" class="">TERMS</a></li>
                                    <li><a href="/privacy" class="">PRIVACY</a></li>
                                </ul>
                                <address>
                                    <p class="address">
                                        Suite 504 365 Little Collins Street<br>
                                        Melbourne, Vic 3000<br>
                                        <a href="mailto:contact@coinid.com">contact@coinid.com</a>
                                    </p>
                                </address>
                            </div>
                        </div>

                        <div class="col-sm-3 footer-right">
                            <div class="footer-widget">
                                <img src="/assets/images/CoinID.png" alt="CoinID" id="footerLogo" class="mb-small" height=40>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="footer-rights">
                    <div class="container copyright">
                        <div class="row">
                            <div class="col-sm-4 footer-left">
                                <p>ACN 1234567890</p>
                            </div>
                            <div class="col-sm-4">
                                <ul class="social-icons light-color text-center">
                                    <li class="social">
                                        <a href="#" class="rss" title="rss"><i class="icon-glyph-342"></i></a>
                                    </li>
                                    <li class="social">
                                        <a href="#" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a>
                                    </li>
                                    <li class="social">
                                        <a href="#" class="twitter" title="twitter"><i class="icon-glyph-339"></i></a>
                                    </li>
                                    <li class="social">
                                        <a href="#" class="gplus" title="gplus"><i class="icon-glyph-317"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 footer-right">
                                <p>Copyright © 2015 Coin ID - All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <script type="text/javascript" src="/assets/neko-framework/js/jquery/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/assets/neko-framework/js/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
        <script type="application/javascript" src="/assets/neko-framework/external-plugins/external-plugins.min.js"></script>
        <script type="text/javascript" src="/assets/neko-framework/js/neko-framework.js"></script>
        <script type="text/javascript" src="/assets/js/custom.js"></script>

    </body>
</html>