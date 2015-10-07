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
    <div class="header-search map">
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

   <div class="page-heading about-us-heading">
				<span></span> <!-- for dark-overlay on the bg -->

				<div class="container">
					<h1>Listed<span> Law Firms</span></h1>

					<div class="heading-link">
						<a href="#">Home</a>

						<i>/</i>

						<a href="#">Law Firms</a>
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

            <li><a href="lawyers.html">Lawyers</i></a></li>

            <li class="bg-color"><a href="lawfirms.html">Law Firms</a></li>
            <li><a href="jobs.html">Job Opportunities</a></li><li><a href="whyregister.html">Why Register</a></li>
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
      <div class="row"> 
     
        <div class="col-md-9 col-md-push-3">
          <div class="page-content">

            <div class="product-details-list view-switch">
           
              <div class="tab-content">
                <div class="tab-pane active" id="all-categories">
                  <h2>All Practice Areas<span class="comments">(12345)</span></h2>
                      <div class="change-view"> <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name ASC</option>
                        <option value="option1">Name DESC</option>
                        
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


                    @if($area)
                       @foreach($area as $firm)
                     <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="{{asset('assets/img/content/firmlogo.jpg')}}" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">{{$firm->firm_name}}</a></h4>
                       
                        <h5><a href="#">{{$firm->firm_practice_name}}</a></h5>
                     
                        
                        <p>{{$firm->firm_bios}}</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->
               @endforeach
             @endif








                    <div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->


                <div class="tab-pane" id="injurylaw">
                  <h2>Injury Law<span class="comments">69</span></h2>

       <div class="change-view"> <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name ASC</option>
                        <option value="option1">Name DESC</option>
                        
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
                     <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->
                    
                      <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                              

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->
                    
                      <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->

                    <div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->

                <div class="tab-pane" id="familylaw">
                  <h2>Family Law <span class="comments">99</span></h2>

  <div class="change-view"> <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name ASC</option>
                        <option value="option1">Name DESC</option>
                        
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
                  <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->
                    
                    
                   <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->

                     <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->

                    <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->

                    <div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->

                <div class="tab-pane" id="estateplanning">
                  <h2>Estate Planning <span class="comments">69</span></h2>

  <div class="change-view"> <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name ASC</option>
                        <option value="option1">Name DESC</option>
                        
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
                     <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->
                    
                      <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->
                    
                      <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->

                    <div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->

                <div class="tab-pane" id="cars-motorcycles">
                  <h2>Real Estate <span class="comments">69</span></h2>

  <div class="change-view"> <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name ASC</option>
                        <option value="option1">Name DESC</option>
                        
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
                      <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="img/content/firmlogo.jpg" alt="">

                          <div class="rating">

                            <p>Featured</p>
                          </div> 
                          <!-- end .rating -->

                          <figcaption>
                            

                            <div class="read-more">
                              <a href="viewfirm.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Chelanga & Co Advocates</a></h4>

                        <h5><a href="#">Family Law, Business Law, Tax law, Injury Law</a></h5>

                        <p>Chelanga & Co Advocates is a registered Law firm in Kenya. They have vast experience in the sector for over 10 Years in practice</p>

                        <a class="read-more" href="viewfirm.html"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->

                    <div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->
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
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->


  <!--<div class="classifieds-content">
    <div class="container">
      <div class="heading-section clearfix">
        <h1>Classifieds</h1>

        <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Post Your Ad</a>

        <form action="#">
          <input type="text" placeholder="Search by keywords">

          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div> <!-- END .heading-section -->

      <!-- CLSSIFIEDS-CATEGROY BEGIN 
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-bullhorn"></i>Advartising <span>(1786)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-home"></i>Home &amp; Garden <span>(754)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>
          </ul> <!-- END MAIN UL -->
          <!-- END .CLASSIFIES-CATEGORY 

        </div> <!-- End grid layout 

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-shopping-cart"></i>E-commerce <span>(1987)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-cogs"></i>Industry <span>(1405)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY 
        </div> <!-- End grid layout 

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-graduation-cap"></i>Education <span>(996)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-book"></i>Libraries &amp; Public <span>(1256)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY 
        </div> <!-- End grid layout 

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment <span>(2726)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-building-o"></i>Real Estate <span>(1131)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY 

        </div> <!-- End grid layout 
      </div> <!-- End .row 
    </div> <!-- END .container
  </div> <!-- classifieds-content -->

<!--
  <div class="register-content">
    <div class="reg-heading">
      <h1><strong>Register</strong> now</h1>
    </div>

    <div class="registration-details">
      <div class="container">
        <div class="box regular-member">
          <h2><strong>Regular</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

        <div class="alternate">
          <h2>OR</h2>
        </div>

        <div class="box business-member">
          <h2><strong>Business</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

      </div>
      <!-- END .CONTAINER 
    </div>
    <!-- END .REGISTRATION-DETAILS 
  </div>
  <!-- END REGISTER-CONTENT -->

  <!-- OUR PARTNER SLIDER BEGIN 
    <div class="our-partners">
      <div class="container">
        <h4>Our Partners</h4>

        <div id="partners-slider" class="owl-carousel owl-theme">
          <div class="item"><a href="#"><img src="img/content/partner1.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner2.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner3.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner4.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner5.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner6.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner1.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner2.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner3.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner4.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner5.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner6.png" alt=""></a></div>
        </div>
      </div>
    </div>-->
    <!-- END OUR PARTNER SLIDER -->

  <footer id="footer">
    <!--    <div class="main-footer">

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

            </div> --><!-- End .about-globo 
          </div> <!-- end Grid layout-->

      <!--    <div class="col-md-3 col-sm-6">
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
          </div> --><!-- end Grid layout

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
            </div> --><!-- end .newsletter

          </div> <!-- end Grid layout
        </div> <!-- end .row 
      </div> <!-- end .container 
    </div> <!-- end .main-footer -->

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