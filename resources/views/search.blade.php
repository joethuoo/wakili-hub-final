@extends('master')

@section('body')
    <div id="main-wrapper">
        <header id="header">
            <div class="header-top-bar">
                <div class="container">
                    <!-- HEADER-LOGIN -->
                    <div class="header-login">

                        <a href="#" class=""><i class="fa fa-power-off"></i> Login</a>

                        <div>
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Username">
                                <input type="password" class="form-control" placeholder="Password">
                                <input type="submit" class="btn btn-default" value="Login">
                                <a href="#" class="btn btn-link">Forgot Password?</a>
                            </form>
                        </div>
                    </div>
                    <!-- END .HEADER-LOGIN -->

                    <!-- HEADER REGISTER -->
                    <div class="header-register">
                        <a href="#" class=""><i class="fa fa-plus-square"></i> Register</a>

                        <div>
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Username">
                                <input type="email" class="form-control" placeholder="Email">
                                <input type="password" class="form-control" placeholder="Password">
                                <input type="submit" class="btn btn-default" value="Register">
                            </form>
                        </div>
                    </div>
                    <!-- END .HEADER-REGISTER -->

                    <!-- HEADER-LOG0 -->
                    <div class="header-logo text-center">
                        <h2><a href="index.html"><img src="assets/img/logotiny.png"> WAKILI HUB</a></h2>
                    </div>
                    <!-- END HEADER LOGO -->

                    <!-- HEADER-SOCIAL -->
                    <div class="header-social">
                        <a href="#">
                            <span><i class="fa fa-share-alt"></i></span>
                            <i class="fa fa-chevron-down social-arrow"></i>          </a>

                        <ul class="list-inline">
                            <li class="active"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                        </ul>
                    </div>
                    <!-- END HEADER-SOCIAL -->

                    <!-- HEADER-LANGUAGE -->
                    <!-- <div class="header-language">
                      <a href="#">
                        <span>EN</span>
                        <i class="fa fa-chevron-down"></i>
                      </a>

                      <ul class="list-unstyled">
                        <li class="active"><a href="#">EN</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a href="#">PT</a></li>
                        <li><a href="#">IT</a></li>
                      </ul>
                    </div>--> <!-- END HEADER-LANGUAGE -->

                    <!-- CALL TO ACTION -->
                    <div class="header-call-to-action">
                        <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Get Listed</a>
                    </div>
                    <!-- END .HEADER-CALL-TO-ACTION -->

                </div><!-- END .CONTAINER -->
            </div>
            <!-- END .HEADER-TOP-BAR -->

            <!-- HEADER SEARCH SECTION -->
            <div class="header-search slider-home">
                <div class="header-search-bar">
                    <form action="/search" method="POST">
                        {!! Form::token() !!}
                        <div class="search-toggle">
                            <div class="container">
                                <p>Location:</p>
                                <div class="select-country">
                                    <select name = "country" class="" data-placeholder="-Select County-">
                                        <option value=""></option>
                                        <option value="nairobi">Nairobi</option>
                                        <option value="kisumi">Kisumu</option>
                                        <option value="mombasa">Mombasa</option>
                                    </select>
                                </div>

                                <div class="address">
                                    <input name = "address" type="text" placeholder="-Address-">
                                </div>

                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>

                            </div>
                        </div>  <!-- END .search-toggle -->

                        <div class="container">
                            <button class="toggle-btn" type="submit"><i class="fa fa-bars"></i></button>

                            <div class="search-value">
                                <div class="keywords">
                                    <input name = "keywords" type="text" class="form-control" placeholder="Keywords">
                                </div>

                                <div class="select-location">
                                    <select name = "location" class="" data-placeholder="-Select Town-">
                                        <option value=""></option>
                                        <option value="busia">Busia</option>
                                        <option value="bomet">Bomet</option>
                                        <option value="bondo">Bondo</option>
                                        <option value="thika">Thika</option>
                                        <option value="nyeri">Nyeri</option>
                                        <option value="muranga">Muranga</option>
                                    </select>
                                </div>

                                <div class="category-search">
                                    <select name = "category" class="" data-placeholder="-Select Practice-">
                                        <option value=""></option>
                                        <option value="business">Business Law</option>
                                        <option value="juvenile">Juvenile</option>
                                        <option value="property">Property</option>
                                        <option value="family">Family Law</option>
                                        <option value="patents">Patents</option>
                                    </select>
                                </div>

                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div> <!-- END .CONTAINER -->
                    </form>
                </div> <!-- END .header-search-bar -->

                <div class="slider-content">

                    <div id="home-slider" class="owl-carousel owl-theme">

                        <div class="item"><img src="assets/img/content/home-slide-img.jpg" alt=""><div class="slide-content">
                                <!--  <a href="#"><img src="img/slider-logo.png" alt=""></a> -->
                                <h1>The <span>Right</span> Place</h1>
                                <h2>For Lawyers / Law Firms / Clients</h2>

                            </div>

                        </div>

                        <div class="item"><img src="assets/img/content/home-slider-img-two.jpg" alt=""><div class="slide-content">
                                <!--  <a href="#"><img src="img/slider-logo.png" alt=""></a> -->
                                <h1>The <span>Right</span> Place</h1>
                                <h2>For Lawyers</h2>


                            </div>

                        </div>

                        <div class="item"><img src="assets/img/content/home-slide-img.jpg" alt=""><div class="slide-content">
                                <!--  <a href="#"><img src="img/slider-logo.png" alt=""></a> -->
                                <h1>The <span>Right</span> Place</h1>
                                <h2>For Lawyers</h2>


                            </div>
                        </div>
                    </div>

                    <div class="customNavigation">
                        <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                        <a class="btn next"><i class="fa fa-angle-right"></i></a>
                    </div>

                </div> <!-- END .slider-content -->
            </div> <!-- END .SEARCH and slide-section -->

            <div class="container">
                <div class="header-nav-bar home-slide">
                    <nav>

                        <button><i class="fa fa-bars"></i></button>

                        <ul class="primary-nav list-unstyled">
                            <li class="bg-color"><a href="{{ url('/') }}">Home</a>            </li>

                            <li class=""><a href="{{ url('lawyer/lawyers') }}">Lawyers</i></a> </li>

                            <li><a href="{{ url('firm') }}">Law Firms</a></li>
                            <li><a href="{{ url('firm/jobs') }}">Job Opportunities</a></li><li><a href="{{ url('lawyer/whyregister') }}">Why Register</a></li>
                            <li><a href="{{ url('firm/about') }}">About Us</a></li>
                            <li><a href="{{ url('firm/contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- end .header-nav-bar -->
            </div> <!-- end .container -->
        </header> <!-- end #header -->

        <div id="page-content" class="home-slider-content">
            <div class="container">
                <div class="home-with-slide">
                    <div class="row">

                        <div class="col-md-9 col-md-push-3">
                            <div class="page-content">




                                <div class="product-details">
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="all-categories">
                                            <div class="row clearfix">
                                                <br/>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="category-item2">
                                                        <h4><strong>Know Your Legal Rights</strong> </h4>
                                                        <p>Constitutional rights.What are they? know your rights under Kenya Law</p>

                                                        <p><a href="kenyaconstitution.html"><i class="fa fa-check-circle-o"></i> Kenyan Constitution</a></p>
                                                        <p><a href="kenyagovagencies.html"><i class="fa fa-check-circle-o"></i> Goverment Agencies</a></p>
                                                        <p><a href="kenyacourts.html"><i class="fa fa-check-circle-o"></i> Goverment Courts</a></p>
                                                    </div>

                                                </div> <!-- end .grid-layout -->

                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="category-item2">
                                                        <h4><strong>Inside the Courts</strong> </h4>
                                                        <p>Learn about our judicial system</p>

                                                        <p><a href="lawsuits.html"><i class="fa fa-check-circle-o"></i> Lawsuits and Litigation</a></p>
                                                        <p><a href="expungement.html"><i class="fa fa-check-circle-o"></i> Expungement</a></p>
                                                        <p><a href="statutes.html"><i class="fa fa-check-circle-o"></i> Statutes of limitations</a></p>
                                                    </div>

                                                </div> <!-- end .grid-layout -->


                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="category-item2">
                                                        <h4><strong>Legal Books and Resources</strong> </h4>


                                                        <p><a href="legalvideos.html"><i class="fa fa-check-circle-o"></i> Legal Videos</a></p>
                                                        <p><a href="legalarticles.html"><i class="fa fa-check-circle-o"></i> Articles</a></p>
                                                        <p><a href="legalbooks.html"><i class="fa fa-check-circle-o"></i> Suggested Legal Books</a></p>
                                                        <p><a href="www.ilawkenya.com"><i class="fa fa-check-circle-o"></i> I-Law Kenya</a></p>
                                                    </div>

                                                </div> <!-- end .grid-layout -->


                                                @if($lawyers)
                                                <h3>Found <span>Lawyers</span></h3>
                                                <div class="col-lg-12 col-md-12 col-sm-4 ">


                                                        @foreach($lawyers as $lawyer)
                                                            <div class="col-sm-4 col-xs-6">

                                                                <div class="single-product">

                                                                    <figure>
                                                                        <img src="{{asset('/lawyers/'.$lawyer->lawyer_photo_filename)}}" alt="">
                                                                        <div class="rating">


                                                                            <p>Featured</p>
                                                                        </div>
                                                                        <!-- end .rating -->

                                                                        <figcaption>

                                                                            <div class="read-more">
                                                                                <a href="{{ url('lawyer/lawyers/'.$lawyer->lawyer_id.'/readmore') }}"><i class="fa fa-angle-right"></i> Read More</a>                            </div>
                                                                        </figcaption>
                                                                    </figure>

                                                                    <h4><a href="#">{{ $lawyer->lawyer_first_name }} {{$lawyer->lawyer_middle_name }} {{$lawyer->lawyer_last_name }} </a></h4>


                                                                    <h5><a href="#">{{$lawyer->lawyer_law_firm_name }}</a></h5>

                                                                    <p>Nairobi, Business Law, Corporate Law, Real Estate Law. {{$lawyer->lawyer_experience}} years of Experience.</p>

                                                                    <a class="read-more" href="{{ url('lawyer/lawyers/'.$lawyer->lawyer_id.'/readmore') }}"><i class="fa fa-angle-right"></i>Read More</a>

                                                                </div> <!-- end .single-product -->
                                                            </div> <!-- end .grid-layout -->
                                                        @endforeach


                                                </div>
                                                @endif

                                                @if($firms)
                                                    <h3>Found <span>Law Firms</span></h3>
                                                    <div class="col-lg-12 col-md-12 col-sm-4 ">


                                                        @foreach($firms as $firm)
                                                            <div class="col-sm-4 col-xs-6">
                                                                <div class="single-product">
                                                                    <figure>
                                                                        <img src="assets/img/content/firmlogo.jpg" alt="">

                                                                        <div class="rating">
                                                                            <ul class="list-inline">
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                                            </ul>

                                                                            <p>Featured</p>
                                                                        </div>
                                                                        <!-- end .rating -->

                                                                        <figcaption>

                                                                            <div class="read-more">
                                                                                <a href="{{ url('firm/'.$firm->firm_id.'/readmore')}}"><i class="fa fa-angle-right"></i> View Profile</a>
                                                                            </div>
                                                                        </figcaption>
                                                                    </figure>
                                                                    <h4><a href="{{ url('firm/'.$firm->firm_id.'/readmore')}}">{{ $firm->firm_name }}</a></h4>
                                                                    <h5><a href="{{ url('firm/'.$firm->firm_id.'/readmore')}}">
                                                                            {{ $firm->firm_practice_name }}
                                                                        </a></h5>
                                                                </div>
                                                                </div><!-- end .single-product -->
                                                        @endforeach


                                                    </div>
                                                @endif
                                            </div>




                                        </div> <!-- end .row -->

                                    </div> <!-- end .tabe-pane -->

                                    <div class="tab-pane" id="injurylaw">
                                        <h3>Injury Law <span class="comments">143</span></h3>

                                        <div class="row clearfix">

                                            <div class="col-sm-4 col-xs-6">
                                                <!--div class="col-sm-4 col-xs-6">
                                                  <div class="single-product">
                                                    <figure>
                                                      <img src="assets/img/content/post-img-2.jpg" alt="">
                                                      <div class="rating">

                                                       <!-- <ul class="list-inline">
                                                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                          <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                          <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>-->
                                                <!--p>Featured</p>
                                              </div>
                                              <!-- end .rating -->

                                                <!--figcaption>

                                                  <div class="read-more">
                                                    <a href="#"><i class="fa fa-angle-right"></i> Read More</a>                            </div>
                                                </figcaption>
                                              </figure>

                                              <h4><a href="#">Moses Chelanga</a></h4>

                                              <h5><a href="#">Chelanga & Co Advocates</a></h5>

                                              <p>Nairobi, Business Law, Corporate Law, Real Estate Law. 20 years of Experience.</p>

                                              <a class="read-more" href="viewlawyer.html"><i class="fa fa-angle-right"></i>Read More</a>

                                            </div> <!-- end .single-product -->
                                                <!-/div> <!-- end .grid-layout -->

                                                <!--div class="col-sm-4 col-xs-6">
                                                  <div class="single-product">
                                                    <figure>
                                                      <img src="assets/img/content/post-img-4.jpg" alt="">

                                                      <div class="rating">
                                                    <!--    <ul class="list-inline">
                                                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                          <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                          <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>-->

                                                <!--p>Featured</p>
                                              </div>
                                              <!-- end .rating -->

                                                <!--figcaption>

                                                  <div class="read-more">
                                                    <a href="#"><i class="fa fa-angle-right"></i> Read More</a>                            </div>
                                                </figcaption>
                                              </figure>
                                              <h4><a href="#">Moses Chelanga</a></h4>
                                              <h5><a href="#">Chelanga & Co Advocates</a></h5>

                                              <p>Nairobi, Business Law, Corporate Law, Real Estate Law. 20 years of Experience.</p>

                                              <a class="read-more" href="viewlawyer.html"><i class="fa fa-angle-right"></i>Read More</a>

                                            </div> <!-- end .single-product -->
                                                <!/div> <!-- end .grid-layout -->


                                            </div> <!-- end .row -->


                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="injurylaw">
                                            <h3>Injury Law <span class="comments">143</span></h3>

                                            <div class="row clearfix">

                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Car Accidents<span>(123)</span></a><br/>
                                                        </li>

                                                        <li><a href="#">Medical Malpractice <span>(50)</span></a>

                                                        </li>
                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>


                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="familylaw">
                                            <h3>Family Law <span class="comments">143</span></h3>

                                            <div class="row clearfix">

                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Divorce<span>(1)</span></a><br/>
                                                        </li>

                                                        <li><a href="#">Child Custody <span>(5)</span></a>

                                                        </li>
                                                        <li><a href="#">Adoption <span>(5)</span></a>

                                                        </li>
                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>


                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->


                                        <div class="tab-pane" id="estateplanning">
                                            <h3>Estate Planning<span class="comments">154</span></h3>

                                            <div class="row clearfix">

                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Trusts<span>(1)</span></a><br/></li>

                                                        <li><a href="#"> Will<span>(3)</span></a></li>


                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>

                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="realestate">
                                            <h3>Real Estate Law <span class="comments">79</span></h3>

                                            <div class="row clearfix">
                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Landlord and Tenant<span>(1)</span></a><br/></li>

                                                        <li><a href="#"> Zoning and Land Use<span>(3)</span></a></li>


                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>


                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="intellectual">
                                            <h3>Intellectual Property <span class="comments">45</span></h3>

                                            <div class="row clearfix">
                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Copyright<span>(1)</span></a><br/></li>

                                                        <li><a href="#"> Patents<span>(3)</span></a></li>
                                                        <li><a href="#"> Trademarks<span>(3)</span></a></li>

                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>

                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="employement">
                                            <h3>Employement and Labor<span class="comments">78</span></h3>

                                            <div class="row clearfix">
                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Discrimination<span>(1)</span></a><br/></li>

                                                        <li><a href="#"> Workers Compensation<span>(30)</span></a></li>

                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>
                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="criminal">
                                            <h3>Criminal Law <span class="comments">33</span></h3>

                                            <div class="row clearfix">


                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Drunk Driving<span>(1)</span></a><br/></li>

                                                        <li><a href="#"> White Collar Crime<span>(30)</span></a></li>

                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>

                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="business">
                                            <h3>Business Law <span class="comments">66</span></h3>

                                            <div class="row clearfix">

                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Formation<span>(1)</span></a><br/></li>

                                                        <li><a href="#"> Contracts<span>(30)</span></a></li>
                                                        <li><a href="#"> Bankruptcy<span>(30)</span></a></li>
                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>
                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="immigration">
                                            <h3>Immigration<span class="comments"45</span></h3>

                                            <div class="row clearfix">
                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> Work Visas<span>(1)</span></a><br/></li>

                                                        <li><a href="#"> Green Cards<span>(30)</span></a></li>
                                                        <li><a href="#"> Citizenship<span>(30)</span></a></li>
                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>

                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->

                                        <div class="tab-pane" id="foreign">
                                            <h3>Foreign and International <span class="comments">21</span></h3>

                                            <div class="row clearfix">
                                                <div class="col-sm-4 col-xs-6">

                                                    <ul class="classifieds-category">
                                                        <li><a href="#"> International Law <span>(1)</span></a><br/></li>

                                                        <li><a href="#"> International Trade<span>(30)</span></a></li>

                                                    </ul><!-- END MAIN UL -->
                                                    <!-- END .CLASSIFIES-CATEGORY -->
                                                </div>

                                            </div> <!-- end .row -->
                                        </div> <!-- end .tabe-pane -->
                                    </div> <!-- end .tabe-content -->

                                </div> <!-- end .product-details -->
                            </div> <!-- end .page-content -->
                        </div>

                        <div class="col-md-3 col-md-pull-9 category-toggle">
                            <button><i class="fa fa-briefcase"></i></button>

                            <div class="page-sidebar">

                                <!-- Category accordion -->
                                <div id="categories">
                                    <div class="accordion">
                                        <ul class="nav nav-tabs home-tab" role="tablist">
                                            <li class="active">
                                                <a href="#all-categories"  role="tab" data-toggle="tab">Popular Practice Areas
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#injurylaw" role="tab" data-toggle="tab">Injury Law
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#familylaw"  role="tab" data-toggle="tab">Family Law

                                                </a>
                                            </li>

                                            <li>
                                                <a href="#estateplanning" role="tab" data-toggle="tab">Estate Planning

                                                </a>
                                            </li>

                                            <li>
                                                <a href="#realestate" role="tab" data-toggle="tab">Real Estate Law

                                                </a>
                                            </li>

                                            <li>
                                                <a href="#intellectual" role="tab" data-toggle="tab">Intellectual Property
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#employement" role="tab" data-toggle="tab">Employement and Labor

                                                </a>
                                            </li>

                                            <li>
                                                <a href="#criminal" role="tab" data-toggle="tab">Criminal Law

                                                </a>
                                            </li>

                                            <li>
                                                <a href="#business" role="tab" data-toggle="tab">Business Law
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#immigration" role="tab" data-toggle="tab">Immigration

                                                </a>
                                            </li>

                                            <li>
                                                <a href="#foreign" role="tab" data-toggle="tab">Foreign and International

                                                </a>
                                            </li>



                                        </ul>
                                    </div> <!-- end .accordion -->
                                </div> <!-- end #categories -->

                            </div> <!-- end .page-sidebar -->
                        </div> <!-- end grid layout-->
                    </div> <!-- end .row -->
                </div> <!-- end .home-with-slide -->
            </div> <!-- end .container -->
        </div>  <!-- end #page-content -->


          <!-- end .featured-listing -->


        <div class="register-content">
            <div class="reg-heading">
                <h1><strong>Register</strong> now</h1>
            </div>

            <div class="registration-details">
                <div class="container">
                    <div class="box regular-member">
                        <h2><strong>LAWYER</strong> REGISTRATION</h2>

                        <p><i class="fa fa-check-circle-o"></i> Join the Network</p>
                        <p><i class="fa fa-check-circle-o"></i> Access to Law resources</p>
                        <p><i class="fa fa-check-circle-o"></i> Free Listing</p>

                        <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
                    </div>

                    <div class="alternate">
                        <h2>OR</h2>
                    </div>

                    <div class="box business-member">
                        <h2><strong>FIRM</strong> REGISTRATION</h2>

                        <p><i class="fa fa-check-circle-o"></i> Advertize your Firm</p>
                        <p><i class="fa fa-check-circle-o"></i> Job opportunities listing</p>
                        <p><i class="fa fa-check-circle-o"></i> Business Directory</p>

                        <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
                    </div>

                </div>
                <!-- END .CONTAINER -->
            </div>
            <!-- END .REGISTRATION-DETAILS -->
        </div>
        <!-- END REGISTER-CONTENT -->



        <footer id="footer">
            <!--   <div class="main-footer">

                 <div class="container">
                   <div class="row">

                     <div class="col-md-3 col-sm-6">
                       <div class="about-globo">
                         <h3>About Globo</h3>

                         <div class="footer-logo">
                           <a href="#"><img src="img/footer_logo.png" alt=""></a>
                           <span></span> <!-- This content for overlay effect
                         </div>

                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                           suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                       </div> <!-- End .about-globo
                     </div> <!-- end Grid layout

                     <div class="col-md-3 col-sm-6">
                       <h3>Latest From Blog</h3>

                       <div class="latest-post clearfix">
                         <div class="post-image">
                           <img src="img/content/latest_post_1.jpg" alt="">

                           <p><span>12</span>Sep</p>
                         </div>

                         <h4><a href="#">Post Title Goes Here</a></h4>

                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       </div>

                       <div class="latest-post clearfix">
                         <div class="post-image">
                           <img src="img/content/latest_post_2.jpg" alt="">

                           <p><span>09</span>Sep</p>
                         </div>

                         <h4><a href="#">Post Title Goes Here</a></h4>

                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       </div>
                     </div> <!-- end Grid layout

                     <div class="col-md-3 col-sm-6 clearfix">
                       <div class="popular-categories">
                         <h3>Popular Categories</h3>

                         <ul>
                           <li><a href="#"><i class="fa fa-shopping-cart"></i>E-commerce</a></li>
                           <li><a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment</a></li>
                           <li><a href="#"><i class="fa fa-cogs"></i>Industry</a></li>
                           <li><a href="#"><i class="fa fa-book"></i>Libraries &amp; Public Office</a></li>
                           <li><a href="#"><i class="fa fa-building-o"></i>Real Estate</a></li>
                         </ul>
                       </div> <!-- end .popular-categories
                     </div> <!-- end Grid layout

                     <div class="col-md-3 col-sm-6">
                       <div class="newsletter">
                         <h3>Newsletter</h3>

                         <form action="#">
                           <input type="Email" placeholder="Email address">
                           <button><i class="fa fa-plus"></i></button>
                         </form>

                         <h3>Keep In Touch</h3>

                         <ul class="list-inline">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         </ul>
                       </div> <!-- end .newsletter
                     </div> <!-- end Grid layout
                   </div> <!-- end .row
                 </div> <!-- end .container
               </div> -->
            <!-- end .main-footer -->

            <div class="copyright">
                <div class="container">
                    <p>Copyright 2015 &copy; Wakilihub. All rights reserved. Powered by  <a href="#">Usalama</a></p>

                    <ul class="list-inline">
                        <li><a href="lawyers.html">Lawyers</a></li>
                        <li><a href="lawfirms.html">Firms</a></li>
                        <li><a href="policies.html">Policies</a></li>

                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div> <!-- END .container -->
            </div>
            <!-- end .copyright-->
        </footer> <!-- end #footer -->



    </div> <!-- end #main-wrapper -->
@stop

@section('scripts')
    {!! Html::script('assets/js/jquery.min.js') !!}
    {!! Html::script('assets/js/jquery-ui.js') !!}
    {!! Html::script('assets/js/jquery.ba-outside-events.min.js') !!}
    {!! Html::script('http://maps.google.com/maps/api/js?sensor=true') !!}
    {!! Html::script('assets/js/gomap.js') !!}
    {!! Html::script('assets/js/gmaps.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/owl.carousel.js') !!}
    {!! Html::script('assets/js/scripts.js') !!}
@stop