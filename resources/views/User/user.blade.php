@extends('User.Cover')
@section('content')
<div class="container">
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{url('es/viewstaff')}}">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>
                <p>All muslims still studying</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
            </div>
            </a>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{url('es/citizen/complains')}}">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>Boys still studing</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
            </div>
            </a>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{url('es/solved/complains')}}">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>
                <p>Girls still studing</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
            </div>
            </a>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{url('es/unsolved/complains')}}">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>
                <p>Active committe</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
            </div>
            </a>
          </div>

                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{url('es/viewstaff')}}">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>
                <p>All graduated muslims</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
            </div>
            </a>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{url('es/citizen/complains')}}">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>Graduated boys</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
            </div>
            </a>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{url('es/solved/complains')}}">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>
                <p>Graduated girls</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
            </div>
            </a>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{url('es/unsolved/complains')}}">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>
                <p>All jamat files</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-person"></i>
              </div>
            </div>
            </a>
          </div>

    </div>

</div>


    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        
        <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="height:330px; width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.card -->
      </div>
    </div>
    <input type="hidden" id="sparkline-1" name="" disabled>
    <input type="hidden" id="sparkline-2" name="" disabled>
    <input type="hidden" id="sparkline-3" name="" disabled>
    <script>
      var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })
      var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })
      var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })

      sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
      sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
      sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

    </script>
    <div class="col-md-3"></div>
    </div>

  @endsection
