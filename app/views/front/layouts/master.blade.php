<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $title }} | website name</title>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="/front_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/front_assets/font-awesome-4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="/front_assets/css/main.css" type="text/css" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--
    flame, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

    Download: http://zypopwebtemplates.com/

    License: Creative Commons Attribution
    //-->
</head>
<body>
<div id="container">
    <header>
        <h1><a href="/">Company<span>Name</span></a></h1>
        <h2>your website slogan here</h2>
    </header>
    <!-- PAGES START -->
    <nav>
        <ul>
            <li class="start selected"><a href="index.html">Home</a></li>
            <li class=""><a href="examples.html">Examples</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Solutions</a></li>
            <li class="end"><a href="#">Contact</a></li>
        </ul>
    </nav>
    <!-- PAGES END -->


    <!-- SLIDER START-->
    <div id="homepage-slider" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="item active">
                <img src="/front_assets/images/slider/slider-1.png" alt="Image" />
            </div>
            <div class="item">
                <img src="/front_assets/images/slider/slider-2.png" alt="Image" />
            </div>
            <div class="item">
                <img src="/front_assets/images/slider/slider-3.png" alt="Image" />
            </div>
            <div class="item">
                <img src="/front_assets/images/slider/slider-4.png" alt="Image" />
            </div>
            <div class="item">
                <img src="/front_assets/images/slider/slider-5.png" alt="Image" />
            </div>


        </div>
        <a class="left carousel-control" href="#homepage-slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#homepage-slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

    <!-- SLIDER END -->


    <div id="body">
        <!-- CONTENT AREA START -->
        <section id="content">
            <article>
                <h2>@yield('title')</h2>
            </article>

            <article class="expanded">
                @yield('content')
            </article>

        </section>

        <!-- CONTENT AREA END -->

        <aside class="sidebar">
            <ul>
                <li>
                    <h4>Categories</h4>
                    <ul>
                        @foreach($categories as $category)
                        <li><a href="{{ route('sms.category', $category->slug) }}">{{ $category->title }} ({{ count($category->sms) }})</a></li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <h4>Latest SMS</h4>
                    <ul>
                        <li><a href="index.html">Home Page</a></li>
                        <li><a href="examples.html">Style Examples</a></li>
                        <li><a href="#">Commodo vestibulum sem mattis</a></li>
                        <li><a href="#">Sed aliquam libero ut velit bibendum</a></li>
                        <li><a href="#">Maecenas condimentum velit vitae</a></li>
                    </ul>
                </li>
                <li>
                    <h4>Most Viewed SMS</h4>
                    <ul>
                        @foreach($mostViewedSms as $mvs)
                            <li><a href="{{ route('sms.detail', $mvs->slug) }}">{{ str_limit($mvs->title, 50, ' [...]') }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <h4>Search site</h4>
                    <ul>
                        <li class="text">
                            <form method="get" class="searchform" action="#" >
                                <p>
                                    <input type="text" size="20" value="" name="s" class="s" />
                                </p>
                                <p>
                                    <input type="submit" value="GO!">
                                </p>
                            </form>
                        </li>
                    </ul>
                </li>

                <li>
                    <h4>Follow Us</h4>
                    <ul class="follow-us" >
                        <li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li>
                    </ul>
                </li>

            </ul>

        </aside>
        <div class="clear"></div>
    </div>
    <footer>
        <div class="footer-content">
            <ul>
                <li><h4>Category</h4></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Blandit elementum</a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
            </ul>

            <ul>
                <li><h4>Search</h4></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Cras dictum</a></li>
            </ul>

            <ul class="endfooter follow-us">
                <li><h4>Follow Us</h4></li>
                <li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li>
            </ul>

            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <a href="#">Student of Sir Ayaz Ahmed</a> by Al-Fateem Academy 2009-2016</p>
        </div>
    </footer>
</div>

<!-- SCRIPTS -->
<script src="/front_assets/js/jquery-1.12.3.min.js"></script>
<script src="/front_assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>