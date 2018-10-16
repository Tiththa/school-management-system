@extends('layouts.app')
<title> SMS | Library Management</title>
@section('content')
<div class="container-fluid">



  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Library Overview
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="row">


          <div class="col-lg-3 text-center">
            <div class="card">
              <div class="card-header bg-secondary text-white">Books</div>
              <div class="card-body">{{ $books }}</div>
            </div>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card">
              <div class="card-header bg-info text-white">Users</div>
              <div class="card-body">{{ $usersCount }}</div>
            </div>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card">
              <div class="card-header bg-info text-white">Issues</div>
              <div class="card-body">{{ $issues }}</div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>



  </div>
@endsection
