    @section('menu')
    <div class="header-nav-bar">
      <div class="container">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">

            <li ><a href="{{ url('/') }}">Home</a>            </li>

            <li class="bg-color"><a href="{{ url('lawyer/lawyers') }}">Lawyers</i></a>            </li>

            <li><a href="{{ url('firm') }}">Law Firms</a></li>
            <li><a href="{{ url('firm/jobs') }}">Job Opportunities</a></li><li><a href="{{ url('lawyer/whyregister') }}">Why Register</a></li>
            <li><a href="{{ url('firm/about') }}">About Us</a></li>
            <li><a href="{{ url('firm/contact') }}">Contact Us</a></li>

          </ul>
        </nav>
      </div> <!-- end .container -->
    </div>
    @stop