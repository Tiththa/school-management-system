@extends('layouts.app')
<title>SMS Library Management | Add Achievement</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Achievement</div>

                <div class="card-body">
                  <form method="post" action="{{ route('add-users-achievements', ['id'=>$user->id]) }}" enctype="multipart/form-data">
                  <div class="form-group row">
                      <label for="name" class="col-sm-4 col-form-label text-md-right " rows="5">{{ __('Achievement Name and Info') }}</label>

                      <div class="col-md-6">

                          <textarea class="form-control" rows="5" id="name"name="name" required autofocus></textarea>

                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                      <div class="col-md-6">
                          <input id="year" type="text" class="form-control" name="year" required>


                      </div>
                  </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Achievement') }}
                            </button>


                        </div>
                    </div>
                    ...
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
