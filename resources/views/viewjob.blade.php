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
          <h2><a href="index.html"><img src="img/logotiny.png"> WAKILI HUB</a></h2>
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
    <div class="header-search fixed-height">
      <div class="header-search-bar">
        <form action="#">

          <div class="search-toggle">
            <div class="container"> <!--<div class="distance-range">
                <p>
                  <label for="amount-search">Distance:</label>
                  <input type="text" id="amount-search">
                </p>

                <div class="slider-range-search"></div>
              </div>  end #distance-range

              <div class="distance-range">
                <p>
                  <label for="amount-search">Days published:</label>
                  <input type="text" id="amount-search-day">
                </p>

                <div class="slider-range-search-day"></div>
              </div>-->  <!-- end #distance-range -->

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

      <div class="page-heading blog-list-heading">
        <span></span> <!-- for dark-overlay on the bg -->

        <div class="container">

          <h1>Jobs</h1>

          <div class="heading-link">
            <a href="#">Home</a>

            <i>/</i>

            <a href="#">Job Opportunities</a>
          </div>

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->


    <div class="header-nav-bar">
      <div class="container">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
            <li><a href="index.html">Home</a>            </li>

            <li class=""><a href="lawyers.html">Lawyers</i></a> </li>

            <li><a href="lawfirms.html">Law Firms</a></li>
            <li class="bg-color"><a href="jobs.html">Job Opportunities</a></li><li><a href="whyregister.html">Why Register</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
          </ul>
        </nav>
      </div> <!-- end .container -->
    </div> 
    <!-- end .header-nav-bar -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="page-content bl-list">
        <div class="row">
          <div class="col-md-8">
            <div class="blog-list">
 <div class="post-without-image">
                <div class="date-month">
                  <a href="#">
                    <span class="date">10</span>
                    <span class="month">Aug</span>
                  </a>
                </div>

                <h2 class="title"><a href="viewjob.html">Director Of Legal Affairs</a></h2>

                <p class="user">
                  <a href="#"><i class="fa fa-user"></i> Kenya Controller of Budget</a>
                <!--  <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
                  <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>-->
                </p>

               <div class="post">
               
           <p>    The Office of the Controller of Budget is an independent Office established under Article 228 of the Constitution of Kenya, 2010.
           </p>
           <p>

Its core mandate is to oversee implementation of the budgets of the National and County governments, approve withdrawals from the Consolidated Fund (Article 206), County Revenue Fund (Article 207) and Equalisation Fund (Article 204) and report on Budget Implementation to Parliament every four months.
</p><p>

Pursuant to Article 252 (1) (c) of the Constitution, the Office seeks to recruit highly qualified and competent staff to fill the following vacant positions.
<p>
<p>
Director, Legal Affairs<br>
Grade COB 3<br>
1 Post<br>

Reporting to the Controller of Budget, the officer will be responsible for formulation and implementation of Legal, Governance and Compliance policies, systems and procedures and overseeing research on legal matters.
</p>
               
                  <p><strong>Director Of Legal Affairs Job Responsibilities.</strong>
                  </p>


                  <ul>
                    <li>Head the Legal Services Directorate;</li>
                    <li>Advise management on legal, governance and compliance issues;</li>
                    <li>Formulate legal, governance &amp; compliance strategic direction aligned to government policies and the Constitution;</li>
                    <li>Oversee implementation of legal, governance &amp; compliance policies, systems and procedures;</li>
                    <li>Ensure compilation of reports on Legal, Governance &amp; Compliance;</li>
                    <li>Initiate research on legal issues;</li>
                    <li>Provide legal counsel on legal and legislative issues impacting on the Office;</li>
                    <li>Advise on any legal issues that may arise in the course of executing the mandate of the office;</li>
                    <li>Oversee drawing of contracts and agreements for the organization;</li>
                    <li>Advise and ensure compliance with legal and regulatory requirements;</li>
                    <li>Ensure safe custody of legal documents.</li>
                  </ul>
                 

                </div>

                <div class="share-this">
                  <h4>Share This Openning</h4>

                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>

                <p class="tag">
                  <i class="fa fa-tag"></i>
                  <a href="#">Masters Degree,</a>
                  <a href="#">Good Oral and Written Skills,</a>
                  <a href="#">Goverment,</a>
                  <a href="#">Bima House</a>
                </p>


              </div> <!-- end .post-without-image -->


            

            </div> <!-- end .blog-list -->


          </div> <!-- end .grid-layout -->

          <div class="col-md-4">
            <div class="post-sidebar">
           <!--   <div class="latest-post-content">
                <h2>Latest </h2>

                <div class="latest-post clearfix">

                  <div class="post-image">
                    <img src="img/content/latest_post_1.jpg" alt="">

                    <p><span>12</span>Sep</p>
                  </div>

                  <h4><a href="#">Post Title Goes Here</a></h4>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                  <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                </div> <!-- end .latest-post 

                <div class="latest-post clearfix">
                  <div class="post-image">
                    <img src="img/content/latest_post_2.jpg" alt="">

                    <p><span>09</span>Sep</p>
                  </div>

                  <h4><a href="#">Post Title Goes Here</a></h4>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                  <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                </div> <!-- end .latest-post
              </div> <!-- end .latest-post-content -->

              <div class="post-categories">

                <h2>JOBS BY PRACTICE AREAS</h2>

                <ul>
               <!--   <li><a href="#"><i class="fa fa-angle-right"></i>Creative</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Development</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Uncategorized</a></li>-->
                  
                  

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
              </div> <!-- end .post-categories -->

         <!--     <div class="square-button">
                <button><img src="img/content/square-button.png" alt=""></button>

                <button><img src="img/content/square-button.png" alt=""></button>
              </div>--> <!-- end .sqare-button -->

         <!--     <div class="recently-added">
                <h2>Recently Added</h2>

                <div class="single-product">
                  <figure>
                    <img src="img/content/post-img-1.jpg" alt="">

                    <div class="rating">

                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                      </ul>

                    </div> <!-- end .rating 
                  </figure>

                  <h4><a href="#">Old Bookman's</a></h4>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>

                  <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                </div> --><!-- end .single-product -->

            <!--    <div class="single-product">
                  <figure>
                    <img src="img/content/post-img-1.jpg" alt="">

                    <div class="rating">

                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                      </ul>

                    </div> <!-- end .rating 
                  </figure>

                  <h4><a href="#">Old Bookman's</a></h4>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>

                  <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                </div> <!-- end .single-product

              </div><!-- end .recently-added -->


             <!-- <div class="archive-calendar">
                <h2>Calendar</h2>

                <div id="datepicker">

                </div>

              </div> --><!-- end .archive-calendar -->


              <div class="medium-rectangle">
                <img src="img/content/medium-rectangle.jpg" alt="">
              </div> <!-- end .medium-rectangle -->

            </div> <!-- end .post-sidebar -->
          </div> <!-- end .grid-layout -->

        </div> <!-- end .row -->
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