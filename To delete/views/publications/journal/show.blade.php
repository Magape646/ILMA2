@extends('layouts.frontend')


@section('title')
ILMA - Journals
@endsection



@section('indexcontent')



<div class="inner-content no-padding-top">
    <div class="container-fluid no-padding">
                <article class="style3 single text-center">
                        <div class="overlay overlay-02"></div>
                        <div class="post-thumb">
                            <div class="container">
                            <div class="post-excerpt">

                                <h3 class="h1 text-white">{{ $publicationjournal->title }}</h3>
                                <div class="meta">
                                    <span>{{ $publicationjournal->updated_at }}</span>
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
                    <h2 class="title2 text-center">Abstract</h2>
                    <br>
                    {{ $publicationjournal->abstract }}

                    <div class="clearfix"></div>


                </div>

                <br>

                <div class="post-nav ">
                    <a href="/publicationjournals" class="btn btn-primary ">Back</a>
                </div>





            </div>


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




