@extends('user.layouts.main')
<style>

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
	-ms-flex: 50%;
	flex: 50%;
	max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
	-ms-flex: 30%;
	flex: 30%;
	max-width: 30%;

  }
  .su {
	margin-top: -5px !important;
  }
}
[type=radio]:checked + img {
  outline: 2px solid #f00;
}

/*tooltip*/
.tooltip-inner {
	max-width: 350px !important; /* set this to your maximum fitting width */
	width: inherit !important; /* will take up least amount of space */
}


</style>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
 -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qvcagxrc66fwl8npfxx3z7akxqxmgv52u6iw87i3v8o5h17y"></script>

<script>
	tinymce.init({
		selector: 'textarea',
		themes: "modern",
		menubar: false,
		statusbar: false,
		height : "480",
		plugins: "lists ",
  		
		menu: {
			view: {title: 'Edit', items: 'cut, copy, paste' }
		}

	});
</script>

@section('content')
<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">User Dashboard</span>
			<h3 class="page-title">Update Your Ad</h3>
	</div>
</div>

<div class="row" >

			  <!-- Users Stats -->
	<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
		<div id="accordion">
			<div class="card card-small">
				  <div class="card-header border-bottom"  id="headingOne">
					<!-- <h6 class="m-0">Body Style</h6> -->
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" type="button">
					  <strong>Body Style</strong>
					</button>
				  </div>
				  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				  <div class="card-body pt-0">

					<form id="regForm" action="{{ route('posts.update', $post->id) }}" method="post">
						@csrf
						<!-- <strong class="text-muted d-block mb-2">Body Style</strong> -->
						<div class="row tab">
						  <div class="column">
							<label for="sedan">
							<input type="radio" name="style" value="sedan" hidden id="sedan">
							<img src="/images/cars/sedan.png" style="width:100%; " class="img-responsive" >

							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="hatchback" hidden>
							<img src="/images/cars/hatchback.png" style="width:100%; " class="img-responsive">
							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="coupe" hidden>
							<img src="/images/cars/coupe.png" style="width:100%; margin-top: 11px;" class="img-responsive">
							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="convertible" hidden>
							<img src="/images/cars/convertible.png" style="width:100%; margin-top: 5px;" class="img-responsive">
							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="station" hidden>
							<img src="/images/cars/station.png" style="width:100%; margin-top: 5px;" class="img-responsive">
							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="pickuptruck" hidden>
							<img src="/images/cars/pickuptruck.png" style="width:100%; margin-top: 5px;" class="img-responsive">
							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="suv" hidden>
							<img src="/images/cars/suv.png" style="width:100%; margin-top: 5px;" class="img-responsive">
							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="van" hidden>
							<img src="/images/cars/van.png" style="width:95%; margin-top: 5px;" class="img-responsive">
							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="minivan" hidden>
							<img src="/images/cars/minivan.png" style="width:100%; margin-top: 5px;" class="img-responsive">
							</label>
						  </div>
						  <div class="column">
							<label>
							<input type="radio" name="style" value="super" hidden>
							<img src="/images/cars/super.png" style="width:100%; margin-top: 35px;" class="img-responsive su">
							</label>
						  </div>
						</div>
					</div>
					</div>

					<div class="card card-small mb-4">
						<div class="card-header border-bottom" id="headingTwo">
							<h6 class="m-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" type="button">
								  <strong>Vehicle Details</strong>
								</button>
							</h6>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body pt-0">


					  <div class="row tab">
						<div class="col">
								


								<div class="form-row">
									<div class="form-group col-md-2">
										<label for="condition">Condition</label>
										<select id="condition" class="form-control" name="condition" required autofocus>
											@if($post->condition)
										 	<option value="{{ $post->condition }}" hidden selected="selected">{{ ucfirst($post->condition) }}</option>
										 	<option value="brandnew">Brandnew</option>
										  	<option value="used">Used</option>
										  	<option value="reconditioned">Reconditioned</option>
										  	@endif
											
										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="feInputState">Year</label>
										<select id="year" class="form-control" required name="year">
										  @if($post->year)
										  <option value="{{ $post->year }}" selected hidden>{{ $post->year }}</option>
										    <?php 
										    	$firstYear = (int)date('Y') - 79;
												$lastYear = $firstYear + 79;
												for($i=$firstYear;$i<=$lastYear;$i++)
												{
												    echo '<option value='.$i.'>'.$i.'</option>';
												}
											?>										  
										  @endif
										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="make">Make</label>
										<select id="make" class="form-control dynamic" name="make" data-dependent="model" required>
			  								
										 	<option value="{{ $post->make }}">{{ $post->make }}</option>
										  	
										 
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="model">Model</label>
										<a href="javascript://" title="Model" data-toggle="popover" data-trigger="hover" data-content="Some content" ><i class="fas fa-info-circle"></i></a>
										<input type="text" class="form-control" id="model" placeholder="Corolla" required name="model" value="{{$post->model}}">

									</div>
									<div class="form-group col-md-3"  id="submodel" >
										<label for="sub_modell" >Sub-Model</label>
										<div style="display: inline-block;"><a href="javascript://" title="Corolla - model, CE110 - Sub-Model" data-toggle="popover" data-trigger="hover" data-content="Check the rear or the side of the vehicle,registration,the title or the current policy documents" data-container="body" data-placement="top" ><i class="fas fa-info-circle"></i></a></div>
										<input type="text" class="form-control" id="sub_model" placeholder="If no sub model leave blank" required name="sub_model" value="{{$post->submodel}}">
									</div>
									<div class="form-group col-md-2">
										<label for="trim">Trim(Edition)</label>
										<input type="text" name="trim" placeholder="If no trim Leave blank" class="form-control" value="@if($post->trim == 'none')@else{{$post->trim}}@endif">
									</div>

								  <div class="form-group col-md-2">
									<label for="mileage">Mileage</label>
									<input type="number" class="form-control" id="mileage" placeholder="11000"  required name="mileage" value="{{$post->mileage}}">
								  </div>
									<div class="form-group col-md-2">
										<label for="transmission">Transmission</label>
										<select id="transmission" class="form-control" required name="transmission">
										  @if($post->transmission)
										  <option value="{{$post->transmission}}" selected="selected" hidden>{{$post->transmission}}</option>
										  <option value="automatic">Automatic</option>
										  <option value="manual">Manual</option>
										  <option value="tiptronic">Tiptronic</option>
										  @endif
										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="fuel_type">Fuel Type</label>
										<a href="javascript://" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content" ><i class="fas fa-info-circle"></i></a>
										<select id="fuel_type" class="form-control" required name="fuel_type">
											@if($post->fuel_type)
										  <option selected hidden value="{{$post->fuel_type}}">{{$post->fuel_type}}</option>
										  <option value="audi">Petrol</option>
										  <option value="bmw">Diesel</option>
										  <option value="benz">Petrol(Hybrid)</option>
										  <option value="benz">Diesel(Hybrid)</option>
										  <option value="benz">Petrol Hybrid Electric Vehicle(PHEV)</option>
										  <option value="benz">Electric</option>
										  @endif
										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="engine_capacity">Engine Capacity (CC)</label>
										<input type="number" class="form-control" id="engine_capacity" placeholder="2500"  maxlength="4" required value="{{$post->engine_capacity}}" name="engine_capacity">
									</div>


								</div>

								<div class="form-row">
									<div class="form-group col-md-3">
										<label for="highway_mpg">Highway Fuel Economy </label>
										<div class="input-group">
											<input type="number" class="form-control" aria-label="Text input with dropdown button" value="{{$post->highway_mpg}}" name="highway_mpg" id="highway_mpg">
											<div class="input-group-append">
												<select id="year" class="form-control" required name="highway_fuel">
													@if($post->highway_fuel)
													<option selected hidden value="{{$post->highway_fuel}}">{{strtoupper($post->highway_fuel)}}</option>
													<option value="mpg">MPG</option>
													<option value="kmpl">KMPL</option>
													@endif
												   </select>
											</div>
										</div>
									</div>
									<div class="form-group col-md-3">
										<label for="city_mpg">City Fuel Economy </label>
										<div class="input-group">
											<input type="number" class="form-control" aria-label="Text input with dropdown button" name="city_mpg" value="{{$post->city_mpg}}" id="city_mpg">
											<div class="input-group-append" >
												<select id="year" class="form-control" required name="city_fuel">
													@if($post->city_fuel)
													<option selected hidden value="{{$post->city_fuel}}">{{strtoupper($post->city_fuel)}}</option>
													<option value="mpg">MPG</option>
													<option value="kmpl">KMPL</option>
													@endif
												   </select>
											</div>
										</div>
									</div>
									<div class="form-group col-md-2">
										<label for="color">Exterior Color</label>
										<input type="text" class="form-control" id="color" placeholder="Red"  required name="color" value="{{ucfirst($post->exterior_colour)}}">
									</div>
									<div class="form-group col-md-2">
										<label for="owner">Owner</label>
										<input type="text" class="form-control" id="owner" placeholder="1st"  required name="owner" value="{{$post->owner}}">
									</div>
									<div class="form-group col-md-2">
										<label for="price">Price</label>
										<input type="number" class="form-control" id="price" placeholder=""  required name="price" value="{{$post->price}}">
									</div>
								</div>

								<div class="form-row">
								  <div class="form-group col-md-4">
									<label for="location">Location</label>
									<input type="text" class="form-control" id="location" name="location" value="{{ucfirst($post->location)}}"> </div>
								  <div class="form-group col-md-4">
									<label for="province">Province</label>
									<select id="province" class="form-control" name="province">
									  @if($post->province)
									  <option selected hidden value="{{$post->province}}">{{ucfirst($post->province)}}</option>
									  <option value="western">Western</option>
									  @endif
									</select>
								  </div>

								</div>
								<!-- <button type="submit" class="btn btn-accent">Next</button> -->


							<!-- <div class="form-row">
							  <div class="form-group col-md-12">
								<label for="feDescription">General Description</label>
								<textarea class="form-control" name="feDescription" rows="5" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?"></textarea>
							  </div>
							</div> -->
							
						</div>
					</div>
			</div>
			
		</div>
	<div class="card card-small">
		<div class="card-header border-bottom"  id="headingThree">
			
		    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" type="button">
         	<strong>General Description</strong>
        	</button>
				
			
		</div>
		<div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordion">
			<div class="card-body pt-0">
				<div class="row tab">
					<div class="form-group col-md-12">
						<label for="features"><h5 style="font-weight: bold;">Features</h5></label>
							<div class="form-group">
							  <textarea class="form-control"  id="features" name="features">{!! $post->features !!}</textarea>
							</div>
					</div>
					
				</div>
				<div class="row tab">
					<div class="form-group col-md-12">
						<label for="editor-container"><h5 style="font-weight: bold;">General Description</h5></label>
							<div class="form-group">
							  <textarea class="form-control"  id="info" name="info">{!! $post->info !!}</textarea>
							</div>
							<button type="submit" class="btn btn-accent">Next</button>
					</div>
					
				</div>
			</div>
		</div>
			
			
		</div>
	</div>
	</form>
					




				  </div>
				</div>
			  </div>
			


