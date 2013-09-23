
<?php $this->load->helper('url'); ?>

<!doctype html>

<html lang="en">
<head>
    
    
    		<meta charset="utf-8" />
		<meta name="viewport" content="width=1024" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>Jobseeker | Rsume</title>

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
                                            <link href="<?php echo base_url('assets/css/introtonode.css') ?>" rel="stylesheet">
                
                

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
	</head>                             <script src="<?php echo base_url('assets/js/impress.js') ?>"></script>
    
   </head>

<body class="impress-not-supported">


            
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
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<div id="impress">

    <div id="title" class="step" data-x="-500" data-y="50">
        <h1><?php echo $jobseeker_item['firstName'] . ' ' . $jobseeker_item['middleInitial'] . ' ' . $jobseeker_item['lastName']; ?></h1>
        <h2><?php echo  'Highest Degree : <span>'.$jobseeker_item['highestDegree'].'</span>'; ?></h2>
    </div>

    

    <div class="cube">
        <div class="topFace step" data-x="0" data-y="-125" data-z="-1005" data-rotate-x="60" data-rotate-y="0" data-rotate-z="45" data-scale="0.5">
                <h1>education</h1>
                
                <ul>
                    <li>
						<span><?php echo $jobseeker_item['dateGraduated']; ?></span>graduated from <span>
						<?php echo $jobseeker_item['school']; ?></span> with focus
					</li>
					<li>
						<?php echo 'In : <span>' . $jobseeker_item['degreeDetails'].'</span>'; ?>
					</li>
                </ul>
        </div>
        <div class="leftFace step" data-x="-125" data-y="90" data-z="-985" data-rotate-x="-30" data-rotate-y="-45" data-rotate-z="0" data-scale="0.5">
                <h1>certifications</h1>
                <ul><li>
						<?php echo '<b>Certification in : </b>' . $jobseeker_item['certifications']; ?>
					</li>
					<li>
						<?php echo '<b>Description : </b>' . $jobseeker_item['certificationNotes'] ?>
					</li>
                                        </ul>
        </div>
        <div class="leftFace step" data-x="125" data-y="90" data-z="-985" data-rotate-x="-30" data-rotate-y="45" data-rotate-z="0" data-scale="0.5">
                <h1>training</h1>
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
        </div>
        <div class="backRightFace step" data-x="125" data-y="-35" data-z="-1200" data-rotate-x="-30" data-rotate-y="135" data-rotate-z="0" data-scale="0.5">
                <h1>others</h1>
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
        </div>
        <div class="backLeftFace step" data-x="-125" data-y="-35" data-z="-1200" data-rotate-x="-30" data-rotate-y="225" data-rotate-z="0" data-scale="0.5">
                <h1>contact</h1>
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
        </div>
        <div class="bottomFace step" data-x="0" data-y="180" data-z="-1180" data-rotate-x="60" data-rotate-y="180" data-rotate-z="45" data-scale="0.5">
                <h1>Thank you</h1>
                
        </div>
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
<script src="<?php echo base_url('assets/js/impress.js') ?>"></script>
<script>impress().init();</script>

</body>
</html>

