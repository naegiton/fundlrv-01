<!DOCTYPE html>
<html lang="en">

<head>


    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('public/theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('public/theme/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('public/theme/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('public/theme/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


</head>

<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('admin')}}">โปรแกรมระบบบริหารงานฌาปนกิจและงานสารบัญ</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i> ทักทาย</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-male fa-fw"></i> งานฌาปนกิจ<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="#">1.หน้าแรก</a> </li>
                            <li> <a href="#">2.สมัครสมาชิก</a> </li>
                            <li> <a href="#">3.ตรวจสอบเอกสาร</a> </li>
                            <li> <a href="#">4.การชำระเงิน</a> </li>
                            <li> <a href="#">5.ผู้รับผลประโยชน์</a> </li>
                            <li> <a href="#">6.ทะเบียนสมาชิก</a> </li>
                            <li> <a href="#">7.ทะเบียนผู้เสียชีวิต</a> </li>

                            <li>
                                <a href="#"><i class="fa fa-print fa-fw"></i>  รายงาน <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="flot.html">1.รายงานรายวัน</a>  </li>
                                    <li> <a href="morris.html">2.สมัครสมาชิก</a> </li>
                                    <li> <a href="morris.html">3.ตรวจสอบเอกสาร</a> </li>
                                    <li> <a href="morris.html">4.การชำระเงิน</a>  </li>
                                    <li> <a href="morris.html">5.ผู้รับผลประโยชน์</a> </li>
                                    <li> <a href="morris.html">6.ทะเบียนสมาชิก</a> </li>
                                    <li> <a href="morris.html">7.ทะเบียนผู้เสียชีวิต</a> </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-print fa-fw"></i> การตั้งค่า <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="{{url('')}}" >1.งานฌาปนกิจ</a>  </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> งานสารบัญ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li> <a href="flot.html">เอกสารส่ง</a>   </li>
                               <li> <a href="morris.html">เอกสารรับ</a> </li>
                            </ul>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
</div>




<!-- /#wrapper -->

    <!-- jQuery -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> @yield('header')</h1>
                </div>
                </div>
              @yield('content')
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


    <!-- jQuery -->
    <script src="{{url('public/theme/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('public/theme/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('public/theme/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('public/theme/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
