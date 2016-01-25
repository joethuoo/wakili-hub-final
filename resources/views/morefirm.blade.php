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
          <h2><a href="{{url('/')}}"><img src="{{url('assets/img/logotiny.png')}}"> WAKILI HUB</a></h2>
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
        </div><!-- END .HEADER-CALL-TO-ACTION -->

      </div><!-- END .CONTAINER -->
    </div>
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
    <div class="header-search company-profile-height">
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


@if($more)
                @foreach($more as $m)

      <div class="company-heading-view">
        <div class="container">
          <div class="button-content">
          <div class="logo-image">
                <img src="{{asset('/firms/'.$m->firm_photo_filename)}}" alt="">
              </div>
          </div>
        </div>

        <div class="company-slider-content">

          <div class="general-view">
            <span></span> <!-- for dark-overlay on the bg -->
            <div class="container">
<!--
              <div class="logo-image">
                <img src="img/content/company-logo.jpg" alt="">
              </div>
-->
              <h1>{{$m->firm_name}}</h1>
            
            </div>
          </div> <!-- END .general-view -->

          <div class="company-map-view">
            <div id="company_map_canvas"></div>
          </div> <!-- END .company-map-view -->

          <div class="company-map-street">
            <div id="company_map_canvas_street"></div>
          </div> <!-- END .company-map-view-street -->

        </div> <!-- END .company-slider-content -->

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
    </div> 
    <!-- end .header-nav-bar -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <div class="page-content company-profile">

            <div class="tab-content">
              <div class="tab-pane active" id="overview">
              
              
              
                 <h2>{{$m->firm_name}}</h2>
              <!--  <h5>
                  <a href="viewfirm.html">(Chelanga & Co Advocates)</a>
                </h5>-->
                <div class="social-link text-right">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>

                <div class="company-text">
                  <p>
                    <strong>{{$m->firm_bios}}</strong>
                  </p>

                 
                </div> <!-- end company-text -->



                <div class="company-service">
                  <h4>Areas of Practice</h4>

                  <ul class="list-inline">
                   
                    <li>{{$m->firm_practice_name}}</li>
                  </ul>
                </div> <!-- end company-service -->

                <div class="comments-section">
             <!--     <div class="comment-title">
                    <h4>Articles by Moses</h4>
                  </div>

                  <ul class="comments">
                    <li>

                      <div class="comment">
                        <img src="img/content/team-member-1.jpg" alt="" class="avatar">

                        <div class="meta">
                          <a href="#"><strong>Tolbert Derek</strong></a>
                          -1 Aug, 2015
                        </div>

                        <div class="content">
                          <p>Wanted to conduct business in Ethiopia. My friend is a citizen but I am a Kenyan Citizen, How do I become part of the company</p> <a href="#" class="reply">View Answers</a>
                        </div>

                      </div> <!-- end .comment

                    </li> <!-- end .main list 
                  </ul> <!-- end .comments -->

                  <h4>Ask a Legal Counsel question</h4>

                  <form class="comment-form">
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" placeholder="Name *" required>
                      </div>

                      <div class="col-md-4">
                        <input type="email" placeholder="Email *" required>
                      </div>

                      <div class="col-md-4">
                        <input type="url" placeholder="Website">
                      </div>
                    </div>

                    <textarea placeholder="Your Question here ..." required></textarea>

                    <button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i> Send Question</button>
                  </form>

                </div> <!-- end .comment-section -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="team">
                
               <div class="company-product">

                  <h2 class="text-uppercase mb30">Our Team Members</h2>

                  <div class="sort-by">

                    <select class="" data-placeholder="-sort by-">
                      <option value="option1">Name</option>
                      <option value="option2">Practice</option>
                      <option value="option3">Year</option>
                 
                    </select>

                  </div>

                  <div class="row">
                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="img/content/moses2.jpg" alt="">

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewlawyer.html"><i class="fa fa-angle-right"></i> Read More</a>                            </div>
                          </figcaption>
                        </figure>

                        <h4><a href="viewlawyer.html">Moses Chelanga</a></h4>

                        <h5><a href="viewlawyer.html">Joined: 2010</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->



                  </div> <!-- end .row -->
                </div> <!-- end .company-product -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="association">

                
                 <h2>Professional Associations</h2>
              
                <div class="social-link text-right">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>

                 <div class="company-service">
                  <ul class="list-inline">
                     <li><table width="100%"><tr><td width="80%">{{$m->firm_association_institution}}</td><td align="center">{{$m->firm_association_year}}</td></tr></table></</li>

                    
                  
                  </ul>
                </div> <!-- end company-service -->

                <div class="comments-section">
             <!--     <div class="comment-title">
                    <h4>Articles by Moses</h4>
                  </div>

                  <ul class="comments">
                    <li>

                      <div class="comment">
                        <img src="img/content/team-member-1.jpg" alt="" class="avatar">

                        <div class="meta">
                          <a href="#"><strong>Tolbert Derek</strong></a>
                          -1 Aug, 2015
                        </div>

                        <div class="content">
                          <p>Wanted to conduct business in Ethiopia. My friend is a citizen but I am a Kenyan Citizen, How do I become part of the company</p> <a href="#" class="reply">View Answers</a>
                        </div>

                      </div> <!-- end .comment

                    </li> <!-- end .main list 
                  </ul> <!-- end .comments -->

                  <h4>Ask a Legal Counsel question</h4>

                  <form class="comment-form">
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" placeholder="Name *" required>
                      </div>

                      <div class="col-md-4">
                        <input type="email" placeholder="Email *" required>
                      </div>

                      <div class="col-md-4">
                        <input type="url" placeholder="Website">
                      </div>
                    </div>

                    <textarea placeholder="Your Question here ..." required></textarea>

                    <button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i> Send Question</button>
                  </form>

                </div> <!-- end .comment-section -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="cases">

                <div class="company-events">

                    
                 <h2>Cases Handled</h2>
              
                <div class="social-link text-right">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>

                  <div class="post-with-image">
                  <!--  <div class="date-month">
                      <a href="#">
                        <span class="date">12</span>
                        <span class="month">Sep</span>
                      </a>
                    </div>

                    <div class="post-image">
                      <img src="img/content/blog-list-image1.jpg" alt="">
                    </div>
