@extends('app')

@section('body')
    <div class="navbar-top">
        <div class="navbar navbar-inverse navbar-fixed-top bg-danger-600">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo_light.png" alt="">
                </a>
                @yield('navbar-left')
            </div>
            <div class="navbar-collapse collapse" id="navbar-mobile">
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-bell2"></i>
                                <span class="visible-xs-inline-block position-right">Activity</span>
                                <span class="status-mark border-orange-400"></span>
                            </a>
                            <div class="dropdown-menu dropdown-content">
                                <div class="width-350">
                                    <div class="panel-body text-center">
                                        <h5>No new notifications</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <span style="visibility: hidden">.</span><i class="icon-more"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a (click)="signOutBtnClick()"><i class="icon-switch2"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-container">
            <div class="page-content">
                <!-- <div class="sidebar sidebar-main sidebar-default sidebar-fixed">
                    <div class="sidebar-content">
                        <div class="sidebar-category sidebar-category-visible">
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">
                                    <li><a routerLink="/tasks"><i class="icon-inbox"></i> <span>Inbox <span class="label bg-blue-400">4</span></span></a></li>
                                    <li><a routerLink="/tasks/starred"><i class="icon-star-empty3 text-danger"></i> <span>Starred </span></a></li>
                                    <li><a routerLink="/tasks/today"><i class="icon-calendar52 text-success"></i> <span>Today </span></a></li>
                                    <li><a routerLink="/tasks/week"><i class="icon-calendar text-warning"></i> <span>Week </span></a></li>
                                    <li><a routerLink="/tasks/mine"><i class="icon-user-check text-info"></i> <span>Assigned to me </span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                @yield('content')
            </div>
        </div>
    </div>
@endsection
