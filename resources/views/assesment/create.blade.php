@extends('layouts.welcome')

@section('content')

    <div class="container-xxl position-relative bg-white d-flex p-0">
        {{-- <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


        <!-- Content Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Basic Form</h6>
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                              <div class="col">
                                <div class="form-outline">
                                  <label class="form-label" for="form6Example1">First name</label>
                                  <input type="text" id="form6Example1" class="form-control" />
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                  <label class="form-label" for="form6Example2">Last name</label>
                                  <input type="text" id="form6Example2" class="form-control" />
                                </div>
                              </div>
                            </div>
                          
                            <!-- Text input -->
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example3">Company name</label>
                              <input type="text" id="form6Example3" class="form-control" />
                            </div>
                          
                            <!-- Text input -->
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example4">Address</label>
                              <input type="text" id="form6Example4" class="form-control" />
                            </div>
                          
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example5">Email</label>
                              <input type="email" id="form6Example5" class="form-control" />
                            </div>
                          
                            <!-- Number input -->
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example6">Phone</label>
                              <input type="number" id="form6Example6" class="form-control" />
                            </div>
                          
                            <!-- Message input -->
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example7">Additional information</label>
                              <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                            </div>
                          
                            <!-- Checkbox -->
                            {{-- <div class="form-check d-flex justify-content-center mb-4">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                              <label class="form-check-label" for="form6Example8"> Create an account? </label>
                            </div> --}}
                          
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4 float-end">Place order</button>
                          </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}
    </div>

@endsection