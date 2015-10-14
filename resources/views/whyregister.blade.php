@extends('master')
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

        </div> <!-- END .HEADER-LOGIN -->

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

        </div> <!-- END .HEADER-REGISTER -->

        <!-- HEADER-LOG0 -->
        <div class="header-logo text-center">
          <h2><a href="index.html"><img src="img/logotiny.png"> WAKILI HUB</a></h2>
        </div>
        <!-- END HEADER LOGO -->

        <!-- HEADER-SOCIAL -->
        <div class="header-social">
          <a href="#">
            <span><i class="fa fa-share-alt"></i></span>
            <i class="fa fa-chevron-down social-arrow"></i>
          </a>

          <ul class="list-inline">
            <li class="active"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
       

        <!-- CALL TO ACTION -->
        <div class="header-call-to-action">
          <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Get Listed</a>
        </div><!-- END .HEADER-CALL-TO-ACTION -->

      </div><!-- END .CONTAINER -->
    </div>
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
    <div class="header-search price-header-height">
      <div class="header-search-bar">
        <form action="#">

          <div class="search-toggle">
            <div class="container"> 

              <p>Location:</p>
              <div class="select-country">
                <select class="" data-placeholder="-Select County-">
                  <option value="option1">Nairobi</option>
                  <option value="option2">Kisumu</option>
                  <option value="option3">Mombasa</option>
                </select>
              </div>

              <div class="region">
                <input type="text" placeholder="-Region-">
              </div>

              <div class="address">
                <input type="text" placeholder="-Address-">
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select Practice-">
                  <option value="option1">Business Law</option>
                  <option value="option2">Juvenile</option>
                  <option value="option3">Property</option>
                  <option value="option3">Family Law</option>
                  <option value="option3">Patents</option>
                </select>
              </div>

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>

            </div>
          </div>  <!-- END .search-toggle -->


          <div class="container">
            <button class="toggle-btn" type="submit"><i class="fa fa-bars"></i></button>

            <div class="search-value">
              <div class="keywords">
                <input type="text" class="form-control" placeholder="Keywords">
              </div>

              <div class="select-location">
                <select class="" data-placeholder="-Select Town-">
                  <option value="option1">Busia</option>
                  <option value="option2">Bomet</option><option value="option4">Bondo</option>
                  <option value="option3">Thika</option>
                  <option value="option4">Nyeri</option><option value="option4">Muranga</option>
                </select>
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select Practice-">
                  <option value="option1">Business Law</option>
                  <option value="option2">Juvenile</option>
                  <option value="option3">Property</option><option value="option3">Family Law</option><option value="option3">Patents</option>
                </select>
              </div>

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div> <!-- END .CONTAINER -->
        </form>
      </div> <!-- END .header-search-bar -->

      <div class="Price-list-heading">
        <span></span> <!-- for dark-overlay on the bg -->

        <div class="container">

          <h1>Why <span>Register</span></h1>

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->


    <div class="header-nav-bar">
      <div class="container">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
           <li><a href="{{ url('/')}}">Home</a>            </li>

            <li class=""><a href="{{ url('lawyer/lawyers') }}">Lawyers</i></a> </li>

            <li><a href="{{ url('firm') }}">Law Firms</a></li>
            <li><a href="{{ url('firm/jobs') }}">Job Opportunities</a></li>
            <li  class="bg-color"><a href="{{ url('lawyer/whyregister') }}">Why Register</a></li>
            <li><a href="{{ url('firm/about') }}">About Us</a></li>
            <li><a href="{{ url('firm/contact') }}">Contact Us</a></li>
          </ul>
        </nav>
      </div> <!-- end .container -->
    </div> <!-- end .header-nav-bar -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="page-content">
        <div class="price-listing">
          <h3><strong>Free, </strong> Professional Profiles for Lawyers and Law firms.</h3>

          <p><strong> 

