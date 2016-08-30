@extends('layouts.app')
@section('content')
<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <form role="form" class="form-control" method="post" action="{{ route('book.store') }}">
                <input type="hidden" name="_token" value="{{csrf_token()}}"><!-- {{ csrf_field() }} -->
                        <div class = "form-group">
                          <label for = "name">Title</label>
                          <input type = "text" class = "form-control" placeholder = "Enter Name" name="title">
                        </div>
                        <div class="form-group">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" rows="5" name="description"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="usr">User Name:</label>
                          <input type="text" class="form-control" name="author">
                        </div>
                        <button type = "submit" class = "btn btn-success">Submit</button>
                </form>
            </div>
</div>
<div class="row">
	<!-- show error message -->
</div>
@endsection