@extends('layouts.app')
<title>SMS Management | Add Event</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Event</div>

                <div class="card-body">
                  <form method="post" action="{{ route('event.add') }}" enctype="multipart/form-data">
                  <div class="form-group row">
                      <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Event Date') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="date" class="form-control" name="date"  required autofocus>


                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Name') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="name" required>


                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Event Information') }}</label>

                      <div class="col-md-6">
                          <textarea class="form-control" rows="5" id="body"name="body" required autofocus></textarea>


                      </div>
                  </div>
                  <div class="form-group row">

                      <label for="participant" class="col-md-4 col-form-label text-md-right">{{__('Confirm Participation') }}</label>
                        <div class="col-md-6">
                      <select name="participant" id="type" class="form-control" required>

                        <option value="{{ Auth::user()->name }}" >Going</option>
                        <option >Interested</option>
                        <option >No</option>
                      </select>
                    </div>
                  </div>


                    {{ csrf_field() }}
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Event') }}
                            </button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
