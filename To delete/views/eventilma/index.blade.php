@extends('layouts.frontend')


@section('title')
ILMA | Events
@endsection




@section('indexcontent')


<div class="inner-content">
    <div class="container">


        <div class="row">
            <div class="col-md-8">
                @if (count($eventilmas) > 0)

                @foreach ($eventilmas as $eventilma)

                <article class="style2">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <a  >
                                <div class="article-thumb">
                                    <img src="/storage/img/events_images/{{ $eventilma->cover_image}}" class="img-responsive" alt=""/>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="post-excerpt">
                            <br>
                                <h4 class="title4 text-center"><a  >{{ $eventilma->eventtitle }}</a></h4>
                                <div class="meta text-center">
                                    <br>
                                    <span><strong>{{ $eventilma->eventvenue }}</strong></span>
                                    <br>
                                    <span>{{ $eventilma->eventdate }}</span>
                                    <br>
                                    <br>
                                    <a href="/eventilmas/{{ $eventilma->id }}" class="small-title rmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>



                @endforeach

                @else
                <p>No posts found</p>

                @endif




                <ul class="pagi-nation">
                    {{ $eventilmas->links()   }}
               </ul>
            </div>

            <aside class="col-md-4">
                <div class="side-widget">
                    <h4>Follow Us</h4>
                    <div class="side-social">
                        <a href="#"><i class="fa fa-facebook"></i> 2,279 <span>fans</span></a>
                        <a href="#"><i class="fa fa-twitter"></i> 1,928 <span>followers</span></a>
                        <a href="#"><i class="fa fa-google-plus"></i> 829 <span>followers</span></a>
                    </div>
                </div>

                <div class="clearfix"></div>



                <div class="side-widget">
                    <h4><i class="fa fa-instagram"></i> &nbsp;Instagram</h4>
                    <ul class="instagram-lite"></ul>
                </div>

                <div class="clearfix"></div>

                <div class="side-widget">
                    <h4>Tweets</h4>
                    <div id="tweecool"></div>
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


@endsection


