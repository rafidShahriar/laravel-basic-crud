@extends('layouts.app')
@section('content')
<div class="container">
	<div class="btn btn-block">
		<a href="{{ route('book.create') }}">Add New Book</a>
	</div>
	@if(count($allBooks) > 0)
	@foreach($allBooks as $book)
	<hr>
	<div class="row">
		<h3>{{ $book->title }}</h3>
		<p>{{ $book->description }}</p>
		<p><em>{{ 'Published by-'. $book->author }}</em></p>
		<p>
			<a href="{{ route('book.show', $book->id )}}" class="btn btn-primary">View</a>
			<a href="{{ route('book.edit', $book->id) }}" class="btn btn-info">Edit</a>
		</p>
	</div>
	@endforeach
	@endif
	@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
	@endif
</div>
@endsection