
<div class="container-fluid">

    <a href="{{ url('/') }}" class="site-logo">
        <img class="hidden-md-down" src="{{ asset('img/logo-2.png') }}" alt="">
        <img class="hidden-lg-down" src="{{ asset('img/logo-2-mob.png') }}" alt="">
    </a>

    <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
        <span>toggle menu</span>
    </button>

    <button class="hamburger hamburger-htla">
        <span>toggle menu</span>
    </button>

    <div class="site-header-content">
        <div class="site-header-content-in">

            <div class="site-header-shown">

                <div class="dropdown user-menu">
                    <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        @avatar([ 'path' => Auth::user()->meta->avatar ]) @endavatar
                        
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">

                        <a class="dropdown-item" href="{{ url('/profile') }}">
                            <i class="font-icon fa fa-user"></i> @lang('My Profile')
                        </a>
                        <a class="dropdown-item" href="{{ url('/help') }}">
                            <i class="font-icon fa fa-question-circle"></i> @lang('Help')
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            <i class="font-icon fa fa-sign-out"></i> @lang('Logout')
                        </a>

                    </div>
                    <form id="frm-logout" action="{{ url('/logout') }}" method="post">
                        @csrf
                    </form>
                </div>

            </div>

        </div>
    </div>
    
</div>
