<div class="wrapper ">    
<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://127.0.0.1:8000/" class="simple-text logo-normal">
          Motivate Yourself
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item @if(Request::url() == 'http://127.0.0.1:8000/home')active @endif ">
            <a class="nav-link" href="{{ route('home')  }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item @if(Request::url() == 'http://127.0.0.1:8000/post-quote') active @endif  ">
            <a class="nav-link" href="{{ route('post_quote')  }}">
              <i class="material-icons">library_books</i>
              <p>Post Quote</p>
            </a>
          </li>
          <li class="nav-item @if(Request::url() == 'http://127.0.0.1:8000/update-quote') active @endif ">
            <a class="nav-link" href="{{ route('update_quote')  }}">
              <i class="material-icons">content_paste</i>
              <p>Update</p>
            </a>
          </li>
          <li class="nav-item @if(Request::url() == 'http://127.0.0.1:8000/query') active @endif  ">
            <a class="nav-link" href="{{ route('query') }}">
              <i class="material-icons">library_books</i>
              <p>Query</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" 
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#"> {{ Auth::user()->name }}</a>
                  
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                  </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                </form>
                
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>