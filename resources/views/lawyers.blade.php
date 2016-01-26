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
            <form action="/wekalawyer" method="POST">
               {{!! Form::token() !!}}
             
              <input type="text" name="first_name" class="form-control" placeholder="First Name">
              <input type="text" name="last_name" class="form-control" placeholder="Second Name">
              <input type="text" name="mobile_number" class="form-control" placeholder="Phone Number">
              <input type="email" name="email" class="form-control" placeholder="Email">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
              <input type="submit" class="btn btn-default" value="register">
            </form>
          </div>
        </div> 
        <!-- END .HEADER-REGISTER -->

        <!-- HEADER-LOG0 -->
        <div class="header-logo text-center">
          <h2><a href="{{url('/')}}"><img src="{{asset('assets/img/logotiny.png')}}"> WAKILI HUB</a></h2>
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
          <a href="{{url('lawyer/whyregister')}}" class="btn btn-default"><i class="fa fa-plus"></i> Get Listed</a>
        </div><!-- END .HEADER-CALL-TO-ACTION -->

      </div><!-- END .CONTAINER -->
    </div>
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
    <div class="header-search map">
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
      </div>
      <!-- END .header-search-bar -->

   <div class="page-heading about-us-heading">
        <span></span> <!-- for dark-overlay on the bg -->

        <div class="container">
          <h1>Listed<span>Lawyers</span></h1>

          <div class="heading-link">
            <a href="#">Home</a>

            <i>/</i>

            <a href="#">Lawyers</a>
          </div>

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->

    <div class="header-nav-bar">
      <div class="container">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
            <li ><a href="{{ url('/') }}">Home</a>            </li>

            <li class="bg-color"><a href="{{ url('lawyer/lawyers') }}">Lawyers</a>            </li>

            <li><a href="{{ url('firm') }}">Law Firms</a></li>
            <li><a href="{{ url('firm/jobs') }}">Job Opportunities</a></li><li><a href="{{ url('lawyer/whyregister') }}">Why Register</a></li>
            <li><a href="{{ url('firm/about') }}">About Us</a></li>
            <li><a href="{{ url('firm/contact') }}">Contact Us</a></li>

          </ul>
        </nav>
      </div> <!-- end .container -->
    </div> 
    <!-- end .header-nav-bar -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="row"> 
     
        <div class="col-md-9 col-md-push-3">
          <div class="page-content">

            <div class="product-details-list view-switch">
           
              <div class="tab-content">
                <div class="tab-pane active" id="all-categories">
                  <h2>All Practice Areas<span class="comments">{{count($areas)}}</span></h2>
                      <div class="change-view"> <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name ASC</option>
                        <option value="option1">Name DESC</option>
                        <option value="option2">LSK Number</option>
                        <option value="option3">Location</option>
                        <option value="option4">Year of Experience</option>
                      </select></div>
                     &nbsp;<div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">All Practices Here</option>
                       
                      </select>
                      </div>

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                  </div> <!-- end .change-view -->
                  <div class="row clearfix">
                    @foreach($areas as $lawyer)
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
                                <a href="{{ url('lawyer/lawyers/'.$lawyer->lawyer_id.'/readmore') }}"><i class="fa fa-angle-right"></i> Read More</a>
                              </div>

                            </figcaption>
                          </figure>

                          <h4><a href="{{ url('lawyer/lawyers/'.$lawyer->lawyer_id.'/readmore') }}">{{$lawyer->lawyer_first_name}} {{$lawyer->lawyer_middle_name }}</a></h4>

                          <h5>{{$lawyer->lawyer_law_firm_name}}</h5>

                          <h5>{{$lawyer->lawyer_practice_name}}</h5>

                          <p>{{$lawyer->lawyer_bios}}</p>

                          <a class="read-more" href="{{ url('lawyer/lawyers/'.$lawyer->lawyer_id.'/readmore') }}"><i class="fa fa-angle-right"></i>Read More</a>

                        </div> <!-- end .single-product -->
                      </div> <!-- end .col-sm-4 grid layout -->

                      {{--<div class="pagination-center">--}}

                      {{--<ul class="pagination">--}}
                      {{--<li><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
                      {{--<li class="active"><a href="#">1</a></li>--}}
                      {{--<li><a href="#">2</a></li>--}}
                      {{--<li><a href="#">3</a></li>--}}
                      {{--<li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
                      {{--</ul>--}}

                      {{--</div>--}}

                    @endforeach
                  </div>

                </div> <!-- end .tabe-pane -->

                @foreach($new_areas as $link => $area)
                <div class="tab-pane" id="{{$link}}">
                  <h2>{{$area['title']}}<span class="comments">{{$area['count']}}</span></h2>

       <div class="change-view"> <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name ASC</option>
                        <option value="option1">Name DESC</option>
                        <option value="option2">LSK Number</option>
                        <option value="option3">Location</option>
                        <option value="option4">Year of Experience</option>
                      </select></div>
                     &nbsp;<div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">All Sub Practices Here</option>
                       
                      </select>
                      </div>

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                  </div> <!-- end .change-view -->
                  <div class="row clearfix">
                  @foreach($area['area'] as $lawyer)
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
                              <a href="viewlawyer.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">{{$lawyer->lawyer_first_name}} {{$lawyer->lawyer_middle_name }}</a></h4>

                        <h5><a href="#">{{$lawyer->lawyer_law_firm_name}}</a></h5>

                        <h5><a href="#">{{$lawyer->lawyer_practice_name}}</a></h5>

                        <p>{{$lawyer->lawyer_bios}}</p>

                        <a class="read-more" href="viewlawyer.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->

                    {{--<div class="pagination-center">--}}

                      {{--<ul class="pagination">--}}
                        {{--<li><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
                        {{--<li class="active"><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
                      {{--</ul>--}}

                    {{--</div>--}}

                  @endforeach
                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->
                  @endforeach
              </div> <!-- end .tabe-content -->

              <div class="advertisement">
                <p>Advertisement</p>
                <img src="img/add.jpg" alt="">
              </div>

            </div> <!-- end .product-details -->
          </div> <!-- end .page-content -->
        </div>

        <div class="col-md-3 col-md-pull-9 category-toggle">
          <button><i class="fa fa-briefcase"></i></button>

          <div class="page-sidebar">

            <div class="location-details">
              <form action="#">
                <div class="select-country">
                  <label>County</label>

                  <select class="" data-placeholder="-Select-">
                    <option value="option1">Nairobi</option>
                    <option value="option2">Busia</option>
                    <option value="option3">Kiambu</option>
                    <option value="option4">Eldoret</option>
                  </select>

                </div> <!-- end .select-country -->

                <div class="select-state">
                  <label>Town</label>

                  <select class="" data-placeholder="-Select-">
                    <option value="option1">Nyeri</option>
                    <option value="option2">Eastleigh</option>
                    <option value="option3">Kasarani</option>
                    <option value="option4">Githurai</option>
                  </select>

                </div> <!-- end .select-state -->

                <div class="zip-code">
                  <label>Enter Name</label>

                  <input type="text" placeholder="Enter">

                </div> <!-- end .zip-code -->
              </form>

            </div> <!-- end .location-details -->

         <!--   <div class="distance-range">
              <p>
                <label for="amount">Distance</label>
                <input type="text" id="amount">
              </p>

              <div id="slider-range-min"></div>
            </div> --> <!-- end #distance-range -->

            <!-- Category accordion -->
            <div id="categories">
              <div class="accordion">
                <ul class="nav nav-tabs accordion-tab" role="tablist">
                  <li>
                    <a class="active" href="#all-categories" role="tab" data-toggle="tab">All Practice Areas</a></li>

                  @foreach($new_areas as $link => $practice)
                    <li>
                      <a href="#{{$link}}"  role="tab" data-toggle="tab">{{ $practice['title'] }}
                      </a>
                    </li>
                  @endforeach

                </ul>
              </div> <!-- end .accordion -->
            </div> <!-- end #categories -->


          </div> <!-- end .page-sidebar -->
        </div> <!-- end grid layout-->
      </div> <!-- end .row -->
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->


  

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

            </div> --><!-- end .popular-categories-->
       <!--    </div> end Grid layout-->

       <!--   <div class="col-md-3 col-sm-6">

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
            <!--</div> --><!-- end .newsletter

          </div> <!-- end Grid layout
        </div> <!-- end .row 
      </div> <!-- end .container 
    </div> <!-- end .main-footer -->


    <div class="copyright">
      <div class="container">
        <p>Copyright 2015 &copy; Wakilihub. All rights reserved. Powered by  <a href="#">Usalama</a></p>

        <ul class="list-inline">
          <li><a href="{{ url('/')}}">Lawyers</a></li>
          <li><a href="{{ url('firm')}}">Firms</a></li>
          <li><a href="policies.html">Policies</a></li>

          <li><a href="{{ url('firm/contact')}}">Contact</a></li>
        </ul>
      </div> <!-- END .container -->
    </div> 
    <!-- end .copyright-->

  </footer> <!-- end #footer --><!-- end #footer -->


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