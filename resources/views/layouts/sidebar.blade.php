<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="{{ url('dashboard') }}"><img class="img-fluid for-light" src="{{ asset('assets') }}/images/logo/logo.png"
                    alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="fa fa-cog status_toggle middle sidebar-toggle"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ url('dashboard') }}"><img class="img-fluid"
                    src="{{ asset('assets') }}/images/logo/logo-icon1.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ url('dashboard') }}"><img class="img-fluid"
                                src="{{ asset('assets') }}/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <h6 class="lan-1">Menus</h6>
                    </li>
                    <li class="menu-box">
                        <ul>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                href="{{ route('contact.index') }}"><i data-feather="users"> </i><span>Kontak</span></a></li>
                            @if (Auth::user()->hasRole('Superadmin'))
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                    href="{{ route('user.index') }}"><i data-feather="users"> </i><span>User</span></a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
