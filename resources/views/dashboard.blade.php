@extends('workbench')

@section('navbar-left')
    <ul class="nav navbar-nav">
        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-stack position-left"></i> Dashboard</a></li>
        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-graph position-left"></i> Stats</a></li>
    </ul>
@endsection

@section('content')
    <div class="page-container">
        <div class="page-content">
            <div class="content-wrapper">
                <div class="page-header" style="border: 1px solid #ddd; border-bottom: 0;">
                    <div class="page-header-content">
                        <div class="page-title">
                            <button class="btn border-slate text-slate-800 btn-flat"><i class="icon-plus2 icon-left"></i> New</button>
                            <button class="btn border-slate text-slate-800 btn-flat ml-10">Add Cover Letter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
