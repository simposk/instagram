<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Instagram</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/users/{{Auth::user()->id}}">Profile</a></li>
                <li>
                    <a href="{{url('/logout')}}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Sign Out</a>
                    <form id="logout-form" action="{{url('/logout')}}" method="POST" style="display:none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
    </nav>