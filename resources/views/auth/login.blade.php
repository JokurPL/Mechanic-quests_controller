@extends('layouts.shop')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Zaloguj się</h1></div>
                    <div class="panel-body">
                        <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email"  type="email" name="email" class="validate" value="{{ old('email') }}" required autofocus>
                                        <label for="email">Email</label>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password"  type="password" name="password" class="validate" value="{{ old('password') }}" required autofocus>
                                        <label for="password">Hasło</label>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p>
                                    <input type="checkbox" class="filled-in" id="filled-in-box" name="remember" {{ old('remember') ? 'checked' : ''}} />
                                    <label for="filled-in-box">Pamiętaj mnie</label>
                                </p>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn pink waves-effect waves-light btn-large">
                                        Zaloguj się <i class="material-icons right">send</i>
                                    </button>

                                    <a class="btn waves-effect blue waves-light btn-large" href="{{ url('/password/reset') }}">
                                        Zapomniałeś hasła?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
