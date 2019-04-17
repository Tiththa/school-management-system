@extends('layouts.main')
  
  @section('title','Product Page')
  @section('scripts')
<link href="/css/slick.css" rel="stylesheet" type="text/css"/>
<link href="/css/slick-theme.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<style>
    .slider-for{
            width: 100%;
            height: auto;
            margin: 30px auto 1px;
            overflow: hidden;
        }
        
        .slider-nav{
            width: 500px;
            height: 100px;
            margin: auto;
        }

        .slider-nav .slick-track{
            height: 80px;
        }
        .slick-slide {
          
          margin: 5px;
        }
        .slick-arrow{
                position: absolute;
            top: 50%;
            z-index: 50;
            margin-top: -12px;
        }
        .slick-prev{
            left: 0;
        }
        .slick-next{
            right: 0;
        }
        .info {
            display: inline-block;
        }
        .price {
            text-align: right;
            right: 0;
            top: 0;
        }
        .icons {
            font-size: 20px;
            display: inline-block;
            
        }
        
        .ic {
            margin-left: 10px;
            margin-right: 10px;
            opacity: 0.5;
        }
        .fa-facebook-f:hover {
            color:#3b5998;
            opacity: 1;
        } 
        .fa-instagram:hover {
            color:#3f729b;
            opacity: 1;
        }
        .fa-twitter:hover {
            color: #55acee;
            opacity: 1;
        }
        .fa-pinterest:hover {
            color: #bd081c;
            opacity: 1;    
        }
        .fa-youtube:hover {
            color:#cd201f ;
            opacity: 1;
        }
        #border {
          
          position: relative;
          
        }
        #border::after {
          content: "";
          width:7%;
          height: 5px;
          background: red;
          position: absolute;
          bottom: -5px;
          left: 0;
        }
        td{
            opacity: 0.7;

        }
        th, td {
          padding: 1px;
          text-align: left;
          font-size: 14px;
        }

        /*tabs*/

        main {
          max-width: 800px;
          padding: 40px;
          border: 1px solid rgba(0,0,0,.2);
          background: #fff;
          box-shadow: 0 1px 3px rgba(0,0,0,.1);
        }

        section {
          display: none;
          padding: 20px 0 0;
          border-top: 1px solid #abc;
        }

        input {
          display: none;
        }

        label {
          display: inline-block;
          margin: 0 0 -1px;
          padding: 15px 25px;
          font-weight: 600;
          text-align: center;
          color: #abc;
          border: 1px solid transparent;
        }

        label:before {
          font-family: fontawesome;
          font-weight: normal;
          margin-right: 10px;
        }

        label[for*='1']:before { content: '\f1cb'; }
        label[for*='2']:before { content: '\f17d'; }
        label[for*='3']:before { content: '\f16c'; }
        label[for*='4']:before { content: '\f171'; }

        label:hover {
          color: #789;
          cursor: pointer;
        }

        input:checked + label {
          color: #0af;
          border: 1px solid #abc;
          border-top: 2px solid #0af;
          border-bottom: 1px solid #fff;
        }

        #tab1:checked ~ #content1,
        #tab2:checked ~ #content2,
        #tab3:checked ~ #content3,
        #tab4:checked ~ #content4 {
          display: block;
        }

        @media screen and (max-width: 800px) {
          label {
            font-size: 0;
          }
          label:before {
            margin: 0;
            font-size: 18px;
          }
        }

        @media screen and (max-width: 500px) {
          label {
            padding: 15px;
          }
        }

        .fa-location-arrow {
            color: #0af;
        }

        #content1 li {
            list-style: none; 
        }
        #content1 li:before {
            font-family: fontawesome;
            font-weight: normal;
            margin-right: 10px;
            content: '\f00c';
            color: #0af;
        }
        
</style>
@endsection

