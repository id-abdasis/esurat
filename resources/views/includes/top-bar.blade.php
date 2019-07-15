<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">



        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                <span class="badge badge-danger rounded-circle noti-icon-badge">{{$notif->count()}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                    </h5>
                </div>

                <div class="slimscroll noti-scroll">

                    <!-- item-->
                    @foreach($notif as $surat)
                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                        <div class="notify-icon">
                            <div class="rounded-logo " style="border-radius: 50%; background: grey;">{{$surat->id}}</div>
                        </div>
                        <p class="notify-details">{{$surat->perihal}}</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Hi, How are you? What about our next meeting</small>
                        </p>
                    </a>
                    @endforeach
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    View all
                    <i class="fi-arrow-right"></i>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{url('/')}}/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                                {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i>
                            </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>Lock Screen</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>



    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center">
{{--                        <span class="logo-lg">--}}
{{--                            <img src="{{url('/')}}/images/logo-light.png" alt="" height="18">--}}
{{--                            <!-- <span class="logo-lg-text-light">UBold</span> -->--}}
{{--                        </span>--}}
{{--            <span class="logo-sm">--}}
{{--                            <!-- <span class="logo-sm-text-dark">U</span> -->--}}
{{--                            <img src="{{url('/')}}/images/logo-sm.png" alt="" height="24">--}}
{{--                        </span>--}}
            <h1 class="text-light mt-2">e-Surat</h1>
        </a>
    </div>

</div>
