<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zlecenia.pl</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
</head>

<body>
        <nav class="blue light">
            <div class="nav-wrapper container">
                <a href="{{route('home')}}" class="brand-logo ">Zlecenia.pl</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Zaloguj się</a></li>
                    @else
                        <ul id="dropdown" class="dropdown-content">

                                <li><a href="{{route('quests.content')}}">Wszystkie zlecenia</a></li>
                                <li><a href="{{route('add')}}">Dodaj nowe zlecenie</a></li>
                        </ul>
                            <a class="btn dropdown-button" href="#!" data-activates="dropdown">{{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                    </ul>
@endif
                </div>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->

        @yield('content')
    <!-- /.container -->

        <!-- Footer -->
        <footer class="page-footer blue light col s12">
            <div class="container ">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Zlecenia.pl</h5>
                        <p class="grey-text text-lighten-4">Zajrzyj na nasze social media. Link po prawej.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    &copy; {{date('Y')}} Zlecenia.pl
                    <a class="grey-text text-lighten-4 right" target="_blank" href="http://mateusz-pietrzak.cba.pl">Stworzone przez <u>Mateusza Pietrzaka</u></a>
                </div>
            </div>
        </footer>

    <script src="/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.js"></script>
        <script> $('.carousel.carousel-slider').carousel({fullWidth: true});</script>
</body>
</html>
