<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Office Asset Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<link href="{{asset('adminindex/main.css')}}" rel="stylesheet">
<link href="{{asset('adminindex/style.css')}}" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('adminindex/app.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
{{-- index style --}}
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
@yield('style')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src mb-4"><span  style="font-size: 15px;font-style: italic;font-weight: bold;">Office Asset Management</span></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <i class="fa fa-user" style="font-size: 20px;color: grey;"></i>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Info</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Logout</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
                </div>
            </div>          
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div> 
                    {{--Admin  --}}
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Employee</li>
                                <li>
                                 <a href="#" class="textstyle">
                                     <i class="metismenu-icon pe-7s">
                                         <i class="fas fa-user" style="font-size: 16px;"></i></i>
                                         Leaves
                                         <i class="fa fa-angle-down ml-5 opacity-8"></i>
                                     </a>
                                     <ul>
                                         <li>
                                             <a href="{{url("/leaveRequestForm")}}" class="textstyle">
                                                 Leave Request
                                             </a>
                                         </li>
                                         <li>
                                            <a href="{{url("/leaveRecord")}}" class="textstyle">
                                                <i class="metismenu-icon">
                                                </i>Leave Record
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading mt-4">Assets</li>
                                <li>
                                 <a href="#" class="textstyle">
                                     <i class="metismenu-icon pe-7s"><i class="fas fa-list" style="font-size: 16px;"></i></i>
                                     <span class="ml-3">Assets</span>
                                     <i class="fa fa-angle-down ml-5 opacity-8"></i>
                                 </a>
                                 <ul>
                                     <li>
                                        <a href="#" class="textstyle">
                                             <i class="metismenu-icon">
                                             </i>Asset Lists
                                        </a>
                                     </li>
                                     <li>
                                        <a href="#" class="textstyle">
                                            <i class="metismenu-icon">
                                            </i>Asset Create
                                        </a>
                                     </li>
                                 </ul>
                             </li>
                             <li class="app-sidebar__heading mt-4">Announcements</li>
                             <li>
                                 <a href="#" class="textstyle">
                                     <i class="metismenu-icon pe-7s"> <i class="fas fa-scroll" style="font-size: 16px;"></i></i>
                                     Announcements
                                     <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                 </a>
                                 <ul>
                                     <li>
                                         <a href="#" class="textstyle">
                                            <i class="metismenu-icon">
                                            </i>Announcement Lists
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" class="textstyle">
                                            <i class="metismenu-icon">
                                            </i>Announcement Create
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>  

             {{-- Leader/Sensei   --}}
             {{-- <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Leave</li>
                        <li>
                         <a href="#" class="textstyle">
                             <i class="metismenu-icon pe-7s">
                                 <i class="fas fa-user" style="font-size: 16px;"></i></i>
                                 Leave
                                 <i class="fa fa-angle-down ml-5 opacity-8"></i>
                             </a>
                             <ul>
                                 <li>
                                     <a href="#" class="textstyle">
                                         View Leave Request
                                     </a>
                                 </li>
                                 <li>
                                    <a href="#" class="textstyle">
                                        <i class="metismenu-icon">
                                        </i>Approve or Deny Leave Request
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading mt-4">Attendence</li>
                        <li>
                         <a href="#" class="textstyle">
                             <i class="metismenu-icon pe-7s"><i class="fas fa-list" style="font-size: 16px;"></i></i>
                             <span class="ml-3">Attendence</span>
                             <i class="fa fa-angle-down ml-5 opacity-8"></i>
                         </a>
                         <ul>
                             <li>
                                 <a href="#" class="textstyle">
                                     <i class="metismenu-icon">
                                     </i>View Attendence Record
                                 </a>
                             </li>
                         </ul>
                         <li class="app-sidebar__heading mt-4">Announcements</li>
                         <li>
                             <a href="#" class="textstyle">
                                 <i class="metismenu-icon pe-7s"> <i class="fas fa-scroll" style="font-size: 16px;"></i></i>
                                 Announcements
                                 <i class="fa fa-angle-down ml-2 opacity-8"></i>
                             </a>
                             <ul>
                                 <li>
                                     <a href="#" class="textstyle">
                                         <i class="metismenu-icon">
                                         </i>Announcement Lists
                                     </a>
                                 </li>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div> --}}

             {{-- Employee  --}}
             {{-- <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Leave</li>
                        <li>
                         <a href="#" class="textstyle">
                             <i class="metismenu-icon pe-7s">
                                 <i class="fas fa-user" style="font-size: 16px;"></i></i>
                                 Leave
                                 <i class="fa fa-angle-down ml-5 opacity-8"></i>
                             </a>
                             <ul>
                                 <li>
                                     <a href="#" class="textstyle">
                                         Request Leave
                                     </a>
                                 </li>
                                 <li>
                                    <a href="#" class="textstyle">
                                        <i class="metismenu-icon">
                                        </i>View Leave List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading mt-4">Attendence</li>
                        <li>
                         <a href="#" class="textstyle">
                             <i class="metismenu-icon pe-7s"><i class="fas fa-list" style="font-size: 16px;"></i></i>
                             <span class="ml-3">Attendence</span>
                             <i class="fa fa-angle-down ml-5 opacity-8"></i>
                         </a>
                         <ul>
                             <li>
                                 <a href="#" class="textstyle">
                                     <i class="metismenu-icon">
                                     </i>Report Daily Attendence
                                 </a>
                             </li>
                         </ul>
                         <li class="app-sidebar__heading mt-4">Announcements</li>
                         <li>
                             <a href="#" class="textstyle">
                                 <i class="metismenu-icon pe-7s"> <i class="fas fa-scroll" style="font-size: 16px;"></i></i>
                                 Announcements
                                 <i class="fa fa-angle-down ml-2 opacity-8"></i>
                             </a>
                             <ul>
                                 <li>
                                     <a href="#" class="textstyle">
                                         <i class="metismenu-icon">
                                         </i>Announcement Lists
                                     </a>
                                 </li>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div> --}}
             {{--content  --}}
            <div class="app-main__outer">
                <div class="app-main__inner">
                 @yield('content')
            </div>
         </div>
         
     </div>
 </div>
 <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
 <script type="text/javascript" src="{{asset('adminindex/scripts/main.js')}}"></script>
 {{-- index script --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="js/scripts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
 @yield('script')
</body>
</html>
