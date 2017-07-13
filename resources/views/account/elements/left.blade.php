<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
            <i class="fa fa-remove"></i>
        </a>

        <img src="{!! asset('img/user-icon.jpg') !!}" style="width:45%;" class="w3-round"><br><br>
        <h4><b>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</b></h4>
    </div>
    <div class="w3-bar-block">
        <a href="{{ route('accountIndex') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-tachometer fa-fw w3-margin-right"></i>DASHBOARD</a>
        <a href="{{ route('accountChange') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cogs fa-fw w3-margin-right"></i>ACCOUNT</a>
        <a href="{{ route('accountAbout') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            class="w3-bar-item w3-button w3-padding">
            <i class="fa fa-envelope fa-fw w3-margin-right"></i>LOGOUT
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <div class="w3-panel w3-large">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
