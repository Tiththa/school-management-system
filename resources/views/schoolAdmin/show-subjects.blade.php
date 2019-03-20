@extends('layouts.app')
<title>SMS | Subject Management</title>
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
      <th>Subject</th>
      <th>Grade</th>
      <th>Teacher</th>

      <th></th>
      <th></th>
    </thead>
    <tbody>
      @foreach ($subjects as $subject)
      <tr>


        <td>{{ $subject->subject}}</td>
        <td>{{ $subject->grade}}</td>
        <td>{{ $subject->teacher }}</td>

        <td><a href="{{ route('books.edit', ['id' => $subject->id]) }}" class="btn btn-primary text-white ">Edit</a></td>
        <td><a href = '/library/books/{{ $subject->id }}' class="btn btn-danger text-white ">Delete</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $subjects->links() }}

</div>
@endsection
