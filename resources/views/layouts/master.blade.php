<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{app()->getLocale()=='en' ?'ltr':'rtl'}}">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		@include('layouts.head')
	</head>

    <!-- main-content -->
    <body class="layout-boxed">


    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div></div></div>
    <!--  END LOADER -->
        @include('layouts.main-header')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>


    @include('layouts.main-sidebar')



				@yield('page-header')
        @include('layouts.flush-massage')
				@yield('content')


    </div>

    </div>

				@include('layouts.models')

                </div>

    </div>

    @include('layouts.footer')


				@include('layouts.footer-scripts')

    </div>
    <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->


    </body>
</html>

<script>

    setInterval(function() {
        $("#notifications_count").load(window.location.href + " #notifications_count");
        $("#unreadNotifications").load(window.location.href + " #unreadNotifications");
    }, 5000);

</script>
