@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <h4>
            <a href="{{ route('product') }}" method="get">Products</a>
        </h4>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Bu malumotlar ro`yhati </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                              <th>Id</th>
                              <th>Phone</th>
                              <th>Name</th>
                              <th>Family</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($admin as $item)
                              <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->phone}}</td>
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->family}}</td>
                              </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection