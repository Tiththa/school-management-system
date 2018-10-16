<?php
use Carbon\Carbon;
?>

@extends('layouts.app')
<title>SMS Library Management | Issue Book</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Issue Book</div>

                <div class="card-body">
                  <form method="post" action="{{ route('book.issue')}}" >
                      @csrf
                      @if (session('status'))
                        <div class="alert alert-success">
                          {{ session('status') }}
                        </div>
                      @endif
                    <div class="form-group row">
                        <label for="user_id" class="col-sm-4 col-form-label text-md-right">{{ __('User ID') }}</label>

                        <div class="col-md-6">
                            <input id="id" type="text" class="form-control" name="id"   required autofocus>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="book_id" class="col-md-4 col-form-label text-md-right">{{ __('Book ID') }}</label>

                        <div class="col-md-6">
                            <input id="book_id" type="text" class="form-control" name="book_id"  required>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Return') }}</label>

                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control" name="date"   required>


                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Issue Book') }}
                            </button>


                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>

  </div>
@endsection
