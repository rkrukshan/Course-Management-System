@extends('layout.front')
@section('body')

    <body>
        <!-- Home -->
        <div id="home" class="hero-area">
            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
            <!-- /Backgound Image -->
            <div class="home-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="white-text">Edusite Free Online Training Courses</h1>
                            <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant, eu pro
                                alii error homero.</p>
                            <a class="main-button icon-button" href="#">Get Started!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Home -->

        <!-- About -->
        <div id="about" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <div class="col-md-6">
                        <div class="section-header">
                            <h2>Welcome to Edusite</h2>
                            <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                        </div>

                        <!-- feature -->
                        <div class="feature">
                            <i class="feature-icon fa fa-flask"></i>
                            <div class="feature-content">
                                <h4>Online Courses </h4>
                                <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.
                                </p>
                            </div>
                        </div>
                        <!-- /feature -->

                        <!-- feature -->
                        <div class="feature">
                            <i class="feature-icon fa fa-users"></i>
                            <div class="feature-content">
                                <h4>Expert Teachers</h4>
                                <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.
                                </p>
                            </div>
                        </div>
                        <!-- /feature -->

                        <!-- feature -->
                        <div class="feature">
                            <i class="feature-icon fa fa-comments"></i>
                            <div class="feature-content">
                                <h4>Community</h4>
                                <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.
                                </p>
                            </div>
                        </div>
                        <!-- /feature -->

                    </div>

                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('./img/about.png') }}" alt="">
                        </div>
                    </div>

                </div>
                <!-- row -->

            </div>
            <!-- container -->
        </div>
        <!-- /About -->
        <!-- Call To Action -->
        <div id="cta" class="section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.jpg)"></div>
            <!-- /Backgound Image -->

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <div class="col-md-6">
                        <h2 class="white-text">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis.</h2>
                        <p class="lead white-text">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas
                            veniam nominati.</p>
                        <a class="main-button icon-button" href="#">Get Started!</a>
                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Call To Action -->

        <!-- Why us -->
        <div id="why-us" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">
                    <div class="section-header text-center">
                        <h2>Why Edusite</h2>
                        <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                    </div>

                    <!-- feature -->
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="feature-icon fa fa-flask"></i>
                            <div class="feature-content">
                                <h4>Online Courses</h4>
                                <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="feature-icon fa fa-users"></i>
                            <div class="feature-content">
                                <h4>Expert Teachers</h4>
                                <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="feature-icon fa fa-comments"></i>
                            <div class="feature-content">
                                <h4>Community</h4>
                                <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                </div>
                <!-- /row -->

                <hr class="section-hr">

                <!-- row -->
                <div class="row">

                    <div class="col-md-6">
                        <h3>Persius imperdiet incorrupte et qui, munere nusquam et nec.</h3>
                        <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                        <p>No vel facete sententiae, quodsi dolores no quo, pri ex tamquam interesset necessitatibus. Te
                            denique cotidieque delicatissimi sed. Eu doming epicurei duo. Sit ea perfecto deseruisse
                            theophrastus. At sed malis hendrerit, elitr deseruisse in sit, sit ei facilisi mediocrem.</p>
                    </div>

                    <div class="col-md-5 col-md-offset-1">
                        <a class="about-video" href="#">
                            <img src="{{ asset('./img/about-video.jpg') }}" alt="">
                            <i class="play-icon fa fa-play"></i>
                        </a>
                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Why us -->

        <!-- Contact CTA -->
        <div id="contact-cta" class="section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
            <!-- Backgound Image -->

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="white-text">Contact Us</h2>
                        <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                        <a class="main-button icon-button" href="#">Contact Us Now</a>
                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Contact CTA -->
    </body>

    </html>
@endsection
