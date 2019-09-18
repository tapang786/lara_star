@extends('frontend.layouts.app')

@section('content')
    
<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                        <h2 data-animation="animated bounceInDown"><span>Give a little change a lot</span></h2>
                        <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>             
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                        <h2 data-animation="animated bounceInDown"><span>More charity More better life</span></h2>
                        <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>             
             </div>
            <!-- Item 3 -->
            <div class="item slide3">
                        <h2 data-animation="animated bounceInDown"><span>Raise fund Warm heart</span></h2>
                        <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>             
             </div>
            <!-- Item 4 -->
            <div class="item slide4">
                        <h2 data-animation="animated bounceInDown"><span>Raise your funds for a cause</span></h2>
                        <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>             
             </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h1>ABOUT CHARITY HOPE</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
<div class="text-center">
<a href="donate.html" class="btn1">donate now</a>
<a href="about-us.html" class="btn2">Read More</a>
</div>
</div>
</div>
</section>

<section id="activities-sec">
<div class="container">
<div class="row text-center">
<h1>WHAT WE DO?</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-left"> 
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-heart"></i></div>
<div class="grid-content-wrapper"><h4>Charity for Education</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
<div class="grid-content-wrapper"><h4>Feed for Hungry Child</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-home"></i></div>
<div class="grid-content-wrapper"><h4>Home for Homeless</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-tint"></i></div>
<div class="grid-content-wrapper"><h4>Bringing Clean Water</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
<div class="grid-content-wrapper"><h4>Help Little Hands</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-money"></i></div>
<div class="grid-content-wrapper"><h4>Donate for Children</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="video-sec">
<div class="container">
<div class="row text-center">
<h1>How can you help?</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-left"> 
<div class="col-md-6 clearfix top-off">
<video width="400" controls>
 <source src="{{url('frontend')}}/images/mov_bbb.mp4" type="video/mp4">
</video>
</div>
<div class="col-md-6 clearfix top-off">
<div class="media">
<div class="media-image">
<img src="{{url('frontend')}}/images/g1.png" class="attachment-full size-full" alt="g1">                                                                                            </div>
<div class="media-text">
<h5>BECOME A VOLUNTEER</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
</div>
<div class="media">
<div class="media-image">
<img src="{{url('frontend')}}/images/g2.png" class="attachment-full size-full" alt="g1">                                                                                            </div>
<div class="media-text">
<h5>MAKE A GIFT</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
</div>
<div class="media">
<div class="media-image">
<img src="{{url('frontend')}}/images/g1.png" class="attachment-full size-full" alt="g1">                                                                                            </div>
<div class="media-text">
<h5>GIVE A SCHOLASHIP</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="projects-sec">
<div class="container">
<div class="row text-center">
<h1>OUR PROJECTS</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-center"> 
<div class="col-md-4 clearfix top-off">
<div class="grid-image"><img src="{{url('frontend')}}/images/test1.jpg"></div>
<div class="post-content">
<h3>Nepal Earthquake: Clean Water Initiative</h3>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="projects.html" title="" >View Project</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-image"><img src="{{url('frontend')}}/images/test2.jpg"></div>
<div class="post-content">
<h3>Nepal Earthquake: Clean Water Initiative</h3>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="projects.html" title="" >View Project</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-image"><img src="{{url('frontend')}}/images/test3.jpg"></div>
<div class="post-content">
<h3>Nepal Earthquake: Clean Water Initiative</h3>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="projects.html" title="" >View Project</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="gallery-sec">
<div class="container">
<div class="row text-center">
<h1>OUR GALLERY</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<ul class="clearfix">

<li>
<a href="{{url('frontend')}}/images/gallery1.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="{{url('frontend')}}/images/gallery1.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div></a>
</li>
<li>
<a href="{{url('frontend')}}/images/gallery2.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="{{url('frontend')}}/images/gallery2.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>

<li>
<a href="{{url('frontend')}}/images/gallery3.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="{{url('frontend')}}/images/gallery3.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>

<li>
<a href="{{url('frontend')}}/images/gallery4.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="{{url('frontend')}}/images/gallery4.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="{{url('frontend')}}/images/gallery5.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="{{url('frontend')}}/images/gallery5.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="{{url('frontend')}}/images/gallery6.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="{{url('frontend')}}/images/gallery6.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="{{url('frontend')}}/images/gallery7.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="{{url('frontend')}}/images/gallery7.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
<li>
<a href="{{url('frontend')}}/images/gallery8.jpg" class="swipebox" title="My Caption">
<div class="image"><img src="{{url('frontend')}}/images/gallery8.jpg">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div>
</a>
</li>
</ul>
<div class="text-center">
<a href="gallery.html" class="btn1">View More</a>
</div>
</div>
</div>
</section>

@endsection