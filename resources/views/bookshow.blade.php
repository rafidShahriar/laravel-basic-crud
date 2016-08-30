@extends('layouts.app')
@section('content')
<h1>{{ $book->title }}</h1>
<p class="lead">{{ $book->description }}</p>
<p><em>{{ $book->author }}</em></p>
<hr>
<a href="{{ route('book.index') }}" class="btn btn-info">Back to all Book Lists</a>
<a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary">Edit</a>
<div class="pull-right">
	<a href="#" class="btn btn-danger">Delete the Book</a>
</div>
@endsection