<?php
use Carbon\Carbon;
?>
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Attendance') }}  </div>

              <div class="card-body">
                  <form method="POST" action="{{ URL::to('/attendance') }}">
                      @csrf

                      <div class="form-group row">

                          <label for="barcode" class="col-sm-4 col-form-label text-md-right">{{ __('Enter Barcode') }}</label>

                          <div class="col-md-6">

                              <input id="barcode" type="barcode" class="form-control" name="barcode"  required autofocus>
                                @if (session('status'))
                                <div class="alert alert-success">
                                  {{ session('status') }}
                                </div>
                            @endif
                          </div>
                      </div>
                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Submit') }}
                              </button>
                          </div>
                      </div>

                  </form>
                  <form method="POST" action="{{ URL::to('/attendance') }}">

                  </form>

              </div>
          </div>
      </div>
  </div>

  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <th>ID</th>
      <th>Name</th>
      <th>Department</th>
      <th>Date and Time</th>
      <th></th>
    </thead>
    <tbody>
      @foreach ($attendances as $attendance)
      <tr>

        <td>{{ $attendance->id }}</td>
        <td>{{ $attendance->name}}</td>
        <td>{{ $attendance->department}}</td>
        <td>{{ $attendance->updated_at }}</td>
        @can('isAdmin') @can(Auth::admin)
        <td><a href = 'attendance/{{ $attendance->userId }}'>Delete</a></td>
        @endcan @endcan
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $attendances->links() }}

</div>
@endsection
