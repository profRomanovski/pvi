@extends('app')
@section('content')
    <div class="panel panel-default books">
        <div class="panel-heading">
            <h3 class="panel-title">Видачі</h3>
        </div>
        <div class="panel-body">
                @foreach($issuances as $isseance)
                <div class="list-group">
                    <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">{{$isseance->book->name }} </h4>
                        <p class="list-group-item-text">{{$isseance->customer}}</p>
                        <p class="list-group-item-text">{{$isseance->term}}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
