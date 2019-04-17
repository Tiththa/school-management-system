@extends('dealer.layouts.main')

@section('contentd')

<div class="container-fluid">
<div class="row">
	<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Company Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                    	
                      <img class="rounded-circle" src="/images/icons/avatar.png" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0">{{ ucwords($user->name)}}</h4>
                    <span class="text-muted d-block mb-2">Member since {{$user->created_at->diffForHumans()}}</span>
                    <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">person_add</i>Follow</button>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Workload</strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                            <span class="progress-value">74%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Company History</strong>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Company Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form enctype="multipart/form-data" action="{{route('store_dealer_info', $user->id)}}" method="post">
                          	@csrf
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feCompanyName">Company Name</label>
                                <input type="text" class="form-control" id="feCompanyName" placeholder="Company Name" value="{{ucwords($user->name)}}" name="company_name"> </div>
                              <div class="form-group col-md-6">
                                <label for="customFile">Company Logo</label>
                                <div class="custom-file">
								    <input type="file" class="form-control" id="customFile" name="customFile">								    
								</div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="work_email">Work Email</label>
                                <input type="email" class="form-control" id="work_email" placeholder="turbomotors@example.com" value="" name="work_email"> </div>
                                <div class="form-group col-md-3">
                                <label for="breg">Business Registration</label>
                                <select class="form-control" id="breg" name="breg">
                                	<option selected="selected" hidden>Choose Registration Type</option>
								    <option value="1">Registered</option>
								    <option value="0">Not Registered</option>
								</select>
								</div>
								<div class="form-group col-md-3">
                                <label for="fyear">Founded Year</label>
                                <input type="text" class="form-control" id="fyear" placeholder="1978" name="fyear">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="landline">Landline</label>
                                <input type="text" class="form-control" id="landline" placeholder="0112 700 700" name="landline"> </div>
                                <div class="form-group col-md-6">
                                <label for="phno">Mobile phone</label>
                                <input type="text" class="form-control" id="phno" placeholder="070 123 4567" name="phno"> </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"> </div>
                              <div class="form-group col-md-4">
                                <label for="city">City</label>
                                <input type="text" name="city" placeholder="colombo" class="form-control">
                              </div>                              
                              <div class="form-group col-md-4">
                                <label for="province">Province</label>
                                <select id="province" class="form-control" name="province">
                                  <option selected>Choose...</option>
                                  <option>Western Province</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" name="zip"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="desc">Company History and Description</label>
                                <textarea class="form-control" name="desc" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Update Account</button>
                          </form>
                        </div>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
</div>

@endsection
