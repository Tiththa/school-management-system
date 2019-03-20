@extends('layouts.app')
<title>SMS Library Management | Add Book</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Activity</div>

                <div class="card-body">
                  <form method="post" action="{{Route('create-activity')}}" >
                  <div class="form-group row">
                      <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Activity Name') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="name"  required autofocus>


                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>

                      <div class="col-md-6">
                          <input id="user_id" type="text" class="form-control" name="user_id" required>


                      </div>
                  </div>

                  <div class="form-group row">

              			<label for="role" class="col-md-4 col-form-label text-md-right">Position</label>
                    <div class="col-md-6">
              			<select name="position"  cols="5" rows="5" class="form-control">
                       <option value="Committee Member">{{ __('Committee Member') }}</option>
              				 <option value="President">{{ __('President') }}</option>
                       <option value="Secretary">{{ __('Secretary') }}</option>
                       <option value="Other">{{ __('Other') }}</option>

              			</select>

              		  </div>
                  </div>
                  <div class="form-group row">

              			<label for="role" class="col-md-4 col-form-label text-md-right">Year</label>
                    <div class="col-md-6">
              			<select name="year"  cols="5" rows="5" class="form-control">

                       <option value="2018">{{ __('2018') }}</option>
                       <option value="2019">{{ __('2019') }}</option>
                       <option value="Other">{{ __('Other') }}</option>

              			</select>

              		  </div>
                  </div>

                  <div class="form-group row">
                      <label for="tic" class="col-md-4 col-form-label text-md-right">{{ __('Teacher-In-Charge') }}</label>

                      <div class="col-md-6">
                          <input id="tic" type="text" class="form-control" name="tic" required>


                      </div>
                  </div>


                    {{ csrf_field() }}
                    .
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Activity') }}
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
