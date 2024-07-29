
@extends('layouts.dashboard')

 @section('nav_content')

 <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-md-3">
              <div class="card  bg-danger">
                <div class="card-body">
                  <h5 class="card-title">Total Student</h5>
                  <b><p class="card-text">250</p></b>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card bg-info">
                <div class="card-body">
                  <h5 class="card-title">Total Teacher</h5>
                  <b><p class="card-text ">100</p></b>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card bg-warning">
                <div class="card-body">
                  <h5 class="card-title">Total Alumni</h5>
                  <b><p class="card-text">50</p></b>
                </div>
              </div>
          </div>
            <div class="col-md-3">
              <div class="card bg-primary">
                <div class="card-body">
                  <h5 class="card-title">Total Scholaship</h5>
                  <b><p class="card-text">40</p></b>
                </div>
              </div>
          </div>

          </div>
         <br>
         <br>
         <br>

        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>

        </div>
    </div>
</main>


@section('script_list')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
@endsection
 @endsection
