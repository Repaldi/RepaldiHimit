<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>
<body>
<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
                Noble<span>UI</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Home</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
   
                

    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
            <div class="navbar-content">
                <form class="search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="font-weight-medium ml-1 mr-1">English</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="languageDropdown">
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ml-1"> English </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ml-1"> French </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ml-1"> German </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ml-1"> Portuguese </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ml-1"> Spanish </span></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-apps">
                        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="grid"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="appsDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">Web Apps</p>
                                <a href="javascript:;" class="text-muted">Edit</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="d-flex align-items-center apps">
                                    <a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
                                    <a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
                                    <a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
                                    <a href="pages/general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
                                </div>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-messages">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="mail"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messageDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">9 New Messages</p>
                                <a href="javascript:;" class="text-muted">Clear all</a>
                            </div>
                            <div class="dropdown-body">
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="https://via.placeholder.com/30x30" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Leonardo Payne</p>
                                            <p class="sub-text text-muted">2 min ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project status</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="https://via.placeholder.com/30x30" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Carl Henson</p>
                                            <p class="sub-text text-muted">30 min ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Client meeting</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="https://via.placeholder.com/30x30" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Jensen Combs</p>
                                            <p class="sub-text text-muted">1 hrs ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project updates</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="https://via.placeholder.com/30x30" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Amiah Burton</p>
                                            <p class="sub-text text-muted">2 hrs ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project deadline</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="https://via.placeholder.com/30x30" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Yaretzi Mayo</p>
                                            <p class="sub-text text-muted">5 hr ago</p>
                                        </div>
                                        <p class="sub-text text-muted">New record</p>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-notifications">
                        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="bell"></i>
                            <div class="indicator">
                                <div class="circle"></div>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                <a href="javascript:;" class="text-muted">Clear all</a>
                            </div>
                            <div class="dropdown-body">
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                    <div class="content">
                                        <p>New customer registered</p>
                                        <p class="sub-text text-muted">2 sec ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="gift"></i>
                                    </div>
                                    <div class="content">
                                        <p>New Order Recieved</p>
                                        <p class="sub-text text-muted">30 min ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="alert-circle"></i>
                                    </div>
                                    <div class="content">
                                        <p>Server Limit Reached!</p>
                                        <p class="sub-text text-muted">1 hrs ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="layers"></i>
                                    </div>
                                    <div class="content">
                                        <p>Apps are ready for update</p>
                                        <p class="sub-text text-muted">5 hrs ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="download"></i>
                                    </div>
                                    <div class="content">
                                        <p>Download completed</p>
                                        <p class="sub-text text-muted">6 hrs ago</p>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-profile">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://via.placeholder.com/30x30" alt="profile">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <img src="https://via.placeholder.com/80x80" alt="">
                                </div>
                                <div class="info text-center">
                                    <p class="name font-weight-bold mb-0">Amiah Burton</p>
                                    <p class="email text-muted mb-3">amiahburton@gmail.com</p>
                                </div>
                            </div>
                            <div class="dropdown-body">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a href="pages/general/profile.html" class="nav-link">
                                            <i data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link">
                                            <i data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link">
                                            <i data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link">
                                            <i data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-content">

            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                <div>
                    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Form</h4>
                            {{--                            <p class="card-description">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p>--}}
                            <form class="cmxform" method="POST" action="{{ route('post_store') }}">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input id="title" class="form-control" name="title" type="text" value="{{ $datas->title }}">
                                        <input id="id" class="form-control" name="id" type="hidden" value="{{ $datas->id }}">
                                        @if($errors->has('title'))
                                            <div class="error">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input id="author" class="form-control" name="author" type="text" value="{{ $datas->author }}">
                                        @if($errors->has('author'))
                                            <div class="error">{{ $errors->first('author') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="excerpt">Excerpt</label>
                                        <textarea id="maxlength-textarea" class="form-control" maxlength="100" rows="3" name="excerpt">{{ $datas->excerpt }}</textarea>
                                        @if($errors->has('excerpt'))
                                            <div class="error">{{ $errors->first('excerpt') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Content</label>
                                        <textarea id="maxlength-textarea" class="form-control" maxlength="100" rows="8" name="content">{{ $datas->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Published at</label>
                                        <input name="published_at" class="form-control datepicker" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" value="{{ $datas->published_at }}"/>
                                    </div>
                                    
                                    <button class="btn btn-warning text-white" type="submit" name="draft">Draft</button>
                                    <button class="btn btn-primary" type="submit">Publish</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- partial:partials/_footer.html -->
        <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
            <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
            <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
        </footer>
        <!-- partial -->

    </div>
</div>

<!-- core:js -->
<script src="{{asset('assets/vendors/core/core.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<!-- end plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/template.js')}}"></script>
<!-- endinject -->
<!-- custom js for this page -->
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="{{asset('assets/js/datepicker.js')}}"></script>
<script>
    $('.datepicker').datepicker();
</script>
<!-- end custom js for this page -->
</body>
</html>
