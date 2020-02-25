@extends('layouts.frontend')


@section('title')
ILMA | Calendar
@endsection



@section('indexcontent')



<div class="inner-content">
    <div class="container">



        <div class="section-head">
            <h2>Contact Us</h2>
        </div>








        <div class="row">

            <div class="container">
                <div class="home-contact">

                    <div class="container content">


                        @if (count($contactuses) > 0)

                        @foreach ($contactuses as $contactuse)



                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-left">
                            <br>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img src="img/icon/icon-address.png">
                                    </a>
                                </div>


                                <div class="media-body">
                                    <div class="description">
                                        {{ $contactuse->researchinsitution }}
                                        <br>
                                        {{ $contactuse->pobox }}
                                        <br>
                                        {{ $contactuse->university }}
                                        <br>
                                        {{ $contactuse->city }}
                                        <br>
                                        {{ $contactuse->code }}
                                    </div>
                                </div>




                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img src="img/icon/icon-phone.png">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div >
                                        {{ $contactuse->tel }}
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img src="img/icon/icon-email.png">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div >
                                        <a href=" {{ $contactuse->email }}"> {{ $contactuse->email }}
                                        </a>
                                    </div>
                                </div>
                            </div>


                            @endforeach

                            @else
                            <p>No posts found</p>

                            @endif


                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-right">
                            <form data-toggle="validator" action="" method="GET">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input class="form-control input-lg" id="inputsm" type="text" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input class="form-control input-lg" id="inputsm" type="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" id="inputsm" type="text" placeholder="Subject" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control input-lg" rows="6" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg" type="submit">
                                        SEND MESSAGE
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>

            </div>

        </div>





    </div>
</div>




@endsection









@section('jquery')


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/theme.js"></script>





	<!-- ================== Calendar Stuff================== -->
	<script src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="plugins/js-cookie/js.cookie.js"></script>
	<script src="js/theme/default.min.js"></script>
	<script src="js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="plugins/fullcalendar/lib/moment.min.js"></script>
	<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="js/demo/calendar.demo.min.js"></script>


<script>
	$(document).ready(function() {
		App.init();
		Calendar.init();
	});
</script>

<!-- ================== Calendar Stuff End ================== -->



@endsection




