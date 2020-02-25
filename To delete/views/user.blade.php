@extends('layouts.studentadmin')



@section('title')
Lexicon | User Dashboard
@endsection









@section('content')

    <!-- begin page-header -->
    <h1 class="page-header">EMS Literacy Software<small></small></h1>
    <!-- end page-header -->









    	<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
			    <div class="col-lg-8">
			        <div class="widget-chart with-sidebar">
			            <div class="widget-chart-content">
			                <h4 class="chart-title">
			                    Progress Report
			                    <small>How far are you towards completion</small>
			                </h4>
			                <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
			            </div>
			            <div class="widget-chart-sidebar">
			                <div class="chart-number">

			                    <small></small>
			                </div>
			                <div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
			                <ul class="chart-legend f-s-11">
			                    <li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 60.0% <span>New Visitors</span></li>
			                    <li><i class="fa fa-circle fa-fw text-aqua f-s-9 m-r-5 t-minus-1"></i> 40.0% <span>Return Visitors</span></li>
			                </ul>
			            </div>
			        </div>
			    </div>
			    <!-- end col-8 -->
			    <!-- begin col-4 -->
			    <div class="col-lg-4">
			        <!-- begin panel -->
			        <div class="panel panel-inverse" data-sortable-id="index-3">
			            <div class="panel-heading">
			                <h4 class="panel-title">Today's Schedule</h4>
			            </div>
			            <div id="schedule-calendar" class="bootstrap-calendar"></div>
			            <div class="list-group">
                            <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                                Sales Reporting
                                <span class="badge f-w-500 bg-blue f-s-10">9:00 am</span>
                            </a>
                            <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                                Have a meeting with sales team
                                <span class="badge f-w-500 bg-grey f-s-10">2:45 pm</span>
                            </a>
                        </div>
			        </div>
			        <!-- end panel -->
			    </div>
			    <!-- end col-4 -->
			</div>
			<!-- end row -->





	<!-- begin row -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-lg-8">
            <!-- begin panel -->
            <!-- begin #accordion -->
			    	<div id="accordion" class="card-accordion">
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor" data-toggle="collapse" data-target="#collapseOne">
								Incomplete Section: Item #12
							</div>
							<div id="collapseOne" class="collapse show" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    <p class="text-right m-b-0">
                                        <a href="javascript:;" class="btn btn-primary">Proceed</a>
                                    </p>
                                </div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseTwo">
								Latest Lesson: Item #6
							</div>
							<div id="collapseTwo" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    <p class="text-right m-b-0">
                                        <a href="javascript:;" class="btn btn-primary">Proceed</a>
                                    </p>
                                </div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseThree">
								Floor Redo: Item #2
							</div>
							<div id="collapseThree" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    <p class="text-right m-b-0">
                                        <a href="javascript:;" class="btn btn-primary">Proceed</a>
                                    </p>
                                </div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseFour">
								Room Redo: Item #9
							</div>
							<div id="collapseFour" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    <p class="text-right m-b-0">
                                        <a href="javascript:;" class="btn btn-primary">Proceed</a>
                                    </p>
                                </div>
							</div>
						</div>
						<!-- end card -->

					</div>
					<!-- end #accordion -->
    <!-- end panel -->
            </div>
             <!-- begin col-4 -->
			    <div class="col-lg-4">
			        <!-- begin panel -->
			        <!-- begin card -->
						<div class="card">
							<img class="card-img-top img-fluid" src="../assets/img/gallery/gallery-11.jpg" alt="Card image cap" />
							<div class="card-block">
								<h4 class="card-title">Card title that wraps to a new line</h4>
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							</div>
						</div>
						<!-- end card -->
			        <!-- end panel -->
			    </div>
			    <!-- end col-4 -->
    </div>
    <!-- end row -->


        @endsection
