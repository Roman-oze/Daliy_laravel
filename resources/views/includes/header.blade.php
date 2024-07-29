<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('home') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo-sm.png') }}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo-sm.png') }}" alt="" height="24"> <span class="logo-txt">GARS</span>
                    </span>
                </a>

                <a href="{{ route('home') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo-sm.png') }}" alt=""
                            height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo-sm.png') }}" alt=""
                            height="24"> <span class="logo-txt">GARS</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3
                font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-dollar-sign text-dark"></i>
                    <span class="d-inline-block ms-1 fw-medium">Currency</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item currency-format" href="#million">In Million</a>
                    <a class="dropdown-item currency-format" href="#lakh">In Lakh</a>
                    <a class="dropdown-item currency-format" href="#figureInMillion">Figure In Million</a>
                    <a class="dropdown-item currency-format" href="#figureInLakh">Figure In Lakh</a>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item
                    right-bar-toggle me-2">
                    <i data-feather="settings" class="icon-lg"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item
                    bg-soft-light border-start border-end"
                    id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('images/user.png') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">
                        @if( auth()->user()->first_name )
                            {{ auth()->user()->first_name }}
                            @if( auth()->user()->last_name ) {{ auth()->user()->last_name }} @endif
                        @else
                            {{ auth()->user()->username }}
                        @endif
                    </span>
                    <i class="mdi mdi-chevron-down d-none
                        d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi
                            mdi-face-profile font-size-16
                            align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi
                            mdi-credit-card-outline font-size-16
                            align-middle me-1"></i> Billing</a>
                    <a class="dropdown-item" href="#"><i class="mdi
                            mdi-account-settings font-size-16
                            align-middle me-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mdi
                            mdi-lock font-size-16 align-middle
                            me-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>
