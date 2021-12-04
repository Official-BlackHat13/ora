<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<style>
.login-block .auth-box {
	padding:30px 20px 0px 20px;
}

h1,h2{
	font-weight:600 !important;
}
</style>

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
				
                    <form class="md-float-material form-material" method="POST" action="{{ url('forgot-password') }}">
					@csrf
                        <div class="auth-box card">
						
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Forgot Password</h3>
                                    </div>
									 @if (session('success'))
										<div class="mb-4 font-medium text-sm text-green-600">
											{{ session('success') }}
										</div>
									@endif
                                </div>
                                <div class="form-group form-primary">
                                    <input type="number" name="mobile" :value="old('mobile')" required autofocus  class="form-control"  placeholder="Register Mobile Number">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Submit') }}</button>
                                    </div>
                                </div>
								<a  href="{{ url('/') }}"> <b class="f-w-600">Back to login </b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        </div>

    </section>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/i18next/js/i18next.min.js"></script>
        <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"
        src="{{url('public/')}}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript" src="{{url('public/')}}/files/assets/js/common-pages.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="cf902b33e3fbd6ee8bb9b4e9-text/javascript"></script>
    <script type="cf902b33e3fbd6ee8bb9b4e9-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    <script src="{{url('public')}}/files/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="cf902b33e3fbd6ee8bb9b4e9-|49" defer=""></script>
</body>

</html>

