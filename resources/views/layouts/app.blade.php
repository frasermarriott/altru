<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title class="notranslate">@yield('title') - Altru</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

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
                <a class="navbar-brand notranslate" href="{{ url('/') }}">
                    Altru
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
                            <li><a href="{{ url('/dashboard') }}">Admin Dashboard</a></li>
                        @endif

                        <!-- If user is not an Admin - display this: -->
                        @if(\Auth::user()->usertype!=='admin')
                            <li><a href="{{ url('/dashboard') }}">My Dashboard</a></li>
                            <li><a href="{{ url('/profile') }}">My Profile</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        @endif

                    @endif


                    
                    <!-- Show these links only if user is not logged in -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/dashboard') }}">My Dashboard</a></li>
                        <li><a href="{{ url('/profile') }}">My Profile</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register/usertype') }}">Register</a></li>
                    @else
                    <!-- If user is logged in, display toggle menu instead of log in button -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle notranslate" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ ucwords(\Auth::user()->name) }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu user-dropdown" role="menu">
                                <li><a href="{{ url('/profile/edit') }}"><i class="fa fa-btn fa-user"></i>Edit Profile</a></li>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


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

</body>
</html>
