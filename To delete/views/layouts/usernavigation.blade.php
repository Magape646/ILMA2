@extends('layouts.studentadmin')






@section('sidebarnavigation')


<!-- begin sidebar user -->
<ul class="nav">
    <li class="nav-profile">
        <a href="javascript:;" data-toggle="nav-profile">
            <div class="image">
                <img src="../assets/img/user/user-13.jpg" alt="" />
            </div>
            <div class="info">
                <b class="caret pull-right"></b>
                {{ Auth::user()->name }}
                <small>User ID : {{ Auth::user()->id }}</small>
            </div>
        </a>
    </li>
    <li>
        <ul class="nav nav-profile">
            <li><a href="javascript:;"><i class="fa fa-cog"></i> Inbox</a></li>
            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> My Account</a></li>
            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Help</a></li>

        </ul>
    </li>
</ul>
<!-- end sidebar user -->
<!-- begin sidebar nav -->
<ul class="nav" >
    <li class="nav-header">Navigation</li>

    <li class="has-sub" >
        <a href="/user">
            <i class="fa fa-list-ol"></i>
            <span>Dashboard</span>
        </a>
        </li>
    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret"></b>
            <i class="fa fa-play-circle"></i>
            <span>To Do</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="/calender">
            <i class="fa fa-gem"></i>
            <span>Calender</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <i class="fa fa-hdd"></i>
            <span>Lessons</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <i class="fa fa-th-large"></i>
            <span>Progress Report</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <i class="fa fa-th-large"></i>
            <span>Insight</span>
        </a>
    </li>




    <!-- begin sidebar minify button -->

    <!-- end sidebar minify button -->
</ul>
<!-- end sidebar nav -->



@endsection






