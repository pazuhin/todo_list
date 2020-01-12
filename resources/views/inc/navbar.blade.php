<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Todo list</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="width: 100%;display: flex;">
            <li class="{{Request::is('todo') ? 'active' : ''}}">
                <a class="nav-link" href="/todo">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="{{Request::is('todo/create') ? 'active' : ''}}">
                <a class="nav-link " href="/todo/create">Create</a>
            </li>
            <li style="display: flex;margin-left: auto" >
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>

