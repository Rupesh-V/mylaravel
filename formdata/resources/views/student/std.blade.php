<!DOCTYPE html>
<html lang="en">
<head>
  <title >Student Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/css/std.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
    <h3 class="mb-5 text-uppercase text-center mt-5">Student Registration Form</h3>

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  
                  <div>
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Basic Details</h3>
      
 <form action="{{URL::to('dataIn')}}" method="POST">
 @csrf
  <!-- firstname and lastname row -->
  <div class="row">
      <!-- firstname -->
    <div class="col-md-6 col-sm-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1m">First name</label>
        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="fname" required/>
      </div>
    </div>
    <!-- lastname -->
    <div class="col-md-6 col-sm-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1n">Last name</label>
        <input type="text" id="form3Example1n" class="form-control form-control-lg" name="lname" required/>
      </div>
    </div>
  </div>
<!-- mothers name and fathers name -->
  <div class="row">
    <!-- mothers name -->
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1m1">Mother's name</label>
       <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="mname" required/>
      </div>
    </div>
    <!-- fathers name -->
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1n1">Father's name</label>
       <input type="text" id="form3Example1n1" class="form-control form-control-lg" name="fname" required/>
      </div>
    </div>
  </div>
<!-- email -->
<div class="row">
  <div class="mb-3 col-md-3 col-sm-4">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required/>
  </div>
  <!-- phone number -->
  <div class="form-outline col-md-3 col-sm-4">
    <label class="form-label" for="typePhone">Phone</label>
    <input type="tel" id="typePhone" class="form-control" pattern="[0-9]{10}" name="phn" required/>
  </div>
  <!-- Address -->
  <div class="form-outline mb-4 col-md-6 col-sm-4">
    <label class="form-label" for="form3Example8">Address</label>
    <textarea  class="form-control fg" name="address" value="" placeholder="Enter the address" required></textarea> 
  </div>
</div>



<div class="row state">
  <!-- pincode -->
  <div class="form-outline mb-4 col-md-2">
    <label class="form-label" for="form3Example90">Pincode</label>
    <input type="text" id="form3Example90" class="form-control form-control-lg" pattern="[0-9]{6}" name="pincode" required/>
  </div>
  <!-- state -->
    <div class="col-md-2 mb-4 mt-2">
        <label class="form-check-label" for="otherGender">State:</label><br>

        
        <select class="form-select" id="validationCustom04" name="state" required>
          <option selected  value="">Choose...</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Telagana">Telagana</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
         </select>
         <div class="invalid-feedback">
          Please select a valid state.
        </div>
    </div>
       <div class="col-md-2 mb-4 mt-2">
        <label class="form-check-label" for="otherGender">City:</label><br>

        <select class="form-select" id="validationCustom04" name="city" required>
          <option selected  value="">Choose...</option>
            
            <option value="Banglore">Banglore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Nellore">Nellore</option>
         </select>
         <div class="invalid-feedback">
          Please select a valid city.
        </div>
       </div>
       <!-- gender -->
<div class="d-md-flex justify-content-start align-items-center mb-4 py-2 col-md-6" >
  <h6 class="mb-0 me-4">Gender: </h6>

     <div class="form-check form-check-inline mb-0 me-4">
        <input class="form-check-input" type="radio"  name="inlineRadioOptions" id="maleGender" value="Male" />
        <label class="form-check-label" for="maleGender" style="font-weight: 400;">Male</label>
     </div>
       <div class="form-check form-check-inline mb-0 me-4">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="Female" /> 
         <label class="form-check-label" for="femaleGender" style="font-weight: 400;">Female</label>
       </div>

          <div class="form-check form-check-inline mb-0">
           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="Other" />
           <label class="form-check-label" for="otherGender" style="font-weight: 400;">Other</label>
          </div>

</div>
</div>

<div class="row">
  <!-- date of birth -->
  <div class="form-outline mb-4 col-md-3">
    <label class="form-label" for="form3Example9">DOB</label>
    <input type="date" id="form3Example9" class="form-control form-control-lg" name="dob" required/>
  </div>
<!-- maritak status -->
<div class="col-md-6 mx-auto">
  <div class="row justify-content-around">
    <label for="exampleInputEmail1" class="form-label text-center">Marrital status</label>

