

@extends('web.pages.header')



@section('sidebar')



        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-danger fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <p class="nav-link  second-text fw-bold" >
                              <a class="text-danger"href="{{route('profile')}}">  <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}</a>
                        </p>
                           
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">A+</h3>
                                <p class="fs-5">5</p>
                            </div>
                            <i class="fas fa-tint fs-1 text-danger border rounded-full p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">B+</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i class="fas fa-tint fs-1 text-danger border rounded-full p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">O+</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-tint fs-1 text-danger border rounded-full p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">AB+</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-tint fs-1 text-danger border rounded-full p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">A-</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-tint fs-1 text-danger border rounded-full p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">B-</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-tint fs-1 text-danger border rounded-full p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">O-</h3>
                                <p class="fs-5">10</p>
                            </div>
                            <i class="fas fa-tint fs-1 text-danger border rounded-full p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">AB -</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-tint fs-1 text-danger border rounded-full p-3"></i>
                        </div>
                    </div>

    <div class="col-sm-3">
        <div class="card bg-light">
            <div class="card-body">
                <div class="blood">
                    <i class="fas fa-users"></i>
                    <h1> {{ $totaldonors }}</h1>
                
                </div>
                
                Total Donors<br>
                                         
            </div>
          </div>
      </div>
      <div class="col-sm-3">
        <div class="card bg-light">
            <div class="card-body">
                <div class="blood">
                    <i class="fas fa-spinner"></i>

                   <h1> {{ $totalpatients }}</h1>
                </div>
                Total Requests<br>
                                         
            </div>
          </div>
      </div>
      <div class="col-sm-3">
        <div class="card bg-light">
            <div class="card-body">
                <div class="blood">
                    <i class="far fa-check-circle"></i>
                    <h1>{{ $totalAchats }}</h1>
                </div>
                Approved Requests<br>
                                         
            </div>
          </div>
      </div>
      <div class="col-sm-3">
        <div class="card bg-light">
            <div class="card-body">
                <div class="blood">
                    <i class="fas fa-tint xyz"></i>
                    <h1>{{ $totalDonations }}</h1>
                </div>
                Total Blood Donations<br>
                                         
            </div>
          </div>
      </div>
   

                {{-- <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Television</td>
                                    <td>Jonny</td>
                                    <td>$1200</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Laptop</td>
                                    <td>Kenny</td>
                                    <td>$750</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Cell Phone</td>
                                    <td>Jenny</td>
                                    <td>$600</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Fridge</td>
                                    <td>Killy</td>
                                    <td>$300</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Books</td>
                                    <td>Filly</td>
                                    <td>$120</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Gold</td>
                                    <td>Bumbo</td>
                                    <td>$1800</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Pen</td>
                                    <td>Bilbo</td>
                                    <td>$75</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Notebook</td>
                                    <td>Frodo</td>
                                    <td>$36</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Dress</td>
                                    <td>Kimo</td>
                                    <td>$255</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Paint</td>
                                    <td>Zico</td>
                                    <td>$434</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Carpet</td>
                                    <td>Jeco</td>
                                    <td>$1236</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Food</td>
                                    <td>Haso</td>
                                    <td>$422</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    @endsection

