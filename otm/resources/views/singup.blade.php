<div class="modal fade  " id="signup">
  <div class="modal-dialog modal-dialog-centered signupform">
      <div class="modal-content ">

          

          <!-- Modal body -->
          <div class="modal-body">
          <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
              <div class= container>
              <p class="">We're launching soon. Sign up now to be the first to know</p>
              <form action="{{URL::to('dataInsert')}}" method="POST" enctype="multipart/form-data">
                @csrf
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
                
                <button type="submit" id="modalbtn1" class="modalbtn1 btn btn-block mb-3">Sign Up Now</button>
                <div class="form-outline mb-4 justify-content-center">
                    <div class="error_msg" style="display:none;color:red;text-align: center;"></div>
                    <div class="success_msg " style="display:none;color:green;text-align: center;"></div>
            </div>
              </form>
              
                  
              <!-- </form> -->
          </div>
          </div>
          
      </div>
  </div>
</div>