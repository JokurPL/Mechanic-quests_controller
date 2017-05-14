@extends('layouts.shop')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Zlecenia</h2>
                <div class="collection">
                    @foreach($quests as $quest)

                       <a href="{{route('quests.oneq', $quest)}}" class="collection-item">{{$quest->name}}</a>

                    @endforeach
                </div>
            </div>
            </div>
        </div>
@endsection