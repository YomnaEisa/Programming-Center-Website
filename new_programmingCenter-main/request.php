<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Requests</title>
  <script type="text/javascript" src = https://code.jquery.com/jquery-3.5.1.js></script> 
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="css/StylingSheet.css">
</head>
<body>


<nav class="navbar navbar-expand-md navbar-light bg-white ">  <!-- sticky-top -->
     <div class="container-fluid">
         <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="80px" width="80px"></a>
         <a class="navbar-brand" href="#"><img src="css/images/yucdep_logo.png" height="80px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="workshop_admin.php">Workshops</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="resources.html">Resources</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="https://sdl.edu.sa/sdlportal/en/publishers.aspx">SDL</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="#aboutus">About Us</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="logout.php">Log Out</a>
               </li>
            </ul>
         </div>
      </div>
   </nav> 
   <br>

<!-- volunteer request-->
<div class="mobile" style="padding:3%">
<div class="alert alert-success" id="add_vol_alert" style ="display: none;">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Success! </strong> Student is accepted as volunteer
</div>
         <div class="container" >
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2> Volunteering Applications</h2>
                     <span></span></div></div></div>

 <?php 
// session_start(); 
         include 'user.php';
         $user  = new User();

         $req = $user->requests();
         

         if ($req == null)
          echo "<h3>No requests are added</h3>";

      else 
      {
        echo "  <div class=\"container\">";
        echo "  <div class=\"row\">";
       foreach ($req as $data)
       { 

              ?>
      <div class="col-md-4">
      <div class="card card-1">  
      <h3><?php echo $data['name'];?></h3>
      <p><?php echo $data['ID'];?></p>
      <p><?php echo $data['fromEmail'];?></p>
      <p><?php echo $data['CourseCode'];?></p>
      <p><?php echo $data['grade'];?></p>
   
  <!--  <a class = "accept_vol" value=" //echo $data['ID'];?>">Accept</a> 
    <a class="btn btn-outline-secondary" id = "reject_vol" value=" //echo $data['ID']; ?>">Reject</a> -->
     <a class="btn btn-outline-secondary" href="Accept.php?ID=<?php echo $data["ID"];?>">Accept</a>
    <a class="btn btn-outline-secondary" href="reject.php?ID=<?php echo $data["ID"]; ?>">Reject</a>
</div>

  </div>
  
<?php
        }   
       } 
         ?>
         </div></div></div></div>
<!--- Workshop Request-->
<div style="padding:3%">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Workshop Applications</h2>
                     <span></span></div></div></div>
 <?php 

         $req = $user->workshoprequests();
         

         if ($req == null)
          echo "<h3>No requests are added</h3>";

      else 
      {
        echo "  <div class=\"container\">";
        echo "  <div class=\"row\">";
       foreach ($req as $data)
       { 

              ?>
      <div class="col-md-4">
      <div class="card card-1">  
      <h3><?php echo  $data['title'];?></h3>
      <p><?php echo $data['teacher_name'];?></p>
      <p><?php echo $data['fromEmail'];?></p>
      <p><?php echo $data['phone'];?></p>
      <p><?php echo $data['details'];?></p>
      <p><?php echo  $data['date_time'];?></p>
      <p><?php echo  $data['place'];?></p>

  <a class="btn btn-outline-secondary" href="accept_workshop.php?title=<?php echo $data["title"];?>">Accept</a>
  <a class="btn btn-outline-secondary" href="reject_workshop.php?title=<?php echo $data["title"]; ?>">Reject</a>
</div>
  </div>

<?php
        }   
       } 
         ?>
         </div></div></div></div></div>

           <!-- about section-->
   <div id="aboutus" class="about-section" style = "padding-top: 0%;">
      <div class="inner-container">
         <h1>About Us</h1>
         <p class="text">
            The <i><b>Programming Center</b></i> is located within the Yanbu Industrial College and is
             dedicated to providing computer science and engineering students with the support they need to 
             excel in their courses.
             
             <br><br><b>Our mission</b> is to help our students become knowledgeable and exceptional 
             engineers by offering a wide range of resources and services. We believe in providing
              a collaborative and inclusive learning environment that fosters creativity and innovation.
         </p>
         <div class="skills">
         </div>
      </div>
   </div>


   
<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">About</h2>
      <ul class = "ul">
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Resources</h2>
      <ul class = "ul">
        <li><a href="#">Docs</a></li>
        <li><a href="https://sdl.edu.sa/sdlportal/en/publishers.aspx">SDL</a></li>
        <li><a href="#">eBooks</a></li>
        <li><a href="#">Webinars</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Contact</h2>
      <ul class = "ul">
        <li><a href="#">Help</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Stay Updated</h2>
      <p>Get free updates before others do!</p>
      <form class = "emailup">
        <input type="email" name="email" placeholder="Enter email address">
        <input type="submit" value="Subscribe">
      </form>
    </div>
  </section>

  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list" class = "ul">
      <li><a href="#">Terms &amp; Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li>&copy; 2021 by HAYA, YOMNA, SARAH</li>
    </ul>
  </section>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="JS/NewMain.js"></script>
</body>
</html>