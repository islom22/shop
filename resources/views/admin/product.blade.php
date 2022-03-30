@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Bu mahsulotlar ro`yhati </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                              <th>Id</th>
                              <th>Title</th>
                              <th>Amount</th>
                              <th>Client_id</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($product as $item)
                              <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->title}}</td>
                                  <td>{{$item->amount}}</td>
                                  <td>{{$item->client->id}}</td>
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