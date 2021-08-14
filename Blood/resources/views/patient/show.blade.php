

@extends('web.pages.header')



@section('sidebar')
       
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-danger fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Patient</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <p class=" fw-bold" >
                              <a class="text-danger" href="{{route('profile')}}">  <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}</a>
                        </p>
                           
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row my-5">
               

                <table class="table bg-light rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">patient_id</th>
                            <th scope="col">Blood Group</th>
                            <th scope="col">Contact</th>
                            <th scope="col" >Location</th>
                            <th scope="col" >Quantity</th>
                            <th scope="col" >status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if (count($donors)> 0) --}}
                        @isset($patients)
                    @foreach ($patients as $patient)
                        <tr>
                            <th scope="row">{{$patient->id}}</th>
                            <td>{{$patient->patient_id}}</td>
                            <td>{{$patient->bloodgroup}}</td>
                            <td>{{$patient->request_contact}}</td>
                            <td>{{$patient->request_location}}</td>
                            <td>{{$patient->request_quantity}}</td>
                         
                            <td >
                                <a href="{{route('patient.cfr' , $patient->id)}}" class=" btn btn-success">Confirm</a>
                            
                                <a href="{{route('patient.cld' , $patient->id)}}" class="btn btn-danger">Canceld</a>
                            </td>
                        </tr>
                        
                    </tbody>
                    @endforeach
                    @endisset
                </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    @endsection