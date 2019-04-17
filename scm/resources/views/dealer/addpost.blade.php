@extends('dealer.layouts.main')
<link rel="stylesheet" type="text/css" href="/css/addpost.css">
<style>

</style>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
 -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qvcagxrc66fwl8npfxx3z7akxqxmgv52u6iw87i3v8o5h17y"></script>

<script>
	tinymce.init({
		selector: 'textarea#features',
		themes: "modern",
		menubar: false,
		statusbar: false,
		height : "280",
		plugins: "lists ",
  		toolbar: 'undo redo |  bullist numlist',
		menu: {
			view: {title: 'Edit', items: 'cut, copy, paste' }
		}

	});
</script>

<script>
	tinymce.init({
		selector: 'textarea#info',
		themes: "modern",
		menubar: false,
		statusbar: false,
		height : "480",
		toolbar: 'undo redo |  bold ',
		menu: {
			view: {title: 'Edit', items: 'cut, copy, paste' }
		}

	});
</script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.6.11/src/css/lightgallery.css">

@section('contentd')
<div class="page-header row no-gutters py-4" data-backdrop="false">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">User Dashboard</span>
			<h3 class="page-title">Create a New Ad</h3>
			<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Images Uploading Info</button> -->

	</div>

</div>
<div class="row" >

			  <!-- Users Stats -->
	<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
		<br>
		<div class="card bs">
			<label class=" bs" for="states">We Require Some standards when Creating an Ad therefore we require you to follow our <a href="/guidelines">guidelines</a> to take pictures of your vehicle/vehicles as show below.Choose your body style of your vehicle to start over.</label>

			<div class="card-body">
				<div class="button button-bs dropdown sl">
				  <select id="colorselector">
				  	<option selected="selected" >Choose Body Style</option>
				     <option value="Sedan">Sedan</option>
				     <option value="Hatchback">Hatchback</option>
				     <option value="Coupe">Coupe</option>
				     <option value="Convertible">Convertible</option>
				     <option value="Station">Station Wagon</option>
				     <option value="Pickup">Pickup Truck</option>
				     <option value="SUV">SUV</option>
				     <option value="Van">Van</option>
				     <option value="Mini">Mini Van</option>
				     <option value="Supercar">Supercar</option>
				  </select>
				</div>				
				<div class="output" >
				  <div id="Sedan" class="colors ">  
				  	<div class="row" id="imageGallery">
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				
				  					<img src="/images/330/1.jpg" class="img-fluid card-img-top">
				  								  				
				  				<h5 class="card-title text-center">1</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/2.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">2</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/3.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">3</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/4.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">4</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/5.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">5</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/6.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">6</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/7.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">7</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/8.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">8</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/9.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">9</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/330/10.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">10</h5>				  				
				  			</div>				  			
				  		</div>				  		
				  	</div>	
				  </div>
				  <div id="Hatchback" class="colors "> 
				  	<div class="row">
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/1.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">1</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/2.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">2</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/3.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">3</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/4.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">4</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/5.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">5</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/6.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">6</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/7.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">7</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/8.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">8</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/9.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">9</h5>				  				
				  			</div>				  			
				  		</div>
				  		<div class="col-lg-4 p-2">
				  			<div class="card">
				  				<img src="/images/hatchback/10.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center">10</h5>				  				
				  			</div>				  			
				  		</div>				  		
				  	</div>
				  </div>
				  <div id="Coupe" class="colors blue"> “If I don't have red, I use blue” Pablo Picasso

				  </div>
				  <div id="Convertible" class="colors green"> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Station" class="colors green"> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Pickup" class="colors green"> “If I don't have blue, I use green Pablo Picasso
				  </div>
				  <div id="SUV" class="colors green"> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Van" class="colors green"> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Mini" class="colors green"> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Supercar" class="colors green"> “If I don't have blue, I use green Pablo Picasso

				  </div>
				</div>
			</div>

		</div>
		<br>


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

					<form id="regForm" action="{{ route('store') }}" method="post">
						@csrf
						<!-- <strong class="text-muted d-block mb-2">Body Style</strong> -->
						<div class="row tab fer">
						  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<label for="sedan">
							<input type="radio" name="style" value="sedan" hidden id="sedan">
							<img src="/images/cars/sedan.png"  class="img-fluid su"/>

							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="hatchback" hidden>
							<img src="/images/cars/hatchback.png"  class="img-fluid su"/>
							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="coupe" hidden>
							<img src="/images/cars/coupe.png"  class="img-fluid su"/>
							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="convertible" hidden>
							<img src="/images/cars/convertible.png" class="img-fluid su"/>
							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="station" hidden>
							<img src="/images/cars/station.png" class="img-fluid su"/>
							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="pickuptruck" hidden>
							<img src="/images/cars/pickuptruck.png" class="img-fluid su"/>
							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="suv" hidden>
							<img src="/images/cars/suv.png" class="img-fluid su"/>
							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="van" hidden>
							<img src="/images/cars/van.png" class="img-fluid su"/>
							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="minivan" hidden>
							<img src="/images/cars/minivan.png" class="img-fluid su"/>
							</label>
						  </div>
						  <div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
							<label>
							<input type="radio" name="style" value="super" hidden>
							<img src="/images/cars/super.png"  class="img-fluid su"/>
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
										  <option selected hidden >Choose Condition</option>
										  <option value="brandnew">Brandnew</option>
										  <option value="used">Used</option>
										  <option value="reconditioned">Reconditioned</option>
										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="feInputState">Year</label>
										<select id="year" class="form-control" required name="year">
										  <option selected hidden >Choose Year</option>

										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="make">Make</label>
										<select id="make" class="form-control dynamic" name="make" data-dependent="model" required>
										  <option selected hidden >Choose Make</option>
										  @foreach ($make_list as $make)
										  <option value="{{ $make->make }}">{{ $make->make }}</option>
										  @endforeach
										  <!-- <option value="BMW">BMW</option>
										  <option value="Toyota">Toyota</option> -->


										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="model">Model</label>
										<a href="javascript://" title="Model" data-toggle="popover" data-trigger="hover" data-content="Some content" ><i class="fas fa-info-circle"></i></a>
										<input type="text" class="form-control" id="model" placeholder="Corolla" onchange="submodel(this);" required name="model" value="corolla">

									</div>
									<div class="form-group col-md-3"  id="submodel" >
										<label for="sub_modell" >Sub-Model</label>
										<div style="display: inline-block;"><a href="javascript://" title="Corolla - model, CE110 - Sub-Model" data-toggle="popover" data-trigger="hover" data-content="Check the rear or the side of the vehicle,registration,the title or the current policy documents" data-container="body" data-placement="top" ><i class="fas fa-info-circle"></i></a></div>
										<input type="text" class="form-control" id="sub_model" placeholder="If no sub model leave blank"  name="sub_model" value="121">
									</div>
									<div class="form-group col-md-2">
										<label for="trim">Trim(Edition)</label>
										<input type="text" name="trim" placeholder="If no trim Leave blank" class="form-control">
									</div>

								  <div class="form-group col-md-2">
									<label for="mileage">Mileage</label>
									<input type="text" class="form-control" id="mileage" placeholder="11000"   name="mileage" value="11000">
								  </div>
									<div class="form-group col-md-2">
										<label for="transmission">Transmission</label>
										<select id="transmission" class="form-control" required name="transmission">
										  <option selected hidden >Choose Transmission</option>
										  <option value="Automatic">Automatic</option>
										  <option value="Manual">Manual</option>
										  <option value="Tiptronic">Tiptronic</option>
										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="fuel_type">Fuel Type</label>
										<a href="javascript://" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content" ><i class="fas fa-info-circle"></i></a>
										<select id="fuel_type" class="form-control" required name="fuel_type">
										  <option selected hidden >Choose Fuel Type</option>
										  <option value="Petrol">Petrol</option>
										  <option value="Diesel">Diesel</option>
										  <option value="Petrol(Hybrid)">Petrol(Hybrid)</option>
										  <option value="Diesel(Hybrid)">Diesel(Hybrid)</option>
										  <option value="PHEV">Petrol Hybrid Electric Vehicle(PHEV)</option>
										  <option value="Electric">Electric</option>
										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="engine_capacity">Engine Capacity (CC)</label>
										<input type="number" class="form-control" id="engine_capacity" placeholder="2500"  maxlength="4" required value="2500" name="engine_capacity">
									</div>


								</div>

								<div class="form-row">
									<div class="form-group col-md-3">
										<label for="highway_mpg">Highway Fuel Economy </label>
										<div class="input-group">
											<input type="number" class="form-control" aria-label="Text input with dropdown button" value="13" name="highway_mpg" id="highway_mpg">
											<div class="input-group-append">
												<select id="year" class="form-control" required name="highway_fuel">
													<option selected hidden >MPG/ KMPL</option>
													<option value="mpg">MPG</option>
													<option value="kmpl">KMPL</option>
												   </select>
											</div>
										</div>
									</div>
									<div class="form-group col-md-3">
										<label for="city_mpg">City Fuel Economy </label>
										<div class="input-group">
											<input type="number" class="form-control" aria-label="Text input with dropdown button" name="city_mpg" value="15" id="city_mpg">
											<div class="input-group-append" >
												<select id="year" class="form-control" required name="city_fuel">
													<option selected hidden >MPG/ KMPL</option>
													<option value="mpg">MPG</option>
													<option value="kmpl">KMPL</option>
												   </select>
											</div>
										</div>
									</div>
									<div class="form-group col-md-2">
										<label for="color">Exterior Color</label>
										<input type="text" class="form-control" id="color" placeholder="Red"  required name="color" value="red">
									</div>
									<div class="form-group col-md-2">
										<label for="owner">Owner</label>
										<input type="text" class="form-control" id="owner" placeholder="1st"  required name="owner" value="1st">
									</div>
									<div class="form-group col-md-2">
										<label for="price">Price</label>
										<input type="text" class="form-control" id="price" placeholder=""  required name="price" value="1st">
									</div>
								</div>

								<div class="form-row">
								  <div class="form-group col-md-4">
									<label for="location">Location</label>
									<input type="text" class="form-control" id="location" name="location" value="colombo"> </div>
								  <div class="form-group col-md-4">
									<label for="province">Province</label>
									<select id="province" class="form-control" name="province">
									  <option selected hidden>Choose Province</option>
									  <option value="western">Western</option>
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
							  <textarea class="form-control"  id="features" name="features"></textarea>
							</div>
					</div>

				</div>
				<div class="row tab">
					<div class="form-group col-md-12">
						<label for="editor-container"><h5 style="font-weight: bold;">General Description</h5></label>
							<div class="form-group">
							  <textarea class="form-control"  id="info" name="info"></textarea>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
	var year = 1940;
	var till = 2019;
	var options = "";
	var optiond = "";
	options += "<option selected hidden>"+ "Choose Year" +"</option>";
	document.getElementById("year").innerHTML = optiond;
	for(var y=year; y<=till; y++){
	  options += "<option>"+ y +"</option>";
	}
	document.getElementById("year").innerHTML = options;
</script>

<script>
	new Vue({
	  el: '#submodel',
	  mounted: function() {

		$('[data-toggle="tooltip"]').tooltip();

	    $('[data-toggle="tooltip"]').tooltip();

	  }
	})
</script>
<script>
$(document).ready(function(){

  $('[data-toggle="popover"]').popover();

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
<script >
$(function() {
  $('#colorselector').change(function(){
    $('.colors').hide();
    $('#' + $(this).val()).show();
  });
});

 </script>
@endsection
