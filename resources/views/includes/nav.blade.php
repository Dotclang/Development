<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                {{-- sidebar --}}
                @include('includes.sidebar')
                {{-- endsidebar --}}

                {{-- topbar --}}
                @include('includes.topbar')
                {{-- endtopbar --}}

                {{-- mode --}}
                @include('includes.modal')
                {{-- endmode --}}
            </div>
        </div>
    </div>
</nav>
