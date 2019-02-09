@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ url('public/libs/full_page_scroll/fullpage.min.css') }}">
@endsection

@section('content')
    <div class="header">
        <div id="logo">
            <svg class="logo-icon">
                <use xlink:href="{{ url('public/icons/header-logo.svg#logo-icon') }}"></use>
            </svg>
        </div>
        <a href="javascript:void(0)" id="header-menu" class="menu">
            <svg class="menu-icon-svg">
                <use xlink:href="{{ url( 'public/icons/menu.svg#menu-icon' ) }}"></use>
            </svg>
        </a>
    </div>
    <div class="sections">
        @include('components.home.section_1')
        @include('components.home.section_2')
        @include('components.home.section_4')
        @include('components.home.section_3')
        @include('components.home.section_5')
    </div>
    @include('components.home.sidebar')
    @include('components.home.popup')
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public/libs/anime.min.js') }}"></script>
    <script src="{{ url('public/libs/full_page_scroll/fullpage.min.js') }}"></script>
    <script src="{{ url('public/libs/full_page_scroll/scrolloverflow.min.js') }}"></script>
    <script src="{{ url('public/js/main.js') }}"></script>
@endsection