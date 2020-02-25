@extends('layouts.frontend')


@section('title')
ILMA - Post
@endsection



@section('indexcontent')



<div class="inner-content no-padding-top">
    <div class="container-fluid no-padding">
                <article class="style3 single text-center">
                        <div class="overlay overlay-02"></div>
                        <div class="post-thumb">
                            <div class="container">
                            <div class="post-excerpt">

                                <h3 class="h1 text-white">{{ $post->title}}</h3>
                                <div class="meta">
                                    <span>{{ $post->created_at }}</span>
                                </div>
                                <div class="meta">
                                    <span class="views"><i class="fa fa-eye"></i> 682 views</span>
                                </div>

                            </div>
                            </div>
                            <img src="{{ asset('img/single/1.jpg') }}" class="bg-img img-responsive" alt="">
                        </div>
                </article>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="blog-single">

                    <div class="img-right caption pull-right">

                        <div class="post-single-slider-wrap">
                        <div class="post-single-slider">
                            <div class="item">
                                <img src="/storage/img/news_images/{{ $post->cover_image}}" class="img-responsive" alt=""/>
                            </div>

                        </div>
                        </div>

                        <p>The meeting came at a crucial moment<span>White House</span></p>
                    </div>

                    {{ $post->body }}


                 



                    <div class="clearfix"></div>


                </div>

                <br>

                <div class="post-nav">
                    <div class="row">
                        <div class="col-md-6 text-right">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <span class="small-title">Read Previous</span>
                            <h3><a href="#">Our new appointments<br>at ILIMA</a></h3>
                        </div>

                        <div class="col-md-6 text-left">
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                            <span class="small-title">Read Previous</span>
                            <h3><a href="#">Top ILIMA Researcher<br>recieves NRF rating</a></h3>
                        </div>
                    </div>
                </div>

                <div class="related-posts">
                    <h5>Related articles</h5>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="article-thumb">
                                <img src="{{ asset('img/category/08/1.jpg') }}" class="img-responsive" alt=""/>
                            </div>
                            <div class="space10"></div>
                            <div class="meta"><span>Sep 19,2019</span></div>
                            <h3 class="h5"><a href="#">What motivates Indigenous Language Media in Africa</a></h3>
                        </div>

                        <div class="col-md-4">
                            <div class="article-thumb">
                                <img src="{{ asset('img/category/08/2.jpg') }}" class="img-responsive" alt=""/>
                            </div>
                            <div class="space10"></div>
                            <div class="meta"><span>Sep 19,2019</span></div>
                            <h3 class="h5"><a href="#">What motivates Indigenous Language Media in Africa</a></h3>
                        </div>

                        <div class="col-md-4">
                            <div class="article-thumb">
                                <img src="{{ asset('img/category/08/3.jpg') }}" class="img-responsive" alt=""/>
                            </div>
                            <div class="space10"></div>
                            <div class="meta"><span>Sep 19,2019</span></div>
                            <h3 class="h5"><a href="#">What motivates Indigenous Language Media in Africa</a></h3>
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




