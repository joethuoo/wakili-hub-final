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
          <h2><a href="{{url('/')}}"><img src="{{asset('assets/img/logotiny.png')}}"> WAKILI HUB</a></h2>
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

      <div class="page-heading contact-us-heading">
        <span></span> <!-- for dark-overlay on the bg -->

        <div class="container">
          <h1>Lawyer <span>Registration</span></h1>

          <div class="heading-link">
            <a href="#">Home</a>

            <i>/</i>

            <a href="#">Contact Us</a>
          </div>

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->


    <div class="header-nav-bar">
      <div class="container">
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
      </div> <!-- end .container -->
    </div> <!-- end .header-nav-bar -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="page-content">
        <div class="contact-us">
          <div class="row">
             <!-- end main grid layout -->

            <div class="col-md-8">
              <h3><strong>Register</strong> a Lawyers Profile</h3>
               <h4> AREAS OF PRACTICE</h4> 
               <div class="contact-form">
                
<<<<<<< HEAD
            <form action="/lawyer/association" method="POST" class="comment-form">
                {!! csrf_field() !!}                   
               <select class="" name="lawyer_practice_name" data-placeholder="-Select Areas of Practice-">
=======
                <form action="#" class="comment-form">
       
                   
                     <select class="" data-placeholder="-Select Areas of Practice-">

>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
                  <option value="option1">Business Law</option>
                  <option value="option2">Juvenile</option>
                  <option value="option3">Property</option><option value="option3">Family Law</option><option value="option3">Patents</option>
                </select>              
                  </select>
           
                <a class="btn btn-default" href="#"><i class="fa fa-envelope-o"></i>Add Another</a>
                
<<<<<<< HEAD
=======
                </form>
                </div>
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
<!-- end .contact-form -->

     <h4> PROFESSIONAL ASSOCIATIONS</h4> 
               <div class="contact-form">
                
<<<<<<< HEAD
                <form action="/lawyer/association" method="POST" class="comment-form">
                             {!! csrf_field() !!}     
                   <input type="text" name="lawyer_association_institution" placeholder="Enter Asscociation Name in Full" required>
                   <br/> <br/> <br/>

                  {{--  <input type="date" placeholder="Association Year From" name="lawyer_association_year">

                   <input type="date" placeholder="Assocociation Year To" name="lawyer_association_year_to"> --}}
                   
                     <input type="submit" value="submit" >
                <a class="btn btn-default" href="#"><i class="fa fa-envelope-o"></i>Add Another</a>
                  &nbsp;&nbsp;<a class="btn btn-default" href="{{url('lawyer/whyregister/register2')}}"><i class="fa fa-envelope-o"></i>Previous</a>
                    &nbsp;&nbsp;<a class="btn btn-default" href="{{url('lawyer/whyregister/register4')}}"><i class="fa fa-envelope-o"></i>Save and Next</a>
                
=======
                <form action="#" class="comment-form">
                                 
                   <input type="text" placeholder="Enter Asscociation Name in Full" required>
                   <br/> <br/> <br/>
                   
                     <select class="" data-placeholder="-Year From-">
             
                  <option>1990</option>
                   <option>1991</option>
                   <option>1992</option>
                    <option>1993</option>
                     <option>1994</option>
                      <option>1995</option>                
                  </select>
                 <select class="" data-placeholder="-Year To-">
                  <option>1990</option>
                   <option>1991</option>
                   <option>1992</option>
                    <option>1993</option>
                     <option>1994</option>
                      <option>1995</option>                
                  </select>
                <a class="btn btn-default" href="#"><i class="fa fa-envelope-o"></i>Add Another</a>
                  &nbsp;&nbsp;<a class="btn btn-default" href="{{url('lawyer/whyregister/register2')}}"><i class="fa fa-envelope-o"></i>Previous</a>
                    &nbsp;&nbsp;<a class="btn btn-default" href="{{url('lawyer/whyregister/register4')}}"><i class="fa fa-envelope-o"></i>Save and Next</a>
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
                </form>
                </div>
<!-- end .contact-form -->

            </div> <!-- end main grid layout -->
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
          <li><a href="{{ url('lawyer/lawyers')}}">Lawyers</a></li>
          <li><a href="{{ url('firm')}}">Firms</a></li>
          <li><a href="policies.html">Policies</a></li>
          <li><a href="{{ url('firm/contact')}}">Contact</a></li>
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

