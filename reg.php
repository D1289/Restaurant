<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
  
    <div class="modal-content bg-custom">

     
      <div class="modal-c-tabs">

      
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        
        <div class="tab-content">
         
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

           
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" name="email" id="email" class="form-control form-control-sm validate">
                <label>Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="password" id="pws" class="form-control form-control-sm validate">
                <label>Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info" name="login" id="loginButton">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#panel8" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <span id="loginErr" class="text-danger"></span>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>


          
          

     
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <div class="modal-body">
              <div class="md-form form-sm mb-3">
                <i class="fas fa-user prefix"></i>
                <input type="text" name="name" id="inputName" class="form-control form-control-sm validate">
                <label>Your username</label>
            </div>
            
              <div class="md-form form-sm mb-3">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" name="email" id="inputMail" class="form-control form-control-sm validate">
                <label>Your email</label>
              </div>

              <div class="md-form form-sm mb-3">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="password" id="inputPws" class="form-control form-control-sm validate">
                <label>Your password</label>
              </div>

             

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" id="signup" name="signup">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
           
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#panel7" class="blue-text">Log In</a></p>
              </div>
              <div id="registerErr" class="text-danger"></div>
              <div id="registerSuccess" class="text-success"></div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>

      </div>
    </div>
    
  </div>
</div>
</div>




