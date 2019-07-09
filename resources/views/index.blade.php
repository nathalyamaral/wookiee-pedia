<!doctype html>

<html lang="zxx" class="no-js">

@appview
@endappview

<body id="bodyid" data-spy="scroll" data-target=".navbar">

    <!-- ======= começo parte pre loader ======= -->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- ======= fim ======= -->

    <!-- =======header ======= -->
    <header class="header-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-3">
                    <!-- logo -->
                    <div class="logo">
                        <a href="/">
                            <img src="img/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-xs-9">
                    <!-- menu part -->
                    <div class="menu-part">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                               
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                
                                <div class="collapse navbar-collapse main-menu" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a class="nav-link" href="#top">Home</a></li>
                                       
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ======= header ======= -->

    <!-- ======= filmes ======= -->
    <section id="blog" class="news-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="section-title text-center">
                        <h2></h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-slide owl-carousel">

                	@empty($Movie)
                        <p>Nenhum Filme encontrado.</p>
                    @else
                    	<?php $count = 1 ?>
                        @foreach ($Movie['results'] as $movieValue )

		                    <article class="news-info">
		                        <div class="news-img">
		                            <img src="img/films/<?php echo$count; $count++;?>.jpg" alt="">
		                            <div class="post-date">
		                                <div class="post-date-info">
		                                    <span> {{ date( 'd/m/Y' , strtotime( $movieValue['release_date'] ) ) }}</span> 
		                                </div>
		                            </div>
		                        </div>
		                        <div class="news-content">
		                            <div class="post-meta">
		                                <ul>
		                                    <li><a href="#"><span class="fa fa-user"></span>  {{ $movieValue['director'] }}</a></li>
		                                </ul>
		                            </div>
		                            <a href="#">
		                                <h2> {{ $movieValue['title'] }}</h2>
		                            </a>
		                            <p id="limittext" align="justify">{{$movieValue['opening_crawl']}}</p>
		                            <a class="oxe-btn hvr-shutter-out-horizontal" href="/filmes/{{ preg_replace('/[^0-9]/', '', $movieValue['url']) }}" role="button">Read More</a>
		                        </div>
		                    </article>
                    	@endforeach
                    @endempty
                </div>
            </div>
        </div>
    </section>
    <!-- ======= fi ======= -->

    <!-- ======= footer area start ======= -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="copy-right-text">
                        &copy; copyright 2019. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- modernizr js -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- jQuery min js -->
    <script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- vegas js -->
    <script src="{{ asset('js/vegas.min.js') }}"></script>
    <!-- typing js -->
    <script src="{{ asset('js/typing.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- circle progress js -->
    <script src="{{ asset('js/circle-progress.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <!-- jarallax js -->
    <script src="{{ asset('js/jarallax.min.js') }}"></script>
    <!-- lightbox js -->
    <script src="{{ asset('js/lightbox.min.js') }}"></script>
    <!-- scrollUp js -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <!-- default js com funções consumer api -->
    <script src="{{ asset('js/default.js') }}"></script>

</body>

</html>
