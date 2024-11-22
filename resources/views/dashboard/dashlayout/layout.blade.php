<!DOCTYPE html>
<html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            Purple Admin
        </title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/font-awesome/css/font-awesome.min.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{ asset('dashboard/assets/images/favicon.png') }}"
        />
    </head>
    
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="{{ asset('dashboard/assets/images/logo.svg') }}" alt="logo"
                        />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="{{ asset('dashboard/assets/images/logo-mini.svg') }}" alt="logo"
                        />
                    </a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                    data-toggle="minimize">
                        <span class="mdi mdi-menu">
                        </span>
                    </button>
                    <div class="search-field d-none d-md-block">
                        <form class="d-flex align-items-center h-100" action="#">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <i class="input-group-text border-0 mdi mdi-magnify">
                                    </i>
                                </div>
                                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                                <div class="nav-profile-img">
                                    <img src="{{ asset('dashboard/assets/images/faces/face1.jpg') }}" alt="image">
                                    <span class="availability-status online">
                                    </span>
                                </div>
                                <div class="nav-profile-text">
                                    <p class="mb-1 text-black">
                                        David Greymaax
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="mdi mdi-cached me-2 text-success">
                                    </i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item" href="#">
                                    <i class="mdi mdi-logout me-2 text-primary">
                                    </i>
                                    Signout
                                </a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block full-screen-link">
                            <a class="nav-link">
                                <i class="mdi mdi-fullscreen" id="fullscreen-button">
                                </i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown"
                            href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email-outline">
                                </i>
                                <span class="count-symbol bg-warning">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">
                                    Messages
                                </h6>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('dashboard/assets/images/faces/face4.jpg') }}" alt="image"
                                        class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">
                                            Mark send you a message
                                        </h6>
                                        <p class="text-gray mb-0">
                                            1 Minutes ago
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('dashboard/assets/images/faces/face2.jpg') }}" alt="image"
                                        class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">
                                            Cregh send you a message
                                        </h6>
                                        <p class="text-gray mb-0">
                                            15 Minutes ago
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('dashboard/assets/images/faces/face3.jpg') }}" alt="image"
                                        class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">
                                            Profile picture updated
                                        </h6>
                                        <p class="text-gray mb-0">
                                            18 Minutes ago
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <h6 class="p-3 mb-0 text-center">
                                    4 new messages
                                </h6>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown"
                            href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-bell-outline">
                                </i>
                                <span class="count-symbol bg-danger">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">
                                    Notifications
                                </h6>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-calendar">
                                            </i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-1">
                                            Event today
                                        </h6>
                                        <p class="text-gray ellipsis mb-0">
                                            Just a reminder that you have an event today
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-cog">
                                            </i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-1">
                                            Settings
                                        </h6>
                                        <p class="text-gray ellipsis mb-0">
                                            Update dashboard
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-link-variant">
                                            </i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-1">
                                            Launch Admin
                                        </h6>
                                        <p class="text-gray ellipsis mb-0">
                                            New admin wow!
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <h6 class="p-3 mb-0 text-center">
                                    See all notifications
                                </h6>
                            </div>
                        </li>
                        <li class="nav-item nav-logout d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-power">
                                </i>
                            </a>
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-format-line-spacing">
                                </i>
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                    type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu">
                        </span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <a href="#" class="nav-link">
                                <div class="nav-profile-image">
                                    <img src="{{ asset('dashboard/assets/images/faces/face1.jpg') }}" alt="profile"
                                    />
                                    <span class="login-status online">
                                    </span>
                                    <!--change to offline or busy as needed-->
                                </div>
                                <div class="nav-profile-text d-flex flex-column">
                                    <span class="font-weight-bold mb-2">
                                        David Grey. H
                                    </span>
                                    <span class="text-secondary text-small">
                                        Project Manager
                                    </span>
                                </div>
                                <i class="mdi mdi-bookmark-check text-success nav-profile-badge">
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('echoadmin') }}">
                                <span class="menu-title">
                                    Dashboard
                                </span>
                                <i class="mdi mdi-home menu-icon">
                                </i>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                                <span class="menu-title">
                                    Category
                                </span>
                                <i class="menu-arrow">
                                </i>
                                <i class="mdi mdi-crosshairs-gps menu-icon">
                                </i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('addcategory') }}">
                                            Add Category
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('allcategory') }}">
                                            All Category
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>


                        {{-- subcategory --}}

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#subcategory" aria-expanded="false"
                            aria-controls="subcategory">
                                <span class="menu-title">
                                    Sub Category
                                </span>
                                <i class="menu-arrow">
                                </i>
                                <i class="mdi mdi-crosshairs-gps menu-icon">
                                </i>
                            </a>
                            <div class="collapse" id="subcategory">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('addsubcategory') }}">
                                            Add Sub Category
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('allsubcategory') }}">
                                            All Sub Category
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        {{-- end of subcategory --}}


                        {{-- Post Menu --}}

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#posts" aria-expanded="false"
                            aria-controls="posts">
                                <span class="menu-title">
                                    Posts
                                </span>
                                <i class="menu-arrow">
                                </i>
                                <i class="mdi mdi-crosshairs-gps menu-icon">
                                </i>
                            </a>
                            <div class="collapse" id="posts">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('add_new_post_form') }}">
                                            Add Post
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('all_posts') }}">
                                            All Posts
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        {{-- end of Post Menu --}}
                        
                       
                    </ul>
                </nav>
                <!-- partial -->
                {{-- Main Panel  start--}}
                <div class="main-panel">

                    {{-- actual section content will be chagne --}}
                    
                    @yield('content')

                    {{-- actual section content will be change --}}

                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                                Copyright © 2023
                                <a href="https://www.bootstrapdash.com/" target="_blank">
                                    BootstrapDash
                                </a>
                                . All rights reserved.
                            </span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                                Hand-crafted & made with
                                <i class="mdi mdi-heart text-danger">
                                </i>
                            </span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main content end ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('dashboard/assets/vendors/js/vendor.bundle.base.js') }}">
        </script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('dashboard/assets/vendors/chart.js/chart.umd.js') }}">
        </script>
        <script src="{{ asset('dashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}">
        </script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('dashboard/assets/js/off-canvas.js') }}">
        </script>
        <script src="{{ asset('dashboard/assets/js/misc.js') }}">
        </script>
        <script src="{{ asset('dashboard/assets/js/settings.js') }}">
        </script>
        <script src="{{ asset('dashboard/assets/js/todolist.js') }}">
        </script>
        <script src="{{ asset('dashboard/assets/js/jquery.cookie.js') }}">
        </script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="dashboard/assets/js/dashboard.js">
        </script>

        @stack('myjscript')

        <!-- End custom js for this page -->
    </body>

</html>