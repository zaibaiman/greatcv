@extends('workbench')

@section('navbar-left')
    <ul class="nav navbar-nav">
        <li><a href="/dashboard"><i class="icon-stack position-left"></i> Dashboard</a></li>
        <li><a href="/stats"><i class="icon-graph position-left"></i> Stats</a></li>
    </ul>
@endsection

@section('content')
    <div class="page-container">
        <div class="page-content">
            <div class="content-wrapper">
                <div class="page-header" style="border: 1px solid #ddd; border-bottom: 0;">
                    <div class="page-header-content">
                        <div class="page-title">
                            <button type="button" class="btn border-slate text-slate-800 btn-flat" data-toggle="modal" data-target="#new_modal"><i class="icon-plus2 icon-left"></i> New</button>
                            <button class="btn border-slate text-slate-800 btn-flat ml-10">Add Cover Letter</button>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="panel">
                                <div class="panel-body text-center">
                                    <div class="icon-object text-success"><i class="icon-profile"></i></div>
                                    <h2>My GreatCV</h2>
                                    <h5 style="margin-top: -10px">2018-02-08</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('dashboard.new-modal')
        </div>
    </div>
@endsection
