@extends('layouts.admin')
@section('breadcrumb')

<li class="active">CSV Import</li>
@endsection
@section('content')
    <div class="container">
        <a href="{{ url('/employees/import') }}" class="btn btn-primary">Import Home</a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CSV Import</div>

                    <div class="panel-body">
                        Data imported successfully.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
