@extends('layouts.app')

@section('title', 'My Dashboard')

@section('content')


@if($profiletype=='guest')
    
    <section class="mainSquareContainer">
        <div class="squares noselect">
        
            <div class="box box1">
                <a href="{{ url('families') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-search fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings">SEARCH FOR FAMILIES</h4></li>
                    </ul>
                </a>
            </div>

            <div class="box box2">
                <a href="{{ url('profile') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-user fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings box2text">MY PROFILE</h4></li>
                    </ul>
                </a>
            </div>
            <div class="box box3">
                <a href="{{ url('getverified') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-files-o fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings box3text">GET VERIFIED</h4></li>
                    </ul>
                </a>
            </div>

            <div class="box box4 box-hide"></div>

            <div class="box box5">
                <a href="{{ url('about') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-info-circle fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings box5text">ABOUT US</h4></li>
                    </ul>
                </a>
            </div>
            <div class="box box6">
                <a href="{{ url('logout') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-sign-out fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings">LOG OUT</h4></li>
                    </ul>
                </a>
            </div>
            <div class="box box7">
                <a href="{{ url('contact') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-comment-o fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings">CONTACT US</h4></li>
                    </ul>
                </a>
            </div>
        </div>
    </section>




@elseif($profiletype=='volunteer')
    

    <section class="mainSquareContainer">
        <div class="squares noselect">
            <div class="box box1">
                <a href="{{ url('guests') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-search fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings">SEARCH FOR GUESTS</h4></li>
                    </ul>
                </a>
            </div>
            <div class="box box2">
                <a href="{{ url('profile') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-user fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings box2text">MY PROFILE</h4></li>
                    </ul>
                </a>
            </div>
            <div class="box box3">
                <a href="{{ url('getverified') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-files-o fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings box3text">GET VERIFIED</h4></li>
                    </ul>
                </a>
            </div>

            <div class="box box4 box-hide"></div>

            <div class="box box5">
                <a href="{{ url('about') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-info-circle fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings">ABOUT US</h4></li>
                    </ul>
                </a>
            </div>
            <div class="box box6">
                <a href="{{ url('logout') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-sign-out fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings">LOG OUT</h4></li>
                    </ul>
                </a>
            </div>
            <div class="box box7">
                <a href="{{ url('contact') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-comment-o fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings">CONTACT US</h4></li>
                    </ul>
                </a>
            </div>
        </div>
    </section>


@endif


@endsection
