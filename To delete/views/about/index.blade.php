@extends('layouts.frontend')


@section('title')
ILMA | About Us
@endsection







@section('indexcontent')


	<div class="inner-content">
		<div class="container">




			<div class="row">
				<div class="col-md-8">
                    @if (count($aboutuses) > 0)

                    @foreach ($aboutuses as $aboutuse)

					<div class="blog-single">
						<img src="/storage/img/about_images/{{ $aboutuse->cover_image}}" class="img-responsive" alt=""/>
						<h3 class="h1">{{ $aboutuse->title }}</h3>


                        {{ $aboutuse->body }}

						<div class="clearfix"></div>



						<div class="clearfix"></div>


					</div>
				 
				@endforeach

                @else
                <p>No posts found</p>

                @endif

				</div>

				<aside class="col-md-4">


					<div class="clearfix"></div>



					<div class="clearfix"></div>


					<div class="clearfix"></div>

					<div class="side-widget">
						<h4>Our Staff</h4>

						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active">
									<a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Leaders</a>
								</li>
								<li role="presentation">
									<a href="#commented" aria-controls="commented" role="tab" data-toggle="tab">Professors</a>
								</li>
								<li role="presentation">
									<a href="#viewed" aria-controls="viewed" role="tab" data-toggle="tab">Researchers</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
							 

								<div role="tabpanel" class="tab-pane active fade in" id="popular">

								

									<div class="mini-posts">

										@if (count($staffdetails) > 0)

										@foreach ($staffdetails as $staffdetail)

										<article class="style2">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<a >
														<div class="article-thumb">
															<img src="/storage/img/staff_images/{{ $staffdetail->cover_image}}" class="img-responsive" alt=""/>
														</div>
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="post-excerpt no-padding">
														<div class="meta">
															<span>{{ $staffdetail->name }}</span>
														</div>
                                                        <div class="meta">
															<span class="comment">{{ $staffdetail->title }}</span>
														</div>
                                                        <div class="meta">
															<a href="Kgomotso.theledi@nwu.ac.za">{{ $staffdetail->email }}</a>
														</div>
													</div>
												</div>
											</div>
										</article>

										@endforeach

										@else
										<p>No posts found</p>
						
										@endif
										
                                    </div>

								
								
					

								</div>

								<div role="tabpanel" class="tab-pane fade in" id="commented">

									<div class="mini-posts">
										<article class="style2">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<a >
														<div class="article-thumb">
															<img src="img/staff/pooe.jpg" class="img-responsive" alt=""/>
														</div>
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="post-excerpt no-padding">
														<div class="meta">
															<span>Prof William E. Heuva</span>
														</div>
                                                        <div class="meta">
															<span class="comment">Associate Professor and Programme Coordinator</span>
														</div>
                                                        <div class="meta">
															<a href="Kgomotso.theledi@nwu.ac.za">william.heuva@nwu.ac.za</a>
														</div>
													</div>
												</div>
											</div>
										</article>
										<article class="style2">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<a >
														<div class="article-thumb">
															<img src="img/staff/pooe.jpg" class="img-responsive" alt=""/>
														</div>
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="post-excerpt no-padding">
														<div class="meta">
															<span>Prof William E. Heuva</span>
														</div>
                                                        <div class="meta">
															<span class="comment">Associate Professor and Programme Coordinator</span>
														</div>
                                                        <div class="meta">
															<a href="Kgomotso.theledi@nwu.ac.za">william.heuva@nwu.ac.za</a>
														</div>
													</div>
												</div>
											</div>
										</article>
										<article class="style2">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<a >
														<div class="article-thumb">
															<img src="img/staff/pooe.jpg" class="img-responsive" alt=""/>
														</div>
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="post-excerpt no-padding">
														<div class="meta">
															<span>Prof William E. Heuva</span>
														</div>
                                                        <div class="meta">
															<span class="comment">Associate Professor and Programme Coordinator</span>
														</div>
                                                        <div class="meta">
															<a href="Kgomotso.theledi@nwu.ac.za">william.heuva@nwu.ac.za</a>
														</div>
													</div>
												</div>
											</div>
										</article>
										<article class="style2">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<a >
														<div class="article-thumb">
															<img src="img/staff/pooe.jpg" class="img-responsive" alt=""/>
														</div>
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="post-excerpt no-padding">
														<div class="meta">
															<span>Prof William E. Heuva</span>
														</div>
                                                        <div class="meta">
															<span class="comment">Associate Professor and Programme Coordinator</span>
														</div>
                                                        <div class="meta">
															<a href="Kgomotso.theledi@nwu.ac.za">william.heuva@nwu.ac.za</a>
														</div>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade in" id="viewed">


									<div class="mini-posts">
										<article class="style2">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<a >
														<div class="article-thumb">
															<img src="img/staff/pooe.jpg" class="img-responsive" alt=""/>
														</div>
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="post-excerpt no-padding">
														<div class="meta">
															<span>Prof William E. Heuva</span>
														</div>
                                                        <div class="meta">
															<span class="comment">Associate Professor and Programme Coordinator</span>
														</div>
                                                        <div class="meta">
															<a href="Kgomotso.theledi@nwu.ac.za">william.heuva@nwu.ac.za</a>
														</div>
													</div>
												</div>
											</div>
										</article>

										<article class="style2">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<a >
														<div class="article-thumb">
															<img src="img/staff/pooe.jpg" class="img-responsive" alt=""/>
														</div>
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="post-excerpt no-padding">
														<div class="meta">
															<span>Prof William E. Heuva</span>
														</div>
                                                        <div class="meta">
															<span class="comment">Associate Professor and Programme Coordinator</span>
														</div>
                                                        <div class="meta">
															<a href="Kgomotso.theledi@nwu.ac.za">william.heuva@nwu.ac.za</a>
														</div>
													</div>
												</div>
											</div>
										</article>



										<article class="style2">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<a >
														<div class="article-thumb">
															<img src="img/staff/pooe.jpg" class="img-responsive" alt=""/>
														</div>
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="post-excerpt no-padding">
														<div class="meta">
															<span>Prof William E. Heuva</span>
														</div>
                                                        <div class="meta">
															<span class="comment">Associate Professor and Programme Coordinator</span>
														</div>
                                                        <div class="meta">
															<a href="Kgomotso.theledi@nwu.ac.za">william.heuva@nwu.ac.za</a>
														</div>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>

						 


							</div>
						</div>
						<!-- TABS -->

					</div>




					<div class="side-widget">
						<h4>ILIMA Reports</h4>
						<ul id="toggle-view">
							<li>
								<h3>2020</h3>
								<span class="fa fa-angle-down"></span>
								<div class="toggle-panel">
									<div>
										@if (count($aboutreports) > 0)

										@foreach ($aboutreports as $aboutreport)

										<a href="#">{{ $aboutreport->title }}</a>
										

										@endforeach

										@else
										<p>No posts found</p>
						
										@endif
									</div>
									
								</div>
							</li>
							<li>
								<h3>2019</h3>
								<span class="fa fa-angle-down"></span>
								<div class="toggle-panel">
									<div>
										<a href="#">ILMA Report: 1</a>
										<a href="#">ILMA Report: 2</a>
									</div>
									<div>
										<a href="#">ILMA Report: 3</a>
										<a href="#">ILMA Report: 4</a>
									</div>
									<div>
										<a href="#">ILMA Report: 5</a>
										<a href="#">ILMA Report: 6</a>
									</div>
									<div>
										<a href="#">ILMA Report: 7</a>
										<a href="#">ILMA Report: 8</a>
									</div>
								</div>
							</li>
							<li>
								<h3>2018</h3>
								<span class="fa fa-angle-down"></span>
								<div class="toggle-panel">
									<div>
										<a href="#">Publications: 1</a>
										<a href="#">Publications: 2</a>
									</div>
									<div>
										<a href="#">Publications: 3</a>
										<a href="#">Publications: 4</a>
									</div>
									<div>
										<a href="#">Publications: 5</a>
										<a href="#">Publications: 6</a>
									</div>
									<div>
										<a href="#">Publications: 7</a>
										<a href="#">Publications: 8</a>
									</div>
								</div>
							</li>
							<li>
								<h3>2017</h3>
								<span class="fa fa-angle-down"></span>
								<div class="toggle-panel">
									<div>
										<a href="#">ILMA Report: 1</a>
										<a href="#">ILMA Report: 2</a>
									</div>
									<div>
										<a href="#">ILMA Report: 3</a>
										<a href="#">ILMA Report: 4</a>
									</div>
									<div>
										<a href="#">ILMA Report: 5</a>
										<a href="#">ILMA Report: 6</a>
									</div>
									<div>
										<a href="#">ILMA Report: 7</a>
										<a href="#">ILMA Report: 8</a>
									</div>
								</div>
							</li>


						</ul>
					</div>

					<div class="clearfix"></div>



					<div class="clearfix"></div>


				</aside>

				</div>
		</div>
	</div>


    @endsection



    @section('jquery')


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/slick/slick.min.js"></script>
<script src="js/theme.js"></script>


<!-- Instagram Feed -->
<script src="js/instagramLite.min.js"></script>
<script>
$('.instagram-lite').instagramLite({

    //Replace ACCESSTOKEN with your twitter username
    accessToken: '1730464.199554e.e561d1b801d74e35a1453110a44a09e8',
    urls: true,
    limit: 6,
    captions: false,
    likes: false,
    comments_count: false,
    success: function() {
        console.log('The request was successful!');
    },
    error: function() {
        console.log('There was an error with your request.');
    }
});
</script>

<!-- Twitterfeed -->
<script src="js/tweecool.min.js"></script>
<script>
$(document).ready(function() {
    $('#tweecool').tweecool({
      //Replace TWEECOOL with your twitter username
       username : 'tweecool',
	  profile_image: false,
       limit : 3
    });
});
</script>


    @endsection




