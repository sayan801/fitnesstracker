
<?php $this->load->helper('url'); ?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=1024" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>Jobseeker | Resume</title>

		<meta name="author" content="Michael Seifarth" />
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=yes" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />

                <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/print.css') ?>" type="text/css" media="print" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css') ?>">
                 <link rel="stylesheet" href="<?php echo base_url('assets/css/impress-demo.css') ?>">
		<!--[if IE 7]>
		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
		<![endif]-->
		
				
                
                
                <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
                                <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
                                    <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
                                        <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
                
                
                

		<link rel="shortcut icon" href="favicon.png" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
                
                
                
                
                
                
                
                
                
                <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

                                            <script> 
                                                $(document).ready(function(){
                                                    $("#flip").click(function(){
                                                        $("#panel").slideDown("slow");
                                                    });
                                                });
                                            </script>




                                            <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

                                            <style>
                                                body {
                                                    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
                                                    padding-bottom: 60px;
                                                }
                                            </style>


                                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                                            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
                                            <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
                                            <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
	</head>

	<body class="impress-not-supported">
	
	
            
<!--            
            <div style="position: fixed; top: 0px; left: 30px; pointer-events: auto;">

                   <nav>
			<a href="#name"><i class="icon-bookmark-empty"> Name</i></a>
                        <a href="#education"><i class="icon-book"> Education</i></a>
			<a href="#professionalCertifications"><i class="icon-building"> Certifications</i></a>
			<a href="#emrTrainingCertification"><i class="icon-star"> Training</i></a>
			<a href="#others"><i class="icon-cloud"> Others</i></a>
			<a href="#contactMe"><i class="icon-envelope"> Contact Me</i></a>
			<a id="next" href="#" onclick="impress().next();">next <i class="icon-chevron-right">&nbsp;</i></a>
		</nav>                                                   
                                                                    
</div>-->
            
            
            
					<div style="position: fixed; top: 10px; left: 10px; pointer-events: auto;">

                                                                       <div class="navbar navbar-inverse navbar-fixed-top">
                                                    <div class="navbar-inner">
                                                        <div class="container">
                                                            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                                                <span class="icon-bar"></span>
                                                                <span class="icon-bar"></span>
                                                                <span class="icon-bar"></span>
                                                            </button>
                                                            <a class="brand" href="index.php">Cribello</a>
                                                            <div class="nav-collapse collapse">
                                                                <ul class="nav">          
                                                                    <li class="dropdown">
                                                                        <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Job Seekers <b class="caret"></b></a>
                                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                                            <li class=""><a href="index.php?/jobseeker/create">Register for Jobs</a></li>
                                                                            <li class=""><a href="index.php?/jobseeker/">Registered Job Seekers</a></li>                                                                            
                                                                        </ul>
                                                                    </li>

                                                                    <li class="dropdown">
                                                                        <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Job Recruiter <b class="caret"></b></a>
                                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                                            <li class=""><a href="index.php?/recruiter/create">Register as Recruiter</a></li>
                                                                            <li class=""><a href="index.php?/recruiter/">Registered Job Recuiters</a></li>                                                                            
                                                                        </ul>
                                                                    </li>

                                                                    
                                                                    <li class="dropdown">
                                                                        <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Job Post <b class="caret"></b></a>
                                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                                            <li class=""><a href="index.php?/jobpost/create">Add Job Post</a></li>
                                                                           
                                                                            <li class=""><a href="index.php?/jobpost/">All Job Post</a></li>                                                                            
                                                                        </ul>
                                                                    </li>

                                                                    <li class=""><a href="http://blogs.cribello.com">Blogs</a></li>
                                                                    <li class=""><a href="#stack1" data-toggle="modal">Feedback</a></li>
                                                                    
                                                                    <li class="dropdown">
                                                                        <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Demo<b class="caret"></b></a>
                                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                                            <li class=""><a href="index.php?/cvdemo/">CV Demo</a></li>     
                                                                            <li class=""><a href="index.php?/cribellodemo">Cribello Description</a></li>                                                                                                                                                   
                                                                        </ul>
                                                                    </li>
                                                                    <li class=""><a href="index.php?/about">About Us</a></li>
                                                                    







                                                                    <!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Click Here!</a>-->
                                                                </ul>	  
                                                                <form class="navbar-search pull-right" action="">
                                                                    <div class="input-append">
                                                                        <input class="span2" id="appendedInputButton" type="text">
                                                                            <button class="btn" type="button">Go!</button>
                                                                    </div>
                                                                </form>
                                                            </div><!-- nav-collapse -->
                                                        </div><!-- container -->
                                                    </div><!-- navbar-inner -->
                                                </div><!-- navbar navbar-inverse navbar-fixed-top -->
                                                                    
