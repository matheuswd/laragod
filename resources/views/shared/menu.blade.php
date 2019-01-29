
<ul class="side-menu-list">

    <li class="{{ Request::is('home') ? 'orange-red opened' : 'blue' }}">
        <a href="{{ url('/home') }}">
            <i class="fa fa-home"></i>
            <span class="lbl">@lang('Home')</span>
        </a>
    </li>
    <li class="{{ Request::is('dashboard') ? 'orange-red opened' : 'blue' }}">
        <a href="{{ url('/dashboard') }}">
            <i class="fa fa-dashboard"></i>
            <span class="lbl">@lang('Dashboard')</span>
        </a>
    </li>

</ul>


@if (Request::user()->is_admin)

    <header class="side-menu-title">Admin</header>
    <ul class="side-menu-list">

        <li class="{{ Request::is('users*') ? 'orange-red opened' : 'blue' }}">
            <a href="{{ url('/users') }}">
                <i class="fa fa-group"></i>
                <span class="lbl">@lang('Users')</span>
            </a>
        </li>

    </ul>

@endif