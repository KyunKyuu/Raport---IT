
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="index.html"><img src="{{asset('assets/img/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" value="" class="form-control" placeholder="Search dashboard...">
            <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
          </div>
        </form>
        <div class="navbar-btn navbar-btn-right">
      
        </div>
      
      <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Basic Use</a></li>
                <li><a href="#">Working With Data</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Troubleshooting</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img width="100" src="
                @if(auth()->user()->role == 'siswa')
                {{auth()->user()->student->getAvatar()}}
                @elseif(auth()->user()->role == 'admin')
                {{auth()->user()->student->getAvatar()}}
                @elseif(auth()->user()->role == 'guru')
                 {{auth()->user()->guru->getAvatar()}}
                @else
                /images/default.jpg
                @endif"
                class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="/profilesaya"><i class="lnr lnr-user"></i> <span>Profile Saya</span></a></li>
               
                                    
                
                
                  <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="lnr lnr-exit"></i> <span>Logout</span>
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </ul>
            </li>
          </ul>
      </div>
      </div>
    </nav>
  