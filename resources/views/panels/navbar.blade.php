{{-- navabar  --}}
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu border border-left-0 border-top-0 border-right-0
@if(isset($configData['navbarType'])){{$configData['navbarClass']}} @endif" 
data-bgcolor="@if(isset($configData['navbarBgColor'])){{$configData['navbarBgColor']}}@endif">
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="navbar-collapse" id="navbar-mobile">
        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          @if (request()->is('sk-layout-1-column'))
          <ul class="nav navbar-nav nav-back">
            <li class="nav-item mobile-menu d-xl-none mr-auto">
              <a class="nav-link nav-menu-main hidden-xs font-small-3 d-flex align-items-center" href="{{asset('sk-layout-2-columns')}}">
                <i class="bx bx-left-arrow-alt"></i>Back
              </a>
            </li>
          </ul>
          @else
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu d-xl-none mr-auto">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                <i class="ficon bx bx-menu"></i>
              </a>
            </li>
          </ul>
          @endif
        </div>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-language nav-item">
            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
              <a class="dropdown-item" href="{{url('lang/en')}}" data-language="en">
                <i class="flag-icon flag-icon-us mr-50"></i> English
              </a>
              <a class="dropdown-item" href="{{url('lang/ru')}}" data-language="ru">
                <i class="flag-icon flag-icon-ru mr-50"></i> ??????????????
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
          <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
            <div class="search-input">
              <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
              <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="starter-list">
              <div class="search-input-close"><i class="bx bx-x"></i></div>
              <ul class="search-list"></ul>
            </div>
          </li>
          <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
              </li>
              <li class="scrollable-container media-list">
                <div class="d-flex justify-content-between cursor-pointer">
                  <div class="media d-flex align-items-center border-0">
                    <div class="media-left pr-0">
                      <div class="avatar mr-1 m-0"><img src="{{asset('images/portrait/small/avatar-s-16.jpg')}}" alt="avatar" height="39" width="39"></div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
            </ul>
          </li>
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none">
                @php
                    $full_name = Auth::user()->profile->name .' '. Auth::user()->profile->surname;
                    $username = Auth::user()->name;
                @endphp
                <span class="user-name">{{ $full_name }}</span>
                <span class="user-status text-success">{{ $username }}</span>
              </div>
              <span><img class="round" src="{{asset('images/profile//default.png')}}" alt="avatar" height="40" width="40"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"><i class="bx bx-power-off mr-50"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
