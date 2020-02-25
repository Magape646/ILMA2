@extends('layouts.frontend')


@section('title')
ILMA | Latest Papers
@endsection



@section('indexcontent')



<div class="inner-content">
    <div class="container">
        <div class="section-head">


            <h2>Latest Papers</h2>
        </div>










        <div class="row">
            <div class="col-md-8">

                @if (count($publicationpapers) > 0)

                @foreach ($publicationpapers as $publicationpaper)

                <article>

                    <div class="post-excerpt">
                        <div class="small-title cat">{{ $publicationpaper->updated_at }}</div>
                        <h3><a >{{ $publicationpaper->title }}</a></h3>
                        <div class="meta">
                            <span>{{ $publicationpaper->authors }}</span>
                        </div>
                        <div class="meta">
                            <span><strong>{{ $publicationpaper->journal }}</strong> {{ $publicationpaper->journalpages }}</span>
                        </div>
                        <br>

                        <a href="/publicationpapers/{{ $publicationpaper->id }}" class="btn btn-primary">Abstract</a>
                        <a href="/storage/img/paper_documents/{{ $publicationpaper->cover_image}}" class="btn btn-success">Download</a>
                    </div>
                </article>


                @endforeach

                @else
                <p>No posts found</p>

                @endif






                <ul class="pagi-nation">
                    {{ $publicationpapers->links()   }}
               </ul>


        </div>

            <aside class="col-md-4">


                <div class="side-widget">
                    <h4>Filters</h4>

                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Unit</a>
                            </li>
                            <li role="presentation">
                                <a href="#commented" aria-controls="commented" role="tab" data-toggle="tab">Year</a>
                            </li>
                            <li role="presentation">
                                <a href="#viewed" aria-controls="viewed" role="tab" data-toggle="tab">Publication</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="popular">

                                <div class="mini-posts">
                                    <article class="style2">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <a >
                                                    <div class="article-thumb">
                                                        <img src="img/icon/unit.jpg" class="img-responsive" alt=""/>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="post-excerpt no-padding">

                                                    <div class="meta">
                                                        <a >Filter papers by Unit:</a>
                                                    </div>
                                                    <div class="meta">
                                                        <select name="usertype" class="form-control">
                                                            <option value=""></option>
                                                            <option value="Human Flourishing in Institutions">Human Flourishing in Institutions</option>
                                                            <option value="Strengths-based Studies and Interventions">Strengths-based Studies and Interventions</option>
                                                            <option value="Ageing and Generational Dynamics">Ageing and Generational Dynamics</option>
                                                            <option value="Inclusion, Capability and Optimal Functioning">Inclusion, Capability and Optimal Functioning</option>
                                                        </select>
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
                                                <a>
                                                    <div class="article-thumb">
                                                        <img src="img/icon/year.jpg" class="img-responsive" alt=""/>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="post-excerpt no-padding">

                                                    <div class="meta">
                                                        <a >Filter papers by Year:</a>
                                                    </div>
                                                    <div class="meta">
                                                        <select name="usertype" class="form-control">
                                                            <option value=""></option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>

                                                        </select>
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
                                                        <img src="img/icon/publication.jpg" class="img-responsive" alt=""/>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="post-excerpt no-padding">

                                                    <div class="meta">
                                                        <a >Filter papers by Publication:</a>
                                                    </div>
                                                    <div class="meta">
                                                        <select name="usertype" class="form-control">
                                                            <option value=""></option>
                                                            <option value="Brain Research">Brain Research</option>
                                                            <option value="Development Southern Africa">Development Southern Africa</option>

                                                        </select>
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
                                                        <img src="img/icon/conference.jpg" class="img-responsive" alt=""/>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="post-excerpt no-padding">

                                                    <div class="meta">
                                                        <a >Filter papers by Conference:</a>
                                                    </div>
                                                    <div class="meta">
                                                        <select name="usertype" class="form-control">
                                                            <option value=""></option>
                                                            <option value="Conference 1">Conference 1</option>
                                                            <option value="Conference 2">Conference 2</option>
                                                            <option value="Conference 3">Conference 3</option>

                                                        </select>
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



