@extends('layouts.index')

@section('title')
    Admin | Dashboard
@endsection

{{-- @section('breadcrumb')
    @include('includes.breadcrumb')
@endsection --}}

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7 ml-auto">
                <div class="row mb-5">
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fa fa-shopping-cart fa-3x text-warning" aria-hidden="true"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Sales</h5>
                                        <h3>Rp. 135,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fa fa-refresh mr-3" aria-hidden="true"></i>
                                <span>Update Now</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fa fa-money fa-3x text-success" aria-hidden="true"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Expenses</h5>
                                        <h3>Rp. 39,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fa fa-refresh mr-3" aria-hidden="true"></i>
                                <span>Update Now</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fa fa-users fa-3x text-info" aria-hidden="true"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Users</h5>
                                        <h3>Rp. 15,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fa fa-refresh mr-3" aria-hidden="true"></i>
                                <span>Update Now</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fa fa-line-chart fa-3x text-danger" aria-hidden="true"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Visitors</h5>
                                        <h3>Rp. 45,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fa fa-refresh mr-3" aria-hidden="true"></i>
                                <span>Update Now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- table --}}
<section>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-9 col-lg-8 col-md-7 ml-auto">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                        <h3 class="text-muted text-center mb-3">Staff Salary</h3>
                        <table class="table table-striped bg-light text-center">
                            <thead>
                                <tr class="text-muted"></tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Date</th>
                                <th>Contact</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Edy</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Adjie</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Linggih</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Candra</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Dodo</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- pagination --}}
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        {{-- endpagination --}}
                    </div>
                    <div class="col-xl-6 col-12">
                        <h3 class="text-muted text-center mb-3">Recent Payments</h3>
                        <table class="table table-dark table-hover text-center">
                            <thead>
                                <tr class="text-muted"></tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Jessica</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Agnes</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Jenny</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Monica</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Alex</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <td>Bianca</td>
                                    <td>Rp 8,000,000</td>
                                    <td>01-08-2018</td>
                                    <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- pagination --}}
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a href="#" class="page-link py-2 px-3">
                                        <span>Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link py-2 px-3">
                                        1
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link py-2 px-3">
                                        2
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link py-2 px-3">
                                        3
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link py-2 px-3">
                                        <span>Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    {{-- endpagination --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- endtable --}}

{{-- progress / task list --}}
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7 ml-auto">
                <div class="row mb-4 align-items-center">
                    <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                        <div class="bg-dark text-white p-4 rounded">
                            <h4 class="mb-5">Conversion Rates</h4>
                            <h6 class="mb-3">Google Chrome</h6>
                            <div class="progress mb-4" style="height: 20px">
                                <div class="progress-bar progress-bar-striped font-weight-bold" style="width:91%;">
                                    91%
                                </div>
                            </div>
                            <h6 class="mb-3">Mozilla Firefox</h6>
                            <div class="progress mb-4" style="height: 20px">
                                <div class="progress-bar progress-bar-striped font-weight-bold bg-success" style="width:82%;">
                                    82%
                                </div>
                            </div>
                            <h6 class="mb-3">Safari</h6>
                            <div class="progress mb-4" style="height: 20px">
                                <div class="progress-bar progress-bar-striped font-weight-bold bg-danger" style="width:67%;">
                                    67%
                                </div>
                            </div>
                            <h6 class="mb-3">IE</h6>
                            <div class="progress mb-4" style="height: 20px">
                                <div class="progress-bar progress-bar-striped font-weight-bold bg-info" style="width:10%;">
                                    10%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <h4 class="text-muted p-3 mb-3">Task:</h4>
                        <div class="container-fluid bg-white">
                            <div class="row py-3 mb-4 task-border align-items-center">
                                <div class="col-1">
                                    <input type="checkbox" checked>
                                </div>
                                <div class="col-sm-9 col-8">
                                    Lorem ipsum dolor sit amet consector adipisicing elit.
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Edit</h6>" data-placement="top">
                                        <i class="fa fa-pencil fa-lg text-success mr-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Delete</h6>" data-placement="top">
                                        <i class="fa fa-trash fa-lg text-danger" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid bg-white">
                            <div class="row py-3 mb-4 task-border align-items-center">
                                <div class="col-1">
                                    <input type="checkbox" checked>
                                </div>
                                <div class="col-sm-9 col-8">
                                    Lorem ipsum dolor sit amet consector adipisicing elit.
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Edit</h6>" data-placement="top">
                                        <i class="fa fa-pencil fa-lg text-success mr-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Delete</h6>" data-placement="top">
                                        <i class="fa fa-trash fa-lg text-danger" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid bg-white">
                            <div class="row py-3 mb-4 task-border align-items-center">
                                <div class="col-1">
                                    <input type="checkbox" checked>
                                </div>
                                <div class="col-sm-9 col-8">
                                    Lorem ipsum dolor sit amet consector adipisicing elit.
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Edit</h6>" data-placement="top">
                                        <i class="fa fa-pencil fa-lg text-success mr-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Delete</h6>" data-placement="top">
                                        <i class="fa fa-trash fa-lg text-danger" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid bg-white">
                            <div class="row py-3 mb-4 task-border align-items-center">
                                <div class="col-1">
                                    <input type="checkbox" checked>
                                </div>
                                <div class="col-sm-9 col-8">
                                    Lorem ipsum dolor sit amet consector adipisicing elit.
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Edit</h6>" data-placement="top">
                                        <i class="fa fa-pencil fa-lg text-success mr-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Delete</h6>" data-placement="top">
                                        <i class="fa fa-trash fa-lg text-danger" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid bg-white">
                            <div class="row py-3 mb-4 task-border align-items-center">
                                <div class="col-1">
                                    <input type="checkbox" checked>
                                </div>
                                <div class="col-sm-9 col-8">
                                    Lorem ipsum dolor sit amet consector adipisicing elit.
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Edit</h6>" data-placement="top">
                                        <i class="fa fa-pencil fa-lg text-success mr-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-1">
                                    <a href="#" data-toggle="tooltip" data-html="true" title="<h6>Delete</h6>" data-placement="top">
                                        <i class="fa fa-trash fa-lg text-danger" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- endprogress / task list --}}

