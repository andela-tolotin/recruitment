<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Auth::user()->picture_url }}" title="{{ ucwords(Auth::user()->username) }}" alt="{{ ucwords(Auth::user()->username) }}" class="img-circle">
      </div>
      <div class="pull-left info">
        <p>  <p>{{ ucwords(Auth::user()->username) }} </p> </p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="/dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          <li><a href="/"><i class="fa fa-circle-o"></i> Homepage</a></li>
        </ul>
      </li>
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th-list"></i>
          <span>Other Info</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
         <li><a href="/dashboard/academic/add"><i class="fa fa-circle-o"></i> Add Academic Profile</a></li>
         <li><a href="/dashboard/work/add"><i class="fa fa-circle-o"></i> Add Work Experience</a></li>
         <li><a href="/dashboard/skill/add"><i class="fa fa-circle-o"></i> Add Skill</a></li>
         <li><a href="/dashboard/download/cv"><i class="fa fa-circle-o"></i> Download CV</a></li>
        </ul>
      </li>
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-video-camera"></i> <span>My Videos </span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/dashboard/video/add"><i class="fa fa-circle-o"></i> Add video</a></li>
          <li><a href="/dashboard/video/view"><i class="fa fa-circle-o"></i> View Videos</a></li>
          <li><a href="/dashboard/video/favourites"><i class="fa fa-circle-o"></i> Favourite Videos</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>