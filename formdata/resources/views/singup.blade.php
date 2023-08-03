<div class="modal fade  " id="signup">
  <div class="modal-dialog modal-dialog-centered signupform">
      <div class="modal-content ">

          

          <!-- Modal body -->
          <div class="modal-body">
          <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
              <div class= container>
                <br>
              @if(Session::has('success'))
            <div class="alert alert-success" role="alert"> 
                {{Session::get('success')}}

            </div>
        
            @endif
            @if(Session::has('failure'))
            <div class="alert alert-success" role="alert"> 
                {{Session::get('failure')}}

            </div>
            @endif
            @if(session('email'))
      <div class="alert alert-success">{{session('message')}}</div>
      @endif
              <p class="">We're launching soon. Sign up now to be the first to know</p>
              <form action="{{URL::to('dataInsert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4">
                    <input type="text" id="registerName" class="hname form-control" autocomplete="off" name='name' placeholder="Full Name*" required/>
                   
                </div>
                <div class="form-group mb-4">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ $email ?? old('email') }}">
                                    <!-- @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif  -->
                </div>
                <div class="form-outline mb-4">
                <label for="email">Zipcode</label>
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
                
              
            <!-- @if(Session::has('success'))
            <div class="alert alert-success" role="alert"> 
                {{Session::get('success')}}

            </div>
            @endif -->
              </form>
             
              
                  
              <!-- </form> -->
          </div>
          </div>
          
      </div>
  </div>
</div>
<!-- display sucesss msz -->
<!-- <div class="modal fade  " id="signup">
    <div class="modal-dialog modal-dialog-centered signupform">
        <div class="modal-content ">
  
            
  
             Modal body -->
            <!-- <div class="modal-body">
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                <div class= container>
               
                  @if(Session::has('success'))
                  <div class="alert alert-success" role="alert"> 
                      {{Session::get('success')}}
      
                  </div>
                  @endif   
               
                
                    
                
            </div>
            </div>
            
        </div>
    </div>
  </div> --> 
    <!-- display sucesss msz -->


