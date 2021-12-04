<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dic Recruitment') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <!-- <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app"> -->
    <meta name="author" content="#">

    <link rel="icon" href="{{ url('public/files/assets/images/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="{{ url('public/') }}/files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('public/') }}/files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="{{ url('public/') }}/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/') }}/files/assets/css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" type="text/css"
        href="{{ url('public/') }}/files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="{{ url('public/') }}/files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css"
        href="{{ url('public/') }}/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('public/') }}/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('public/') }}/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <link href="{{ url('public/files/assets/css/home.css') }}" rel="stylesheet">
    <link href="{{ url('public/files/assets/css/basictable.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
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
            </div>
        </div>
    </div>
    @if (Auth::user())
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                @include('master.header')
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        @include('master.sidebar')
                        @include('master.content')
                    </div>
                </div>
            </div>
        </div>
    @else
        @include('master.content')
    @endif

    <!-- modal code start -->
    @include('jobs.job_apply_modal_new')



    <script type="e4b7d3e32dd9a4cd85517089-text/javascript"
        src="{{ url('public/') }}/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('public/files/assets/js/jquery.basictable.js') }}"></script>
    <script type="e4b7d3e32dd9a4cd85517089-text/javascript"
        src="{{ url('public/') }}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="e4b7d3e32dd9a4cd85517089-text/javascript"
        src="{{ url('public/') }}/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="e4b7d3e32dd9a4cd85517089-text/javascript"
        src="{{ url('public/') }}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script type="e4b7d3e32dd9a4cd85517089-text/javascript"
        src="{{ url('public/') }}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="e4b7d3e32dd9a4cd85517089-text/javascript"
        src="{{ url('public/') }}/files/bower_components/modernizr/js/modernizr.js"></script>

    <script type="e4b7d3e32dd9a4cd85517089-text/javascript"
        src="{{ url('public/') }}/files/bower_components/chart.js/js/Chart.js"></script>

    <script src="{{ url('public/') }}/files/assets/pages/widget/amchart/amcharts.js"
        type="e4b7d3e32dd9a4cd85517089-text/javascript"></script>
    <script src="{{ url('public/') }}/files/assets/pages/widget/amchart/serial.js"
        type="e4b7d3e32dd9a4cd85517089-text/javascript"></script>
    <script src="{{ url('public/') }}/files/assets/pages/widget/amchart/light.js"
        type="e4b7d3e32dd9a4cd85517089-text/javascript"></script>
    <script src="{{ url('public/') }}/files/assets/js/jquery.mCustomScrollbar.concat.min.js"
        type="e4b7d3e32dd9a4cd85517089-text/javascript"></script>
    <script type="e4b7d3e32dd9a4cd85517089-text/javascript" src="{{ url('public/') }}/files/assets/js/SmoothScroll.js">
    </script>
    <script src="{{ url('public/') }}/files/assets/js/pcoded.min.js" type="e4b7d3e32dd9a4cd85517089-text/javascript">
    </script>

    <script src="{{ url('public/') }}/files/assets/js/vartical-layout.min.js"
        type="e4b7d3e32dd9a4cd85517089-text/javascript"></script>
    <script type="javascript" src="{{ url('public/') }}/files/assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="e4b7d3e32dd9a4cd85517089-text/javascript" src="{{ url('public/') }}/files/assets/js/script.min.js">
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="e4b7d3e32dd9a4cd85517089-text/javascript"></script>

    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <script src="{{ url('public') }}/files/bower_components/datatables.net/js/jquery.dataTables.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/assets/pages/data-table/js/jszip.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/assets/pages/data-table/js/pdfmake.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/assets/pages/data-table/js/vfs_fonts.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>

    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="fcaff7ffd5c90082cbfbec89-text/javascript"
        src="{{ url('public') }}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

    <script src="{{ url('public') }}/files/assets/pages/data-table/js/data-table-custom.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/assets/js/pcoded.min.js" type="fcaff7ffd5c90082cbfbec89-text/javascript">
    </script>
    <script src="{{ url('public') }}/files/assets/js/vartical-layout.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script src="{{ url('public') }}/files/assets/js/jquery.mCustomScrollbar.concat.min.js"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>
    <script type="fcaff7ffd5c90082cbfbec89-text/javascript" src="{{ url('public') }}/files/assets/js/script.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="fcaff7ffd5c90082cbfbec89-text/javascript"></script>


    <script type="e4b7d3e32dd9a4cd85517089-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ url('public/') }}/files/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="e4b7d3e32dd9a4cd85517089-|49" defer=""></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.table').basictable();
        });
        // $('#profileupdate').on('click',function(){
        //     $('#AddBoxesnew').modal('show');
        // });
    </script>


</body>

</html>
