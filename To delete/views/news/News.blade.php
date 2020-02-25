@extends('layouts.frontend')


@section('title')
ILMA | News
@endsection



@section('indexcontent')


<div class="inner-content">
    <div class="container">
        <div class="section-head">
            <h2>Latest posts</h2>
        </div>

        <div class="row">


        <div class="col-md-8">

            @if (count($posts) > 0)

			@foreach ($posts as $post)

					<article class="style2">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<a  >
									<div class="article-thumb">
										<img src="/storage/img/news_images/{{ $post->cover_image}}" class="img-responsive" alt=""/>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="post-excerpt">

									<h3><a>{{ $post->title }}</a></h3>
									<div class="meta">
										<span><a  class="link">{{ $post->created_at }}</a></span>
									</div>
									<p>The list of potential Twitter acquirers continues to grow. In addition to recent reports that Salesforce and Google are interested in possibly buying the real-time news</p>
                                <a href="/news/{{ $post->id }}" class="small-title rmore">Read More</a>
								</div>
							</div>
						</div>
					</article>

                    @endforeach

                    @else
                    <p>No posts found</p>

                    @endif


                    <ul class="pagi-nation">
						 {{ $posts->links()   }}
					</ul>

				</div>

            <aside class="col-md-4">

                <div class="side-widget">
                    <h4>Tweets</h4>
                    <div id="tweecool"></div>
                </div>

        
                

                <div class="clearfix"></div>

                <div class="side-widget">
                    <h4><i class="fa fa-instagram"></i> &nbsp;Instagram</h4>
                    <ul class="instagram-lite"></ul>
                </div>





            </aside>

    </div>


    </div>
</div>


@endsection







@section('jquery')




<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/theme.js"></script>

<!-- Instagram Feed -->
<script src="js/instagramLite.min.js"></script>
<script>
$('.instagram-lite').instagramLite({

    //Replace ACCESSTOKEN with your insta username
    accessToken: '29801935640.1677ed0.9db3708a57dd419095e19b65ee104482',
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
       username : 'ilma98726279',
	   profile_image: false,
       limit : 3
    });
});
</script>


@endsection









