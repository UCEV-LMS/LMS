<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="JNTUG, University, UCEV, Central Library">
	<title>JNTU GV-UCEV Central Library :: Home page</title>
	<?php 
	include 'links.php';
	?>
    <style type="text/css">
		p{
			text-align: justify;
		}
	</style>
</head>
<body>
	<?php
	include 'nav.php';
	?>
	<div  class="container-fluid">
		<div id="carouselslides" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselslides" data-slide-to="0" class="active"></li>
          <li data-target="#carouselslides" data-slide-to="1"></li>
          <li data-target="#carouselslides" data-slide-to="2"></li>
          <li data-target="#carouselslides" data-slide-to="3"></li>
<!--           <li data-target="#carouselslides" data-slide-to="4"></li>
 -->
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  class="d-block l-50 w-100" src="./images/lib1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block l-50 w-100" src="./images/lib2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block l-50 w-100" src="./images/lib3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block  l-50 w-100" src="./images/lib4.jpg" alt="Third slide">
          </div>
<!--           <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/img5.jpg" alt="Third slide">
          </div>
 -->          

        </div>
        <a class="carousel-control-prev" href="#carouselslides" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselslides" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


	</div>
	<div class="container">
		<div class="row py-5">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 center">
				<img style="width: 350px;" class="img-responsive profileImg" src="./images/name.jpg" alt="T.Siva Rama Krishna Officer In Charge , Library">
					<center class="py-2">
						<h4>OFFICER-INCHARGE MESSAGE<h4>
<p>"A library is the delivery room for the birth of ideas, a place where history comes to life."<p>
						<h4>Dr.T. Siva Rama Krishna</h4><h5>Officer In Charge , Library</h5>
					</center>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<p>
				The Central Library, established in June 2008, is a proud partner in the institute’s march towards its vision playing a vital role in acquisition, organization, and dissemination of knowledge. Library has a large collection of books covering various branches of Engineering, Technology, and Science and Humanities and its related fields. The library is well protected with CCTV Security systems.</p>
			    <p>The library is in a separate building of total area 2864 Sq.mts located opposite to the administrative office in Academic Block-I. Library block is equipped with a lending section, reading halls with Reference collection, Group discussion room, Magazine reading/ Periodicals section, and Digital Library. The present seating capacity in the Library is 225 and is in the process of up-gradation to 350.
                <p>All these years, it has been the life line for the academic activity of the institute. At present, it stands as a model library. Central Library services the academic needs of about 3000 UG and PG students, research scholars and nearly 100, faculty members, technical and administrative staff of our institute. The Library resources stand at about 54000 volumes including text books and reference books. The journal subscription goes beyond 10. The library collection also includes a large section of expensive reference books, a large number of text book collection meant to cater for the courses running in the institute and a collection of books ear-marked for BC/SC/ST students. The central library has been catering to the needs of the under graduates, post graduates students, research scholars, faculty and staff members of the 9 departments. The book collection has been supporting the teaching, research, development and other professional activities of these departments. The demands of the ever-growing research areas in multiple disciplines are being catered with the help of latest volumes, in almost all fields of engineering, Science, Technology and general areas. The library presently occupies a spacious two storied building. The college library provides special services like current awareness services, selective dissemination of information along with the normal services like reference, referral, literature searching and bibliographic data services.</p>
	</p>
			</div>
		</div>
		<div class="row">


			<div  class=" col-sm-12 col-xs-12 col-md-6 col-lg-4">
				<div class="card">
				<div class="card-header" style="background-color:#003366"><h4 style="color: white">OUR VISION</h4></div>
				<div class="card-body"><p>Empowering JNTUK UCEV's research and learning community with enriching collections, innovative services, and state-of-art technologies. </p>
			</div>
				</div>
			</div>


			<div class="col-md-4 col-lg-4 missionDp">
				<img class="img-fluid" src="https://imgur.com/2cQzPEN.png" alt="OUR VISION IMAGE">
			</div>


			<div class="col-sm-12 col-xs-12 col-md-6 col-lg-4 mobmargin">
				<div class="card">
					<div class="card-header" style="background-color:#003366"><h4 style="color: white;">OUR MISSION</h4></div>
					<div class="card-body">
						 <p> Central Library promises to promote the JNTUK UCEV's mission as well as to discover, preserve, and disseminate knowledge. It engages with the ongoing technological transformations to deliver world-class physical and digital content and services significant to education, research, publication, and outreach.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include 'footer.php';
	?>
	
</body>
</html>