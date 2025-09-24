<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/orbiter/html/rtl-light-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Mar 2025 11:47:30 GMT -->
@include('panel.layouts.header')
<body class="vertical-layout">
<!-- Start Infobar Setting Sidebar -->
<div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
    <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
        <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
    </div>
    <div class="infobar-settings-sidebar-body">
        <div class="custom-mode-setting">
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Payment Reminders</h6></div>
                <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-first" checked /></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Stock Updates</h6></div>
                <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-second" checked /></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Open for New Products</h6></div>
                <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-third" /></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Enable SMS</h6></div>
                <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Show Map</h6></div>
                <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-sixth" /></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">e-Statement</h6></div>
                <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
            </div>
            <div class="row align-items-center">
                <div class="col-8"><h6 class="mb-0">Monthly Report</h6></div>
                <div class="col-4 text-left"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
            </div>
        </div>
    </div>
</div>
<div class="infobar-settings-sidebar-overlay"></div>
<!-- End Infobar Setting Sidebar -->
<!-- Start Containerbar -->
<div id="containerbar">
    <!-- Start Leftbar -->
@include('panel.layouts.sidebar')
    <!-- End Leftbar -->
    <!-- Start Rightbar -->
    <div class="rightbar">
        <!-- Start Topbar Mobile -->
        <div class="topbar-mobile">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mobile-logobar">
                        <a href="index.html" class="mobile-logo"><img src="{{asset('panel/assets/images/logo.svg')}}" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="mobile-togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="topbar-toggle-icon">
                                    <a class="topbar-toggle-hamburger" href="javascript:void();">
                                        <img src="assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                        <img src="assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class="topbar">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="settingbar">
                                    <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                        <img src="assets/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="notifybar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/svg-icon/notifications.svg" class="img-fluid" alt="notifications">
                                            <span class="live-icon"></span></a>
                                        <div class="dropdown-menu" aria-labelledby="notoficationlink">
                                            <div class="notification-dropdown-title">
                                                <h4>Notifications</h4>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-primary-inverse"><i class="feather icon-dollar-sign"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">$135 received</h5>
                                                        <p><span class="timing">Today, 10:45 AM</span></p>
                                                    </div>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-success-inverse"><i class="feather icon-file"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">Project X prototype approved</h5>
                                                        <p><span class="timing">Yesterday, 01:40 PM</span></p>
                                                    </div>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-danger-inverse"><i class="feather icon-eye"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">John requested to view wireframe</h5>
                                                        <p><span class="timing">3 Sep 2019, 05:22 PM</span></p>
                                                    </div>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-warning-inverse"><i class="feather icon-package"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">Sports shoes are out of stock</h5>
                                                        <p><span class="timing">15 Sep 2019, 02:55 PM</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="languagebar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="languagelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag flag-icon-us flag-icon-squared"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="languagelink">
                                            <a class="dropdown-item" href="#"><i class="flag flag-icon-us flag-icon-squared"></i>English</a>
                                            <a class="dropdown-item" href="#"><i class="flag flag-icon-de flag-icon-squared"></i>German</a>
                                            <a class="dropdown-item" href="#"><i class="flag flag-icon-bl flag-icon-squared"></i>France</a>
                                            <a class="dropdown-item" href="#"><i class="flag flag-icon-ru flag-icon-squared"></i>Russian</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="profilebar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                        <div class="dropdown-menu" aria-labelledby="profilelink">
                                            <div class="dropdown-item">
                                                <div class="profilename">
                                                    <h5>John Doe</h5>
                                                </div>
                                            </div>
                                            <div class="userbox">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="user">My Profile</a>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img src="assets/images/svg-icon/email.svg" class="img-fluid" alt="email">Email</a>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img src="assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End Topbar -->
        <!-- Start Breadcrumbbar -->
        <div class="breadcrumbbar">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-8">
                    <h4 class="page-title">CRM</h4>
                    <div class="breadcrumb-list">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CRM</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="widgetbar">
                        <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbbar -->
        <!-- Start Contentbar -->
        <div class="contentbar">
            <!-- Start row -->
            @yield('content')
            <!-- End row -->
        </div>
        <!-- End Contentbar -->
        <!-- Start Footerbar -->
        <div class="footerbar">
            <footer class="footer">
                <p class="mb-0">پروژه کلاس لاراول </p>
            </footer>
        </div>
        <!-- End Footerbar -->
    </div>

    <!-- End Rightbar -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/vertical-menu.js')}}"></script>
<!-- Switchery js -->
<script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
<!-- Apex js -->
<script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexcharts/irregular-data-series.js')}}"></script>
<!-- Slick js -->
<script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
<!-- Custom Dashboard js -->
<script src="{{asset('assets/js/custom/custom-dashboard.js')}}"></script>
<!-- Core js -->
<script src="{{asset('assets/js/core.js')}}"></script>
<!-- End js -->
</body>

<!-- Mirrored from themesbox.in/admin-templates/orbiter/html/rtl-light-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Mar 2025 11:48:13 GMT -->
</html>
