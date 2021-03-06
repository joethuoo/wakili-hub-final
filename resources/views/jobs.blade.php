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
        </div> 
        <!-- END .HEADER-REGISTER -->

        <!-- HEADER-LOG0 -->
        <div class="header-logo text-center">
          <h2><a href="{{url('firm/jobs')}}"><img src="{{url('assets/img/logotiny.png')}}"> WAKILI HUB</a></h2>
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

      <div class="page-heading blog-list-heading">
        <span></span> <!-- for dark-overlay on the bg -->

        <div class="container">

          <h1>Jobs</h1>

          <div class="heading-link">
            <a href="{{ url('/')}}">Home</a>

            <i>/</i>

            <a href="{{ url('firm/jobs')}}">Job Opportunities</a>
          </div>

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->


    <div class="header-nav-bar">
      <div class="container">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
            <li><a href="{{ url('/') }}">Home</a>            </li>

            <li class=""><a href="{{ url('lawyer/lawyers') }}">Lawyers</i></a> </li>

            <li><a href="{{ url('firm') }}">Law Firms</a></li>
            <li class="bg-color"><a href="{{ url('firm/jobs') }}">Job Opportunities</a></li><li><a href="{{ url('lawyer/whyregister')}}">Why Register</a></li>
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
      <div class="page-content bl-list">
        <div class="row">
          <div class="col-md-8">
            <div class="blog-list">

          @if($jobs)
             @foreach($jobs as $job)
             <div class="post-without-image">
                <div class="date-month">
                  <a href="#">
                    <span class="date">10</span>
                    <span class="month">Aug</span>
                  </a>
                </div>
              
                <h2 class="title"><a href="">{{$job->job_title}}</a></h2>

                <p class="user">
                  <a href="#"><i class="fa fa-user"></i> {{ $job->job_company }}</a>
                <!--  <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
                  <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a> -->
                </p>

                <p class="post">
                  {{$job->description}}
                </p>

                <p class="tag">
               {{--  @foreach($jobs as $req=> $r) --}}
                  <i class="fa fa-tag"></i>
                  <a href="#">{{$job->job_requirements}}</a>
                </p>
              {{--   @endforeach --}}
                <a class="post-read-more" href="{{url('firm/jobs/viewjob')}}"><i class="fa fa-angle-right"></i>Read More</a>

              </div> <!-- end .post-without-image -->
              @endforeach
         @endif

          

            </div> <!-- end .blog-list -->

            <div class="blog-list-pagination">

              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>

            </div> <!-- end .blog-list-pagination -->

          </div> <!-- end .grid-layout -->

          <div class="col-md-4">
            <div class="post-sidebar">
              <div class="post-categories">

                <h2>JOBS BY PRACTICE AREAS</h2>

                <ul>
                  
                  

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
          <li><a href="{{ url('lawyer/lawyers') }}">Lawyers</a></li>
          <li><a href="{{ url('firm') }}">Firms</a></li>
          <li><a href="policies.html">Policies</a></li>

          <li><a href="{{ url('firm/contact') }}">Contact</a></li>
        </ul>
      </div> <!-- END .container -->
    </div> 
    <!-- end .copyright-->
  </footer> <!-- end #footer -->
</div>
       
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