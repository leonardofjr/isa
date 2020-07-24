<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152699551-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-152699551-1');
        </script>
        <meta name="google-site-verification" content="x3Qe45hHk2uraeRwnVUilQnrABwqyVY-axKV8AKilZg" />

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('meta-seo')
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <!-- Font Awesome -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
  
    
        <script src="https://www.google.com/recaptcha/api.js?render={{env('reCAPTCHA_KEY')}}"></script>
        <script>
                grecaptcha.ready(function() {
                    grecaptcha.execute({{env('reCAPTCHA_KEY')}}, {action: 'homepage'}).then(function(token) {
                       ...
                    });
                });
        </script>
    </head>
    <body>
        @include('frontend.layouts.components.topbar')
        <header>
            @include('frontend.layouts.components.navbar')
        </header>
        <main class="container">
            <div class="row">
                <section class="col-md-9">
                    @yield('content')
                </section>
                <aside class="col-md-3">
                    @include('frontend.layouts.components.secondary-navbar')
                </aside>
            </div>

        </main>

        <footer class="mt-3">
            @include('frontend.layouts.components.footer')
        </footer>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script type="text/javascript" defer>
                let modalOpened = false;
                $(window).scroll(function() {
                    if($(this).scrollTop() > 2000 && modalOpened === false) {
                        console.log(modalOpened);
                        modalOpened = true;
                       showModal();
                    }
                })

                function showModal() {
                    $('#myModal').modal();
                }

        </script>
    </body>
</html>
