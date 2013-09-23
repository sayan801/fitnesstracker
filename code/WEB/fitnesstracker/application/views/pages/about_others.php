<div class="container">
    
    <div class="row" >
        <div class="span12" >
            
            <div class="well">
                
                <center> <h3>Search your notification by providing <br>Date</h3>
                <?php echo form_open('jobseeker/execute_search'); ?>
                   <div class="input-append">
                            
                            <input class="span4" id="appendedInputButton" name="search" placeholder="Eg. Masters OR Indiana ..." type="text">
                            <input class="btn btn-primary" type="submit" name="submit" value="Find!" />
                            
                   </div></center>
                   <?php echo form_close(); ?>
            </div>
         </div>
        
        
    </div>
    
    <div class="row" >
<!--        <div class="span5" >
            <div class="sidebar-nav">
                <div class="span3 bs-docs-sidebar">
                    <br><br><br><br><br><br>
                    <h3>Welcome to Cribello</h3>
                    <p> Find the best match for your project. Social based feedback and ranking system that is most relevant to your needs. </p>  
                </div>	
            </div>
        </div>-->


<?php foreach ($jobseeker as $jobseeker_item) { ?>

        <div class="span12" >
            
                <div class="well">
                    <h4>
                        
                        <?php echo " " .$jobseeker_item['firstName'] . " " . $jobseeker_item['middleInitial'] . " " . $jobseeker_item['lastName'] ?></h4>
                    <a href="index.php?/cv/<?php echo $jobseeker_item['id'] ?>"><i class="icon-user"></i><?php echo " CV Style 1"; ?></a>
                        <a href="index.php?/cv1/<?php echo $jobseeker_item['id'] ?>"><i class="icon-user"></i><?php echo " CV Style 2"; ?></a>
                    <div id="main">
                        <ul style="list-style: none; ">
                            <li><p><i class="icon-book"></i><?php echo '<b> Highest Degree : </b>' . $jobseeker_item['highestDegree']; ?></p></li>
                            <li><p><i class="icon-map-marker"></i><?php echo '<b> From state : </b>' . $jobseeker_item['state']; ?></p> </li>
                            <li><p><i class="icon-leaf"></i><?php echo '<b> Certification In : </b>' . $jobseeker_item['certifications']; ?></p></li>
                            <li><p><i class="icon-plus"></i><?php echo '<b> Total Experience : </b>' . $jobseeker_item['yearsOfExperience'] . '<b> years</b>'; ?></p></li>
                        </ul>
                    </div>
                    <p><a href="index.php?/jobseeker/<?php echo $jobseeker_item['id'] ?>"><input class='btn btn-primary' type="button" value="View Candidate &raquo;" /></a> 
                      <a href="#"><input class='btn btn-primary' type="button" value="Hire Candidate &raquo;" /></a>
                      </p>
                </div>
            
         </div>
<?php } ?>

    </div>
</div>









