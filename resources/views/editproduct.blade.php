<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Laravel</title>
    </head>
    <body style="padding: 50px">
        <form action="{{ url('crud/'.$post->id) }}" method="POST">
        	@csrf
        	<input type="hidden" name="_method" value="PUT">
		    <div class="form-group">
		      <label for="name">Name</label>
		      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ $post->name }}">
		    </div>
		    <div class="form-group">
		      <label for="description">Description</label>
		      <textarea class="form-control" id="description" placeholder="Enter description" name="description">{{ $post->description }}</textarea>
		    </div>
		    <div class="form-group">
		      <label for="status">Status</label>
		      <select name="status" id="status" class="form-control">
		      	<option value="1" @if($post->name == 1) selected @endif>Active</option>
		      	<option value="0" @if($post->name == 0) selected @endif>In-Active</option>
		      </select>
		    </div>
		    
		    <button type="submit" class="btn btn-default">Submit</button>
		  </form>
    </body>
</html>
