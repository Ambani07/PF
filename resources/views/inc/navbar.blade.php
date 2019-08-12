<nav class="navbar shadow-sm navbar-expand text-white static-top">
    <div class="navbar-brand">
      <a href="/dashboard" >
        <img src="{{asset('images/BCX-Header2.png')}}" style="max-width: 25%;" alt="BCX logo">
      </a>
      {{-- <button class="btn btn-link btn-sm text-white"  id="sidebarToggle" href="#"> --}}
      {{-- <i class="fa fa-bars"></i> --}}
    </button>
    </div>

    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0 ">

      
      <li class="nav-item dropdown no-arrow ">
        
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (Auth::check())
              <small class="text-white">{{Auth::user()->role->name}}</small> <span class="text-white">{{Auth::user()->name}}</span> 
            @endif
            <i class="fa fa-user-circle text-white fa-fw ml-2"></i>
            <i class="fa fa-caret-down text-white pull-right pt-1 ml-3"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            @if (Auth::user()->role->read_only == 0)
              <a class="dropdown-item" href="#"><i class="fa fa-user-circle"></i> Settings</a>
            @endif
          
          <a class="dropdown-item" href="#">My Account</a>
          <div class="dropdown-divider"></div>
          @if (Auth::check())
            <a class="dropdown-item logout" data-toggle="modal" data-target="#logoutModal">Logout</a>
          @endif
          
        </div>
      </li>
    </ul>

  </nav>

  <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            
            {{-- <a class="btn btn-success" href="/logout"  type="button" data-dismiss="modal">Yes</a> --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-success" type="submit">Logout</button>
              </form>
            <button class="btn btn-secondary"  type="button" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
