@extends('cv.cv')

@section('content')
    <div class="page-container">
        <div class="page-content sidebar-xs">
            <div class="sidebar sidebar-main sidebar-default sidebar-fixed">
                <div class="sidebar-content">
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                            <li><a><i class="icon-grid5 icon-2x text-muted"></i> <span>Templates </span></a></li>
                                <li><a><i class="icon-browser icon-2x text-muted"></i> <span>Appearance </span></a></li>
                                <li><a><i class="icon-page-break2 icon-2x text-muted"></i> <span>Page breaks </span></a></li>
                                <li><a><i class="icon-cog3 icon-2x text-muted" data-toggle="modal" data-target="#title_modal"></i> <span>Settings </span></a></li>
                                <li><a><i class="icon-alarm icon-2x text-muted"></i> <span>History </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content">
                    <basic-editor-component></basic-editor-component>
                </div>
            </div>
        </div>
    </div>
@endsection