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
          <h1>Lawyer<span> Registration</span></h1>

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
<<<<<<< HEAD
              <h3><strong>Register</strong> a Lawyer Profile</h3>
                <div class="contact-form">
                <form method="POST" action="/lawyer/register" class="comment-form">
                  
                  <input type="file" placeholder="LAWYER PHOTO" name="lawyer_photo" required>
                  &nbsp;&nbsp;<a class="btn btn-default" href="#"><i class="fa fa-image-o"></i>Add Image</a>
=======
              <h3><strong>Register</strong> a Firms Profile</h3>
                <div class="contact-form">
                <form action="#" class="comment-form">
                  <input type="text" placeholder="Enter LSK Registeration Number" required>
                  &nbsp;&nbsp;<a class="btn btn-default" href="#"><i class="fa fa-envelope-o"></i>Verify Number</a>
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
                </form>
                </div>
<br/>
This Part will be Hidden Until Lawyers LSK Number is Verified( IF already Registered give Responses already registered)

              <div class="contact-form">
                <form method="POST" action="/lawyer/register" class="comment-form">
<<<<<<< HEAD
                  {!! csrf_field() !!}
=======
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
                  <input type="text" name="lawyer_lsk_number" value="DISPLAY LSK NUMBER HERE" readonly> 
                  
                    <input type="text" name="lawyer_id_number" value="Display National Id/Passport Number from LSK" readonly> 
                    
                    <input type="text" name="lawyer_lsk_status"value="Display LSK Status( e.g ACTIVE 2016)" readonly> 
<<<<<<< HEAD

                    <input type="text" placeholder="Enter LSK Registeration Number" name="lawyer_lsk_number" required>
                    
                    <input type="text" name="lawyer_first_name" placeholder="Enter your First Name" required>

                    <input type="text" name="lawyer_middle_name" placeholder="Enter your Middle Name" required>

                    <input type="text" name="lawyer_last_name" placeholder="Enter your Last Name" required>
=======
                    
                    <input type="text" name="lawyer_full_names" placeholder="Enter your Full Names" required>
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
             
                 <textarea name="lawyer_bios"placeholder="Short Bio Brief, What you believe in, What you stand for, Qualities." required></textarea>
                 
                              
                 <input type="text" name="lawyer_postal_number" placeholder="Postal Address (P.O. Box xxxx-xxxxx" required>
                 
<<<<<<< HEAD
                {{--  <input type="text" name="lawyer_town" placeholder="Town- (Nairobi)" required> --}}

                 <input type="text" name="lawyer_email" placeholder="Email-(Multiple Emails separated with commas)" required>
                  
                  <input type="text" name="lawyer_website" placeholder="Personal Website">
                  
                   <input type="text" name="lawyer_mobile" placeholder="Mobile Phone ">
                   <input type="text" name="lawyer_office_number" placeholder="Office Phone Number ">
                   <input type="submit" value="submit">
                   
               <a class="btn btn-default" href=""><i class="fa fa-envelope-o"></i>Save and Next</a>
               
=======
                 <input type="text" name="lawyer_town" placeholder="Town- (Nairobi)" required>

                 <input type="text" name="lawyer_education" placeholder="Education- (Nairobi)" required>

                  <input type="text" name="lawyer_email" placeholder="Email-(Multiple Emails separated with commas)" required>
                  
                  <input type="text" name="lawyer_website" placeholder="Personal Website">
                  
                   <input type="text" name="lawyer_mobile" placeholder="Mobile Phone (Multiple Separate with Commas)">


               <input class="btn btn-default" type="submit" href="{{url('lawyer/whyregister/register2')}}"><i class="fa fa-envelope-o"></i>Save and Next</input>
>>>>>>> 126a11abae032c212042ff75fb2fe3921b1b6da8
                </form>

              </div> <!-- end .contact-form -->

            </div> <!-- end main grid layout -->
          </div> <!-- end .row -->

        </div> <!-- end .about-us -->
      </div> <!-- end .page-content -->
    </div> <!-- end .container -->

  </div> <!-- end #page-content -->


 
  <footer id="footer">
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