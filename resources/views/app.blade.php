<!doctype>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="assets/stylesheets/app.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/new-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/style.css')}}">
     <script src="{{asset('js/vendor/modernizr.js')}}"></script>
    <script type="text/javascript" src="../assets/bower_components/foundation/js/foundation.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../assets/bower_components/foundation/js/foundation.js"></script>
    <script type="text/javascript" src="../assets/js/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="../assets/bower_components/vendor/foundation.min.js"></script>
    <script type="text/javascript" src="../assets/js/foundation/foundation.dropdown.js"></script>
    
    <script type="text/javascript" src="assets/js/app.js"></script>
</head>
<body>
        <div class="container">

<div class="contain-to-grid fixed" style="background:cadetblue;">
  <div class="large-2 columns">
     <img href="{{asset('img/logo.png')}}" style="height:90px; width:160px; float:left;">
  </div>
     <nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false" style="background:cadetblue;">
          
           <h3 style="font-style:italic">Peace and Justice are two sides of the same coin</h3>
           <ul class="title-area">
              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
           </ul>
    <nav class="top-bar-section" style="background-color:cadetblue;">
            <!-- right nav section -->
                   <ul class="left">
                    <li class="active"><a href="view_lawyer.html">Home</a></li>
                        <li><a href="add_lawyer.html">Get Connected</a></li>
                        
                   
                       
              <li class="has-dropdown">
                   <a href="#">Search Tools</a>
                   <ul class="dropdown">
                        <li><a href="jobs.html">Jobs</a></li>
                        <li><a href="view_firms.html"> Firms</a></li>
                        <li><a href="view_lawyer.html">Lawyers</a></li>
                        <li><a href="practice.html">Practice</a></li>
                        <li><a href="counties.html">Counties</a></li>
                   </ul>
              </li>
               <li><a href="jobs.html">Professional Development</a></li>
               <li><a href="add_firm.html">Market Your Firm</a></li>
            </ul>
            <ul class="right">
                           <li class="has-form">
                              <div class="row collapse">
                                   <div class="large-8 small-9 columns">
                                          <input type="text" placeholder="Find Stuff">
                                   </div>
                               <div class="large-4 small-3 columns">
                                   <a href="#" class="default button expand">Search</a>
                               </div>
                           </div>
                          </li>

                   </ul>

    </nav>
     </nav>
    </div>


    <div class="home-content" >
           yield('content')
    </div>

  <footer class="large-12 columns" style="background:#202020;">
    
      
      
        <div class="large-6 large-offset-5 columns" style="color:#ccc;">
          <p>© Copyright no one at all. Go to town.</p>

        </div>          
      
    
  </footer>
   <script src="js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="assets/bower_components/foundation/js/foundation.min.js"></script>
    <script type="text/javascript" src="assets/bower_components/foundation/js/foundation.js"></script>
    <script type="text/javascript" src="assets/js/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="assets/bower_components/vendor/foundation.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>