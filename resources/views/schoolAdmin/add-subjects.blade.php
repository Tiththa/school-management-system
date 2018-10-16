@extends('layouts.app')
<title>SMS  Management | Add Subjects</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Subjects</div>

                <div class="card-body">
                  <form method="post" action="{{ route('subject.add', ['id'=>$user->id]) }}" enctype="multipart/form-data">
                    <div class="form-group row">


                        <div class="col-md-6">

                            <input id="year" type="text" class="form-control" value="{{ $user->id }}" name="subject" required>

                        </div>
                    </div>
                  <div class="form-group row">
                      <label for="subject" class="col-sm-4 col-form-label text-md-right " rows="5">{{ __('Section') }}</label>

                      <div class="col-md-6">

                          <input id="year" type="text" class="form-control" name="grade" required>

                      </div>
                  </div>

                  <div class="form-group row">

                      <label for="participant" class="col-md-4 col-form-label text-md-right">{{__('Grade') }}</label>
                        <div class="col-md-6">
                      <select name="subject" id="subject" class="form-control" required>

                        <option value="Tamil,Art,Mathematics" >1</option>
                        <option value="Tamil,Art,Mathematics" >2</option>
                        <option value="Tamil,Art,English,Mathematics,Environmental Studies" >3</option>
                        <option value="Tamil,Second Language,English,Art,Mathematics,Environmental Studies" >4</option>
                        <option value="Tamil,Second Language,English,Art,Mathematics,Environmental Studies,Hinduism" >5</option>
                        <option value="Tamil,Second Language,English,Art,Mathematics,PTS ,Health,History,Geography,Hinduism" >6</option>
                        <option value="Tamil,Second Language,English,Art,Music,Mathematics,PTS ,Health,History,Geography,Hinduism" >7</option>
                        <option value="Tamil,Second Language,English,Art,Music,Mathematics,PTS ,Health,History,Geography,Hinduism" >8</option>
                        <option value="Tamil,Second Language,English,Art,Music,Literature,Mathematics,PTS ,Health,History,Geography,Hinduism" >9</option>
                        <option value="Tamil,Second Language,English,Art,Music,Literature,Mathematics,PTS ,Health,History,Geography,Hinduism,Commerce,IT,Civics" >10</option>
                        <option value="Tamil,Second Language,English,Art,Music,Literature,Mathematics,PTS ,Health,History,Geography,Hinduism,Commerce,IT,Civics" >11</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="subject" class="col-sm-4 col-form-label text-md-right " rows="5">{{ __('Teacher') }}</label>

                      <div class="col-md-6">

                          <input id="teacher" type="text" class="form-control" name="teacher" required>

                      </div>
                  </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Subject') }}
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
