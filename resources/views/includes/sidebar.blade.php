<div class="col-xl-3 col-lg-4 col-md-5 sidebar overflow-auto fixed-top">
    <a href="{{ url('/') }}" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4
    bottom-border">
        {{ config('app.name')}}
    </a>
    <div class="bottom-border pb-3">
        <img src="/img/admin.png" width="50" class="rounded-circle">
        <a href="" class="text-white">Edy Ridwan Hutagalung</a>
    </div>
    <ul class="navbar-nav flex-column mt-4">
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 current"><i class="fa fa-home text-light fa-lg mr-3"> Dashboard</i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 sidebar-link" onclick="check();"><i class="fa fa-user text-light fa-lg mr-3"> Profile</i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 sidebar-link"><i class="fa fa-envelope text-light fa-lg mr-3"> Inbox</i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 sidebar-link"><i class="fa fa-shopping-cart text-light fa-lg mr-3"> Sales</i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 sidebar-link"><i class="fa fa-line-chart text-light fa-lg mr-3"> Analytics</i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 sidebar-link"><i class="fa fa-bar-chart text-light fa-lg mr-3"> Charts</i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 sidebar-link"><i class="fa fa-table text-light fa-lg mr-3"> Tables</i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 sidebar-link"><i class="fa fa-wrench text-light fa-lg mr-3"> Settings</i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link p-3 mb-2 sidebar-link"><i class="fa fa fa-file text-light fa-lg mr-3"> Documentation</i></a>
        </li>
    </ul>
</div>
