<nav class="navbar navbar-expand-md navbar-dark bg-primary navbar-laravel">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">

            {{ ('SMS') }}
        </a>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <!--=====================LIBRARY ACCESS ======================================  -->
            @can('isLibrarian')
          <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('library.librarydashboard') }}">{{ __('Dashboard') }}</a>
          </li>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  Books <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item " href="{{ route('library.showbooks') }}">
                      {{ __('Show Books') }}
                  </a>
                  <a class="dropdown-item " href="{{ route('books.add') }}">
                      {{ __('Add Books') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>

          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('IssueView') }}">{{ __('Issue Books') }}</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('issued.books') }}">{{ __('Issued Books') }}</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('return.view') }}">{{ __('Return Books') }}</a>
          </li>

          @endcan
          <!--======================END OF LIBRARY ACCESS ========================  -->
          @can('isAdmin')
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('users-view') }}">{{ __('Dashboard') }}</a>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Users <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="{{ route('allusers-view') }}">
                    {{ __('All users') }}
                </a>
                <a class="dropdown-item " href="{{ route('register') }}">
                    {{ __('Add User') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Achievements <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="{{ route('users-achievements') }}">
                    {{ __('Show Achievements') }}
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

        </li>




        @endcan

        <!--===============================ACCOUNTANT====================  -->

        @can('isAccountant')
      <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('accountantdashboard') }}">{{ __('Dashboard') }}</a>
      </li>
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Expenses <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="{{ route('add.expenses') }}">
                  {{ __('Add expenses') }}
              </a>


              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>

      </li>





      @endcan

      @can('isAlumni')
    <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('alumnidashboard') }}">{{ __('Dashboard') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('add.event') }}">{{ __('Add Event') }}</a>
    </li>
    


    @endcan


            <!-- Left Side Of Navbar -->


          </ul><!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if(Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif

                  @if(Auth::user())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('User Profile') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </li>
                    @endif
            </ul>
        </div>
    </div>
</nav>
