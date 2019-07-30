<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="/dashboard">
        <i class="fa fa-home mr-2"></i>
        <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="/customers/create">
        <i class="fa fa-plus mr-2"></i>
        <span>Add Customer</span>
        </a>

    </li>

    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-users mr-2"></i>
            <span>Clients <i class="fa fa-caret-down pull-right"></i></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown" >
            <a class="dropdown-item" href="/customers">All Customers</a>

            @if (count($products) > 0)
                @foreach ($products as $product)
                    <div>
                        <a class="dropdown-item" href="/product/{{$product->id}}" >{{$product->name}}</a>
                    </div>
                @endforeach
            @endif

            
            
            
            </div>
        </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fa fa-cog mr-2"></i>
        <span>Settings</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fa fa-user mr-2"></i>
        <span>My Account</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="/register">
    <i class="fa fa-user-plus mr-2"></i>
    <span>Add Account</span></a>
    </li>
</ul>