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
                            <img src="../../img/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-xs-9">
                    <!-- menu part -->
                    <div class="menu-part">
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ======= header ======= -->

<!-- ======= page title part srat ======= -->
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <h2>Detalhes Filme</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= single blog part start ======= -->
    <section class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="blog-list">
                        <!-- single blog post details -->
                        <article class="single-blog-post">
                            <img src="../../img/films/{{$idimg}}.jpg" alt="">
                            <a href="#">
                                <h2>{{ $informationMovie['title'] }}</h2>
                            </a>
                            <div class="post-info">
                                <div class="author-info">
                                    <a href="#">
                                        <h3>{{ $informationMovie['director'] }}, {{ $informationMovie['producer'] }}</h3>
                                    </a>
                                </div>
                                <div class="date-info text-right">
                                    <a href="#">{{ date( 'd/m/Y' , strtotime( $informationMovie['release_date'] ) ) }}</a>
                                </div>
                            </div>
                            <p align="justify">{{ $informationMovie['opening_crawl'] }}</p>
                            
                        </article>
                        <!-- /.single blog post details -->
                        <!-- blog comment -->
                        <div class="blog-comment-wraper">
                        <div class="row">
                            <div class="col-md-12">
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
                                                <li>
                                                    <a class="nav-link @if ($informationMovie['actionPage'] == 'personagem') active @endif" href="/filmes/{{ preg_replace('/[^0-9]/', '', $informationMovie['url']) }}/personagem" id="people">Personagens</a>
                                                </li>
                                                <li >
                                                    <a class="nav-link @if ($informationMovie['actionPage'] == 'planetas') active @endif" href="/filmes/{{ preg_replace('/[^0-9]/', '', $informationMovie['url']) }}/planetas">Planetas</a>
                                                </li>
                                                <li >
                                                    <a class="nav-link @if ($informationMovie['actionPage'] == 'especies') active @endif" href="/filmes/{{ preg_replace('/[^0-9]/', '', $informationMovie['url']) }}/especies">Espécies</a>
                                                </li>
                                                <li >
                                                    <a class="nav-link @if ($informationMovie['actionPage'] == 'naves') active @endif" href="/filmes/{{ preg_replace('/[^0-9]/', '', $informationMovie['url']) }}/naves">Naves</a>
                                                </li>
                                                <li >
                                                    <a class="nav-link @if ($informationMovie['actionPage'] == 'veiculos') active @endif" href="/filmes/{{ preg_replace('/[^0-9]/', '', $informationMovie['url']) }}/veiculos">Veículos</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                
                                <table class="table table-dark">
                                    <thead .thead-light>
                                        <tr>
                                            @foreach ($informationMovie['translate'] as $translateValue)
                                                <th scope="col">{{ $translateValue }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($informationMovie['data'] as $dataArray)
                                            <tr scope="row">
                                                @foreach ($dataArray as $dataIndex => $dataValue)
                                                    @if ($loop->index < count($informationMovie['translate']))
                                                        <td>{{ $dataValue }}</td>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= single blog part end ======= -->

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
