@extends('layouts.shop')
@section('content')
    <div class="container">

        <div class="row" style="text-align: center">
            <div class="col-xs-6 col-md-4">
                @if (Auth::guest())
                    <p>
                    <h1>Stwórz nowe zlecenie!</h1>
                    </p>
                    <a style="text-decoration: none"><button class="disabled btn btn-info btn-lg btn-block">
                            <b>Dodaj zlecenie</b>
                        </button>
                    </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <p>
                <h1>Twoje zlecenia</h1>
                </p>
                <a style="text-decoration: none"><button class="disabled btn btn-primary btn-lg btn-block">
                        <b>Przeglądaj swoje zlecenia</b>
                    </button>
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <p>
                <h1>Wyjdź</h1>
                </p>
                <button class="btn disabled  btn-danger btn-lg btn-block">
                    <b>Wyloguj się</b>
                </button>

                @else
                    <p>
                    <h1>Stwórz nowe zlecenie!</h1>
                    </p>
                    <a style="text-decoration: none" href="{{route('add')}}"><button class="btn btn-info btn-lg btn-block">
                            <b>Dodaj zlecenie</b>
                        </button>
                    </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <p>
                <h1>Twoje zlecenia</h1>
                </p>
                <a style="text-decoration: none" href="{{route('quests.content')}}"><button class="btn btn-primary btn-lg btn-block">
                        <b>Przeglądaj swoje zlecenia</b>
                    </button>
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <p>
                <h1>Wyjdź</h1>
                </p>

                <button class="btn btn-danger btn-lg btn-block">
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="text-decoration: none;color:#fff">
                        <b>Wyjdź</b>
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </button>
                @endif
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3"></div>

        <div class="col-md-6 col-md-offset-3">
            <table class="table">
                <thead>
                <tr>
                    <th><h1>Technologie</h1></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><h2>Laravel</h2></td>
                    <td><h1><i class="glyphicon glyphicon-ok"></i></h1></td>
                </tr>
                <tr>
                    <td><h2>Bootstrap</h2></td>
                    <td><h1><i class="glyphicon glyphicon-ok"></i></h1></td>
                </tr>
                <tr>
                    <td><h2>Wordpress</h2></td>
                    <td><h1><i class="glyphicon glyphicon-remove"></i></h1></td>
                </tr>
                <tr>
                    <td><h2>Joomla</h2></td>
                    <td><h1><i class="glyphicon glyphicon-remove"></i></h1></td>
                </tr>
                <tr>
                    <td><h2>Codeigniter</h2></td>
                    <td><h1><i class="glyphicon glyphicon-remove"></i></h1></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 col-md-offset-3"></div>
    </div>

    <script>
        $('.carousel.carousel-slider').carousel({fullWidth: true});
    </script>
@endsection