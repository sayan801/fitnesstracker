

<div class="container" >
    
    <div class="row" >
         <div class="span12">
             <div class="hero-unit well">
                 <form class="pull-right" action="">
    
			<div class="input-append">
                <select class="span3" name='hireFor' required>
                    <option> ---Select Job--- </option>
                    <option> Associates </option>
                    <option> Bachelors </option>
                    <option> Masters </option>
                    <option> Doctorate </option>
                    <option> Other </option>
                </select>
                <button class="btn btn-primary" type="button">Invite</button>
           </div>	  
				 
                 </form>
                 <h4 align='center'>Welcome to the profile of </h4>
             <h3 align='center'>
            <?php
            echo $jobseeker_item['firstName'] . ' ' . $jobseeker_item['middleInitial'] . ' ' . $jobseeker_item['lastName'];
            ?>
        </h3>
        
           
                 
           
                 
         </div>
         </div>
</div>
    

    <div class="row" >
      <div class="span6">



              <div class="well well-red">
                <h3><a  id='personalDetails'>Personal Details</a></h3>
                <ul><li><p><?php
            echo '<b>Lives in : </b>' . $jobseeker_item['address1'] . ', ' . $jobseeker_item['address2'] . ', ' . $jobseeker_item['city'] . ', ' . $jobseeker_item['state'] . ', ' . $jobseeker_item['region'] . ', ' . $jobseeker_item['zip'];
            ?></p></li>
                </ul>

            </div>



            
          
            <div class="well well-red">
                <h3><a id='contactDetails'>Contact Details</a></h3>
                <ul><li><p><?php
                            echo '<b>Primary Phone Number : </b>' . $jobseeker_item['phone1'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Secondary Phone Number : </b>' . $jobseeker_item['phone2'];
            ?></p> </li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Primary Email ID : </b>' . $jobseeker_item['email1'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Secondary Email ID : </b>' . $jobseeker_item['email2'];
            ?></p></li>
                </ul>

                </ul>  
            </div>
          
            <div class="well well-red">
                <h3><a id='education'>Education</a></h3>
                <ul><li><p><?php
                            echo '<b>Highest Degree : </b>' . $jobseeker_item['highestDegree'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>In : </b>' . $jobseeker_item['degreeDetails'];
            ?></p> </li>
                </ul>
                <ul><li><p><?php
                            echo '<b>From : </b>' . $jobseeker_item['school'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>In Year : </b>' . $jobseeker_item['dateGraduated'];
            ?></p></li>
                </ul>

                </ul>  
            </div>
          
          
          </div>
          
          <div class="span6">
            
            <div class="well well-red">
                <h3><a id='professionalCertifications'>Professional Certifications</a></h3>
                <ul><li><p><?php
                            echo '<b>Certification In : </b>' . $jobseeker_item['certifications'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Description : </b>' . $jobseeker_item['certificationNotes'];
            ?></p> </li>
                </ul>

                </ul>  
            </div>
            
             <div class="well well-red">
                <h3><a id='eMRTrainingCertification'>EMR Training/Certification</a></h3>
                <ul class="dl-horizontal"><li><p><?php
                            echo '<b>EMR : </b>' . $jobseeker_item['emrTraining'];
            ?></p></li>
                </ul>
                <ul class="dl-horizontal"><li><p><?php
                            echo '<b>EMR Module : </b>' . $jobseeker_item['emrModules'];
            ?></p> </li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Level : </b>' . $jobseeker_item['trainingLevel'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Total Experience : </b>' . $jobseeker_item['yearsOfExperience'] . '<b> years</b>';
            ?></p></li>
                </ul>

                </ul>  
            </div>
              
              
              
                <div class="well well-red">
                <h3><a id='others'>Others</a></h3>
                <ul class="dl-horizontal"><li><p><?php
                            echo '<b>Employment Type : </b>' . $jobseeker_item['employmentType'];
            ?></p></li>
                </ul>
                <ul class="dl-horizontal"><li><p><?php
                            echo '<b>Employment Timing Type : </b>' . $jobseeker_item['employmentTimingType'];
            ?></p> </li>
                </ul>

                <ul><li><p><?php
                            echo '<b>Travel Choice : </b>' . $jobseeker_item['travelChoice'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Pequired Payment Type : </b>' . $jobseeker_item['paymentType'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Pequired Payment Amount : </b>' . $jobseeker_item['paymentAmount'];
            ?></p></li>
                </ul>
                <ul><li><p><?php
                            echo '<b>Preferred Travel Region : </b>' . $jobseeker_item['preferredTravelRegion'];
            ?></p></li>
                </ul>

            </div>
              
              
              
            
        </div>
    </div>
</div>




