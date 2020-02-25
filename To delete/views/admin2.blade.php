@extends('layouts.admin')




@section('title')
ILMA | Admin Dashboard
@endsection







@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Dashboard - ILMA</h1>
<!-- end page-header -->
<!-- begin row -->
<div class="row">
    <!-- begin col-3 -->
    <div class="col-lg-3 col-md-6">
        <div class="widget widget-stats bg-blue">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TODAY'S STATISTICS</div>
                <div class="stats-number">7,842,900</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 70.1%;"></div>
                </div>
                <div class="stats-desc">Lorem ipsum dolor (70.1%)</div>
            </div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-lg-3 col-md-6">
        <div class="widget widget-stats bg-purple">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TODAY'S STATISTICS</div>
                <div class="stats-number">180,200</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 40.5%;"></div>
                </div>
                <div class="stats-desc">Lorem ipsum dolor (40.5%)</div>
            </div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-lg-3 col-md-6">
        <div class="widget widget-stats bg-green">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TODAY'S STATISTICS</div>
                <div class="stats-number">38,900</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 76.3%;"></div>
                </div>
                <div class="stats-desc">Lorem ipsum dolor (76.3%)</div>
            </div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-lg-3 col-md-6">
        <div class="widget widget-stats bg-grey-darker">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TODAY'S STATISTICS</div>
                <div class="stats-number">3,988</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 54.9%;"></div>
                </div>
                <div class="stats-desc">Lorem ipsum dolor (54.9%)</div>
            </div>
        </div>
    </div>
    <!-- end col-3 -->
</div>
<!-- end row -->

<!-- begin row -->
<div class="row">
    <!-- begin col-8 -->
    <div class="col-lg-8">
        <div class="widget-chart with-sidebar">
            <div class="widget-chart-content">
                <h4 class="chart-title">
                    Analytics
                    <small>Lorem ipsum dolor ipsum dolor</small>
                </h4>
                <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
            </div>
            <div class="widget-chart-sidebar">
                <div class="chart-number">
                    1,225,729
                    <small>Lorem ipsum dolor</small>
                </div>
                <div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
                <ul class="chart-legend f-s-11">
                    <li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>New Visitors</span></li>
                    <li><i class="fa fa-circle fa-fw text-aqua f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Return Visitors</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end col-8 -->
    <!-- begin col-4 -->
    <div class="col-lg-4">
        <div class="panel panel-inverse" data-sortable-id="index-1">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Visitors Origin
                </h4>
            </div>
            <div id="visitors-map" style="height: 179px;"></div>
            <div class="list-group">
                <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                    1. United State
                    <span class="badge f-w-500 bg-blue f-s-10">20.95%</span>
                </a>
                <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                    2. India
                    <span class="badge f-w-500 bg-aqua f-s-10">16.12%</span>
                </a>
                <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                    3. Mongolia
                    <span class="badge f-w-500 bg-grey f-s-10">14.99%</span>
                </a>
            </div>
        </div>
    </div>
    <!-- end col-4 -->
</div>
<!-- end row -->
<!-- begin row -->
<div class="row">
    <!-- begin col-4 -->
    <div class="col-lg-4">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="index-2">
            <div class="panel-heading">
                <h4 class="panel-title">Chat History <span class="label bg-blue pull-right">4 message</span></h4>
            </div>
            <div class="panel-body">
                <div class="chats" data-scrollbar="true" data-height="225px">
                    <div class="left">
                        <span class="date-time">yesterday 11:23pm</span>
                        <a href="javascript:;" class="name">Sowse Bawdy</a>
                        <a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-12.jpg" /></a>
                        <div class="message">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent mattis interdum arcu eu feugiat.
                        </div>
                    </div>
                    <div class="right">
                        <span class="date-time">08:12am</span>
                        <a href="javascript:;" class="name"><span class="label label-primary">ADMIN</span> Me</a>
                        <a href="javascript:;" class="image"><img alt="" src="{{ asset('assets/img/user/user-13.jpg') }}" /></a>
                        <div class="message">
                            Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
                        </div>
                    </div>
                    <div class="left">
                        <span class="date-time">09:20am</span>
                        <a href="javascript:;" class="name">Neck Jolly</a>
                        <a href="javascript:;" class="image"><img alt="" src="{{ asset('assets/img/user/user-10.jpg') }}" /></a>
                        <div class="message">
                            Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                    </div>
                    <div class="left">
                        <span class="date-time">11:15am</span>
                        <a href="javascript:;" class="name">Shag Strap</a>
                        <a href="javascript:;" class="image"><img alt="" src="{{ asset('assets/img/user/user-14.jpg') }}" /></a>
                        <div class="message">
                            Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis placerat.
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <form name="send_message_form" data-id="message-form">
                    <div class="input-group">
                        <input type="text" class="form-control" name="message" placeholder="Enter your message here.">
                        <span class="input-group-append">
                            <button class="btn btn-yellow" type="button"><i class="fa fa-camera"></i></button>
                            <button class="btn btn-yellow" type="button"><i class="fa fa-link"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-4 -->
    <!-- begin col-4 -->
    <div class="col-lg-4">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="index-3">
            <div class="panel-heading">
                <h4 class="panel-title">Today's Schedule</h4>
            </div>
            <div id="schedule-calendar" class="bootstrap-calendar"></div>
            <div class="list-group">
                <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                    Sales Reporting
                    <span class="badge f-w-500 bg-blue f-s-10">9:00 am</span>
                </a>
                <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                    Have a meeting with sales team
                    <span class="badge f-w-500 bg-grey f-s-10">2:45 pm</span>
                </a>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-4 -->
    <!-- begin col-4 -->
    <div class="col-lg-4">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="index-4">
            <div class="panel-heading">
                <h4 class="panel-title">New Registered Users <span class="pull-right label bg-blue">24 new users</span></h4>
            </div>
            <ul class="registered-users-list clearfix">
                <li>
                    <a href="javascript:;"><img src="{{ asset('assets/img/user/user-5.jpg') }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        Savory Posh
                        <small>Algerian</small>
                    </h4>
                </li>
                <li>
                    <a href="javascript:;"><img src="{{ asset('assets/img/user/user-3.jpg') }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        Ancient Caviar
                        <small>Korean</small>
                    </h4>
                </li>
                <li>
                    <a href="javascript:;"><img src="{{ asset('assets/img/user/user-1.jpg') }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        Marble Lungs
                        <small>Indian</small>
                    </h4>
                </li>
                <li>
                    <a href="javascript:;"><img src="{{ asset('assets/img/user/user-8.jpg') }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        Blank Bloke
                        <small>Japanese</small>
                    </h4>
                </li>
                <li>
                    <a href="javascript:;"><img src="{{ asset('assets/img/user/user-2.jpg') }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        Hip Sculling
                        <small>Cuban</small>
                    </h4>
                </li>
                <li>
                    <a href="javascript:;"><img src="{{ asset('assets/img/user/user-6.jpg') }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        Flat Moon
                        <small>Nepalese</small>
                    </h4>
                </li>
                <li>
                    <a href="javascript:;"><img src="{{ asset('assets/img/user/user-4.jpg') }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        Packed Puffs
                        <small>Malaysian></small>
                    </h4>
                </li>
                <li>
                    <a href="javascript:;"><img src="{{ asset('assets/img/user/user-9.jpg') }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        Clay Hike
                        <small>Swedish</small>
                    </h4>
                </li>
            </ul>
            <div class="panel-footer text-center">
                <a href="javascript:;">View All</a>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-4 -->
</div>
<!-- end row -->
@endsection
