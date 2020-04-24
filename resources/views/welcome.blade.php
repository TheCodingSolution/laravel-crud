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
    <body>
        <div class="container">
          <a href="{{ url('crud/create') }}" class="btn btn-primary">New Product</a>
                      
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Posted at</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
              <tr>
                <td>{{ $post->name }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ date('d-m-Y',strtotime($post->posted_at)) }}</td>
                <td>{{ $post->status }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('crud/'.$post->id.'/edit') }}">Edit</a>
                    <form action="{{ url('crud/'.$post->id) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
    </body>
</html>
