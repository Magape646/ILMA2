@extends('layouts.frontend')




@section('title')
ILMA | Calendar
@endsection




@section('calendarcss')



	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" media='print' />
	<link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->



@endsection





@section('indexcontent')



<div class="inner-content">
    <div class="container">



        <div class="section-head">
            <h2>Calendar</h2>
        </div>

        <!-- begin #content -->
        <div id="content" class="content">

            <hr class="bg-grey-lighter" />

            <!-- begin calendar -->
            <div id="calendar" class="vertical-box-column calendar"></div>
            <!-- end calendar -->


        </div>
        <!-- end #content -->


    </div>
</div>



@endsection






@section('jquery')


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/theme.js"></script>





 	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/js-cookie/js.cookie.js') }}"></script>
	<script src="{{ asset('assets/js/theme/default.min.js') }}"></script>
	<script src="{{ asset('assets/js/apps.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('assets/plugins/fullcalendar/lib/moment.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/calendar.demo.min.js') }}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			Calendar.init();
		});
	</script>


@endsection









