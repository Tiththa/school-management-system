
<div class="container" >
        <!-- Sidebar  -->
        <nav id="sidebar" >
            <div id="dismiss" >
                <i class="fas fa-arrow-left" ></i>
            </div>

            <div class="sidebar-header" ">
                <div class="container" >
                    <a class="navbar-brand" href="#">
                      <img src="/images/header/web.png" alt="logo" style="height: 60px; background-size: cover;">
                    </a>
                    
                </div>
                
            </div>
            <?php
                $segment = Request::segment(2);
            ?>
            <ul class="list-unstyled components">
                <p class="nv">Dummy Heading</p>
                <li class="">
                    <a href="/">HOME</a>                    
                </li>
                <li class="">
                    <a href="{{ route('show_ads') }}">ALL ADS</a>                    
                </li>
                <li class="">
                    <a href="/">ABOUT US</a>                    
                </li>
                <li class="">
                    <a href="/">SERVICES</a>                    
                </li>
                <li class="">
                    <a href="/">24/7 SUPPORT</a>                    
                </li>
                <li class="">
                    <a href="/">CONTACT US</a>                    
                </li>
                <li class="">
                    <a href="/">FAQS</a>                    
                </li>
                <hr style="background-color: white;">
                @guest
                <li class="">
                    <a href="{{ route('login') }}">LOGIN</a>                    
                </li>
                <li class="">
                    <a href="{{ route('register') }}">REGISTER</a>                    
                </li>
                @else
                <li class="">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">LOGOUT</a>                    
                </li>
                @endguest
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        
            @section('headerTop')
            <div class="container-fluid " style="height: 30px; background-color: #000000;">
                <div class="container">
                    <span class="flag-icon flag-icon-lk " style="margin-top: 10px;"></span>
                    <span class="text-white">LKR</span>
                    @guest
                    <span style="float: right; margin-top: 5px;" class="text-white"><strong>Welcome</strong>&nbspto Turbo.lk&nbsp!</span>
                    @else
                    <span style="float: right; margin-top: 5px;" class="text-white"><strong>Welcome</strong>&nbsp{{Auth::user()->name}}&nbsp!</span>
                    @endguest
                </div>                
            </div>            
            <div class="container-fluid " style="height: 5px; background-color:#bf9b30; "></div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container">
                    <a class="navbar-brand brand-mobile" href="/">
                        <img src="/images/header/web.png" alt="logo" style=" background-size: cover;" class="logo brand-mobile img-fluid">
                    </a>

                    <button type="button" id="sidebarCollapse" class="btn btn-nav d-inline-block d-lg-none ml-auto">
                        <i class="fas fa-align-justify"></i>
                        
                    </button>
                    <div class="d-inline-flex text-white " id="center-icons">
                           
                          <div class="phone "  >
                                <i class=" fas fa-mobile-alt dl" style="font-size: 30px; color: gold; margin-top: 10px;"></i>
                                <span style="font-size: 15px;">CALL US NOW<br></span>
                                <a href="tel:+94776232207" >
                                    <b style="font-size: 20px;margin-left: 30px; ">+123 5678 890</b>
                                </a>
                          </div>
                          <div class="email" >
                              <i class=" fas fa-at dl" style="font-size: 30px; color: gold; margin-top: 10px;"></i>
                              <span style="font-size: 15px;  ">EMAIL US NOW<br></span>
                              <a href="mailto:sales@turbo.lk">
                                <b style="font-size: 20px;margin-left: 30px;">sales@turbo.lk</b>
                              </a>
                          </div>
                          
                    </div>
                    

                    <!-- <ul class="nav navbar-nav navbar-logo mx-auto">
                      <li class="nav-item">
                        <div class="row">
                            <div class="col">
                                <i class=" fas fa-mobile-alt dl" style="font-size: 45px; color: #bf9b30; margin-top: 10px;"></i>
                            </div>
                            <div class="col">
                                <a class="nav-link" href="#"><span style="font-size: 15px;">CALL US NOW<br></span></a>
                            </div>
                        </div>        
                      </li>
                      <li class="nav-item">
                        <div class="row">
                            <div class="col">
                                <i class=" fas fa-mobile-alt dl" style="font-size: 45px; color: #bf9b30; margin-top: 10px;"></i>
                            </div>
                            <div class="col">
                                <a class="nav-link" href="#">Brand</a>
                            </div>
                        </div>        
                      </li>
                      <li class="nav-item">
                        <div class="row">
                            <div class="col">
                                <i class=" fas fa-at dl" style="font-size: 45px; color: #bf9b30; margin-top: 10px;"></i>
                            </div>
                            <div class="col">
                                <a class="nav-link" href="#">Brand</a>
                            </div>
                        </div>        
                      </li>
                    </ul> -->
    
                </div>
            </nav>
            <nav class="navbar navbar-expand-sm bg-light navbar-light " style="background-color: #ededed !important; margin-bottom: 20px;">
                <div class="container">
                    <ul class="navbar-nav  mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link dll" href="/" >HOME</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link dll" href="/ads">ALL ADS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link dll" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link dll" href="#">SERVICES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link dll" href="#">24/7 SUPPORT</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link dll" href="#">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link dll" href="#">FAQS</a>
                        </li>                
                    </ul>
              <ul class="navbar-nav  ml-auto">
                 @guest
                <li class="nav-item active">
                  <a class="nav-link dll" href="{{ route('login') }}" >LOGIN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link dll" href="{{ route('register') }}">REGISTER</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link dll" href="{{ route('dealer.reg') }}">DEALER LOGIN</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link dll" href="{{ route('home') }}">DASHBOARD</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link dll" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">LOGOUT</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
                @endguest
                
              </ul>
                </div>
              
            </nav>
                @endsection

            

           
        
    </div>

    <div class="overlay"></div>

    




    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>