@section('content')
<div class="container">
  
    <div class="container-fluid">
        <h2 class="info">
            {{$post->year}} {{$post->make}} {{$post->model}} {{ $post->submodel}}
        </h2>
        <h2 class="info" style="color:red;">
            @if($post->condition=='brandnew')Brand New  @elseif($post->condition=='used')Used  @elseif($post->condition=='reconditioned') Reconditioned @endif
        </h2>
        <h2 class="price " style="float: right;">
            LKR.
            <?php $output = $post->
            price; $price = number_format( $output , 0 , '.' , ',' ); echo $price; ?>
        </h2>
        <br>
            <h5>
                @if($post->trim=='') @elseif($post->trim=='none') @else{{ $post->trim}}&nbsp Edition; @endif
            </h5>
        </br>
    </div>
    <!-- <div class="container-fluid " >
            <div class="card social-bar" style="display: inline-block;">
                <div class="p-2 icons">
                    <a href="#" class="fb"><i class="fab fa-facebook-f ic"></i></a>
                    <a href="#" class="in"><i class="fab fa-instagram ic"></a></i>
                    <a href="#" class="tw"><i class="fab fa-twitter ic"></a></i>
                    <a href="#" class="pi"><i class="fab fa-pinterest ic"></a></i>
                    <a href="#" class="yt"><i class="fab fa-youtube ic"></a></i>
                </div>
            </div>            
        </div> -->
    <hr style="border-color: gold; border-style: solid; border-width: 2px; opacity: 0.5;">
    
        <div class="row">

            <div class="col-lg-8 ">                
              @foreach($posts as $post)
                <ul class="slider-for">
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_1)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_2)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_3)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_4)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_5)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_6)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_7)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_8)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_9)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_10)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_11)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_12)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_13)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_14)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_15)}}"/>
                    </li>
                    
                </ul>
                <ul class="slider-nav">
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_1)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_2)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_3)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_4)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_5)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_6)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_7)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_8)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_9)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_10)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_11)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_12)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_13)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_14)}}"/>
                    </li>
                    <li>
                        <img src="{{url('storage/posts/'. $post->user_id .'/'.$post->post_id . '/'.$post->image_15)}}"/>
                    </li>
                </ul>
                @endforeach
                <div class="card  text-center p-1">
                    <h5 style="color: #789;"><i class="fas fa-location-arrow"></i>&nbsp{{ucfirst($post->location)}},&nbsp{{ucfirst($post->province)}} Province</h5>
                    <span>URL Slug ::<a href="{{ url("/ads/$post->slug") }}"> {{url("/ads/$post->slug")}}  </a> </span>
                </div>
            </div>
            <div class="col " >
                <table class="table" >
                    <h4 id="border">
                        Description
                    </h4>
                    <tr >
                        <td>Year</td>
                        <th>{{$post->year}}</th>
                    </tr>
                    <tr>
                        <td>Make</td>
                        <th>{{$post->make}}</th>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <th>{{$post->model}}</th>
                    </tr>
                    @if($post->submodel=='')
                    @else
                    <tr>
                        <td>Submodel</td>
                        <th>{{$post->submodel}}</th>
                    </tr>
                    @endif
                    <tr>
                        <td>Body Style</td>
                        <th>{{ucfirst($post->body_style)}}</th>
                    </tr>
                    <tr>
                        <td>Condition</td>
                        <th>{{ucfirst($post->condition)}}</th>
                    </tr>
                    <tr>
                        <td>Mileage</td>
                        <th>{{$post->mileage}}</th>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <th>{{$post->transmission}}</th>
                    </tr>
                    <tr>
                        <td>Engine Capacity</td>
                        <th>{{$post->engine_capacity}}&nbspCC</th>
                    </tr>
                    <tr>
                        <td>Fuel Type</td>
                        <th>{{$post->fuel_type}}</th>
                    </tr>
                    <tr>
                        <td>Fuel Economy Highway</td>
                        <th>{{$post->highway_mpg}}&nbsp{{$post->highway_fuel}}</th>
                    </tr>
                    <tr>
                        <td>Fuel Economy City</td>
                        <th>{{$post->city_mpg}}&nbsp{{$post->city_fuel}}</th>
                    </tr>
                    <tr>
                        <td>Trim</td>
                        <th>{{ucfirst($post->trim)}}</th>
                    </tr>
                    <tr>
                        <td>Exterior Color</td>
                        <th>{{ucfirst($post->exterior_colour)}}</th>
                    </tr>

                    
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="container">
                    <main>

                      <input id="tab1" type="radio" name="tabs" checked>
                      <label for="tab1">Features</label>

                      <input id="tab2" type="radio" name="tabs">
                      <label for="tab2">General Information</label>

                      <!-- <input id="tab3" type="radio" name="tabs">
                      <label for="tab3">Stack Overflow</label>

                      <input id="tab4" type="radio" name="tabs">
                      <label for="tab4">Bitbucket</label> -->

                      <section id="content1">
                        <p>
                          {!! $post->features !!}
                        </p>
                        
                      </section>

                      <section id="content2">
                        <p>
                         {!! $post->info !!}

                        </p>
                        
                      </section>

                      <!-- <section id="content3">
                        <p>
                          Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
                        </p>
                        <p>
                          Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin.
                        </p>
                      </section>

                      <section id="content4">
                        <p>
                          Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin.
                        </p>
                        <p>
                          Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
                        </p>
                      </section> -->

                    </main>
                </div>
            </div>
            
        </div>
    </hr>
    <div class="container">lol</div>
    
</div>

</script>
<script src="https:////code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript">
</script>
<script src="/js/slick.min.js" type="text/javascript">
</script>
<script type="text/javascript">
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.slider-nav',
      autoplay:true,
      infinite: true,
      speed: 400,
      fade: true,
      pauseOnHover:true,
      swipe:true,
      touchMove:true,


    });
    $('.slider-nav').slick({
      slidesToShow: 6,
      slidesToScroll: 5,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      arrows: false,
      swipe:true,
      
    });;
</script>
@endsection
