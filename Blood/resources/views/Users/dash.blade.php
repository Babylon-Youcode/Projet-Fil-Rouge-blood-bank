@extends('Users.header')



@section('sidebar')

       
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
                              <a href="{{route('profile')}}">  <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}</a>
                        </p>
                           
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
             

                <div class="row my-5">
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    {{-- <th scope="col">Id Donation</th> --}}
                                    <th scope="col">Id Donor</th>
                                    <th scope="col">Id Blood</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($donations)
                                @foreach ($donations as $donation)
                                @if ($donation->don_donor_id == auth()->id())
                                    
                                    <tr>
                                        <th scope="row">{{$donation->id}}</th>
                                        <td>{{$donation->don_donor_id}}</td>
                                        <td>{{$donation->don_blood_id}}</td>
                                        <td>{{$donation->date}}</td>
                                       
                                     
                                       
                                    </tr>
                                    @endif
                                    @endforeach
                                    @endisset
                                    
                                </tbody>
                             

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    @endsection
