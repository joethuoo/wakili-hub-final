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
				<div class="header-register" style="display:none;">
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
					<h2><a href="{{ url('firm/about') }}"><img src="{{ url('assets/img/logotiny.png') }}"> WAKILI HUB</a></h2>
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
		<div class="header-search fixed-height">
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

			<div class="page-heading about-us-heading">
				<span></span> <!-- for dark-overlay on the bg -->

				<div class="container">
					<h1>About <span>Us</span></h1>

					<div class="heading-link">
						<a href="{{ url('/') }}">Home</a>

						<i>/</i>

						<a href="{{ url('firm/about')}}">About Us</a>
					</div>

				</div> <!-- END .container-->
			</div> <!-- END .about-us-heading -->

		</div> <!-- END .SEARCH and slide-section -->


		<div class="header-nav-bar">
			<div class="container">
				<nav>

					<button><i class="fa fa-bars"></i></button>

					<ul class="primary-nav list-unstyled">
					   <li><a href="{{ url('/')}}">Home</a>            </li>

            <li class=""><a href="{{ url('lawyer/lawyers')}}">Lawyers</i></a> </li>

            <li><a href="{{ url('firm') }}">Law Firms</a></li>
            <li><a href="{{ url('firm/jobs') }}">Job Opportunities</a></li><li><a href="{{ url('lawyer/whyregister')}}">Why Register</a></li>
            <li class="bg-color"><a href="{{ url('firm/about') }}">About Us</a></li>
            <li><a href="{{ url('firm/contact') }}">Contact Us</a></li>
					</ul>
				</nav>
			</div> <!-- end .container -->
		</div> <!-- end .header-nav-bar -->
	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="page-content">
			  <div class="about-us">
					<h3><strong>About</strong> Wakili Hub</h3>

					<p><strong>The Wakilihub Lawyer Directory provides lawyer, legal aid & services profiles by practice area and location. Whatever your legal issue, our lawyer directory will simplify researching, comparing, and contacting attorneys that best fit your legal needs in your city, county or town.</strong></p>

					<p><strong>Our Vision.</strong></p>
                    
                    <p><strong>Our Mision.</strong></p>

					<h3 class="team"><strong>Our</strong> Team</h3>

          <div class="row">

  					<div class="col-md-6 col-sm-6 col-lg-3">
  						<div class="member-details">
  							<div class="porfile-pic">
  								<img src="img/content/team-member-1.jpg" alt="">

  								<ul class="list-inline">
  									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  								</ul>
  							</div>

  							<h3><a href="#">YOur Names</a></h3>

  							<p class="title">Ceo</p>

  							<p>Profile Writeup Here.</p>

  						</div> <!-- end member-details -->
  					</div> <!-- end grid-layout -->

  					
  					<div class="col-md-6 col-sm-6 col-lg-3">
  						<div class="member-details">
  							<div class="porfile-pic">
  								<img src="img/content/team-member-1.jpg" alt="">

  								<ul class="list-inline">
  									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  								</ul>
  							</div>

  							<h3><a href="#">YOur Names</a></h3>

  							<p class="title">Ceo</p>

  							<p>Profile Writeup Here.</p>

  						</div> <!-- end member-details -->
  					</div> <!-- end grid-layout -->

  					
  					<div class="col-md-6 col-sm-6 col-lg-3">
  						<div class="member-details">
  							<div class="porfile-pic">
  								<img src="img/content/team-member-1.jpg" alt="">

  								<ul class="list-inline">
  									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  								</ul>
  							</div>

  							<h3><a href="#">YOur Names</a></h3>

  							<p class="title">Ceo</p>

  							<p>Profile Writeup Here.</p>

  						</div> <!-- end member-details -->
  					</div> <!-- end grid-layout -->

  				
  					<div class="col-md-6 col-sm-6 col-lg-3">
  						<div class="member-details">
  							<div class="porfile-pic">
  								<img src="img/content/team-member-1.jpg" alt="">

  								<ul class="list-inline">
  									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  								</ul>
  							</div>

  							<h3><a href="#">YOur Names</a></h3>

  							<p class="title">Ceo</p>

  							<p>Profile Writeup Here.</p>

  						</div> <!-- end member-details -->
  					</div> <!-- end grid-layout -->
          </div> <!-- end .row -->

				</div> <!-- end .about-us -->
			</div> <!-- end .page-content -->
		</div> <!-- end .container -->

	</div> <!-- end #page-content -->


 <	 id="footer">
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
          <li><a href="{{ url('lawyer/lawyers') }}">Lawyers</a></li>
          <li><a href="{{ url('firm') }}">Firms</a></li>
          <li><a href="policies.html">Policies</a></li>

          <li><a href="{{ url('firm/contact') }}">Contact</a></li>
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