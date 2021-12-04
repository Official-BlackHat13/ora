{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
<style>
    body {
        background: #f3f3f3;
    }

    .card.user-card {
        border-top: none;
        -webkit-box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.05), 0 -2px 1px -2px rgba(0, 0, 0, 0.04), 0 0 0 -1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.05), 0 -2px 1px -2px rgba(0, 0, 0, 0.04), 0 0 0 -1px rgba(0, 0, 0, 0.05);
        -webkit-transition: all 150ms linear;
        transition: all 150ms linear;
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
        box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
        border: none;
        margin-bottom: 30px;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .card .card-header {
        background-color: transparent;
        border-bottom: none;
        padding: 25px;
    }

    .card .card-header h5 {
        margin-bottom: 0;
        color: #222;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        margin-right: 10px;
        line-height: 1.4;
    }
    button {
        background-color: #0275d8;
        color: #ffffff;
        border: none;
        padding: 20px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    .card .card-header+.card-block,
    .card .card-header+.card-block-big {
        padding-top: 0;
    }

    .user-card .card-block {
        text-align: center;
    }

    .card .card-block {
        padding: 25px;
    }

    .user-card .card-block .user-image {
        position: relative;
        margin: 0 auto;
        display: inline-block;
        padding: 5px;
        width: 110px;
        height: 110px;
    }

    .user-card .card-block .user-image img {
        z-index: 20;
        position: absolute;
        top: 5px;
        left: 5px;
        width: 100px;
        height: 100px;
    }

    .img-radius {
        border-radius: 50%;
    }

    .f-w-600 {
        font-weight: 600;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .m-t-25 {
        margin-top: 25px;
    }

    .m-t-15 {
        margin-top: 15px;
    }

    .card .card-block p {
        line-height: 1.4;
    }

    .text-muted {
        color: #919aa3 !important;
    }

    .user-card .card-block .activity-leval li.active {
        background-color: #2ed8b6;
    }

    .user-card .card-block .activity-leval li {
        display: inline-block;
        width: 15%;
        height: 4px;
        margin: 0 3px;
        background-color: #ccc;
    }

    .user-card .card-block .counter-block {
        color: #fff;
    }

    .bg-c-blue {
        background: linear-gradient(45deg, #4099ff, #73b4ff);
    }

    .bg-c-green {
        background: linear-gradient(45deg, #2ed8b6, #59e0c5);
    }

    .bg-c-yellow {
        background: linear-gradient(45deg, #FFB64D, #ffcb80);
    }

    .bg-c-pink {
        background: linear-gradient(45deg, #FF5370, #ff869a);
    }

    .m-t-10 {
        margin-top: 10px;
    }

    .p-20 {
        padding: 20px;
    }

    .user-card .card-block .user-social-link i {
        font-size: 30px;
    }

    .text-facebook {
        color: #3B5997;
    }

    .text-twitter {
        color: #42C0FB;
    }

    .text-dribbble {
        color: #EC4A89;
    }

    .user-card .card-block .user-image:before {
        bottom: 0;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
    }

    .user-card .card-block .user-image:after,
    .user-card .card-block .user-image:before {
        content: "";
        width: 100%;
        height: 48%;
        border: 2px solid #4099ff;
        position: absolute;
        left: 0;
        z-index: 10;
    }

    .user-card .card-block .user-image:after {
        top: 0;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
    }

    .user-card .card-block .user-image:after,
    .user-card .card-block .user-image:before {
        content: "";
        width: 100%;
        height: 48%;
        border: 2px solid #4099ff;
        position: absolute;
        left: 0;
        z-index: 10;
    }

    /* #profileupdate {
        border-radius: 5px;
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    } */

    /* 
     #profile_card {
    height: 300px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 230px;
    margin: auto;
    text-align: center;
    background-color: whitesmoke;
    
  } */

    .title {
        color: grey;
        font-size: 14px;
    }

  
  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }  */

</style>
<nav class="pcoded-navbar">

    <div class="pcoded-inner-navbar main-menu">

        <!-- <div class="pcoded-navigatio-lavel">Navigation</div> -->
        <ul class="pcoded-item pcoded-left-item">
            {{-- card --}}
            @php
                @$userinfo = json_decode(Auth::user()->user_info);
            @endphp
            @if (Auth::user()->login_count)
                <li>
                    <!------profile------>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card user-card">
                                    <div class="card-block">
                                        <div class="user-image">
                                            <?php
                                            // print_r($userinfo->photo_card);
                                            ?>
                                            <img src="{{ asset('public/upload_document') }}/{{ Auth::user()->id }}/userdocument/{{ isset($userinfo->photo_card_new) && !empty($userinfo->photo_card_new) ? $userinfo->photo_card_new : '' }}"
                                                class="img-radius" alt="{{ Auth::user()->name }}">
                                        </div>
                                        <h6 class="f-w-600 m-t-25 m-b-10">{{ Auth::user()->name }}</h6>
                                        <p class="title">
                                            {{ isset($userinfo->highest_qualification) ? $userinfo->highest_qualification : '' }}
                                            || {{ isset($userinfo->top_3_skills) ? $userinfo->top_3_skills : '' }}</p>
                                        {{-- <p class="text-muted">Active | Male | Born 23.05.1992</p> --}}
                                        

                                        <p class="title">
                                            {{ isset($userinfo->No_of_years_of_exp) ? $userinfo->No_of_years_of_exp : '' }}
                                            years of experience
                                        </p>
                                        <hr>

                                        <p class="title" style="font-size: 12px; " !important>Your profile is
                                            {{ Auth::user()->profile_per }}% complete!</p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar"
                                                aria-valuenow='{{ Auth::user()->profile_per }}' aria-valuemin="10" aria-valuemax="100"
                                                style='width:{{ Auth::user()->profile_per }}%'>

                                            </div>
                                        </div><br>
                                        <button class="btn btn-primary btn-sm rounded applied mb-0" style="width: 100%" id="profileupdate">Profile Update</button>
                                        <button class="btn btn-primary btn-sm rounded applied mb-0" style="width: 100%" id="acaBackground">Academic Background</button>
                                        <button class="btn btn-primary btn-sm rounded applied mb-0" style="width: 100%" id="workexp">Work Experience</button>
                                    </div>
                                </div>
                </li>
            @endif
            {{-- -card end- --}}
            <li class="active pcoded-trigger">
                <a href="{{ url('dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
                {{-- <a id="profileupdate">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Profile Update</span>
                </a> --}}
            </li>
        </ul>
        @if (Auth::user()->role == 1)
            <!-- for Admin -->
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Job Posting Master</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" ">
                            <a href="{{ url('/job-categories') }}">
                                <span class="pcoded-mtext">Job Categories</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ url('/job-types') }}">
                                <span class="pcoded-mtext">Job Type</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active pcoded-trigger">
                    <a href="{{ url('departmets') }}">
                        <span class="pcoded-micon"><i class="feather icon-target"></i></span>
                        <span class="pcoded-mtext">Departments</span>
                    </a>
                </li>
                <li class="active pcoded-trigger">
                    <a href="{{ url('users') }}">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="pcoded-mtext">Users(HR)</span>
                    </a>
                </li>
            </ul>


        @endif
        @if (Auth::user()->role == 2)
            <!-- for HR -->
            <ul class="pcoded-item pcoded-left-item">
                <li class="active pcoded-trigger">
                    <a href="{{ url('/jobs') }}">
                        <span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
                        <span class="pcoded-mtext">Jobs</span>
                    </a>
                </li>
                <li class="active pcoded-trigger">
                    <a href="{{ url('/received-applications') }}">
                        <span class="pcoded-micon"><i class="feather icon-anchor"></i></span>
                        <span class="pcoded-mtext">View Applications</span>
                    </a>
                </li>
                <!--
   <li class="active pcoded-trigger">
    <a href="{{ url('/committee') }}">
     <span class="pcoded-micon"><i class="feather icon-home"></i></span>
     <span class="pcoded-mtext">Committee Members</span>
    </a>
            </li>
   <li class="active pcoded-trigger">
    <a href="{{ url('/job-assign') }}">
     <span class="pcoded-micon"><i class="feather icon-home"></i></span>
     <span class="pcoded-mtext">Job Assign To Member</span>
    </a>
            </li>
            
   <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Application (Screening)</span>
                </a>
                <ul class="pcoded-submenu">
     <li class=" ">
                        <a href="{{ url('/received-applications') }}">
                            <span class="pcoded-mtext">Recieved</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('/Shortlisted-applications') }}">
                            <span class="pcoded-mtext">Shortlisted</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('/rejected-applications') }}">
                            <span class="pcoded-mtext">Rejected</span>
                        </a>
                    </li>
                    
                </ul>
            </li>
   <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Application (Interviewing)</span>
                </a>
                <ul class="pcoded-submenu">
     <li class=" ">
                        <a href="{{ url('/received-applications') }}">
                            <span class="pcoded-mtext">Recieved</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('/Shortlisted-applications') }}">
                            <span class="pcoded-mtext">Shortlisted</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('/rejected-applications') }}">
                            <span class="pcoded-mtext">Rejected</span>
                        </a>
                    </li>
                    
                </ul>
            </li>
 -->
            </ul>
        @endif

        @if (Auth::user()->role == 3)
            <!-- for HR -->
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Job (Scanning)</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" ">
                            <a href="{{ url('/received-applications') }}">
                                <span class="pcoded-mtext">Recieved Candidates</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ url('/Shortlisted-applications') }}">
                                <span class="pcoded-mtext">Shortlisted Application</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ url('/rejected-applications') }}">
                                <span class="pcoded-mtext">Rejected Application</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Job (Interview)</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" ">
                            <a href="{{ url('/received-applications') }}">
                                <span class="pcoded-mtext">Recieved Candidates</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ url('/Shortlisted-applications') }}">
                                <span class="pcoded-mtext">Shortlisted Application</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ url('/rejected-applications') }}">
                                <span class="pcoded-mtext">Rejected Application</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        @endif
    </div>
</nav>
<script>
    var SITEURL = "{{ URL('/') }}";
    $(function() {
        $(document).ready(function() {
            var bar = $('.bar');
            var percent = $('.percent');
            $('form').ajaxForm({
                beforeSend: function() {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    alert('File Has Been Uploaded Successfully');
                    window.location.href = SITEURL + "/" + "ajax-file-upload-progress-bar";
                }
            });
        });
    });
</script>
