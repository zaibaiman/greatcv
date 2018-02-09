@extends('workbench')

@section('navbar-left')
    <ul class="nav navbar-nav">
        <li><a href="/cvs/{{ Request::segment(2) }}">Basic editor</a></li>
        <li><a href="/cvs/{{ Request::segment(2) }}/visual">Visual editor</a></li>
        <li><a href="/cvs/{{ Request::segment(2) }}/preview">Preview</a></li>
    </ul>
@endsection

