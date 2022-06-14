@extends('layouts.bg_admin')

@section('content')
  <!-- Icon Cards-->
  <div >
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
          Order List</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Full name</th>
                <th>Tel</th>
                <th>Address</th>
                <th>Total amount on bill</th>
                <th>Order status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transactions as $key => $transaction)
                <tr>
                   <td>{{ $transaction->id }}</td>
                   <td>{{ $customers[$key]->username }}</td>
                   <td>{{$customers[$key]->last_name}} {{$customers[$key]->first_name}}</td>
                   <td>{{$customers[$key]->user_phone}}</td>
                   <td>{{$customers[$key]->user_address}}</td>
                   <td>{{ $transaction->total_money }}</td>
                   <td>
                     @if($transaction->status == 1)
                           Waiting for progressing
                      @elseif ($transaction->status == 2)
                           Delivery in progress
                      @elseif ($transaction->status == 3)
                        Done
                      @endif
                   </td>
                   <td>
                      <a class="btn text-white bg-success clearfix small z-1" href="orders/listOrder/{{$transaction->id}}">
                          View order details
                        &nbsp;
                        <span class="">
                          <i class="fas fa-search-dollar"></i>
                        </span>
                      </a>
                   </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

@endsection
