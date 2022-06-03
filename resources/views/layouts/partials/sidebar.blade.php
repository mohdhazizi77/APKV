<header class="main-nav">

    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img
            class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt=""/>
        <div class="badge-bottom"><span class="badge badge-primary">ADMIN</span></div>
        <a href="user-profile"><h6 class="mt-3 f-14 f-w-600">Mohd Hazizi Bin Suhaibul</h6></a>
        <p class="mb-0 font-roboto">LARAVEL</p>
    </div>

    <nav>
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">


                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span>
                            <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav {{ prefixActive('/apkv') }}" href="{{route('/')}}">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav {{ prefixActive('/registration') }}"
                           href="{{ route('registration-index') }}"><i data-feather="grid"></i><span>Registration</span></a>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Setting</h6>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav {{ prefixActive('/system-configuration') }}"
                           href="{{ route('system-configuration-index') }}"><i data-feather="cpu"></i><span>System Configuration</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
