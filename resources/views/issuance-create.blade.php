@extends('app')
@section('content')
    <div class="panel panel-default books">
        <div class="panel-heading">
            <h3 class="panel-title">Стоврити видачу</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('issuance.create') }}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="name">Назва книги</label>
                    <input type="text" class="form-control" disabled name="name" id="name" value="{{$bookName}}" >
                    <input type="text" class="form-control" name="book_id" id="book_id" hidden value="{{$bookId}}" >
                </div>
                <div class="form-group">
                    <label for="customer">Клієнт</label>
                    <input type="text" class="form-control" name="customer" id="customer" placeholder="Клієнт">
                </div>
                <button type="submit" class="btn btn-primary">Створити</button>
            </form>
        </div>
    </div>
@endsection
