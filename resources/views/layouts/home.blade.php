<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title class="notranslate">@yield('title') - Altru</title>

    <!-- Icons for various devices -->
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">

    <!-- Microsoft Windows Metro Tile -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#254653">

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/panelHover.css">
    <link rel="stylesheet" href="/css/hover-min.css" media="all">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/MyFontsWebfontsKit.css">
    <link rel="stylesheet" href="/css/media-queries.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    




    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
    <div class="body_ribbon esi_ribbon"></div>
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand navLogo notranslate" href="{{ url('/') }}">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">


                    <!-- Check if a user is logged in -->
                    @if(Auth::check())

                        <!-- If user is an Admin - display this: -->
                        @if(\Auth::user()->usertype=='admin')
                            <li class="{{ Route::currentRouteNamed('admin-dashboard') ? 'active' : '' }}">
                                <a href="{{ url('/dashboard') }}">Admin Dashboard</a></li>
                        @endif

                        <!-- If user is not an Admin - display this: -->
                        @if(\Auth::user()->usertype!=='admin')
                            <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"><a href="{{ url('/dashboard') }}">My Dashboard</a></li>
                            <li @if((Route::currentRouteNamed('profile'))||(Route::currentRouteNamed('editprofile'))) class="active"@endif>
                                <a href="{{ url('/profile') }}">My Profile</a></li>
                            <li class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}">
                                <a href="{{ url('/contact') }}">Contact</a></li>
                        @endif

                    @endif


                    
                    <!-- Show these links only if user is not logged in -->
                    @if (Auth::guest())
                        <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
                            <a href="{{ url('/dashboard') }}">My Dashboard</a></li>
                        <li><a href="{{ url('/profile') }}">My Profile</a></li>
                        <li class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}">
                            <a href="{{ url('/contact') }}">Contact</a></li>
                        <li class="{{ Request::path() == 'login' ? 'active' : '' }}"><a href="{{ url('/login') }}">Login</a></li>
                        <li @if((Request::path() == 'register/usertype')||(Request::path() == 'register/new')) class="active"@endif><a href="{{ url('/register/usertype') }}">Register</a></li>
                    @else
                    <!-- If user is logged in, display toggle menu instead of log in button -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle notranslate" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ ucwords(\Auth::user()->name) }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu user-dropdown" role="menu">
                                <!-- Don't display 'Edit Profile' if logged in as an Admin -->
                                @if(\Auth::user()->usertype!=='admin')
                                    <li><a href="{{ url('/profile/edit') }}"><i class="fa fa-btn fa-user"></i>Edit Profile</a></li>
                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif

                    <!-- Google Translate links -->
                    <li class="dropdown translation-links">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-globe"></span> Language <span class="caret"></span></a>

                        <ul class="dropdown-menu notranslate lang-dropdown" role="menu">
                          <li><a class="english en lang-btn" data-lang="English">English</a></li>
                          <li><a class="arabic ar lang-btn" data-lang="Arabic">Arabic &nbsp; &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;</a></li>
                          <li><a class="kurdish ku lang-btn" data-lang="Kurdish">Kurdish &nbsp; &#1603;&#1585;&#1583;&#1610;</a></li>
                        </ul>
                    </li>
                    <!-- /Google Translate links -->

                </ul>
            </div>
        </div>
    </nav>




<!-- Google Translate -->

<div id="google_translate_element"></div>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false},     'google_translate_element'); //remove the layout
  }
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js"></script> -->

<script type="text/javascript">
    
    //  $( "#term" ).autocomplete({
    //   source: "{{ url('search/autocomplete') }}",
    //   minLength: 1,
    //   select: function(event, ui) {
    //     $('#term').val(ui.item.value);
    //   }
    // });




</script>

<script type="text/javascript">
function triggerHtmlEvent(element, eventName)
{
    var event;
    if(document.createEvent) {
        event = document.createEvent('HTMLEvents');
        event.initEvent(eventName, true, true);
        element.dispatchEvent(event);
    }
    else {
    event = document.createEventObject();
        event.eventType = eventName;
        element.fireEvent('on' + event.eventType, event);
    }
}


 //link click handler
    var jq = $.noConflict();
 jq('.translation-links a').click(function(e)
{
    e.preventDefault();
    var lang = jq(this).data('lang');
    jq('#google_translate_element select option').each(function(){
    if(jq(this).text().indexOf(lang) > -1) {
        jq(this).parent().val(jq(this).val());
        var container = document.getElementById('google_translate_element');
        var select = container.getElementsByTagName('select')[0];
        triggerHtmlEvent(select, 'change');
    }
    });
});

</script>

<!-- Google translate -->




    @yield('content')



    <!-- JavaScripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script type="text/javascript" src="/js/bootstrap-filestyle.min.js"></script>

</body>
</html>
