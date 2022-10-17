@extends('app')
@section('content')
    <div class="panel panel-default books">
        <div class="panel-heading">
            <h3 class="panel-title">Книги</h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                @foreach($books as $book)
                <a href="{{route('book.edit.index', ['id'=>$book->id])}}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{$book->name}}</h4>
                    <p class="list-group-item-text">{{$book->author}}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="panel panel-default books">
        <div class="panel-heading">
            <h3 class="panel-title">Додати книгу</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('book.create') }}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="name">Назва книги</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Назва">
                </div>
                <div class="form-group">
                    <label for="author">Автор</label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Автор">
                </div>
                <button type="submit" class="btn btn-primary">Створити</button>
            </form>
        </div>
    </div>
@endsection