-->
                    <h3><a href="blog-post.html">Anglo Leasing</a></h3>

                    <p class="event-place">
                      <a href="#"><i class="fa fa-globe"></i> Nairobi, Kenya</a>
                      <a href="#"><i class="fa fa-calendar"></i> 12 August, 2015</a>
               
                    </p>

                    <p class="post">
                     Kenya Corruption scandal involving the tender award to a British company without due diligence.
                    </p>
<!--
                    <p class="tag">
                      <i class="fa fa-tag"></i>
                      <a href="#">Good,</a>
                      <a href="#">Ui,</a>
                      <a href="#">Experience,</a>
                      <a href="#">Article</a>
                    </p>

                    <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>-->

                  </div> <!-- end .post-with-image -->

                  <div class="post-with-image">
                   <h3><a href="blog-post.html">Wakilihub/ Usalama Merger</a></h3>

                    <p class="event-place">
                      <a href="#"><i class="fa fa-globe"></i> Nairobi, Kenya</a>
                      <a href="#"><i class="fa fa-calendar"></i> 12 August, 2014</a>
               
                    </p>

                    <p class="post">
                    Merger of two great innovative companies
                    </p>

                  </div> <!-- end .post-with-image -->

                  <div class="post-with-image">
                     <h3><a href="blog-post.html">Radical Medical Hospital Negligence</a></h3>

                    <p class="event-place">
                      <a href="#"><i class="fa fa-globe"></i> Nairobi, Kenya</a>
                      <a href="#"><i class="fa fa-calendar"></i> 12 August, 2010</a>
               
                    </p>

                    <p class="post">
                    Negligence Case of patient prescribed expired medicine.
                    </p>

                  </div> <!-- end .post-with-image -->




                </div> <!-- end .company-events -->
              </div> <!-- end .tab-pane -->

            

              <div class="tab-pane" id="contact">
                <div class="company-profile company-contact">

                  <h2>Our Contacts</h2>

                  <div class="social-link text-right">
                    <ul class="list-inline">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>

                   <div class="row">
                    <div class="col-md-12">

                      <div class="contact-map-company">
                        <div id="contact_map_canvas_one">

                        </div>
                      </div> <!-- end .map-section -->

                      <h3>Headquarters</h3>

                      <h5>Address Details</h5>

                      <div class="address-details clearfix">
                        <i class="fa fa-map-marker"></i>

                        <p>
                          <span>Hurligham Plaza 2nd Floor</span>
                          <span>Nairobi</span>
                          <span>Kenya</span>
                        </p>
                      </div>

                      <div class="address-details clearfix">
                        <i class="fa fa-phone"></i>

                        <p>
                          <span><strong>Phone:</strong> +254 723-456-890</span>
                          <span><strong>Mobile:</strong> +254 733-456-891</span>
                        </p>
                      </div>

                      <div class="address-details clearfix">
                        <i class="fa fa-envelope-o"></i>

                        <p>
                          <span><strong>E-mail:</strong> example@example.com</span>
                          <span><span><strong>Website:</strong> www.example.com</span></span>
                        </p>
                      </div>

                      <h5>Office Hours</h5>

                      <div class="address-details clearfix">
                        <i class="fa fa-clock-o"></i>

                        <p>
                          <span><strong>Mo-Fri:</strong> 9AM - 5PM</span>
                          <span><span><strong>Saturday:</strong> 10AM - 2PM</span></span>
                          <span><strong>Sunday:</strong> Closed</span>
                        </p>
                      </div>

                    </div> <!-- end main grid layout -->

                  </div> <!-- end .row -->

                  <h3>Send us a Message</h3>
                  <form class="comment-form">
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" placeholder="Name *" required>
                      </div>

                      <div class="col-md-4">
                        <input type="email" placeholder="Email *" required>
                      </div>

                      <div class="col-md-4">
                        <input type="url" placeholder="Website">
                      </div>
                    </div>

                    <textarea placeholder="Your Comment ..." required></textarea>

                    <button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i> Send Message</button>
                  </form>

                </div> <!-- end .company-contact -->
              </div> <!-- end .tab-pane -->
            </div> <!-- end .tab-content -->

          </div> <!-- end .page-content -->

        </div> <!-- end .main-grid layout -->

        <div class="col-md-3 col-md-pull-9 category-toggle">
          <button><i class="fa fa-briefcase"></i></button>
          <div class="page-sidebar company-sidebar">

            <ul class="company-category nav nav-tabs home-tab" role="tablist">
              <li class="active">
                <a href="#overview" role="tab" data-toggle="tab">OVERVIEW</a>
              </li>
              <li>
                <a href="#team" role="tab" data-toggle="tab">OUR TEAM</a>
              </li>

              <li>
                <a href="#association" role="tab" data-toggle="tab">ASSOCIATIONS</a>
              </li>

             
              <li>
                <a href="#cases" role="tab" data-toggle="tab">CASES HANDLED</a>
              </li>