</div>
	
	
	
	
            
            
            
            
            
            
            

		<div class="fallback-message">
			<p>
				Your browser <b>doesn't support the features required</b>, so you are presented with a simplified version of this site.
			</p>
			<p>
				For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.
			</p>
		</div>

		
            
            
           <!-- <nav>
			<a href="index.php">Cribello</a>
			<a href="index.php?/jobseeker/">Job Seekers</a>
			<a href="index.php?/recruiter/">Job Recuiters</a>
			<a href="index.php?/jobpost/">Job Post</a>
			<a href="http://blogs.cribello.com">Blogs</a>			
			<a href="#stack1" data-toggle="modal">Feedback</a>
			<a href="index.php?/about">About Us</a>
			
		</nav>-->
            
            
            

		<div id="impress">

			<div id="name" class="step" data-scale="5">
				<h1><?php echo $jobseeker_item['firstName'] . ' ' . $jobseeker_item['middleInitial'] . ' ' . $jobseeker_item['lastName']; ?></h1>
				<h3><?php echo  'Highest Degree : <span>'.$jobseeker_item['highestDegree'].'</span>'; ?></h3>
				<h2><i class="icon-bookmark-empty">&nbsp;</i>NAME AND DEGREE</h2>				
			</div>

			<div id="education" class="step"
			data-x="1500"
			data-y="1500"
			data-rotate="90"
			data-scale="2">
				<ul>
					<li>
						<span><?php echo $jobseeker_item['dateGraduated']; ?></span>graduated from <span>
						<?php echo $jobseeker_item['school']; ?></span> with focus
					</li>
					<li>
						<?php echo 'In : <span>' . $jobseeker_item['degreeDetails'].'</span>'; ?>
					</li>
					
				</ul>
				<h2><i class="icon-book">&nbsp;</i>education</h2>
			</div>

			<div id="certifications"  class="step"
			data-x="200"
			data-y="1800"
			data-rotate="0"
			data-scale="1">
				<ul>
					<li>
						<?php echo '<b>Certification in : </b>' . $jobseeker_item['certifications']; ?>
					</li>
					<li>
						<?php echo '<b>Description : </b>' . $jobseeker_item['certificationNotes'] ?>
					</li>
					
				</ul>
				<h2><i class="icon-building">&nbsp;</i>Certifications</h2>
			</div>

			<div id="training" class="step"
			data-x="0"
			data-y="1500"
			data-rotate="90"
			data-scale="2">
				<ul>
					<li>
						<?php echo '<b>EMR : </b>' . $jobseeker_item['emrTraining']; ?>
					</li>
					<li>
						<?php echo '<b>EMR Module : </b>' . $jobseeker_item['emrModules']; ?>
					</li>
					<li>
						<?php echo '<b>Level : </b>' . $jobseeker_item['trainingLevel']; ?>
					</li>
					<li>
						<?php echo '<b>Total Experience : </b>' . $jobseeker_item['yearsOfExperience'] . '<b> years</b>'; ?>
					</li>
				</ul>
				<h2><i class="icon-star">&nbsp;</i>Training</h2>
			</div>

		
			<div id="others" class="step"
			data-x="200"
			data-y="2300"
			data-rotate="0"
			data-scale="1">
				<ul>
					<li>
						<?php echo '<b>Employment Type : </b>' . $jobseeker_item['employmentType']; ?>
					</li>
					<li>
						<?php echo '<b>Employment Timing Type : </b>' . $jobseeker_item['employmentTimingType']; ?>
					</li>
					<li>
						<?php echo '<b>Travel Choice : </b>' . $jobseeker_item['travelChoice']; ?>
					</li>
					<li>
						<?php echo '<b>Pequired Payment Type : </b>' . $jobseeker_item['paymentType']; ?>
					</li>
					<li>
						<?php echo '<b>Pequired Payment Amount : </b>' . $jobseeker_item['paymentAmount']; ?>
					</li>
                    <li>
						<?php echo '<b>Preferred Travel Region : </b>' . $jobseeker_item['preferredTravelRegion']; ?>
						</li>
				</ul>
				<h2><i class="icon-cloud">&nbsp;</i>Others</h2>
			</div>
			
                    
                    
                    
			

			

			<div id="contact" class="step"
			data-x="-2000"
			data-y="1000"
			data-rotate="0"
			data-scale="1">
				<ul>
					<li>
						<?php echo '<b>Lives in : </b>' . $jobseeker_item['address1'] . ', ' . $jobseeker_item['address2'] . ', ' . $jobseeker_item['city'] . ', ' . $jobseeker_item['state'] . ', ' . $jobseeker_item['region'] . ', ' . $jobseeker_item['zip']; ?>
					</li>
                    <li>
						<?php echo '<b>Primary Phone Number : </b>' . $jobseeker_item['phone1']; ?>
					</li>
                    <li>
						<?php echo '<b>Secondary Phone Number : </b>' . $jobseeker_item['phone2'];  ?>
					</li>                                        
                    <li>
						<?php echo '<b>Primary Email ID : </b>' . $jobseeker_item['email1']; ?>
					</li>
                    <li>
						<?php echo '<b>Secondary Email ID : </b>' . $jobseeker_item['email2']; ?>
					</li>
                                        
                                        
                                        
				</ul>
				<h2><i class="icon-envelope">&nbsp;</i>contact me</h2>
			</div>

			<!-- <div id="overview" class="step" data-x="0" data-y="1000" data-scale="5">&nbsp;</div> -->

		</div>

		<div class="hint">
			<p>
				Use a spacebar or arrow keys to navigate
			</p>
		</div>
		<script>
			if ("ontouchstart" in document.documentElement) {
				document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
			}
		</script>

		<script src="<?php echo base_url('assets/js/impress.js') ?>"></script>
		<script>
			if (!window.location.search.match(/print/)) {
				impress().init();
			}
		</script>
		<!-- <script type="text/javascript" charset="utf-8">
		document.getElementById("id")
		</script> -->
		
		
		
