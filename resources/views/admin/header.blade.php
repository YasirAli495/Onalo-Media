<!DOCTYPE html><!--
    * CoreUI - Free Bootstrap Admin Template
    * @version v5.1.1
    * @link https://coreui.io/product/free-bootstrap-admin-template/
    * Copyright (c) 2024 creativeLabs Łukasz Holeczek
    * Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
    --><html lang="en"><head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>Onalo Media Admin Panel</title>
        
        <meta name="theme-color" content="#ffffff">
        <!-- Vendors styles-->
       <!-- Stylesheets -->
      
  <link rel="stylesheet" href="{{ asset('admincss/simplebar.css') }}">
  <link rel="stylesheet" href="{{ asset('admincss/simplebar_1.css') }}">
  <!-- Main styles for this application -->
  <link rel="stylesheet" href="{{ asset('admincss/style.css') }}">
  <!-- Example styles (remove in production) -->
  <link rel="stylesheet" href="{{ asset('admincss/examples.css') }}">
  
  <!-- Scripts -->
  <script src="{{ asset('adminjs/config.js') }}"></script>
  <script src="{{ asset('adminjs/color-modes.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('admincss/coreui-chartjs.css') }}">
  
      </head>
      <body>
        <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
          <div class="sidebar-header border-bottom">
              <div class="sidebar-brand">
                  <h2>Onalo Media</h2>
                  <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
                      <use xlink:href="{{ asset('adminimages/coreui.svg#signet') }}"></use>
                  </svg>
              </div>
              <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" 
                  onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
              </button>
          </div>
      
          <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.dashboard') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-speedometer') }}"></use>
                      </svg> Dashboard
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('adminimages/free.svg#cil-home') }}"></use>
                    </svg> Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.about') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('adminimages/free.svg#cil-info') }}"></use>
                    </svg> About
                </a>
            </li>
      
              <li class="nav-group">
                  <a class="nav-link nav-group-toggle" href="#">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-briefcase') }}"></use>
                      </svg> Services
                  </a>
                  <ul class="nav-group-items compact">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.digitalmedia') }}">
                              <span class="nav-icon"><span class="nav-icon-bullet"></span></span> Digital Media
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.printmedia') }}">
                              <span class="nav-icon"><span class="nav-icon-bullet"></span></span> Print Media
                              
                          </a>
                      </li>
                  </ul>
              </li>
      
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.blogs.blog') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-notes') }}"></use>
                      </svg> Blogs
                  </a>
              </li>
      
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.contact.index') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-envelope-open') }}"></use>
                      </svg> Contact Info
                  </a>
              </li>
      
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.messages') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-envelope-open') }}"></use>
                      </svg> Messages
                  </a>
              </li>
      
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('teams.index') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-user') }}"></use>
                      </svg> Team Members
                  </a>
              </li>


              <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.jobs.index') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-briefcase') }}"></use>
                      </svg> Jobs
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('jobs.applications') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('adminimages/free.svg#cil-notes') }}"></use>
                    </svg> Jobs Applications
                </a>
            </li>
      
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-user-plus') }}"></use>
                      </svg> Register
                  </a>
              </li>
      
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-user') }}"></use>
                      </svg> Login
                  </a>
              </li>
      
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}">
                      <svg class="nav-icon">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-account-logout') }}"></use>
                      </svg> Logout
                  </a>
              </li>
          </ul>
      
          <div class="sidebar-footer border-top d-none d-md-flex">
              <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
          </div>
      </div>
      
      <div class="wrapper d-flex flex-column min-vh-100">
          <header class="header header-sticky p-0 mb-4">
              <div class="container-fluid border-bottom px-4">
                  <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
                      <svg class="icon icon-lg">
                          <use xlink:href="{{ asset('adminimages/free.svg#cil-menu') }}"></use>
                      </svg>
                  </button>
                  <ul class="header-nav d-none d-lg-flex">
                      <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                  </ul>
                  <ul class="header-nav ms-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              <svg class="icon icon-lg">
                                  <use xlink:href="{{ asset('adminimages/free.svg#cil-bell') }}"></use>
                              </svg>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              <svg class="icon icon-lg">
                                  <use xlink:href="{{ asset('adminimages/free.svg#cil-envelope-open') }}"></use>
                              </svg>
                          </a>
                      </li>
                  </ul>
                  <ul class="header-nav">
                      <li class="nav-item py-1">
                          <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
                      </li>
                      <li class="nav-item dropdown">
                          <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                              <svg class="icon icon-lg theme-icon-active">
                                  <use xlink:href="{{ asset('adminimages/free.svg#cil-contrast') }}"></use>
                              </svg>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                              <li>
                                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                                      <svg class="icon icon-lg me-3">
                                          <use xlink:href="{{ asset('adminimages/free.svg#cil-sun') }}"></use>
                                      </svg> Light
                                  </button>
                              </li>
                              <li>
                                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                                      <svg class="icon icon-lg me-3">
                                          <use xlink:href="{{ asset('adminimages/free.svg#cil-moon') }}"></use>
                                      </svg> Dark
                                  </button>
                              </li>
                              <li>
                                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                                      <svg class="icon icon-lg me-3">
                                          <use xlink:href="{{ asset('adminimages/free.svg#cil-contrast') }}"></use>
                                      </svg> Auto
                                  </button>
                              </li>
                          </ul>
                      </li>
      
                <li class="nav-item py-1">
                  <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md">
                      <span class="avatar-initials">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div>
                    
                    <!-- User's name and email -->
                    <a class="dropdown-item" href="#">
                      <span class="fw-semibold">{{ Auth::user()->name }}</span><br>
                      <span class="text-muted">{{ Auth::user()->email }}</span>
                    </a>
                
                    <div class="dropdown-divider"></div>
                    
                    <!-- Logout -->
                    <a class="dropdown-item" href="{{ route('logout') }}">
                      <svg class="icon me-2">
                        <use xlink:href="{{ asset('adminimages/free.svg#cil-account-logout') }}"></use>
                      </svg> Logout
                    </a>
                    
                  </div>
                </li>
                
              </ul>
            </div>
            <div class="container-fluid px-4">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0">
                  <li class="breadcrumb-item"><a href="admin">Home</a>
                  </li>
                  <li class="breadcrumb-item active"><span>Dashboard</span>
                  </li>
                </ol>
              </nav>
            </div>
          </header>

        