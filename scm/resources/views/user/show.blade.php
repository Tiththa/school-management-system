@extends('layouts.main')

@section('title','All Ads')

@section('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>

  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
@endsection
<style>
img {
  max-width: 100%;
  height: auto;
  vertical-align: bottom;
}

.recipe-card {
  background: #fff;
  margin: 0.5em auto;

  height: 375px;
  width: 100%;
  
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}
.recipe-card aside {

  position: relative;
}
.recipe-card aside img {
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.recipe-card aside .button .icon {
  vertical-align: middle;
}
.recipe-card article {
  height: 300px;
  padding: 0.25em ;
}
.recipe-card article ul {
  list-style: none;
  margin: 0.5em 0 0;
  padding: 0;
  position: relative;
  bottom: 0;
}
.recipe-card article ul li {
  display: inline-block;
  margin-left: 1em;
  line-height: 1em;
}
.recipe-card article ul li:first-child {
  margin-left: 0;
}
.recipe-card article ul li .icon {
  vertical-align: bottom;
}
.recipe-card article ul li span:nth-of-type(2) {
  margin-left: 0.3em;
  font-size: 0.7em;
  font-weight: 400;
  vertical-align: middle;
  color: #838689;
}
.recipe-card article h2, .recipe-card article h3 {
  margin: 0;
  font-weight: 300;
}
.recipe-card article h2 {
  font-size: 1.75em;
  color: #222222;
}
.recipe-card article h3 {
  font-size: 0.9375em;
  color: #838689;
}
.recipe-card article p {
  margin: 1.25em 0;
  font-size: 0.8125em;
  font-weight: 400;
  color: #222222;
}
.recipe-card article p span {
  font-weight: 700;
  color: #000000;
}
.recipe-card article .ingredients {
  margin: 2em 0 0.5em;
}
.price {
  text-align: center;
  color: #fff;
  font-size: 25px;
  margin-top: -15px;
  background-color: #E2001A;
}
.tr {
  font-size: 13px;
}
.bubble {
  padding: 2px;
  float: right;
}
.bubbley {
  padding: 2px;
  float: left;
}
select{
  height: 150px;
}

.ssidebar {

  position: -webkit-sticky;
  position: sticky;
  top: 0;
}
.ssidebar {
  float: left;
  width: 100%
}




.accordion a {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  padding: 0.1rem 3rem 0.5rem 1rem;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border-bottom: 1px solid #e5e5e5;
}

.accordion a:hover,
.accordion a:hover::after {
  cursor: pointer;
  color: #03b5d2 !important;
}

.accordion a:hover::after {
  border: 1px solid #03b5d2 !important;
}

.accordion a.active {
  color: #03b5d2;
  border-bottom: 1px solid #03b5d2;
}

.accordion a::after {
  font-family: 'Ionicons';
  content: '\f218';
  position: absolute;
  float: right;
  right: 1rem;
  font-size: 1rem;
  color: #7288a2;
  padding: 2px;
  width: 30px;
  height: 30px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid #7288a2;
  text-align: center;
}

.accordion a.active::after {
  font-family: 'Ionicons';
  content: '\f209';
  color: #03b5d2;
  border: 1px solid #03b5d2;
}

.accordion .content {
  opacity: 0;
  padding: 0 1rem;
  max-height: 0;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  clear: both;
  -webkit-transition: all 0.2s ease 0.15s;
  -o-transition: all 0.2s ease 0.15s;
  transition: all 0.2s ease 0.15s;
}

.accordion .content p {
  font-size: 1rem;
  font-weight: 300;
}

.accordion .content.active {
  opacity: 1;
  padding: 1rem;
  max-height: 100%;
  -webkit-transition: all 0.35s ease 0.15s;
  -o-transition: all 0.35s ease 0.15s;
  transition: all 0.35s ease 0.15s;
}
@import url('https://fonts.googleapis.com/css?family=Hind:300,400');

</style>

 

@section('content')
<div class="wrapper">
<div class="container-fluid">
    
    
      
    <div class="row">
      <div class="col-lg-3 ">
        <div class="ssidebar ">
          <div class="container" style="overflow-y: scroll; height:800px;">
            <form class="">
             <div class="input-group mb-3 p-2">
                <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Go</button>
                  </div>
              </div>
              <div class="p-1">
                <button class="btn btn-danger">Clear Filter</button>                 
              </div>

              
              <div class="accordion">
                <div class="accordion-item">
                  <a>Price</a>
                  <div class="content">
                    <div class="form-check-inline ">                
                      <label class="form-check-label">
                        <p><input type="checkbox" class="form-check-input " value="">&nbspMillion</p>
                      </label>                   
                    </div>
                    <div class="row">
                      <div class="col"><input type="number" class="form-control" name="" placeholder="Min"></div>
                      <div class="col"><input type="number" class="form-control" name="" placeholder="Max"></div>
                    </div>
                    
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Condition</a>
                  <div class="content">

                    <div class="form-check">
                      <p>
                      <label class="form-check-label" for="check1">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">New
                      </label></p>
                    </div>
                    <div class="form-check">
                      <p>
                      <label class="form-check-label" for="check1">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">Reconditioned
                      </label></p>
                    </div>
                    <div class="form-check">
                      <p>
                      <label class="form-check-label" for="check1">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">Used
                      </label></p>
                    </div>
                    
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Make & Model</a>
                  <div class="content">
                    <div class="form-group">
                      <p><label for="usr">Make:</label>
                      <input type="text" class="form-control" id="usr"></p>
                    </div>
                    <div class="form-group">
                      <p><label for="usr">Model:</label>
                      <input type="text" class="form-control" id="usr"></p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Year of Make</a>
                  <div class="content">
                    <p><label for="usr">Year:</label>                      
                    <select id="year" class="form-control" required name="year">
                      <option selected hidden >Choose Year</option>                      
                    </select>
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Mileage</a>
                  <div class="content"> 
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Miles
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio" checked>Km
                      </label>
                    </div>                   
                    <div class="row">
                      <div class="col"><input type="number" class="form-control" name="" placeholder="Min "></div>
                      <div class="col"><input type="number" class="form-control" name="" placeholder="Max "></div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Body Style</a>
                  <div class="content">                   
                    <div class="row">
                      <div class="col">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Sedan
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Coupe
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Station Wagon
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">SUV
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Mini Van
                          </label>
                        </div> 
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Hatchback
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Convertible
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Pickup Truck
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Van
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Super Car
                          </label>
                        </div> 
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Transmission</a>
                  <div class="content">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Automatic
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Tiptronic
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Manual
                        </label>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Fuel Type</a>
                  <div class="content">
                    <div class="row">
                      <div class="col">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Petrol
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Diesel
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Electric
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Diesel (PHEV)
                          </label>
                        </div>                         
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Petrol (Hybrid)
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Diesel (Hybrid)
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Petrol (PHEV)
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Gasoline
                          </label>
                        </div>                         
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Fuel Economy</a>
                  <div class="content">
                    <div class="row">
                      <div class="col">
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio" checked>KMPL
                          </label>
                        </div>                                                 
                      </div>
                      <div class="col">
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio" checked>MPG
                          </label>
                        </div>                                                
                      </div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col">
                              <p><label>City:</label></p>
                            </div>
                           <div class="col">
                             <input type="number" class="form-control" name="" placeholder="Min ">
                           </div>
                           <div class="col">
                             <input type="number" class="form-control" name="" placeholder="Max ">
                           </div>                                                                                  
                    </div>
                    <div class="row">                      
                           <div class="col">
                             <p><label>Highway:</label></p>
                           </div>
                           <div class="col">
                             <input type="number" class="form-control" name="" placeholder="Min ">
                           </div>
                           <div class="col">
                             <input type="number" class="form-control" name="" placeholder="Max ">
                           </div>                                                                                  
                    </div>        
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Exterior Color / Body Colour</a>
                  <div class="content">
                    <input type="number" class="form-control" name="" placeholder="Max "> 
                  </div>
                </div>
                <div class="accordion-item">
                  <a>Seller Type</a>
                  <div class="content">
                    <input type="text" class="form-control" name="" placeholder="1st "> 
                  </div>
                </div>
              </div>
           </form>
          </div>           
        </div>
        
      </div>
      <div class="col">
        <div class="row">
       @foreach ($posts as $post)
      <div class="col-md-3">
          <div class="recipe-card card card-product">
           <a href="">
            <aside>

              <img src="http://sunsetblaze.net/wp-content/uploads/2018/07/bmw-m4-drifting-wallpapers-lovely-of-bmw-drift-cars-wallpaper-hd-of-bmw-drift-cars-wallpaper-hd.jpg" alt="Chai Oatmeal" class="img-fluid" />
              <span class="bubbley "><h3>{{$post->year}}</h3></span>
              @if($post->condition=='brandnew')
              <span class="bubble bg-danger text-white">Brand New</span>
              @elseif($post->condition=='used')
              <span class="bubble bg-primary text-white">Used</span>
              @elseif($post->condition=='reconditioned')
              <span class="bubble bg-warning">Reconditioned</span>
              @endif
              <a href="#" class="button"><span class="icon icon-play"></span></a>

            </aside>

            <article class="white-bg">

              <a href="{{ route('posts.show',$post->slug) }}"><h2>
                @if($post->make=='Mercedes Benz'){{$post->make}}<br>
                @elseif($post->make=='Land Rover'){{$post->make}}<br>
                @elseif($post->make=='Range Rover'){{$post->make}}<br>
                @else{{$post->make}}
                @endif{{$post->model}}&nbsp{{$post->submodel}}
              </h2>
              <h3 style="height: 20px;">@if($post->trim=='none') @elseif($post->trim=='') @else{{ ucfirst($post->trim)}}&nbsp Edition @endif</h3>
              </a>
              <ul>                
                <li><span class="fas fa-cogs"></span><span class="tr">{{$post->transmission}}</span></li>
                <li><span class="fas fa-gas-pump"></span><span class="tr">{{$post->fuel_type}}</span></li>                
              </ul>
            </article>
          </a>
            <div class="container-fluid price" style="">LKR&nbsp<?php $output = $post->
            price; $price = number_format( $output , 0 , '.' , ',' ); echo $price; ?></div>             
        </div>  
      </div> 
      @endforeach     
    </div>
      <div class="container" >
        {{ $posts->links() }}
      </div>
      </div>
    </div>
    
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<script type="text/javascript">
  const items = document.querySelectorAll(".accordion a");

function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
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
</div>
@endsection
