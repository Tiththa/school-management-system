<?php
use Carbon\Carbon;
?>

@extends('layouts.app')
<title>SMS Library Management | Issued Book</title>
@section('content')
<div class="container">


    <table class="table table-striped table-bordered">
      <thead class="thead-dark">

        <th>Name</th>
        <th>Department</th>
        <th>Book ID</th>
        <th>Borrowed Date</th>
        <th>Returning Date</th>
        <th>Return Time</th>
        <th>Reminder</th>
      </thead>
      <tbody>
        @foreach ($issues as $issue)
        <tr>

          <td>{{ $issue->name }}</td>
          <td>{{ $issue->department}}</td>
          <td><a href="{{ route('book.show', ['id' => $issue->book_id]) }}">{{ $issue->book_id}}</a></td>
          <td>{{ $issue->created_at }}</td>
          <td>{{ $issue->end_date }}</td>
          <td>{{ \Carbon\Carbon::parse($issue->end_date)->diffForHumans() }}</td>
          <td><a href="{{ route('issue.email',['id'=>$issue->id]) }}" class="btn btn-primary">Send Reminder</a></td>

        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $issues->links() }}
  </div>
@endsection
