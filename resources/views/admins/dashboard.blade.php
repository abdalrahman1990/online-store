@extends('layouts.bg_admin')

@section('content')
  <!-- Breadcrumbs-->
  <div>{{$money}}</div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Home screen</a>
    </li>
    <li class="breadcrumb-item active">overview</li>
  </ol>

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-comments"></i>
          </div>
          <div class="mr-5">Have everything{{$totalTrans}} order</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ url('transactions') }}">
          <span class="float-left">more details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <div class="mr-5">Have{{$waitTrans}} the order is pending</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ url('transactions') }}">
          <span class="float-left">More details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-info o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-shopping-cart"></i>
          </div>
          <div class="mr-5">have {{$shipTrans}} The order is in transit</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ url('transactions') }}">
          <span class="float-left">More details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-life-ring"></i>
          </div>
          <div class="mr-5">Have {{$doneTrans}} the order is done</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ url('transactions') }}">
          <span class="float-left">More details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-area"></i>
      Area Chart Example</div>
    <div class="card-body">
      <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
@endsection
