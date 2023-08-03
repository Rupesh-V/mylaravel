<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/edit.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
 
  <!-- top section -->
  <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid ">
          <a class="navbar-brand  mt-3 logo" href="{{url('admin')}}" >
          <span class="ps-2 o"style="color: #393FCF;font-weight: 750;font-size: 26px;">Blood Donation</span>
          <img src="./images/bld.png" alt="" width="60" height="60"  class="rounded-circle brand">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
          <ul class="ms-auto" style="list-style: none;">
            <li >
            <button type="button" class="btn btn-primary ">Logout</button>
            </li>
          </ul>
         
          
        </div>
      </div>
    </nav>
  </section>
    <!-- top section -->
<div class="row"> 
<!-- Sidebar -->
 <section class="sidebar">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav sh" style="list-style: none;">
        <li class="sidebar-brand">
            <a href="#">
                Blood Donations
            </a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Shortcuts</a>
        </li>
        <li>
            <a href="#">Overview</a>
        </li>
        <li>
            <a href="#">Events</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
  </div>
 </section>
<!-- /#sidebar-wrapper -->


  <!-- sidebar -->
  
<!-- updateform -->
<section class="updated" >
  

    <form method="Post" action="/updated/{{$update->id}}">  
      @method('PUT')     
       @csrf     
                <div class="form-group ">      
                    <label for="first_name">Donor Name:</label><br/><br/>  
                    <input type="textarea" class="form-control fg" name="title" value="{{$update->donor_name}}">
                </div>  
        
      <div class="form-group">      
                    <label for="first_name">Blood Group:</label><br/><br/>  
                    <input type="textarea" class="form-control fg" name="content" value="{{$update->blood_group}}">

                </div>  
      <div class="form-group ">      
                    <label for="gender">Date Of Donation:</label><br/><br/>  
                    <input type="textarea" class="form-control fg" name="fontawesome" value="{{$update->date_donotion}}">  
                </div>  
      <div class="form-group ">      
                    <label for="qualifications">Quantity (in ml):</label><br/><br/>  
                    <input type="textarea" class="form-control fg" name="color" value="{{$update->quantity}}">  
                </div>  
      
        
      <button type="submit" class="btn btn-success up"  >Update</button>  
      </form>
  </div>
  
   
 
</section>
<!-- updateform -->

</div>

</body>
</html>