<section>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light ">
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
        </button>
          <a class="navbar-brand ms-5 ps-4 mt-3 " href="#home">
              <img src="/images/logo1.png" alt="" width="60" height="60"  class="rounded-circle"  >
              <span class="ps-2"style="color: #393FCF;font-weight: 750;font-size: 26px;">OTM</span>
            </a>
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link" href="#how-otm-works">How OTM Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#otm-scientific-approach">OTM Scientific Approach</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#how-otm-can-benefit-you">How OTM Can Benefit You</a>
                </li>
                <li class="nav-item">
                    <button type="submit" id="loginbtn"  class="btn rounded-pill "data-bs-toggle="modal" data-bs-target="#signup">Login</button>
                </li><p></p>
                <li class="nav-item ">
                    <button type="submit" id="signbtn" class="btn  rounded-pill " data-bs-toggle="modal" data-bs-target="#signup">Sign Up</button>
                </li>  
            </ul>
        </div>
      
    </nav>
 </section>
 <div class="modal fade  " id="signup">
  <div class="modal-dialog modal-dialog-centered signupform">
      <div class="modal-content ">

          

          <!-- Modal body -->
          <div class="modal-body">
          <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
              <div class= container>
              <p class="">We're launching soon. Sign up now to be the first to know</p>
              <form>
                <div class="form-outline mb-4">
                    <input type="text" id="registerName" class="hname form-control" autocomplete="off" name='name' placeholder="Full Name*" required/>
                    
                </div>
                <div class="form-outline mb-4">
                    <input type="email" id="registerEmail" class="hemail form-control" autocomplete="off" name='email' placeholder="Email*" required/>
                    
                </div>
                <div class="form-outline mb-4">
                    <input type="tel" id="zipCode" id="validationTooltip05" class="hzip form-control" autocomplete="off" placeholder="Zip Code*" name='zip' pattern="[0-9]{5}" title="please enter valid US. zip code" required/>
                    
                    </div>
                </div>
                <div class="form-check d-flex justify-content-center mb-4">
                    <div class="form-check mb-3 mb-md-0">
                        <input class="form-check-input" type="checkbox" value="" id="Check" required/>
                        <label class="form-check-label" for="gridCheck">Yes, I have read and accepted the<span> <a class="asignup" href="">Privacy Policy</a></span></label>
                       
                    </div>                     
                </div>
                <div class="form-outline mb-4 justify-content-center">
                        <div class="error_msg" style="display:none;color:red;text-align: center;"></div>
                        <div class="success_msg " style="display:none;color:green;text-align: center;"></div>
                </div>
                <button type="submit" id="modalbtn1" class="modalbtn1 btn btn-block mb-3">Sign Up Now</button>
              </form>
              
                  
              <!-- </form> -->
          </div>
          </div>
          
      </div>
  </div>
</div>
 