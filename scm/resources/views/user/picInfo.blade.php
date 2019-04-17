@extends('user.layouts.main')

<style >
	label {
   cursor: pointer;
   /* Style as you please, it will become the visible UI component. */
}

#upload-photo {
   opacity: 0;
   position: absolute;
   z-index: -1;
}
.pl {
	position: relative;
}
.brlabel {
	text-align: center;
	position: absolute; 
	left:0; 
	right: 0; 
	top: 50%; 
	bottom: 50%;
}
.pl:hover {
	opacity: 0.5;
}
.brlabel:hover {
	opacity: 0.5;
}
</style>

@section('content')
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

			<form enctype="multipart/form-data" action="{{route('images.store', $post->id)}}" method="post">
			@csrf
			

			<button type="submit" class="btn btn-primary">Upload Image</button>
			
			
		

		<div class="card bs">
			
			<div class="card-body">
				
				  <div id="Sedan" class="colors " @if($post->body_style=='sedan') @else hidden @endif>
				  	<div class="row" id="imageGallery">
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/1.jpg" class="img-fluid card-img-top" />
				  				<h5 class="card-title text-center bg-danger text-white">1</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top pl" id="v1"/>				  				
				  				<label for="upload-photo1" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image1" value="" id="upload-photo1"  onchange="readURL1(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/2.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">2</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top pl"  id="v2"/>
				  				<label for="upload-photo2" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image2" value="" id="upload-photo2"  onchange="readURL2(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/3.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">3</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top pl" id="v3"/>
				  				<label for="upload-photo3" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image3" value="" id="upload-photo3"  onchange="readURL3(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/4.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">4</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top pl" id="v4"/>
				  				<label for="upload-photo4" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image4" value="" id="upload-photo4"  onchange="readURL4(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/5.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">5</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top pl" id="v5"/>
				  				<label for="upload-photo5" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image5" value="" id="upload-photo5"  onchange="readURL5(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/6.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">6</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top" id="v6"/>
				  				<label for="upload-photo6" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image6" value="" id="upload-photo6"  onchange="readURL6(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/7.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">7</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top" id="v7"/>
				  				<label for="upload-photo7" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image7" value="" id="upload-photo7"  onchange="readURL7(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/8.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">8</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top" id="v8"/>
				  				<label for="upload-photo8" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image8" value="" id="upload-photo8"  onchange="readURL8(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/9.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">9</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top" id="v9"/>
				  				<label for="upload-photo9" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image9" value="" id="upload-photo9"  onchange="readURL9(this);" hidden>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/330/10.jpg" class="img-fluid card-img-top">
				  				<h5 class="card-title text-center bg-danger text-white">10</h5>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 p-2">
				  			<div class="card">
				  				<img src="/images/placeholder.jpg" class="img-fluid card-img-top" id="v10"/>
				  				<label for="upload-photo10" class="text-center bg-primary text-white">Insert Image</label>
				  				<input type="file" name="image10" value="" id="upload-photo10"  onchange="readURL10(this);" hidden>
				  			</div>
				  		</div>
				  	</div>
				  </div>
				  <div id="Hatchback" class="colors " @if($post->body_style=='hatchback') @else hidden @endif>
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
				  <div id="Coupe" class="colors blue" hidden> “If I don't have red, I use blue” Pablo Picasso

				  </div>
				  <div id="Convertible" class="colors green" hidden> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Station" class="colors green" hidden> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Pickup" class="colors green" hidden> “If I don't have blue, I use green Pablo Picasso
				  </div>
				  <div id="SUV" class="colors green" hidden> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Van" class="colors green" hidden> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Mini" class="colors green" hidden> “If I don't have blue, I use green Pablo Picasso

				  </div>
				  <div id="Supercar" class="colors green" hidden> “If I don't have blue, I use green Pablo Picasso

				  </div>
				
			</div>

		</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	 function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }        

	function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v3')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v4')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v5')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL6(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v6')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL7(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v7')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL8(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v8')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL9(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v9')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL10(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v10')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection
