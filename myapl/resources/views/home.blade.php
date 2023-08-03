@extends('welcome')
@section('content')
  <!-- second module -->
  
  <!-- sticky buttons-->
  <div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-12 col-sm-12  ">
            <div class="dropdown">
                <button  href="#id01" type="button" id="stickybtn" class="btn rounded-pill " data-bs-toggle="dropdown" style="display: inline-block;"><i class="fas fa-user-md book"></i><span>&nbsp;&nbsp;BOOK AN APPOINTMENT</span></button >
                <ul class="dropdown-menu" id="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Integrative MD</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Nutrionist </a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><h5 class="dropdown-header">Phds</h5></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-12 col-sm-12  ">
            <div class="questionnaire">
                <button  href="#id01" type="button" id="stickyq" class="btn rounded-pill" ><i class="fas fa-headset book"></i></i><span>&nbsp;&nbsp;PRECISION HEALTH QUESTIONNAIRE</span></button>
            </div>
        </div>
    </div>
</div>
    </div>
   
 <!-- How otm works module -->
  
  
  
 
 <!--youtuebutton image-->
 

 <!--Otm scientific approach module-->
<section id="otm-scientific-approach" class="scientific">
  <div class=" d-flex  justify-content-between container-fluid" >

    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
       <div class="position-relative">
        <h2 class="card-title">OTM's  Scientific <span>Approach</span></h2>
        <div class=" cont">
          <p>By working with experts in numerous diverse disciplines, OTM aims to approach gut health from a holistic, systemic viewpoint. <span>There are four pillars of the OTM approach: Hormones, Microbiome, Cell/Gene, and Lifestyle/Nutrition.</span> Each of these pillars has their own set of consultants, diagnostics, and treatment options. While targeting IBS is our primary objective, issues in the gut are rarely isolated, and patients frequently experience systemic symptoms when dealing with IBS.<span id="dot" class="cont">...</span><span id="mor" class="cont" style="display:none">Our aim is to understand the underlying causes of the digestive dysfunction and address those directly. Being a translational medicine organization, some recommendations will be novel to the gastrointestinal field, allowing for us to constantly innovate and improve our patient care.</span><br>
            <a onclick="myyFunction()" id="myyBtn" style="cursor:pointer" class="readcont">Read more</a></p>

       </div>
                 
                    </div></div>
      
      
      
      <!-- <div class="col-sm-6">           
         <div class="me-xxl-5 pe-xxl-5 " id="cc"><img   class="img-fluid me-sm-5 pe-xl-0" src="./images/card.svg"  width="95%" height="auto" alt="..."></div></div>
    </div>     -->
    
    <div class="  col-sm-12 col-md-12 col-lg-12 col-xl-6 ">
      <div class="row position-relative">
          <div class="square1"></div>
          <div class="square2"></div>
          <div id="demo" class="carousel slide" data-bs-ride="carousel">
              <!-- Indicators/dots -->
              <div class="carousel-indicators ">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
              </div>
              <!-- The slideshow/carousel -->
              <div class="carousel-inner ">
                  <div class="carousel-item active" data-bs-interval="2000">
                      <img src="/images/slide1.png" alt="scientific_approach" class="d-block" style="width:100%">
                      <div class="carousel-caption d-block"> <h4 class="harmones">Harmones</h4></div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                      <img src="/images/slide2.jpg" alt="scientific_approach" class="d-block" style="width:100%">
                      <div class="carousel-caption d-block"> <h4 class="harmones">Microbiome</h4></div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                      <img src="/images/slide3.png" alt="scientific_approach" class="d-block" style="width:100%">
                      <div class="carousel-caption d-block"> <h4 class="harmones">Cell/Gene</h4></div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                      <img src="/images/slide4.png" alt="scientific_approach" class="d-block" style="width:100%">
                      <div class="carousel-caption d-block"> <h4 class="harmones"> Lifestyle/Nutrition</h4></div>
                  </div>
              </div>
              <!-- Left and right controls/icons -->
              <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </button>
          </div>

  </div>
</section>
<!--three blank images module-->
<section id="how-otm-can-benefit-you" class="blank">
<div class="container-fluid">
  <div>
    <h5 >How OTM Can <span>Benefit You</span></h5>
   </div>
            <div class="row  " >
              <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 " id="sc1" >
                <div class="card1 text-center" >
                  <div class="d-flex justify-content-center" style="background-color: #44E5A2;width:80px;height:80px;border-radius: 50%; position: relative;left: 40%;top: -15%;">
                    <img  src="/images/s.svg" alt=""  style="padding:18px"></div>
                  <h6 class="card-title">OTM for Providers</h6>
                  
                    <p class="card-text " style="font-size: 20px; font-weight: 500;color:slategray;">   
                      OTM will have partner providers
                       and consultant providers. Partner
                        providers share equity in the<br>
                         organization,<br>
    
                          
                    </p>  
                    <a style="cursor:pointer"  data-bs-toggle="modal" data-bs-target="#crm2" class="myBtn4">Read More</a>              
                </div>
              </div>
  
  
              <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" id="sc2">
                <div class="card2 text-center " >
                  <div class="d-flex justify-content-center" style="background-color:#F4B767;width:80px;height:80px;border-radius: 50%; position: relative;left: 40%;top:-15%;">
                    <img  src="/images/u.svg" alt=""  style="padding:25px 10px 25px 10px;">
    
                  </div>
                  <h6 class="card-title">OTM for Consultants</h6>
                  <p class="card-text" style="font-size: 20px;font-weight: 500;color:slategray;">
                    Consultants can be any individual
                     or organization that can provide either
                      knowledge or external services
                        specialized<br>
  
                       
                  </p>
                  <a style="cursor:pointer"  data-bs-toggle="modal" data-bs-target="#crm3" class="myBtn5">Read More</a>
                </div>
              </div>
            </div>

</div>
<div class="modal fade " id="crm2">
  <div class="modal-dialog modal-dialog-centered modal-xl otmform">
      <div class="modal-content ">

          <!-- Modal Header -->
          <!-- <div class="modal-header">
              <h4 class="modal-title">Sign Up</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div> -->

          <!-- Modal body -->
          <div class="modal-body ">
              <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
              <h4 class="card-title ot">OTM for Providers</h4>
              <p class="card-text" style="color: #5c5d7a;">OTM will have partner providers and consultant providers. Partner providers share equity in the organization, while also providing a margin of patient revenue back to OTM for services. These providers are in direct contact with OTM's network of consultants and have direct access to OTM's patient care model. Partner providers are more invested in the organization, and therefore must push the OTM brand and operate using OTM methods. The other option for physicians who want to work with OTM is to become a physician consultant. Physician consultants are not restricted to practicing the OTM way and can choose to integrate or not integrate strategies. Provider consultants will split only the revenue earned on provision of OTM services. Services that provider consultants do not have the resources to provide can either be conducted by OTM partner providers or outsourced to specialists. OTM will organize these activities with no research necessary from either providers or patients, and doctors will make a margin on these services solely for referring patients. </p>
          </div>
          <!-- Modal footer -->
          <!-- <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div> -->
      </div>
  </div>
</div>
<div class="modal fade  " id="crm3">
  <div class="modal-dialog modal-dialog-centered modal-xl otmform">
      <div class="modal-content ">

          <!-- Modal Header -->
          <!-- <div class="modal-header">
              <h4 class="modal-title">Sign Up</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div> -->

          <!-- Modal body -->
          <div class="modal-body">
              <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
              <h4 class="card-title ot">OTM for Consultants</h4>
              <p class="card-text"  style="color: #5c5d7a;;">Consultants can be any individual or organization that can provide either knowledge or external services (specialized diagnostics, supplements, pharmaceuticals, procedures etc.) to OTM. Consultants will serve two purposes for OTM– building the patient care model and providing direct diagnostic/treatment advice or services in a patient-specific manner. To assist with the construction of the patient care model, OTM will send participating consultants questionnaires that are be to answered in detail. The questionnaire answers will be integrated into the model so it can later be used for patient-care. OTM is likely to follow up with consultants so they can further elaborate on their answers. OTM understands that this model will not be able to be applied to all patients as irritiable bowel syndrome requires different diagnostics/treatments from patient to patient. To solve this problem, OTM will also contract with research consultants so they can review patient data and provide reccomendations that can then be conveyed to providers through patient reports.</p>
          </div>
          <!-- Modal footer -->
          <!-- <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div> -->
      </div>
  </div>
</div>
</section>

            
      
          

  <!--lastcard module-->
  <div class="card mb-3 mt-sm-5 ps-md-5" style="width:100%;background: linear-gradient(87.07deg, #383AD3 7%, #EE6767 82.84%); height:720px;">
    <div class="row">
      <div class="col-sm-6 ">
      <img src="/images/a.svg" class="img-fluid ms-3 ps-5 mt-xxl-5 pt-xxl-5 mb-xxl-5 pb-xxl-5 me-xxl-5 ps-xxl-5 lt" alt="..." width="100%" height="auto">
      </div>
      
      
      
      <div class="col-sm-6 ">            
      <div class="card-body cad ms-5  " id="car">
            <h7 class="card-title ">MODERN MEDICINE : 
              A <br>  PREVENTIVE APPROACH</h7>
            <div class="cardmatter ">
  <p class="card-text mt-4 me-4">Disease is a complex phenomenon. The medical definition of
  disease is- "Any abnormality of bodily structure or function,
  other than those arising directly from physical injury". At
  Advanced Regenerative Therapeutics we see aging as a
  disease, which is one of the main causes of all diseases. Every
  individual possesses a miraculous innate capacity to heal. At
  Advanced Regenerative Therapeutics, we help you as an
  individual achieve a healthier, stronger and more balanced life
  through our pioneering individualized health solution to regain
  vitality and longevity by understanding the root cause of your
  health challenges.</p>
  
            </div>          
          </div>
    </div>




  </div>
  <!--last footer-->
  <section class="collab">
    <p class="last text-center ">Our <span>Collabrators</span></p>
  </section>
  

</div>
<!-- contactus -->
<div id="contactus" class="page-section">
  <section class="contact">
<div class=" container-fluid">	
  <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
          <img src="/images/contact.png" class="shadow sectioncontimg" alt="login_img" >
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
          <div class="shadow contactsignup" >
              <p class="contacthead">Contact Us</p>
              <form action="/message">
              <div class="form-row" >
                  <input type="email" class="form-control " id="sectionconEmail" name='email' placeholder="Email" required>
              </div>
              <p></p>
              <div class="form-row">
                  <!-- <input type="password" class="form-control" id="s5Password" name='password' placeholder="Password" required> -->
                  <textarea class="form-control" rows="3" id="concomment" name="message" placeholder="Message" required></textarea>
               </div>
              <p></p> 
                  <button type="submit" id="contbutton" class="btn btn-danger btn-block rounded-pill ">Submit</button>  
              </form>      
          </div>
      </div>
  </div>            
</div>
</section>
</div>  
<!-- bottom tomtop -->
<button type="button" class="b btn btn-floating btn-lg"  id="btn-back-to-top">
@endsection