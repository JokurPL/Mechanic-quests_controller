@extends('layouts.shop')
@section('content')

    <div class="container">
        <form action="{{route('quests.save')}}" method="post" class="col s12">
            <div class="row">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-field col s12">
                    <label for="text" class="validate">Nazwa zlecenia: </label>
                    <input type="text" name="name" class="form-control" placeholder="Tu wpisz nazwę zlecenia" required="required">
                </div>

                <div class="input-field col s12">
                    <label for="content" class="validate">Opis zlecenia:</label>
                    <textarea  name="content" class="materialize-textarea" placeholder="Tu wpisz opis zlecenia" required="required"></textarea>
                </div>

                <div class="input-field col s12" >
                    <label for="number" class="validate">Wartość zlecenia : </label>
                    <input type="number" name="prize" class="form-control" placeholder="Tu wpisz nazwę zlecenia" required="required">
                </div>

                <div class="input-field col s12">
                    <label for="client" class="validate">Imię i nazwisko klienta:</label>
                    <input type="text" name="client" class="form-control" placeholder="Tu wpisz imię i nazwisko klienta" required="required">
                </div>

                <div class="input-field col s12">
                    <label for="tel" class="validate">Telefon do klienta: </label>
                    <input type="text" name="tel" class="form-control" placeholder="Tu wpisz numer telefonu do klienta" required="required">
                </div>

                <div class="input-field col s12">
                    <input type="submit" class="btn btn-primary" value="Zapisz">
                    <a href="{{ URL::previous() }}"><input type="button" class="btn btn-default" value="Powrót"></a>
                </div>
            </div>
        </form>
    </div>
@endsection