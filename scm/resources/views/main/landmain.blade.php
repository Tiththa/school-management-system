@extends('layouts.main')

@section('title','Welcome To Turbo.lk')

@section('scripts')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
  
 <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .dropdown-toggle::after {
    display: none;
}


@-webkit-keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(calc(-250px * 7));
            transform: translateX(calc(-250px * 7));
  }
}

@keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(calc(-250px * 7));
            transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: white;
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 100%;
}
.slider::before, .slider::after {
  background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  -webkit-transform: rotateZ(180deg);
          transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 40s linear infinite;
          animation: scroll 40s linear infinite;
  display: flex;
  width: calc(250px * 14);
}
.slider .slide {
  height: 100px;
  width: auto;
}


  </style>

@endsection

@section('content')
<div class="container" >
	<div class="row">
		<div class="col-lg-4 " >
			<div class="container-fluid  p-3" style="background-color: #e2e2e2e2; height: 100%;">
				<select id="condition" class="form-control  mt-2" name="condition" required autofocus>
					<option selected>Choose Condition</option>
					<option value="brandnew">Brandnew</option>
					<option value="used">Used</option>
					<option value="reconditioned">Reconditioned</option>
				</select>
				<select id="condition" class="form-control  mt-2 " name="condition" required autofocus>
					<option selected  >Choose Make</option>
					<option value="bmw">BMW</option>
					<option value="audi">Used</option>
					<option value="benz">Mercedes Benz</option>
				</select>
				<input type="text" name="model" class="form-control  mt-2 text-center" placeholder="Enter Model">
				<select id="condition" class="form-control  mt-2" name="condition" required autofocus>
					<option selected hidden >Choose Year</option>
					<option value="brandnew">Brandnew</option>
					<option value="used">Used</option>
					<option value="reconditioned">Reconditioned</option>
				</select>
				<div class="input-group mt-2 mb-3">
			      <input type="text" class="form-control " placeholder="Min Price" id="mail" name="email">
			      <div class="input-group-append">
			        <span class="input-group-text bg-primary text-white">Million</span>
			      </div>
			    </div>
			    <div class="input-group mt-1 mb-3">
					<input type="text" class="form-control" placeholder="Max Price">
				    <div class="input-group-prepend">
				        <button type="button" class="btn btn-outline-primary " data-toggle="dropdown">
				          LKR 
				          <i class="far fa-caret-circle-down"></i>
				        </button>
				        <div class="dropdown-menu">
				          <a class="dropdown-item" href="#">Million</a>
				          <a class="dropdown-item" href="#">Link 2</a>
				          <a class="dropdown-item" href="#">Link 3</a>
				        </div>
				    </div>			      
			    </div>
			    <button class="btn btn-primary" style="margin: auto; display: block;">SEARCH</button>
			</div>
		</div>
		<div class="col-lg-8 ">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="/images/m3/1.jpg" alt="Los Angeles" width="1100" height="500" >
			      <div class="carousel-caption " >
			        <h3>Los Angeles</h3>
			        <p>We had such a great time in LA!</p>
			      </div>   
			    </div>
			    <div class="carousel-item">
			      <img src="/images/m3/2.jpg" alt="Chicago" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3>Chicago</h3>
			        <p>Thank you, Chicago!</p>
			      </div>   
			    </div>
			    <div class="carousel-item">
			      <img src="/images/m3/3.jpg" alt="New York" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3>New York</h3>
			        <p>We love the Big Apple!</p>
			      </div>   
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>
	</div>
	<hr style="opacity: 0;">
	<div class="container-fluid ">
		<div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="http://www.carlogos.org/logo/Audi-logo-1999-1920x1080.png" height="100" width="250" alt=""  />
		</div>
		<div class="slide">
			<img src="https://listcarbrands.com/wp-content/uploads/2016/09/logo-Aston-Martin.png" height="100" width="270" alt=""  />
		</div>
		<div class="slide">
			<img src="http://www.carlogos.org/logo/BMW-logo-2000-2048x2048.png" height="100" width="100" alt="" />
		</div>
		<div class="slide">
			<img src="http://www.carlogos.org/logo/Bentley-symbol-black-1920x1080.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
	</div>
</div>

    

	</div>
	
</div>

@endsection


