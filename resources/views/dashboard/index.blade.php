<!DOCTYPE html>
<html lang="en">
  <head>
    @include('dashboard.includes.links_and_metadata')
    <title>Dashboard :: Welcome home</title>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      @include('dashboard.includes.top_nav')
      @include('dashboard.includes.side_nav')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <!--  @yield('content') -->
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3></h3>
                  <p>Video Favourites</p>
                </div>
                <div class="icon">
                  <i class="ion ion-heart"></i>
                </div>
                <a href="/dashboard/video/favourites" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><sup style="font-size: 20px"></sup></h3>
                  <p>Uploaded Videos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-videocamera"></i>
                </div>
                <a href="/dashboard/video/view" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3></h3>
                  <p>Video Catgories</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-grid-view"></i>
                </div>
                <a href="/dashboard/category/view" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    @include('dashboard.includes.footer')