<script>impress().init();</script>
<script>impress().showMenu();</script>
		
		
		





<div id="stack1" class="modal hide fade" tabindex="-9" data-focus-on="input:first">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h3>Your Valuable Feedback</h3>
  </div>
  <div class="modal-body">
    <?php echo form_open('feedback/');?>
    <label for="fullName" >Your Full Name</label>
                <input class="span3" type="text" name="fullName" required/>
                <label for="email" >Email</label>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input class="span2" name="email" type="text" required>
                        </div>
                    </div>
                </div>
                <label for="opinionAbout" >Opinion About</label>
                <input class="span3" type="text" name="opinionAbout" required/>
                <label for="yourOpinion">Your Opinion</label>
                <textarea class="span3" name="yourOpinion" rows="4"></textarea>

  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
    <button type="button" data-toggle="modal" href="#stack2" data-dismiss="modal" class="btn btn-primary">Submit</button>
    
    <?php echo form_close();?>
  </div>
</div>
 


<div id="stack2" class="modal hide fade" tabindex="-6" data-focus-on="input:first">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h3>Thank You For Your Valuable Feedback</h3>
  </div>
  <div class="modal-body">
    <h5>Our expert team will contact with you as soon as possible.</h5>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Ok</button>
    
  </div>
</div>






		
		
		
<div style="position: fixed; bottom: 10px; left: 10px; pointer-events: auto;">

                    <div class="navbar navbar-inverse navbar-fixed-bottom">
                                                    <div class="navbar-inner">
                                                        <div class="container">
                                                            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                                                <span class="icon-bar"></span>
                                                                <span class="icon-bar"></span>
                                                                <span class="icon-bar"></span>
                                                            </button>
                                                            
                                                            <div class="nav-collapse collapse">
                                                                <ul class="nav">          
                                                                    <li class=""></li>                                                             
                                                                    <!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Click Here!</a>-->
                                                                </ul>	  
                                                                <form class="navbar-search pull-right" action="">
                                                                    <div>
                                                                        <p class="muted credit">&copy; copyright 2013 by <a href="http://technicise.com/">Technicise.com</a></p>
                                                                    </div>
                                                                </form>
                                                            </div><!-- nav-collapse -->
                                                        </div><!-- container -->
                                                    </div><!-- navbar-inner -->
    </div>
                                                                    
</div>		
		
		
		
		
		
<!--<div style="position: fixed; bottom: 10px; right: 10px; pointer-events: auto;">

                                                                        <p class="muted credit">&copy; copyright 2013 by <a href="http://technicise.com/">Technicise.com</a></p>
                                                                    
</div>-->



	</body>
</html>
