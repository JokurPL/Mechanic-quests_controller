@extends('layouts.shop')
@section('title') {{$quest->name}} @endsection
@section('content')
    <div class="container">
<div class="row">
    <div class="col-md-9">

        <div class="thumbnail">
            <img class="img-responsive" src="http://i.imgur.com/5LPRUzW.jpg" alt="">
            <div class="caption-full">
                <h4 class="pull-right">Wartość: {{$quest->prize}}zł</h4>
                <h4><b>{{$quest->name}}</b></h4>
                <p>{{$quest->content}}</p>
            </div>
            <div class="ratings">
                <div class="pull-right">
                <p class="pull-right">Nr. tel. {{$quest->tel}}</p>
                <p class="pull-right">dlaczego</p>
                </div>
                <p>Klient: {{$quest->client}}</p>
                <p>Utworzone: {{$quest->created_at}}</p>
            </div>
        </div>

        <div class="well">
            <div class="form-group">
                <div class="form-group">
                    {!! Form::model($quest, ['route' => ['quests.destroy', $quest], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Usuń</button>
                    {!! Form::close() !!}
                </div>
                <div class="form-group">
                    <a  href="{{route('quests.edit', $quest)}}" class="btn btn-primary"><i class="glyphicon glyphicon-wrench"></i> Edytuj</a>
                </div>
                <div class="form-group">
                    <a href="{{route('quests.print', $quest)}}" class="btn btn-info"><i class="glyphicon glyphicon-print"></i> Wydrukuj</a>
                </div>
                <a href="{{URL::previous()}}" class="btn btn-default"><i class="glyphicon glyphicon-backward"></i> Powrót</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection