@extends('layouts.frontend')


@section('title')
ILMA | Public Resources
@endsection



@section('indexcontent')


<div class="inner-content">
    <div class="container">
        <div class="section-head">


            <h2>Public resources</h2>
        </div>

        <div class="row">
            <div class="col-md-8">

                @if (count($publicresources) > 0)

                @foreach ($publicresources as $publicresource)

                <article>

                    <div class="post-excerpt">
                        <div class="small-title cat">Sep 23, 2019</div>
                        <h3><a >{{ $publicresource->title }}</a></h3>
                        <div class="meta">
                            <span>{{ $publicresource->authors }}</span>
                        </div>

                        <br>

                        <a href="/storage/img/resources/resources_documents/{{ $publicresource->cover_image}}" class="btn btn-success">Download</a>
                    </div>
                </article>



   @endforeach

                @else
                <p>No posts found</p>

                @endif






                <ul class="pagi-nation">
                    {{ $publicresources->links()   }}
               </ul>


        </div>

            <aside class="col-md-4">


                <div class="side-widget">
                    <h4>Most Popular</h4>
                    <div class="mini-posts">
                        <article class="style2">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="img/side/01/1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a >What You Missed While Not Watching the Debate</a></h5>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="style2">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="img/side/01/2.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a >New Doodle Celebrates Google Turning 18 All Over Again</a></h5>
                                        <div class="meta">
                                            <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="style2">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="img/side/01/3.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a >We Must Move Forward on Clean Power Plan</a></h5>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="style2">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="img/side/01/4.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a >The Funeral of Shimon Peres to Be Held on Friday</a></h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
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




