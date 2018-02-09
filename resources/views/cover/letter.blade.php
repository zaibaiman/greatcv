@extends('workbench')

@section('navbar-left')
@endsection

@section('content')
    <div class="page-container">
        <div class="page-content sidebar-xs">
            <div class="sidebar sidebar-main sidebar-default sidebar-fixed">
                <div class="sidebar-content">
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                <li><a><i class="icon-browser icon-2x text-muted"></i> <span>Appearance </span></a></li>
                                <li><a><i class="icon-cog3 icon-2x text-muted" data-toggle="modal" data-target="#title_modal"></i> <span>Settings </span></a></li>
                                <li><a><i class="icon-alarm icon-2x text-muted"></i> <span>History </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content">
                    <cover-letter-component></cover-letter-component>
                </div>
                @include('cover.title-modal')
            </div>
        </div>
    </div>
@endsection