<div class="form-check col-md-1">
  <input class="form-check-input checkoption" type="checkbox" value="Single" id="flexCheckDefault1" name="marrital">
  <label class="form-check-label" for="flexCheckDefault1" style="font-weight: 400;">
   Single
  </label>
</div>
<div class="form-check col-md-1">
  <input class="form-check-input checkoption" type="checkbox" value="Married" id="flexCheckDefault2" name="marrital" >
  <label class="form-check-label" for="flexCheckDefault2" style="font-weight: 400;">
    Married
  </label>
</div>
  </div>
</div>
<!-- nationality -->
<div class="col-md-3">
  <label for="exampleInputEmail1" class="form-label">Nationality</label>
  <select class="form-select" id="validationCustom04" name="nationality" required>
    <option selected  value="">Choose...</option>
  
  <option value="Indian">Indian</option>
  <option value="Non-Indian">Non-Indian</option>
</select>
<div class="invalid-feedback">
  Please select a valid option.
</div>
</div>
</div>
 <!-- Eductional Qualifications -->
 <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  
                  <div>
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Eductional Qualifications</h3>
      
 
  <!-- Graduation level -->
  <h5>Graduation details/ Post graduation details</h5>

   <div class="row">
    <div class="col-md-6">
      <label class="form-check-label" for="otherGender">Education Level</label>
      <select class="form-select" id="validationCustom04" name="educationlevel" required>
        <option selected  value="">Choose...</option>
            <option value="Post Graduate">Post Graduate</option>
            <option value="Undergraduate">Undergraduate</option>
          </select>
  </div>
  <!-- college -->
  <div class="col-md-6">
    <div class="form-outline">
      <label class="form-label" for="form3Example1m1">College</label>
     <input type="text" id="form3Example1m1" class="form-control form-control-lg" placeholder="collegename" name="collegen" required/>
    </div> 
  </div> 
  
   </div>
    <!-- start year and end year -->
  <div class="row">
    
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1m">Start year</label>
        <input type="tel" id="form3Example1m" class="form-control form-control-lg years" pattern="[0-9]{4}" name="startyear" required/>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1n">End Year</label>
        <input type="tel" id="form3Example1n" class="form-control form-control-lg" pattern="[0-9]{4}" name="endyear" required/>
      </div>
    </div>
  </div>
  <!-- degree and stream -->
  <div class="row">
    
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1m">Degree</label>
        <input type="text" id="form3Example1m" class="form-control form-control-lg years" placeholder="B.tech or degree" name="degree" required/>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1n">Stream</label>
        <input type="text" id="form3Example1n" class="form-control form-control-lg" placeholder="course" name="stream" required/>
      </div>
    </div>
  </div>
  <!-- Performance scale -->
  <div class="row">
    
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1m">Performance Scale</label>
        <select class="form-select" id="validationCustom04" name="perfscale" required>
          <option selected  value="">Choose...</option>
          <option value="CGPA">CGPA</option>
          <option value="PERCENTAGE">PERCENTAGE</option>
        </select>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1n">Performance</label>
        <input type="text" id="form3Example1n" class="form-control form-control-lg" placeholder="Enter Cgpa or Percentage" name="perfomance" required/>
      </div>
    </div>
  </div>
  <!-- Senior Secondary or Equivalent (XII) details -->
   <h5>Senior Secondary or Equivalent (XII) details</h5>
   <div class="row">
    <div class="col-md-6">
      <label class="form-check-label" for="otherGender">Year of completion</label>
      <select class="form-select" id="validationCustom04" name="intercompletedyear" required>
        <option selected  value="">Choose...</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
  
          </select>
      </div>
      <div class="form-group col-md-6">
        <label for="board" class="control-label">Board</label>
        <input type="text" class="form-control" id="board"  placeholder="e.g. CBSE" name="board" required/>
    </div>
   </div>
  <div class="row">
    
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1m">Performance Scale</label>
        <select class="form-select" id="validationCustom04" name="perfmscale" required>
          <option selected  value="">Choose...</option>
          <option value="CGPA">CGPA</option>
          <option value="PERCENTAGE">PERCENTAGE</option>
        </select>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1n">Performance</label>
        <input type="text" id="form3Example1n" class="form-control form-control-lg" placeholder="Enter Cgpa or Percentage" name="grades" required/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-outline col-md-6">
      <label class="form-label" for="form3Example1n">Stream</label>
      <select class="form-select" id="validationCustom04" name="groupname" required>
        <option selected  value="">Choose...</option>
        <option value="MPC">MPC</option>
        <option value="BIPC">BIPC</option>
      </select>
    </div>

  <!-- college -->
  <div class="mb-3 col-md-6">
    <label for="exampleFormControlInput1" class="form-label">College</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="collegename" name="intercoll" required/>
  </div>
