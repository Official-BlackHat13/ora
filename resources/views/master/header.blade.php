<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu mt-2" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="{{url('dashboard')}}">
                <img class="img-fluid logo-img" src="{{url('public')}}/files/assets/images/logo.png" />
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                @if(Auth::user()->role!=0)
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                        </div>
                    </div>
                </li>
                @endif
                <li>
                    <a href="#!"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                        data-cf-modified-e4b7d3e32dd9a4cd85517089-="">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
                @if (\Session::has('success'))
                    <li class="alert alert-success">{!! \Session::get('success') !!}</li>
                @endif
                @if (\Session::has('warning'))
                    <li class="alert alert-warning">{!! \Session::get('warning') !!}</li>
                @endif
            </ul>
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user p-1 border btn btn-warning"> </i> <span class="p-1">{{ @Auth::user()->name }}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                            data-dropdown-out="fadeOut">
                            <!-- <li>
                                <a href="#">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li> -->
                            <li>
                                <a href="#">
                                    <span class="feather icon-user change"> Change Password </span>
                                </a>
                            </li>
							<li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="feather icon-log-out"></i> {{ __('Logout') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="showChat_inner">
    <div class="media chat-inner-header">
        <a class="back_chatBox">
            <i class="feather icon-chevron-left"></i> Josephin Doe
        </a>
    </div>
    <div class="media chat-messages">
        <a class="media-left photo-table" href="#!">
            <img class="media-object img-radius img-radius m-t-5" src="{{url('public')}}/files/assets/images/avatar-3.jpg"
                alt="Generic placeholder image">
        </a>
        <div class="media-body chat-menu-content">
            <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
    </div>
    <div class="media chat-messages">
        <div class="media-body chat-menu-reply">
            <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media-right photo-table">
            <a href="#!">
                <img class="media-object img-radius img-radius m-t-5" src="{{url('public')}}/files/assets/images/avatar-4.jpg"
                    alt="Generic placeholder image">
            </a>
        </div>
    </div>
    <div class="chat-reply-box p-b-20">
        <div class="right-icon-control">
            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
            <div class="form-icon">
                <i class="feather icon-navigation"></i>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@include('master.change_password_modal')