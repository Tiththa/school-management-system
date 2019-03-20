@extends('layouts.app')
<title> SMS | Alumni</title>
@section('content')
<div class="container-fluid">



  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Welcome {{ Auth::user()->name }} to Alumni Portal
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="row">





        </div>
        </div>
      </div>
    </div>




    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('searchevents')}}" method="get">
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
        <th>ID</th>
        <th>Date</th>
        <th>Name</th>
        <th>Event Information</th>
        <th>Participants</th>

      </thead>
      <tbody>
        @foreach ($events as $event)
        <tr>


          <td>{{ $event->id}}</a></td>
          <td>{{ $event->date}}</td>
          <td>{{ $event->name }}</td>
          <td>{{ $event->body }}</td>

          <td>{{ $event->participant }}</td>

          <td><a href = "{{ route('delete.events', ['id' => $event->id]) }}" class="btn btn-danger text-white ">Delete</a></td>

        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $events->links() }}
  </div>
@endsection
