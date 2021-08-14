@extends('web.pages.header')



@section('sidebar')
      
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-danger fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Donor</h2>
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
                              <a class="text-danger" href="{{route('profile')}}">  <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}</a>
                        </p>
                           
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">


                <div class="row my-5">
                    
                    <div class="col">
                        <table class="table bg-light rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">CNI</th>
                                    <th scope="col">Blood Group</th>
                                    <th scope="col">Location</th>
                                    <th scope="col" >Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if (count($donors)> 0) --}}
                                @isset($donors)
                            @foreach ($donors as $donor)
                                <tr>
                                    <th scope="row">{{$donor->id}}</th>
                                    <td>{{$donor->CNI}}</td>
                                    <td>{{$donor->bloodgroup}}</td>
                                    <td>{{$donor->location}}</td>
                                    <td >
                                        <a href="{{route('donor.cfr' , $donor->id)}}" class=" btn btn-success">Confirm</a>
                                    
                                        <a href="{{route('donor.cld' , $donor->id)}}" class="btn btn-danger">Canceld</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                            @endisset
                        </table>
                        {{-- {{ $donors->links()}} --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    @endsection