</div>
  <!-- school -->
  <h5>Secondary (X) details</h5>
   <div class="row">
    <div class="col-md-6">
      <label class="form-check-label" for="otherGender">Year of completion</label>
      <select class="form-select" id="validationCustom04" name="matriculationcompleted" required>
        <option selected  value="">Choose...</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
  
          </select>
      </div>
      <div class="form-group col-md-6">
        <label for="board" class="control-label">Board</label>
        <input type="text" class="form-control" id="board" name="maticulationboard" placeholder="e.g. CBSE" required/>
      </div>

   </div>
  <div class="row">
    <!-- college -->
  <div class="mb-3 col-md-6">
    <label for="exampleFormControlInput1" class="form-label">School</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="schoolname" name="schlname" required/>
  </div>
    <div class="col-md-3 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1m">Performance Scale</label>
        <select class="form-select" id="validationCustom04" name="perfrmncescale" required>
          <option selected  value="">Choose...</option>
          <option value="CGPA">CGPA</option>
          <option value="PERCENTAGE">PERCENTAGE</option>
        </select>
      </div>
    </div>
    
    <div class="col-md-3 mb-4">
      <div class="form-outline">
        <label class="form-label" for="form3Example1n">Performance</label>
        <input type="text" id="form3Example1n" class="form-control form-control-lg" placeholder="Enter Cgpa or Percentage" name="matriculationpoints" required/>
      </div>
    </div>
  </div>
  
  
  

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </section>
      <!-- Bank Details   -->
      <section class="h-100 bg-dark">
        <div class="container ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration ">
                <div class="row g-0">
                  
                  <div>
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Bank Details</h3>
      
    
      <!-- Account holders name -->
      <div class="row">
        <div class="col-md-6 col-sm-12 mb-4">
          <div class="form-outline">
            <label class="form-label" for="form3Example1m">Account Holders Name</label>
            <input type="text" id="form3Example1m" class="form-control form-control-lg" name="account_holders_name" required/>
          </div>
        </div>
        <!-- Account holders number -->
        <div class="col-md-6 col-sm-12 mb-4">
          <div class="form-outline">
            <label class="form-label" for="form3Example1m">Account Number</label>
            <input type="tel" id="form3Example1m" class="form-control form-control-lg" pattern="[0-9]{11}" name="account_number" required/>
          </div>
        </div>
      </div>
      <!-- pan number -->
      <div class="row">
        
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="form-outline">
          <label class="form-label" for="form3Example1m">Pan Number</label>
          <input type="tel" id="form3Example1m" class="form-control form-control-lg" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" name="pan_number" required/>
        </div>
      </div>
      <!-- bank name -->
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="form-outline">
          <label class="form-label" for="form3Example1m">Bank Name</label>
          <input type="text" id="form3Example1m" class="form-control form-control-lg" name="bank_name" required/>
        </div>
      </div>
      </div>
      <!-- branch name -->
      <div class="row">
<div class="col-md-6 col-sm-12 mb-4">
  <div class="form-outline">
    <label class="form-label" for="form3Example1m">Branch Name</label>
    <input type="text" id="form3Example1m" class="form-control form-control-lg" name="branch_name" required/>
  </div>
</div>
<!-- Ifsc code -->
<div class="col-md-6 col-sm-12 mb-4">
<div class="form-outline">
<label class="form-label" for="form3Example1m">IFSC Code:</label>
<input type="tel" id="form3Example1m" class="form-control form-control-lg" pattern="^[A-Z]{4}0[A-Z0-9]{6}$" name="ifsc_code" required/>
</div>
</div>
      </div>
<div class="d-flex justify-content-end pt-3">
  <input type="reset" class="btn btn-light btn-lg"></input>
  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit</button>
</div>

    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
 </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
     

     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type="text/javascript">
   $(document).ready(function(){

      $('.checkoption').click(function() {
         $('.checkoption').not(this).prop('checked', false);
      });

   });
   
   </script>
   
</body>
</html>