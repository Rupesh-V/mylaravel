<section id="how-otm-can-benefit-you" >
  
<div class="container-fluid">
  <div>
    <h5 >How OTM Can <span>Benefit You</span></h5>
  </div> 
           <div class="row blank">
            @foreach($result as $c)
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="card s4card shadow bg-white border-0" >
                    <div class="card-img-top" id="circle2" style="background:{{$c->color}}"><i class="fas {{$c->fontawesome}} fa-2x"></i></i></div>
                        <div class="card-block">
                            <h4 class="card-title">{{$c->title}}</h4>
                            <p class="card-text ct">{{$c->content}}</p>
                            <a style="cursor:pointer"  data-bs-toggle="modal" data-bs-target="#crm2" class="myBtn4">Read More</a>
                         </div>
                    </div>
                </div>
            @endforeach
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