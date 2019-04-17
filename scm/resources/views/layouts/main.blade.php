<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Turbo.lk | @yield('title')</title>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    
    @yield('scripts')
    <style>
       .nav-link{
        color: #fff !important;
       }
       .logo {
        height: 100px;
       }
       .container {
        width: 100%;

       }
       .btn-nav {
        background-color: #000000;
        color: white;
        border: 1px solid white;
       }
       .fa-align-justify {
        font-size: 20px;
       }
       /*.brand-mobile {
        height: 100px;
       }*/
       @media only screen and (max-width: 600px) {
          .brand-mobile {
            height: 70px;
        }
    }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
          .brand-mobile {
            height: 70px;
        }
    }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
          .brand-mobile {
            height: 80px;
        }
    }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
          .brand-mobile {
            height: 80px;
        }
    }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
          .brand-mobile {
            height: 100px;
        }
    }
    @media only screen and (max-width: 992px) {
          .phone {
            display: none;
         }
          .email{
            display: none;
         }
         .navbar-light {
            display: none;          
         }
    }
    @media only screen and (min-width: 992px) {
          .phone {
            font-size: 15px;
            margin-left: 30px !important;
         }
          .email{
            font-size: 15px;
            margin-left: 30px !important;
         }
    }
    @media only screen and (min-width: 1200px) {
          .phone {
            font-size: 15px;
            margin-left: 150px !important;
         }
          .email{
            font-size: 15px;
            margin-left: 150px !important;
         }
    }
      .dll {
        color: black !important;
        font-weight: bold;
        font-size: 13px;
        opacity: 0.7;
      }   
         
    
    </style>
</head>

<body>

    @include('layouts.header')
    <div id="content" >
        @yield('headerTop')

        @yield('content')


         @include('layouts.footer')

    </div>
    
</body>

</html>