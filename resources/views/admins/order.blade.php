@extends('layouts.bg_admin')

@section('content')
  <!-- Icon Cards-->
  <div >
    <div class="card mb-3">
      <div class="card-header">
        <table class="table">
          <tr>
            <td>Order number: </td>
            <td>{{$transaction->id}}</td>
          </tr>
          <tr>
            <td>Total amount: </td>
            <td>{{$transaction->total_money}}</td>
          </tr>
          <tr>
            <td>Status: </td>
            <td>
             @if($transaction->status == 1)
                    Waiting for progressing
              @elseif ($transaction->status == 2)
                    Delivery in progress
              @elseif ($transaction->status == 3)
                Done
              @endif
            </td>
          </tr>
        </table>
        <i class="fas fa-table"></i>
          Order details
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th>Product's name</th>
              <th>Amount</th>
              <th>Price:</th>
            </tr>
          </thead>
            <tbody>
              @foreach ($orders as $key => $order)
                <tr>
                   <td>{{$products[$key]->product_name}}</td>
                   <td>{{$order->quantity}}</td>
                   <td>{{$order->price}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          @if (session("admin_status") == 1)
          <div style="float:right;">
            <button class="btn text-white bg-info clearfix small z-1" data-toggle="modal" data-target="#myModal" >
                Update status
              &nbsp;
              <span class="">
                <i class="fas fa-pen"></i>
              </span>
            </button>
          </div>
          @endif
        </div>
      </div>
      <div>
        <a class="btn text-white bg-info clearfix small z-1" href="{{url('transactions')}}">
          <span class="">
            <i class="fas fa-angle-left"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

    <!-- Show modal to select trang thai don hang-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change order status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
          <div class="form-group">
            <label  class="col-form-label">Status</label>
            <select id="select_status" class="form-control">
              <option value="1">Waiting for progressing</option>
              <option value="2">Delivery in progress</option>
              <option value="3">Done</option>
            </select>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="updateStatus(<?php echo $orders[0]->transaction_id; ?>)" >Save</button>
      </div>
    </div>
  </div>
</div>

<script>

  function updateStatus(id){
    var stt = $("#select_status option").filter(":selected").val();
    console.log(stt);
    var data = {
      _token: "{{ csrf_token() }}",
      id: id,
      status: stt
    };

    $(document).ready(function(){
        $.ajax({
            url: "{{ url('transactions/updateStatus') }}",
            method: 'post',
            async: true,
            data: data,
            success: function(result) {
                //$orders = result;
                alert("order status change successful!");
                 window.location.href=window.location.href;
            },
            error: function() {
                alert('An error occurred, please try again');
                window.location.href=window.location.href;
            },
        });

    });
  }
</script>

@endsection
