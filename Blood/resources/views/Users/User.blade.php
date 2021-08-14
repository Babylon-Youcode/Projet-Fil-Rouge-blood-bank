@extends('Users.header')



@section('sidebar')
<div id="page-content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
      <div class="d-flex align-items-center">
          <i class="fas fa-align-left text-danger fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-2 m-0">Donate</h2>
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
  <div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/assets/img/donate.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Donate Now</h5>
                  <p class="card-text">The blood donation process from the time you arrive until the time you leave takes about an hour. The donation itself is only about 8-10 minutes.</p>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Donate Now
                  </button>
                </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/assets/img/donate.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Request Blood</h5>
                  <p class="card-text">The blood donation process from the time you arrive until the time you leave takes about an hour. The donation itself is only about 8-10 minutes.</p>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">
                    Request Blood
                  </button>
                </div>
              </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Donate Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form   method="POST" action="/storeDonor" >
              @csrf
              <div class="form-row">
                <div class="name">Blood Group</div>
                <div class="value">
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="bloodgroup">
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>
            </div>
          {{-- <div class="form-group">
                  <label>Blood Goup</label>
                  <input type="text" name="firstName" class="form-control"  >
                  </div> --}}
                  <div class="form-group">
                      <label>CNI</label>
                      <input type="text" name="CNI" class="form-control"  >
                      </div>
                      <div class="form-group">
                          <label>location</label>
                          <input type="text" name="location" class="form-control"  >
                          </div>
                  <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-danger">Donate Now</button>
                      <a href="#" class="btn btn-danger">Cancel</a>
          
                  </form>
          </div>
        </div>
      </div>
    </div>
    

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form   method="POST" action="/storePatient" >
              @csrf
              <div class="form-row">
                <div class="name">Blood Group</div>
                <div class="value">
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="bloodgroup">
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>
            </div>
          {{-- <div class="form-group">
                  <label>Blood Group</label>
                  <input type="text" name="firstName" class="form-control"  >
                  </div> --}}
                  <div class="form-group">
                      <label>Request_contact</label>
                      <input type="text" name="request_contact" class="form-control"  >
                      </div>
                      <div class="form-group">
                          <label>request_location</label>
                          <input type="text" name="request_location" class="form-control"  >
                          </div>
                          <div class="form-group">
                              <label>raquest_quantity</label>
                              <input type="text" name="request_quantity" class="form-control"  >
                              </div>
                  <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-danger">Add Requist</button>
                      <a href="#" class="btn btn-danger">Cancel</a>
          
                  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection
