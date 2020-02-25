@extends('layouts.frontend')


@section('title')
ILMA | Our Projects
@endsection



@section('indexcontent')


<div class="inner-content no-padding-top">
    <div class="container-fluid no-padding">
                <article class="style3 single text-center">
                        <div class="overlay overlay-02"></div>
                        <div class="post-thumb">
                            <div class="container">
                            <div class="post-excerpt">


                                <h3 class="h1 text-white">{{ $project->title }}</h3>
                                <div class="meta">
                                    <span class="author">{{ $project->team }}</span>

                                </div>
                                <div class="meta">

                                    <span class="views"><i class="fa fa-eye"></i> 125 views</span>
                                </div>

                            </div>
                            </div>
                            <img src="{{ asset('img/single/1.jpg') }}" class="bg-img img-responsive" alt="">
                        </div>
                </article>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="blog-single">


                    {{ $project->body }}


                    <div class="clearfix"></div>




                    <div class="clearfix"></div>


                </div>


                    <br>

                <div class="post-nav ">
                    <a href="/projects" class="btn btn-primary ">Back</a>
                </div>






            </div>

            <aside class="col-md-4">




                <div class="side-widget">
                    <h4>Information</h4>

                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Downloads</a>
                            </li>
                            <li role="presentation">
                                <a href="#commented" aria-controls="commented" role="tab" data-toggle="tab">Links</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="popular">


                                <div class="mini-posts">
                                    <article class="style2">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <a href="{{ asset('img/Documents/Lorem_ipsum.pdf') }}">
                                                    <div class="article-thumb">
                                                        <img src="{{ asset('img/Documents/pdf.png') }}" class="img-responsive" alt=""/>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="post-excerpt no-padding">

                                                    <h5><a > {{ $project->pdftitle }}</a></h5>
                                                    <div class="meta">
                                                        <span>{{ $project->pdfauthor }}</span>
                                                    </div>

                                                    <div class="meta">
                                                        <span>{{ $project->pdfdate }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>




                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="commented">

                                <div class="mini-posts">
                                    <article class="style2">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <a  >
                                                    <div class="article-thumb">
                                                        <img src="{{ asset('img/Documents/links.png') }}" class="img-responsive" alt=""/>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="post-excerpt no-padding">
                                                    <div class="meta">
                                                        <span>{{ $project->linkstitle }}</span>
                                                    </div>
                                                    <h5><a href="{{ $project->linksurl }}">{{ $project->linksurl }}</a></h5>

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





            </aside>
        </div>
    </div>
</div>



@endsection












@section('jquery')



<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>


<!-- Instagram Feed -->
<script src="{{ asset('js/instagramLite.min.js') }}"></script>
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
<script src="{{ asset('js/tweecool.min.js') }}"></script>
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



