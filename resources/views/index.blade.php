@extends('partials.header')

@section('content')

    <!-- section featured -->
    <section id="featured">

        <!-- slideshow start here -->

        <div class="camera_wrap" id="camera-slide">

            <!-- slide 1 here -->
            <div data-src="{{asset('dist/img/slides/camera/slide1/img1.jpg')}}">
                <div class="camera_caption fadeFromLeft">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <h2 class="animated fadeInDown"><strong>Great template for <span class="colored">multi usage</span></strong></h2>
                                <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
                                <a href="#" class="btn btn-success btn-large animated fadeInUp">
                                    <i class="icon-link"></i> Read more
                                </a>
                                <a href="#" class="btn btn-theme btn-large animated fadeInUp">
                                    <i class="icon-download"></i> Download
                                </a>
                            </div>
                            <div class="span6">
                                <img src="{{asset('dist/img/slides/camera/slide1/screen.png')}}" alt="" class="animated bounceInDown delay1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slide 2 here -->
            <div data-src="img/slides/camera/slide2/img1.jpg">
                <div class="camera_caption fadeFromLeft">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <img src="{{asset('dist/img/slides/camera/slide2/iMac.png')}}" alt="" />
                            </div>
                            <div class="span6">
                                <h2 class="animated fadeInDown"><strong>Put your <span class="colored">Opt in form</span></strong></h2>
                                <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
                                <form>
                                    <div class="input-append">
                                        <input class="span3 input-large" type="text">
                                        <button class="btn btn-theme btn-large" type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- slide 3 here -->
            <div data-src="img/slides/camera/slide2/img1.jpg">
                <div class="camera_caption fadeFromLeft">
                    <div class="container">
                        <div class="row">
                            <div class="span12 aligncenter">
                                <h2 class="animated fadeInDown"><strong><span class="colored">Responsive</span> and <span class="colored">cross broswer</span> compatibility</strong></h2>
                                <p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                <img src="{{asset('dist/img/slides/camera/slide3/browsers.png')}}" alt="" class="animated bounceInDown delay1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- slideshow end here -->

    </section>
    <!-- /section featured -->

    <section id="content">
        <div class="container">


            <div class="row">

                <div class="span3">
                    <div class="service-box aligncenter flyLeft">
                        <div class="icon">
                            <i class="icon-circled icon-bgprimary icon-code icon-4x"></i>
                        </div>
                        <h5>Custom <span class="colored">CMS</span></h5>
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                        </p>

                    </div>
                </div>
                <div class="span3">
                    <div class="service-box aligncenter flyIn">
                        <div class="icon">
                            <i class="icon-circled icon-bgsuccess icon-cloud icon-4x"></i>
                        </div>
                        <h5>Cloud <span class="colored">Hosting</span></h5>
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                        </p>

                    </div>
                </div>
                <div class="span3">
                    <div class="service-box aligncenter flyIn">
                        <div class="icon">
                            <i class="icon-circled icon-bgdanger icon-mobile-phone icon-4x"></i>
                        </div>
                        <h5>Mobile <span class="colored">Application</span></h5>
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                        </p>

                    </div>
                </div>
                <div class="span3">
                    <div class="service-box aligncenter flyRight">
                        <div class="icon">
                            <i class="icon-circled icon-bgwarning icon-envelope-alt icon-4x"></i>
                        </div>
                        <h5>Viral <span class="colored">Marketing</span></h5>
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                        </p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <div class="cta-box">
                        <div class="row">
                            <div class="span8">
                                <div class="cta-text">
                                    <h2>Special price in very <span>limited</span> times</h2>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="cta-btn">
                                    <a href="#" class="btn btn-theme">Get a quote <i class="icon-angle-right"></i></a>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <div class="row">
                <div class="span12 aligncenter">
                    <h3 class="title">What people <strong>saying</strong> about us</h3>
                    <div class="blankline30"></div>

                    <ul class="bxslider">
                        <li>
                            <blockquote>
                                Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                                feugiat
                            </blockquote>
                            <div class="testimonial-autor">
                                <img src="{{asset('dist/img/dummies/testimonial/1.png')}}" alt="" />
                                <h4>Hillary Doe</h4>
                                <a href="#">www.companyname.com</a>
                            </div>
                        </li>
                        <li>
                            <blockquote>
                                Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                                feugiat
                            </blockquote>
                            <div class="testimonial-autor">
                                <img src="{{asset('dist/img/dummies/testimonial/2.png')}}" alt="" />
                                <h4>Michael Doe</h4>
                                <a href="#">www.companyname.com</a>
                            </div>
                        </li>
                        <li>
                            <blockquote>
                                Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                                feugiat
                            </blockquote>
                            <div class="testimonial-autor">
                                <img src="{{asset('dist/img/dummies/testimonial/3.png')}}" alt="" />
                                <h4>Mark Donovan</h4>
                                <a href="#">www.companyname.com</a>
                            </div>
                        </li>
                        <li>
                            <blockquote>
                                Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                                feugiat
                            </blockquote>
                            <div class="testimonial-autor">
                                <img src="{{asset('dist/img/dummies/testimonial/4.png')}}" alt="" />
                                <h4>Marry Doe Elliot</h4>
                                <a href="#">www.companyname.com</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </section>


    <section id="works">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4 class="title">Recent <strong>Works</strong></h4>
                    <div class="row">

                        <div class="grid cs-style-4">
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="{{asset('dist/img/dummies/works/1.jpg')}}" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
								<a href="{{asset('dist/img/dummies/works/big.png')}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                                                <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="{{asset('dist/img/dummies/works/2.jpg')}}" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
								<a href="{{asset('dist/img/dummies/works/big.png')}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                                                <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="{{asset('dist/img/dummies/works/3.jpg')}}" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
								<a href="{{asset('dist/img/dummies/works/big.png')}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                                                <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="{{asset('dist/img/dummies/works/4.jpg')}}" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
								<a href="{{asset('dist/img/dummies/works/big.png')}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                                                <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection