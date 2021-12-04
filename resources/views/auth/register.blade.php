
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <title>{{ config('app.name', 'Dic Recruitment') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <link rel="icon" href="{{url('public/files/assets/images/favicon.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('public/')}}/files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{url('public/')}}/files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="{{url('public/')}}/files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="{{url('public/')}}/files/assets/css/style.css">
	 <script type="text/javascript"
        src="{{url('public/')}}/files/bower_components/jquery/js/jquery.min.js"></script>
</head>

<body class="fix-menu">

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form method="POST" action="{{ route('register') }}" class="md-float-material form-material">
                        @csrf
                        <div class="text-center">
                            <img src="{{url('public/')}}/files/assets/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
								@if(isset($errors))
								<div class="row m-b-20">
									<div class="col-md-12 alert-danger">
										<h5 class="text-center ">{{$errors->first()}}</h5>
									</div>
								</div>
								<script>
									$('#email').prop('readonly', false);
									$('#mobile').prop('readonly', false);
								</script>
								@endif
                                <div class="form-group form-primary">
                                    <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control" placeholder="Name" id="name">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" :value="old('email')" id="email" required class="form-control" placeholder="Your Email Address">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="number" name="mobile" :value="old('mobile')" id="mobile" required class="form-control" placeholder="Your Mobile">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" required autocomplete="new-password" class="form-control" placeholder="Password">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="Confirm Password">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                                <p class="text-inverse text-left">
                                    <a  href="{{ url('/') }}"> <b class="f-w-600">{{ __('Already registered?') }}</b></a>
                                </p>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
        <div class="modal fade" id="otp_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="AddBoxesLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-center">
                    <h5 class="modal-title text-center" id="AddBoxesLabel">Digital India Corporation</h5>
                </div>
                <form id="otp_form">
                <div class="modal-body ">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group form-primary">
                            <lable for="mobile_otp">Enter OTP</lable>
                            <input type="number" name="mobile_otp" id="mobile_otp" required class="form-control" placeholder="Enter OTP">
                            <span class="form-bar"></span>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <lable for="mobile_otp">Email OTP</lable>
                            <input type="number" name="email_otp" id="email_otp" required class="form-control" placeholder="Email-OTP">
                            <span class="form-bar"></span>
                        </div>
                    </div> -->
                    <div class="col-6">
                        <button type="button" class="btn btn-primary" id="otp_submit">Verify OTP</button> 
                    </div>
                    <div class="col-6">
                        <a href="#" id="resend_otp" class="btn btn-primary">Resend OTP</a>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    
   
    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="d28a8ef1c593883d0d7fd140-text/javascript" src="{{url('public/')}}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="d28a8ef1c593883d0d7fd140-text/javascript"
        src="{{url('public/')}}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="d28a8ef1c593883d0d7fd140-text/javascript" src="{{url('public/')}}/files/assets/js/common-pages.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="d28a8ef1c593883d0d7fd140-text/javascript"></script>
    <script type="d28a8ef1c593883d0d7fd140-text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{url('public/')}}/files/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="d28a8ef1c593883d0d7fd140-|49" defer=""></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
    $("#mobile").on("blur",function(){
        if($(this).prop('readonly')){
            console.log($(this).prop('readonly'))
        }else{
            sendOtp('blur');
        }
    })
    function sendOtp(page){
        var phone = $('#mobile').val() ? $('#mobile').val() : '';
        var email = $('#email').val() ? $('#email').val() : '';
        var name = $('#name').val() ? $('#name').val() : 'Guest';
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (phone=='' || !$.isNumeric(phone) > 0 || phone.length > 10 || phone.length < 10) {
            alert("please enter valid mobile number");
        }else if(email=='' || !email.match(mailformat)){
            alert("please enter valid email");
        }
        else{
            var csrf_tokan= $("meta[name=csrf-token]").attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrf_tokan
                }
            });
            $.ajax({
                type:'POST',
                url:"{{url('/send-sms')}}",
                data:{mobile:phone,smsType:"sendotp",email:email,name:name},
                success:function(data) {
                    if(page=='blur'){
                        $('#otp_modal').modal('toggle');
                    }
					
                }
            });
        }
    }
    $('#mobile').keypress(function (e) { 
        var keyCode = e.keyCode || e.which;
        var regex = /^[0-9]+$/;
        var isNum= regex.test(String.fromCharCode(keyCode));
        if(!isNum){
            alert("please enter valid mobile number");
        }
        if($(this).val().length>=10){
            alert("please enter valid mobile number");
        }
    });

    $('#mobile').keyup(function (e) { 
        if($(this).val().length==1 && $(this).val()==0) {
            $(this).val('');
            alert("please enter valid mobile number");
        }
    });
    $('#otp_submit').click(function(){
        var phone_otp = $('#mobile_otp').val() ? $('#mobile_otp').val() : '';
        // var email_otp = $('#email_otp').val() ? $('#email_otp').val() : '';
        var email_otp = 123456;
        var mobile = $('#mobile').val() ? $('#mobile').val() : '';
        var email = $('#email').val() ? $('#email').val() : '';
        var name = $('#name').val() ? $('#name').val() : '';
        if ( (phone_otp=='' || !$.isNumeric(phone_otp) || phone_otp.length > 6 || phone_otp.length < 6) && (email_otp=='' || !$.isNumeric(email_otp) || email_otp.length > 6 || email_otp.length < 6)) {
            alert("please enter valid 6 digit mobile and email OTP");
        }else{
            var csrf_tokan= $("meta[name=csrf-token]").attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrf_tokan
                }
            });
            $.ajax({
                type:'POST',
                url:"{{url('/validate-otp')}}",
                data:{mobile:mobile,mobile_otp:phone_otp,email:email,email_otp:email_otp,name:name},
                success:function(data) {
                    $('#email').prop('readonly', true);
                    $('#mobile').prop('readonly', true);
                    $('#otp_modal').modal('toggle');
                },
				error:function(error) {
                    alert('Entered OTP is wrong or something ');
                }
            });
        }
    })
    $('#resend_otp').click(function(){
        sendOtp('');
    })
</script>
    </body>
</html>