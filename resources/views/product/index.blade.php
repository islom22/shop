@extends('layouts.app')

@section('content')
<form action="{{route('product-post')}}" method="post">
    @csrf
  <div class="container py-5">
      <div class="row justify-content-center ">
          <div class="card py-5">
              <div class="card-body">
                  <h4 class="text-center ">Product Information</h4>
                  <div class="row">
                      <div class="col-md-4">
                          <input type="text" name="title"  class="form-control" placeholder="Title" required>
                      </div>
                      <div class="col-md-4">
                          <input type="text" name="amount"  class="form-control" placeholder="Amount" required> 
                      </div>
                      <div class="col-md-4">
                     
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="form-group row mb-0 mx-auto mt-3 d-flex " style="text-align: center">
          <div class=" mx-auto">
              <button type="submit" class="btn btn-primary">
                  {{ __('Next') }}
              </button>                                  
          </div>
      </div>
  </div>
</form>
@endsection