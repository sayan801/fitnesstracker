<div class="container">
    
    <div class="row" >
        <div class="span12" >
            
            <div class="well">
                
                <center> <h3>Search your notification by providing <br>Highest Degree OR Certification In ...</h3>
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
<?php
if(isset($notification['retval'])){
	foreach ($notification['retval'] as $data_item) {
	//echo $data_item['user_name'];
 ?>

        <div class="span12" >
            
                <div class="well">
                    <h5>Application For Job : </h5><h3><?php //echo $data_item['subject']?></h3>
                    
                    <div id="main">
                        <ul style="list-style: none; ">
                            <li><p><i class="icon-user"></i><?php echo '<b> Job Recruiter : </b>'; ?><a href="#<?php //echo $data_item['sender_id'] ?>"><?php //echo $data_item['user_name']; ?></a></p></li>
                        </ul>
                    </div>
                    <p><a href="#<?php //echo $data_item['sender_id'] ?>"><input class='btn btn-primary span2' type="button" value="View Post &raquo;" /></a> 
                      <a href="#"><input class='btn btn-primary span2' type="button" value="Confirm &raquo;" /></a>
                      </p>
                </div>
				
				
				
			            
         </div>
<?php } }
else {?>

 <div class="span12" >
            
                <div class="well">
                    <center> <h3>Notification Status is empty</h3>
                </center>
                </div>
				
				
				
			            
         </div>
<?php }?>

    </div>
</div>
