@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <a href="{{route('books.create')}}">добавить</a>

                    <div class="panel-heading">Books</div>
                    <table class="table table-bordered">
                        @foreach($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->price}}</td>
                                <td>
                                    <a href="{{route('books.edit', ['id' => $book->id])}}">edit</a>
                                    <a href="{{route('books.delete', ['id' => $book->id])}}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
