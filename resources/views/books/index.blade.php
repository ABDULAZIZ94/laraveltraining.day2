@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Senarai Buku</h1>
    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ $book->author }}</p>
                    <p class="card-text">{{ $book->year }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Lihat Buku</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

