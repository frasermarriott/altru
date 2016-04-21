@extends('layouts.app')

@section('title', 'My Dashboard')

@section('content')

<div class="dashboard-container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">



            <section class="mainSquareContainer">
                    <div class="squares noselect">
                        <div class="box box1">
                            <ul>
                                <li class="listPanel"><i class="fa fa-search fa-3x panelIcons hvr-icon-pulse"></i></li>
                                <li class="listPanel">
                                    <h4 class="panelHeadings">SEARCH FOR FAMILIES</h4></li>
                            </ul>
                        </div>
                        <div class="box box2">
                            <ul>
                                <li class="listPanel"><i class="fa fa-heart-o fa-3x panelIcons hvr-icon-pulse"></i></li>
                                <li class="listPanel">
                                    <h4 class="panelHeadings">VOLUNTEER</h4></li>
                            </ul>
                        </div>
                        <div class="box box3">
                            <ul>
                                <li class="listPanel"><i class="fa fa-users fa-3x panelIcons hvr-icon-pulse"></i></li>
                                <li class="listPanel">
                                    <h4 class="panelHeadings">MEET UP</h4></li>
                            </ul>
                        </div>
                        <div class="box box4 box-hide"></div>
                        <div class="box box5">
                            <ul>
                                <li class="listPanel"><i class="fa fa-comments-o fa-3x panelIcons hvr-icon-pulse"></i></li>
                                <li class="listPanel">
                                    <h4 class="panelHeadings">CONTACT</h4></li>
                            </ul>
                        </div>
                        <div class="box box6">
                            <ul>
                                <li class="listPanel"><i class="fa fa-sign-in fa-3x panelIcons hvr-icon-pulse"></i></li>
                                <li class="listPanel">
                                    <h4 class="panelHeadings">LOGIN</h4></li>
                            </ul>
                        </div>
                        <div class="box box7">
                            <ul>
                                <li class="listPanel"><i class="fa fa-user-plus fa-3x panelIcons hvr-icon-pulse"></i></li>
                                <li class="listPanel">
                                    <h4 class="panelHeadings">CREATE PROFILE</h4></li>
                            </ul>
                        </div>
                    </div>
                </section>









<!--             <div class="panel panel-default">
                <div class="panel-heading notranslate">{{-- ucwords(\Auth::user()->name) --}}'s Dashboard</div>
                <div class="panel-body">
                        <img src="img/mockup-grid.png" style="width: 600px; margin: 0 auto; display: block;">
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection
