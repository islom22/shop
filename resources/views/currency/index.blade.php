@extends('layouts.app')

@section('content')
<form action="{{route('currency-post')}}" method="post">
    @csrf
  <div class="container py-5">
      <div class="row justify-content-center ">
          <div class="card py-5">
              <div class="card-body">
                  <h4 class="text-center ">Currency</h4>
                  <div class="row">
                      <div class="col-md-6">
                          <input type="text" name="short_name" class="form-control" placeholder="Short_name" required>
                      </div>
                      <div class="col-md-6">
                          <input type="text" name="country"  class="form-control" placeholder="Country" required> 
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