The Wakilihub and Legal Information database Lawyer Directories enable you to claim and complete a full-featured professional attorney profile for free in order to enhance your visibility on the Internet. By claiming your profile, you can increase your access to prospective clients and strengthen your reputation among your peers and in the community.
.</strong></p>

        
          <div class="row">

            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="pricing-table">
                <h3><strong>Lawyers</strong> Benefits</h3>

               <!-- <div class="price">
                  <span>$ 9<sup>95</sup></span>
                </div>-->

                <ul class="feature">
                  <li><i class="fa fa-check-circle-o"></i> Our High Traffic Volume Means More Exposure for You</li>
                  <li><i class="fa fa-check-circle-o"></i> Introduce Yourself and Interact With Real Prospective Clients </li>
                  <li><i class="fa fa-check-circle-o"></i> Market Your Website, Blog, Social Media, and Publications in One Place </li>
                  <li><i class="fa fa-check-circle-o"></i> Online standard features</li>
                
                </ul>

                <a class="btn btn-default" href="#"><i class="fa fa-check-square-o"></i> Sign Up Now!</a>
              </div> <!-- end .pricing-table -->

            </div> <!-- end grid-layout -->

            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="pricing-table">
                <h3><strong>Firm</strong> Benefits</h3>
<!--
                <div class="price">
                  <span>$ 19<sup>95</sup></span>
                </div>-->

                <ul class="feature">
               <li><i class="fa fa-check-circle-o"></i> Our High Traffic Volume Means More Exposure for You</li>
                  <li><i class="fa fa-check-circle-o"></i> Introduce your firm and Interact With Real Prospective Clients </li>
                  <li><i class="fa fa-check-circle-o"></i> Market Your Website, Blog, Social Media, and Publications in One Place </li>
                  <li><i class="fa fa-check-circle-o"></i> Online standard features</li>
                </ul>

                <a class="btn btn-default" href="#"><i class="fa fa-check-square-o"></i> Sign Up Now!</a>
              </div> <!-- end .pricing-table -->

            </div> <!-- end grid-layout -->

            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="pricing-table active">
                <h3><strong>Law Students</strong></h3>

               <!-- <div class="price">
                  <span>$ 29<sup>95</sup></span>
                </div>-->

                <ul class="feature">
                  <li><i class="fa fa-check-circle-o"></i> Apply for Jobs</li>
                  <li><i class="fa fa-check-circle-o"></i> Get access to free publications</li>
                  <li><i class="fa fa-check-circle-o"></i> Request legal advice</li>
                  <li><i class="fa fa-check-circle-o"></i> Interact with Lawyers</li>
                  <li><i class="fa fa-check-circle-o"></i> Research on law topics</li>
                </ul>

                <a class="btn btn-default" href="#"><i class="fa fa-check-square-o"></i> Sign Up Now!</a>
              </div> <!-- end .pricing-table -->

            </div> <!-- end grid-layout -->

            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="pricing-table">
                <h3><strong>Users</strong> Benfits</h3>

               <!-- <div class="price">
                  <span>$ 39<sup>95</sup></span>
                </div>-->

                <ul class="feature">
                  <li><i class="fa fa-check-circle-o"></i> Access to quick Lawyers directory</li>
                  <li><i class="fa fa-check-circle-o"></i> Access to Firms</li>
                  <li><i class="fa fa-check-circle-o"></i> Ask legal counsel questions</li>
                  <li><i class="fa fa-check-circle-o"></i> Compare and Find the best lawyer</li>
                 <!-- <li><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</li>-->
                </ul>

                <a class="btn btn-default" href="#"><i class="fa fa-check-square-o"></i> Sign Up Now!</a>
              </div> <!-- end .pricing-table -->

            </div> <!-- end grid-layout -->
          </div> <!-- end .row -->

        </div> <!-- end .about-us -->
      </div> <!-- end .page-content -->
    </div> <!-- end .container -->

  </div> <!-- end #page-content -->


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