{{-- activities /quick post --}}
<section>
    <div class="container-fluid">
        <div class="row align-items-center mb-5">
            <div class="col-xl-9 col-lg-8 col-md-7 ml-auto">
                <div class="row">
                    <div class="col-xl-7">
                        <h4 class="text-muted mb-4">Recent Customer Activities</h4>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseOne">
                                        <img src="/img/cust1.jpg" width="50" class="mr-3 rounded">Edy posted a new comment
                                    </button>
                                </div>
                            </div>
                            <div class="collapse show" id="collapseOne" data-parent="#accordion">
                                <div class="card-body">
                                    Fugiat aliqua ad consectetur irure dolore adipisicing veniam amet magna aute. Occaecat ullamco laborum proident ullamco mollit in cillum incididunt ipsum ad ad dolor incididunt. Eu esse officia adipisicing Lorem minim tempor aute nulla consequat aute proident elit. Dolore amet ea cillum duis deserunt ullamco fugiat ea nostrud ex non laborum exercitation. Exercitation consectetur exercitation mollit voluptate occaecat duis in sint laborum exercitation sit.
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseTwo">
                                        <img src="/img/cust2.jpg" width="50" class="mr-3 rounded">Sisca posted a new comment
                                    </button>
                                </div>
                            </div>
                            <div class="collapse" id="collapseTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Fugiat aliqua ad consectetur irure dolore adipisicing veniam amet magna aute. Occaecat ullamco laborum proident ullamco mollit in cillum incididunt ipsum ad ad dolor incididunt. Eu esse officia adipisicing Lorem minim tempor aute nulla consequat aute proident elit. Dolore amet ea cillum duis deserunt ullamco fugiat ea nostrud ex non laborum exercitation. Exercitation consectetur exercitation mollit voluptate occaecat duis in sint laborum exercitation sit.
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseThree">
                                        <img src="/img/cust3.jpeg" width="50" class="mr-3 rounded">Dotclang posted a new comment
                                    </button>
                                </div>
                            </div>
                            <div class="collapse" id="collapseThree" data-parent="#accordion">
                                <div class="card-body">
                                    Fugiat aliqua ad consectetur irure dolore adipisicing veniam amet magna aute. Occaecat ullamco laborum proident ullamco mollit in cillum incididunt ipsum ad ad dolor incididunt. Eu esse officia adipisicing Lorem minim tempor aute nulla consequat aute proident elit. Dolore amet ea cillum duis deserunt ullamco fugiat ea nostrud ex non laborum exercitation. Exercitation consectetur exercitation mollit voluptate occaecat duis in sint laborum exercitation sit.
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFour">
                                        <img src="/img/cust4.jpg" width="50" class="mr-3 rounded">Cikhating posted a new comment
                                    </button>
                                </div>
                            </div>
                            <div class="collapse" id="collapseFour" data-parent="#accordion">
                                <div class="card-body">
                                    Fugiat aliqua ad consectetur irure dolore adipisicing veniam amet magna aute. Occaecat ullamco laborum proident ullamco mollit in cillum incididunt ipsum ad ad dolor incididunt. Eu esse officia adipisicing Lorem minim tempor aute nulla consequat aute proident elit. Dolore amet ea cillum duis deserunt ullamco fugiat ea nostrud ex non laborum exercitation. Exercitation consectetur exercitation mollit voluptate occaecat duis in sint laborum exercitation sit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 mt-5">
                        <div class="card rounded">
                            <div class="card-body">
                                <h5 class="text-muted text-center mb-4">Quick Status Post</h5>
                                <ul class="list-inline text-center py-3">
                                    <li class="list-inline-item mr-4">
                                        <a href="#">
                                            <i class="fa fa-pencil text-success" aria-hidden="true"></i>
                                            <span class="h6 text-muted">Status</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-4">
                                        <a href="#">
                                            <i class="fa fa-camera text-info" aria-hidden="true"></i>
                                            <span class="h6 text-muted">Photo</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fa fa-map-marker text-primary" aria-hidden="true"></i>
                                            <span class="h6 text-muted">Check-In</span>
                                        </a>
                                    </li>
                                </ul>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control py-2 mb-3" placeholder="What's Your Status...">
                                        <button type="button" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 mb-5">Submit Post</button>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card bg-light">
                                            <i class="fa fa-calendar fa-5x text-warning d-block m-auto py-3" aria-hidden="true"></i>
                                            <div class="card-body">
                                                <p class="card-text text-center font-weight-bold text-uppercase">Tue, Sept 01</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card bg-light">
                                            <i class="fa fa-clock-o fa-5x text-danger d-block m-auto py-3" aria-hidden="true"></i>
                                            <div class="card-body">
                                                <p class="card-text text-center font-weight-bold text-uppercase">11:02</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- endactivities /quick post --}}
@endsection
