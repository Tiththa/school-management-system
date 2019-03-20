@extends('layouts.app')
<title>SMS Acccounts Management | Edit Expenses</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Book</div>

                <div class="card-body">
                  <form method="post" action="{{ route('expense.add') }}" enctype="multipart/form-data">
                  <div class="form-group row">
                      <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Record Title') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="title"  required autofocus>


                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Record Name') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="name" required>


                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="value" class="col-md-4 col-form-label text-md-right">{{ __('Value') }}</label>

                      <div class="col-md-6">
                          <input id="value" type="text" class="form-control" name="value" required>


                      </div>
                  </div>
                  <div class="form-group row">

                      <label for="role" class="col-md-4 col-form-label text-md-right">{{__('Type') }}</label>
                        <div class="col-md-6">
                      <select name="type" id="type" class="form-control" required>

                        <option >Expenditure</option>
                        <option >Donation</option>
                        <option >Other</option>
                      </select>
                    </div>
                  </div>


                    {{ csrf_field() }}
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Record') }}
                            </button>


                        </div>
                    </div>
            </div>
        </div>
    </div>
  </div>
@endsection
