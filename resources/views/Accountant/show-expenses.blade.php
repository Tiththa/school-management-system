@extends('layouts.app')
<title>SMS Library Management | Add Book</title>
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <form action="{{route('searchbooks')}}" method="get">
            <div class="input-group">
              <input type="search" class="form-control" name="search">
              <span class="input-group-prepend">
                <button type="submit" class="btn btn-primary">Search</button>
              </span>
            </div>
          </form>
      </div>
  </div>

  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <th>Picture</th>
      <th>Name</th>
      <th>Author</th>
      <th>Category</th>
      <th>Summary</th>
      <th>Bookshelf</th>
      <th></th>
      <th></th>
    </thead>
    <tbody>
      @foreach ($books as $book)
      <tr>

        <td><img src="{{asset('/storage/uploads/'.$book->filename) }}" alt="image" width="60px" height="50px"/></td>
        <td><a href="{{ route('book.show', ['id' => $book->id]) }}">{{ $book->name}}</a></td>
        <td>{{ $book->author}}</td>
        <td>{{ $book->category }}</td>
        <td>{{ str_limit($book->summary, 10) }}</td>
        <!-- <td>{{ $book->summary }}</td> -->
        <td>{{ $book->bookshelf }}</td>
        <td><a href="{{ route('books.edit', ['id' => $book->id]) }}" class="btn btn-primary text-white ">Edit</a></td>
        <td><a href = '/library/books/{{ $book->id }}' class="btn btn-danger text-white ">Delete</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $books->links() }}

</div>
@endsection
