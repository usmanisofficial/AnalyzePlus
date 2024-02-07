@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
  'resources/assets/vendor/libs/swiper/swiper.scss',
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss'
])
@endsection

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/cards-advance.scss'])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/swiper/swiper.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  ])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/dashboards-analytics.js'
])
@endsection
@section('content')
<h4>Home Page</h4>
<div class="row">
  <!-- Analytics -->
  <div class="col-lg-6 mb-4">
    <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0 mt-2">MachineName</h5>
              <small>Current OEE is 72.40%</small>
            </div>
            <div class="row">
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                <h6 class="text-white mt-0 mt-md-3 mb-3">Analytics</h6>
                <div class="row">
                  <div class="col-8">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg-red">28%</p>
                        <p class="mb-0">Bad Products</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg-red">1.5k</p>
                        <p class="mb-0">Total Bad Products</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-4">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                        <p class="mb-0">Total Good Products</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">72%</p>
                        <p class="mb-0">Good Products</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0 mt-2">MachineName</h5>
              <small>Current OEE is 72.40%</small>
            </div>
            <div class="row">
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                <h6 class="text-white mt-0 mt-md-3 mb-3">Analytics</h6>
                <div class="row">
                  <div class="col-8">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg-red ">28%</p>
                        <p class="mb-0">Bad Products</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg-red">1.5k</p>
                        <p class="mb-0">Total Bad Products</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-4">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                        <p class="mb-0">Total Good Products</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">72%</p>
                        <p class="mb-0">Good Products</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0 mt-2">MachineName</h5>
              <small>Current OEE is 72.40%</small>
            </div>
            <div class="row">
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                <h6 class="text-white mt-0 mt-md-3 mb-3">Analytics</h6>
                <div class="row">
                  <div class="col-8">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg-red">28%</p>
                        <p class="mb-0">Bad Products</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg-red">1.5k</p>
                        <p class="mb-0">Total Bad Products</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-4">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                        <p class="mb-0">Total Good Products</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">72%</p>
                        <p class="mb-0">Good Products</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--/ Analytics -->

  <!-- Breakdown Overview -->
  <div class="col-lg-3 col-sm-6 mb-4">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <small class="d-block mb-1 text-muted">Breakdown Overview</small>
          <p class="card-text text-success">+18.2%</p>
        </div>
        <h4 class="card-title mb-1">3 Breakdowns Today</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="d-flex gap-2 align-items-center mb-2 ">
              <span class="badge bg-label-danger p-1 rounded" ><i class="ti ti-arrow-up ti-xs" ></i></span>
              <p class="mb-0">Today</p>
            </div>
            <h5 class="mb-0 pt-1 text-nowrap">5.3h</h5>
            <small class="text-muted">Time Loss</small>
          </div>
          <div class="col-4">
            <div class="divider divider-vertical">
              <div class="divider-text">
                <span class="badge-divider-bg bg-label-secondary">VS</span>
              </div>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
              <p class="mb-0">Yesterday</p>
              <span class="badge bg-label-success p-1 rounded"><i class="ti ti-arrow-down ti-xs"></i></span>
            </div>
            <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">3.1h</h5>
            <small class="text-muted">Time Loss</small>
          </div>
        </div>
        <div class="d-flex align-items-center mt-4">
          <div class="progress w-100" style="height: 8px;">
            <div class="progress-bar bg-danger" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Breakdown Overview -->

  <!-- Products Manufactured -->
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-success rounded-pill p-2">
            <i class='ti ti-package ti-sm'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2">97.5k</h5>
        <small>Products Manufactured</small>
      </div>
      <div id="revenueGenerated"></div>
    </div>
  </div>
  <!--/ Products Manufactured -->

  <!-- Earning Reports -->
  <div class="col-lg-6 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
        <div class="card-title mb-0">
          <h5 class="mb-0">OEE Reports</h5>
          <small class="text-muted">Weekly Efficiency Overview</small>
        </div>

        <!-- </div> -->
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-4 d-flex flex-column align-self-end">
            <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
              <h1 class="mb-0">65%</h1>
              <small class="text-muted">Average Efficiency</small>
              <div class="badge rounded bg-label-success">+4.2%</div>
            </div>
            <small>You informed of this week compared to last week</small>
          </div>
          <div class="col-12 col-md-8">
            <div id="weeklyEarningReports"></div>
          </div>
        </div>
        <div class="border rounded p-3 mt-4">
          <div class="row gap-4 gap-sm-0">
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-primary p-1"><i class="ti ti-currency-dollar ti-sm"></i></div>
                <h6 class="mb-0">Earnings</h6>
              </div>
              <h4 class="my-2 pt-1">$545.69</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                <h6 class="mb-0">Profit</h6>
              </div>
              <h4 class="my-2 pt-1">$256.34</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-danger p-1"><i class="ti ti-brand-paypal ti-sm"></i></div>
                <h6 class="mb-0">Expense</h6>
              </div>
              <h4 class="my-2 pt-1">$74.19</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Earning Reports -->

  <!-- LRS Tracker -->
  <div class="col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="mb-0">LRS Tracker</h5>
          <small class="text-muted">Last 7 Days</small>

        </div>

      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-4 col-md-12 col-lg-4">
            <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
              <h1 class="mb-0">164</h1>
              <p class="mb-0">Total Stops</p>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                <div class="badge rounded bg-label-success p-1"><i class="ti ti-circle-check ti-sm"></i></div>
                <div>
                  <h6 class="mb-0 text-nowrap">Updated Stopped</h6>
                  <small class="text-muted">142</small>
                </div>
              </li>
              <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                <div class="badge rounded bg-label-primary p-1"><i class="ti ti-help ti-sm"></i></div>
                <div>
                  <h6 class="mb-0 text-nowrap">Stop Reason Not Specified</h6>
                  <small class="text-muted">28</small>
                </div>
              </li>
              <li class="d-flex gap-3 align-items-center pb-1">
                <div class="badge rounded bg-label-danger p-1"><i class="ti ti-mood-sad-squint ti-sm"></i></div>
                <div>
                  <h6 class="mb-0 text-nowrap">40 Stops</h6>
                  <small class="text-muted">in 3rd Shift</small>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-12 col-sm-8 col-md-12 col-lg-8">
            <div id="supportTracker"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ LRS Tracker -->


</div>
@endsection
