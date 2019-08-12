<!-- Sidebar -->

<ul class="sidebar navbar-nav">
    <li class="nav-item user-profile text-center p-3 hidden-xs-down">
        
        <img class="img-responsive mb-3 user-img mx-auto d-block" style="border-radius: 50%;" src="https://via.placeholder.com/80" alt="User picture">
    <span class="text-light">{{Auth::user()->name}}</span><strong class="text-light ml-2">{{Auth::user()->surname}}</strong>
        <small class="d-block text-light">{{Auth::user()->role->name}}</small>
    </li>
    <li class="nav-item ">
        <a class="nav-link active" href="/dashboard">
        <i class="fa fa-home mr-2 text-white"></i>
            <span class="text-white ">Dashboard</span>
        </a>
    </li>
    @if (Auth::user()->role->read_only == 0)
        <li class="nav-item dropdown">
            <a class="nav-link" href="/customers/create">
            <i class="fa fa-plus mr-2 text-white"></i>
                <span class="text-white">New Order</span>
            </a>
        </li>
    @endif
    

    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-users mr-2 text-white"></i>
                <span class="text-white">Clients <i class="fa fa-caret-down pull-right"></i></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown" >
                <a class="dropdown-item" href="/product">All</a>
           
                <a class="dropdown-item" href="/product/{{1}}">BCX DI</a>
            
                <a class="dropdown-item" href="/product/{{2}}">Enterprise Internet</a>
            
                <a class="dropdown-item" href="/product/{{3}}">TI-DIS</a>
                

                @if (Auth::user()->role->read_only == 0)
                <hr>
                    <a class="dropdown-item" href="/customers/create">New Order</a>
                    
                    <a class="dropdown-item" href="#">Upgrade Bandwidth</a>

                    <a class="dropdown-item" href="#">Downgrade Bandwidth</a>
                    
                @endif
            </div>
        </li>
    @if (Auth::user()->role->read_only == 0)
        <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fa fa-cog mr-2 text-white"></i>
            <span class="text-white">Settings</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/register">
            <i class="fa fa-user-plus mr-2 text-white"></i>
            <span class="text-white">Add User</span></a>
        </li>
    @endif
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fa fa-user mr-2 text-white"></i>
        <span class="text-white">My Account</span></a>
    </li>
    
</ul>