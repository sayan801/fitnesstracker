
<div class="container">
    <div class="row">
        <center><div class="span12" >
                <div class="well">
                <h2>Register Account</h2>
                </div>
        </div></center>
    </div>
    
    <div class="row">
        <center><div class="span12" >
                
                    <?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
                
        </div></center>
    </div>
    
    <div class="row">
        <div class="span2" >
            
        </div>
        
        <div class="span4" >
             <div class="well">
                 
                 
				
				<?php echo form_open(current_url()); ?>  
                 
                <h3>Personal Information</h3><hr/>
            
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="register_first_name" value="<?php echo set_value('register_first_name');?>"/>
            
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="register_last_name" value="<?php echo set_value('register_last_name');?>"/>
	
            </div>
            <div class="well">
                <h3>Contact Details</h3><hr/>
            
                <label for="phone_number">Phone Number:</label>
		<input type="text" id="phone_number" name="register_phone_number" value="<?php echo set_value('register_phone_number');?>"/>
		
<!--                <label for="newsletter">Subscribe to Newsletter:</label>
		<input type="checkbox" id="newsletter" name="register_newsletter" value="1" <?php echo set_checkbox('register_newsletter',1);?>/>-->
	
            </div>
        </div>
        
        <div class="span4" >
            <div class="well">
                <h3>Login Details</h3><hr/>
            
                <label for="email_address">Email Address:</label>
		<input type="text" id="email_address" name="register_email_address" value="<?php echo set_value('register_email_address');?>"/>
		<label for="username">Username:</label>
		<input type="text" id="username" name="register_username" value="<?php echo set_value('register_username');?>"/>
		<label for="password">Password:</label>
		<input type="password" id="password" name="register_password" value="<?php echo set_value('register_password');?>"/>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="register_confirm_password" value="<?php echo set_value('register_confirm_password');?>"/><br>
			
                <hr><input type="submit" name="register_user" id="submit" value="Submit" class="btn btn-large btn-primary" />	
                <?php echo form_close();?>
            </div>
            
        </div>
    </div>
</div>

