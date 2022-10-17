@extends('app')
@section('content')
    <div class="panel panel-default books">
        <div class="panel-heading">
            <h3 class="panel-title">Редагування</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('book.edit') }}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="name">Назва книги</label>
                    <input type="text" class="form-control" value="{{$book->name}}" name="name" id="name" placeholder="Назва">
                    <input type="text" class="form-control" name="book_id" id="book_id" hidden value="{{$book->id}}" >
                </div>
                <div class="form-group">
                    <label for="author">Автор</label>
                    <input type="text" class="form-control" value="{{$book->author}}" name="author" id="author" placeholder="Автор">
                </div>
                <button type="submit" class="btn btn-primary">Зберегти</button>
                <div class="form-group mt-4">
                    <a href="{{route('issuance.create.index', ['book_id'=>$book->id])}}" class="btn btn-success btn-lg " role="button" aria-pressed="true">Видати</a>
                    <a href="{{route('book.delete', ['book_id'=>$book->id])}}" class="btn btn-danger btn-lg " role="button" aria-pressed="true">Видалити</a>
                    <a href="{{route('issuance', ['book_id'=>$book->id])}}" class="btn btn-info btn-lg " role="button" aria-pressed="true">Видачі</a>
                </div>
            </form>
        </div>
    </div>
@endsection
