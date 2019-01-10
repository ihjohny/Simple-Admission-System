<!DOCTYPE html>
<html>
<head>
	<title>Home -HTML Project</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
  <div class="container"><!--container start-->
  	<!--header start-->
  	<div class="header">
  	<img src="logo.png" width="50" height="70">
    <div class="userarea"><!--userarea start-->
      <form>
            <input type="text" name="text" class="search" placeholder="search Here">
            <input type="submit" name="submit" class="submit" value="Search">
       </form>
    </div><!--userarea end-->
  	</div>
    <!--header end-->

<div class="menucontainer">
 <!--menucontainer start--> 
	<nav class="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="registration_form.php">Registration</a></li>
      <li><a href="student_list.php">Students</a></li>
      <li><a href="about_us.php">About us</a></li>
      <!--sub link-->
  </ul>
</nav>
</div>
<!--menucontainer end-->


<!--banner section start-->
<div class="banner">
	<div class="item">
		<div class="hero">

          <div class ="button">
              <a href ="registration_form.php" class ="btn btn-one">Adimt Student</a>
              <a href ="student_list.php" class ="btn btn-two "> Students List</a>
          </div>
     </div>
	</div><!--item-->
</div>
<!--banner section end-->


<!--About Nstu-->
<div class="about">
	<h2>About NSTU</h2>
	<hr>
	<div class="aboutus">
    <p>   The well-furnished central library equipped with online library facilities has 10,000 printed books and 1500 printed journals apart from numerous e-books and e-journals. Since its establishment, NSTU has been running very smoothly. The teachers have extraordinary academic background and excellent skill of presentation. Presently, one fourth of the teachers are doing PhD in different parts of the world. This is the only university in Bangladesh where three individual subjects based exclusively on information study namely Information Science, Information Technology, and Information and Communication Engineering is taught. International conferences, seminars and symposiums are frequently held with participation of the scholars from all over the world. Internal Programming contest is arranged regularly to sharpen the skill as a result of which many national and international awards in programming contests are already in the store of this university. Students of Fisheries and Marine Science as well as Oceanography with their extensive research on healthy marine resources privileged by the location of this university in a coastal arena are contributing greatly to the country’s blue economy.</p>
    <br>
		<p>
		<h4>Department List of NSTU</h4></p>
		<br>
    <h5>FACULTY OF ENGINEERING AND TECHNOLOGY</h5>
    <ul style="list-style-type:square">
    <li>Computer Science and Telecommunication Engineering (CSTE)</li>
    <li>Information and Communication Engineering (ICE)</li>
    <li>Department of Electrical and Electronic Engineering (EEE)</li>
    <li>Applied Chemistry and Chemical Engineering (ACCE)</li>
    </ul>

    <h5>FACULTY OF ENGINEERING AND TECHNOLOGY</h5>
    <ul style="list-style-type:square">
    <li>Fisheries and Marine Science (FIMS)</li>
    <li>Department of Pharmacy</li>
    <li>Department of Microbiology</li>
    <li>Department of Applied Mathematics</li>
    <li>Department of Statistics</li>
    <li>Food Technology and Nutrition Science (FTNS)</li>
    <li>Environmental Science and Disaster Management (ESDM)</li>
    <li>Biotechnology and Genetic Engineering (BGE)</li>
    <li>Department of Agriculture</li>
    <li>Department of Oceanography)</li>
    <li>Department of Biochemistry and Molecular Biology</li>
    <li>Department of Zoology</li>
    </ul> 
	</div>
	
</div>
<!--About Nstu end-->

<!--map and address-->
 <div class="footer">
 	<!--map-->
  <div class="row">
  <div class="col-4">
      <h3 class="head">UNIVERSITY LOCATION</h3>
      <div class="map">
      	<img src="map.png" width="170" height="170">
      </div>
  </div><!--col-4-->

  <div class="col-4">
       <h3 class="head">UNIVERSITY ADDRESS</h3>
       <div class="para">
      	<p>Postal Code: 3814</p>
        <p>+88032172720</p>
        <p>info@nstu.edu.bd</p>
        <p>Sunday - Thursday:</p>
        <p> 9:00 AM - 5:00 PM</p>
    </div>
  </div><!--col-4-->

</div><!--row-->


  <div class="clearfix">  
  </div>
</div>
 
 
<!--map and address end-->


  <footer class="copyright text-center">
  	&copy;2018 |<a href="#"> Noakhali Science and Technology University </a>| All Rights Reserved
  </footer>

  </div>
  <!--container end-->

</body>
</html>