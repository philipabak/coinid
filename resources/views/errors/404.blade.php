@extends('app')

@section('content')
    <section class="image-background cid-home-1 fullscreen light-color" id="animated-header">
        <canvas id="animated-bubble"></canvas>
        <div class="mask opacity-2">
            <div class="container v-align-center">
                <div class="row pt-large pb-large">
                    <div class="col-md-6 text-center text-light">
                        <h1 class="x-large">404 error</h1>
                        <h2 class="hidden-xs">Sorry, you broke the internet :(</h2>
                        <p class="pb">
                            The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for. Perhaps searching can help.
                        </p>
                        <a href="/" class="anchor-link btn default">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop