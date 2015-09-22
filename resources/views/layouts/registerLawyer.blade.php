  @extends('layouts.app')
  @section('content')
         <div class="row">
                  <div class="main-section">
                    <h3>Add Lawyer Records</h3>
                   <form action="" method="post" ectype="multipart/form-data">
                    <div class="row">
                        <div class="large-4 small-6 columns">
                          <label><i class="fa fa-photo"></i> Photo</label>
                          <input type="file" placeholder="photo" name="photo" class="input-content">
                        </div>

                        <div class="large-6 small-6 columns">
                          <label><i class="fa fa-user-secret"></i> First Name</label>
                          <input type="text" placeholder="first name" name="name" class="input-content">
                        </div>
                     </div>     


                      <div class="row">
                        <div class="large-5 small-6 columns">
                         <label><i class="fa fa-phone"></i>Middle Name</label>
                         <input type="text" placeholder="middle_name" name="midname">
                       </div>

                       <div class="large-5 small-6 columns">
                          <label>Last Name</label>
                          <input type="text" placeholder="last_name" name="lastname">
                       </div>
                      </div>               
                        

                      <div class="row">
                        <div class="large-5 small-6 columns">
                         <label><i class="fa fa-phone"></i>Landline Number</label>
                         <input type="text" placeholder="Landline" name="landline">
                       </div>

                       <div class="large-5 small-6 columns">
                          <label>Mobile Number</label>
                          <input type="text" placeholder="mobile" name="mobile">
                       </div>
                      </div> 

                         <div class="row">
                        <div class="large-5 small-6 columns">
                         <label><i class="fa fa-phone"></i>facebook page</label>
                         <input type="text" placeholder="facebook" name="facebook">
                       </div>

                       <div class="large-5 small-6 columns">
                          <label>LinkedIn </label>
                          <input type="text" placeholder="LinkedIn" name="LinkedIn">
                       </div>
                      </div> 

                      <div class="row">
                        <div class="large-5 small-6 columns">
                         <label><i class="fa fa-phone"></i>Email</label>
                         <input type="text" placeholder="email" name="mail">
                       </div>

                       <div class="large-5 small-6 columns">
                          <label>Twitter</label>
                          <input type="text" placeholder="twitter" name="twitter">
                       </div>
                      </div> 


                        <div class="row">
                        <div class="large-5 small-6 columns">
                         <label><i class="fa fa-phone"></i>Practice</label>
                         <input type="text" placeholder="practice" name="practice">
                       </div>

                       <div class="large-5 small-6 columns">
                          <label>Website</label>
                          <input type="text" placeholder="website" name="website">
                       </div>
                      </div>

                         <div class="row">
                        <div class="large-5 small-6 columns">
                         <label><i class="fa fa-phone"></i>Professional Associations</label>
                         <input type="text" placeholder="association" name="association">
                       </div>

                       <div class="large-5 small-6 columns">
                          <label>Education Background.</label>
                          <input type="text" placeholder="background" name="background">
                       </div>
                      </div>

                       <div class="row">
                        <div class="large-5 small-6 columns">
                         <label><i class="fa fa-phone"></i> Professional Experience</label>
                         <input type="text" placeholder="experience" name="experience">
                       </div>

                       <div class="large-5 small-6 columns">
                          <label>Partner</label>
                          <input type="text" placeholder="partner" name="partner">
                       </div>
                      </div>

                         <div class="row">
                          <div class="large-12  small-12 medium-10 columns">
                             <label>Bios</label>
                              <textarea placeholder="Bio Content" name="email" class="input-content"></textarea>
                         </div>     
                      </div>  

                        <div class="row">
                        <div class="large-5 small-6 columns">
                         <label><i class="fa fa-phone"></i>Password</label>
                         <input type="text" placeholder="password" name="password">
                       </div>

                       <div class="large-5 small-6 columns">
                          <label>Confirm Password</label>
                          <input type="text" placeholder="comfirm password" name="confirm-password">
                       </div>
                      </div>
                      

                   </form>
                   <div class="large-4 small-3 columns">
                                   <a href="#" class="default button expand">Submit</a>
                               </div>
             </div>
    </div>
	
  