<!--
              <li>
                <a href="#company-blog" role="tab" data-toggle="tab">blog</a>
              </li>
-->
              <li>
                <a href="#contact" role="tab" data-toggle="tab">Contact</a>
              </li>
            </ul>

            <div class="contact-details">
              <h2>Overview Details</h2>

              <ul class="list-unstyled">
                  <li>
                  <strong>REG NO:</strong>
                  <span>BN/2345/015</span>
                </li>

                <li>
                  <strong>Status:</strong><span>Active 2015</span>
                </li>

             
                <li>
                  <strong>Address:</strong>
                  <span>P.O. Box 504-00515</span>
                </li>

                <li>
                  <strong>Town:</strong>
                  <span>Nairobi</span>
                </li>

                <li>
                  <strong>Mobile:</strong>
                  <span>+254 738 999 999</span>
                </li>

              </ul>
            </div>

          <!--  <div class="opening-hours">
              <h2>Openig Hours</h2>

              <ul class="list-unstyled">
                <li>
                  <strong>Mo-Fr:</strong>
                  <span>9AM-5PM</span>
                </li>

                <li>
                  <strong>Sa:</strong>
                  <span>10AM-3PM</span>
                </li>

                <li>
                  <strong>Su:</strong>
                  <span>Closed</span>
                </li>
              </ul>
            </div>-->

            <div class="square-button">
              <a href="#"><img src="img/content/square-button2.png" alt=""></a>
             <!-- <a href="#"><img src="img/content/square-button.png" alt=""></a>
              <a href="#"><img src="img/content/square-button.png" alt=""></a>
              <a href="#"><img src="img/content/square-button.png" alt=""></a>-->
            </div> <!-- end .sqare-button -->

          </div> <!-- end .page-sidebar -->
        </div> <!-- end .main-grid layout -->
      </div> <!-- end .row -->

    </div> <!-- end .container -->

  </div> <!-- end #page-content -->
@endforeach
@endif

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