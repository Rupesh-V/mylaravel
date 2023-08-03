<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/addNew.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid ">
          <a class="navbar-brand  mt-3 logo" href="{{'admin'}}" >
          <span class="ps-2 o"style="color: #393FCF;font-weight: 750;font-size: 26px;">Admin Portal</span>
              <img src="./images/logo1.png" alt="" width="60" height="60"  class="rounded-circle brand"  >
              
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
  <div class="row">
  <section class="sidebar">
  <div id="sidebar-wrapper col-4">
    <ul class="sidebar-nav sh" style="list-style: none;">
        <li class="sidebar-brand">
            <a href="#">
                How Otm Can Benefit You
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
 <div class="col-8 updated">
    <h1>Add New Card</h1>
    <form action="{{URL::to('addNew')}}" method="POST" enctype="multipart/form-data">  
    @csrf
    <!-- <div class="form-group">      
         <label for="first_name">ID:</label><br/><br/>  
         <input type="text" class="form-control fg" name="id" value="" placeholder="Id value">
     </div>   -->

     <div class="form-group">      
         <label for="first_name">Title:</label><br/><br/>  
         <input type="textarea" class="form-control fg" name="title" value="" placeholder="Title of the card">
     </div>  

<div class="form-group">      
         <label for="first_name">Content:</label><br/><br/>  
         <textarea  class="form-control fg" name="content" value="" placeholder="Enter the content"></textarea> 
     </div>  
<div class="form-group">      
         <label for="gender">Fontawesome:</label><br/><br/>  
         <input type="textarea" class="form-control fg" name="fontawesome" value="" placeholder="Fontawesome Icons">  
     </div>  
<div class="form-group">      
         <label for="qualifications">Color:</label><br/><br/>  
         <input type="textarea" class="form-control fg" name="color" value="" placeholder="Color for fontawesome Icons">  
     </div>  
     <!-- <div class="form-group">      
         <label for="qualifications">Created:</label><br/><br/>  
         <input type="textarea" class="form-control fg" name="created_at" value="" placeholder="Status of created">  
     </div>   -->
     <!-- <div class="form-group">      
         <label for="qualifications">Updated:</label><br/><br/>  
         <input type="textarea" class="form-control fg" name="updated_at" value="" placeholder="Status of createsssssssd">  
     </div>   -->


<button type="submit" class="btn btn-success up" >Add Data</button>  
</form> </div> 
</div>



</body>
</html>