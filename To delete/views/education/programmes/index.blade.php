@extends('layouts.frontend')


@section('title')
ILMA | Education
@endsection




@section('indexcontent')


<div class="inner-content">
    <div class="container">
        <div class="section-head">
            <h2>Programmes</h2>
        </div>

        <div class="row">


            <div class="col-md-8">

                @if (count($programmes) > 0)

                @foreach ($programmes as $programme)

                        <article class="style2">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <a  >
                                        <div class="article-thumb">
                                            <img src="/storage/img/education/programmes_images/{{ $programme->cover_image}}" class="img-responsive" alt=""/>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="post-excerpt">

                                        <h3><a>{{ $programme->title }}</a></h3>
                                        <p>{{ $programme->body }}</p>
                                        <a href="img/Documents/Lorem_ipsum.pdf" class="small-title rmore">Brochure</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        @endforeach

                        @else
                        <p>No posts found</p>

                        @endif

                        <ul class="pagi-nation">
                            {{ $programmes->links()   }}
                       </ul>


                    </div>


            <aside class="col-md-4">




                <div class="side-widget">
                    <h4>Information</h4>
                    <div class="tags">
                        <a href="http://services.nwu.ac.za/research-support?_ga=2.213435092.170532568.1580423287-1845018454.1571019065">Research support</a>
                        <a href="#">Research methodology</a>
                        <a href="#">Postdoctoral fellows</a>
                        <a href="#">Prestige lectures</a>
                        <a href="#">Research project funding</a>
                        <a href="#">Ethics committees</a>
                        <a href="#">Short Learning Programmes</a>
                        <a href="#">ILIMA videos</a>
                        <a href="#">Workshops</a>
                        <a href="#">Postgraduate documentation</a>
                        <a href="#">Master's and doctoral studies</a>
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






