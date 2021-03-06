@extends('layouts.home')

@section('title', 'My Dashboard')

@section('content')
<div id="dashboard-wrap">
<div id="centered">
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
                <a href="{{ url('getstarted') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-files-o fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings box3text">GET STARTED</h4></li>
                    </ul>
                </a>
            </div>

            <div class="box box4 box-hide"></div>

            <div class="box box5">
                <a href="{{ url('about') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-info-circle fa-3x panelIcons hvr-icon-pulse box5icon"></i></li>
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
                            <h4 class="panelHeadings box6text">LOG OUT</h4></li>
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
                <a href="{{ url('getstarted') }}" class="box-link">
                    <ul>
                        <li class="listPanel"><i class="fa fa-files-o fa-3x panelIcons hvr-icon-pulse"></i></li>
                        <li class="listPanel">
                            <h4 class="panelHeadings box3text">GET STARTED</h4></li>
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
                            <h4 class="panelHeadings box6text">LOG OUT</h4></li>
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
</div><!--centered-->
</div><!--wrap-->

<div id="footer">
    <footer class="footer-dashboard">
        <div class="container-fluid">
            <p class="footerText">Connect with Altru on social media <br>
                <a href="https://www.facebook.com/altruapp/" target="_blank" class="fa fa-facebook socialIconsFooter"></a>
                <a href="https://twitter.com/AltruApp" target="_blank" class="fa fa-twitter socialIconsFooter"></a>
                <a href="https://www.youtube.com/channel/UC2eudTDzCblkMzI2HeQHrLA/" target="_blank" class="fa fa-youtube socialIconsFooter"></a>
                <a href="https://vimeo.com/altru" target="_blank" class="fa fa-vimeo socialIconsFooter"></a>
            </p>
            <ul class="footerInfoText">
                <li><a href="{{ url('about') }}">About Us</a></li>
                <li><a href="{{ url('privacy') }}">Privacy Policy</a></li>
                <li>&#169; 2016 Altru &middot; All Rights Reserved </li>
            </ul>
        </div>
    </footer>
</div>

@endsection

