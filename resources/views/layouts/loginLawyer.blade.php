@extends('layouts.app')

@section('content')
    <div class="home-content" style="background:url(img/01.jpg); height:615px; padding:0px; background-size:cover; ">
      <div class="tile">
        <div class="overlay">
        <h1 class="title"> The Judiciary </h1>
          <div class="login-detail large-4 columns">

          
            <form action="#" method="post">
              <div class="myModal"><h4><i class="fa fa-lock"></i> Login</h4></div>
              <div class="myModal">
                <div class="form-group"><i class="fa fa fa-user-secret"></i><input type="text" name="name" class="detail" placeholder="Username"></div>
                <div class="form-group"><i class="fa fa-unlock-alt"></i><input type="password" name="password" class="detail" placeholder="Password"></div>             
              </div>
              <div class="modal-footer">
                <a href="#" class="lawyer"><button class="btn btn-sucess" type="submit">Login</button></a>
              </div>
            </form>
          </div>
          <div class="signup">
            <a href="signup_lawyer.html" class="lawyer">Sing up as Lawyer</a> | <a href="signup_firm.html" class="firm">Sing up as Firm</a>
          </div>
        </div>
      </div>
    </div>
    