</div>


<script>
	$(document).ready(function(){

	 $('.dynamic').change(function(){
	  if($(this).val() != '')
	  {
	   var select = $(this).attr("id");
	   var value = $(this).val();
	   var dependent = $(this).data('dependent');
	   var _token = $('input[name="_token"]').val();
	   $.ajax({
		url:"#",
		method:"POST",
		data:{select:select, value:value, _token:_token, dependent:dependent},
		success:function(result)
		{
		 $('#'+dependent).html(result);
		}

	   })
	  }
	 });

	 $('#make').change(function(){
	  $('#model').val('');
	  $('#trim').val('');
	 });

	 $('#model').change(function(){
	  $('#trim').val('');
	 });


	});
</script>
<script>
	new Vue({
	  el: '#submodel',
	  mounted: function() {
		$('[data-toggle="tooltip"]').tooltip();
	  }
	})
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<script>
$("a[data-toggle=popover]").popover().click(function(e) {
		e.preventDefault();
});
 </script>

<script type='text/javascript'>
        $(document).ready(function() {
            Sys.WebForms.PageRequestManager.getInstance().add_endRequest(endRequestHandler);
        });

        function endRequestHandler(sender, args)
        {
         $('#collapseOne').addClass('in');
        }
</script>
<script type='text/javascript'>
        $(document).ready(function() {
            Sys.WebForms.PageRequestManager.getInstance().add_endRequest(endRequestHandler);
        });

        function endRequestHandler(sender, args)
        {
         $('#collapseTwo').addClass('in');
        }
</script>
<script type='text/javascript'>
        $(document).ready(function() {
            Sys.WebForms.PageRequestManager.getInstance().add_endRequest(endRequestHandler);
        });

        function endRequestHandler(sender, args)
        {
         $('#collapseThree').addClass('in');
        }
</script>

 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
 <script src="js/scripts/app/app-blog-new-post.1.1.0.js"></script> -->

@endsection
