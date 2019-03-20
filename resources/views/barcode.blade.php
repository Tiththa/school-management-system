@extends('layouts.app')
@section('content')
<style type="text/css">
  img{
    padding-left: 20px;
  }
</style>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-primary" style="text-align: center;">Laravel 5 Barcode Generator Using milon/barcode</h1>
    </div>
</div>
<div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">
  <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('Tithira', 'C39')}}" alt="barcode" />
       <!-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('12', 'C39+')}}" alt="barcode" />
  <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('13', 'C39E')}}" alt="barcode" />
  <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('14', 'C39E+')}}" alt="barcode" />
  <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('15', 'C93')}}" alt="barcode" /> -->
  <br/>
    <table class="table table-bordered">
      <th>test</th>
      <td><img src="data:image/png;base64,{{DNS1D::getBarcodePNG('Tithira ', 'C39')}}" alt="barcode" /></td>
    </table>
</div>
@endsection
