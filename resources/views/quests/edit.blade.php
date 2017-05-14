@extends('layouts.shop')
@section('content')

    <div class="container">
        {!! Form::model($quest, ['route' => ['quests.update', $quest], 'method' => 'PUT']) !!}

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        @endif

        <div class="form-group">
            {!! Form::label('name', "Nazwa zlecenia: ") !!}
            {!! Form::text('name', $quest->name, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content', "Opis: ") !!}
            {!! Form::textarea('content', $quest->content, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('prize', "Wartość zlecenia: ") !!}
            {!! Form::number('prize', $quest->prize, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('client', "Imię i nazwisko klienta: ") !!}
            {!! Form::text('client', $quest->client, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tel', "Nr. telefonu klienta: ") !!}
            {!! Form::number('tel', $quest->tel, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit("Edytuj", ['class'=>'btn btn-primary']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection