<!-- Header -->  
<?php $this->load->view('templates/header'); ?> 
<body id="register">

<div class="container">
    <div class="row">

        <div class="span12">
		<center>
			<div class="well">
                <h3>Register Account</h3>
				
				<?php if (! empty($message)) { ?>
				<div id="message">
                                <font color="red"><?php echo $message; ?></font>

				</div>
				<?php } ?>
				
            </div>
			</center>
		</div>
	</div>

    <div class="row">
	
	<div class="span2">
	</div>

        <div class="span4">
						
		<?php echo form_open(current_url()); ?>  
			<div class="well">
                <h3>Personal Details</h3><hr/>

                        <label for="first_name">First Name:</label>
				<input type="text" id="first_name" name="register_first_name" required value="<?php echo set_value('register_first_name');?>"/>
							
							
				<label for="last_name">Last Name:</label>
				<input type="text" id="last_name" name="register_last_name" required value="<?php echo set_value('register_last_name');?>"/>
				<label for="username">Username:</label>
			<input type="text" id="username" name="register_username" required value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
			title="Set a username that can be used to login with."/>
			<label for="password">Password:</label>
			<input type="password" id="password" name="register_password" required value="<?php echo set_value('register_password');?>"/>
			
            </div>
			
						<div class="well">
                <h3>Contact Details</h3><hr/>

                        <label for="phone_number">Phone Number:</label>
				<input type="text" id="phone_number" name="register_phone_number" required value="<?php echo set_value('register_phone_number');?>"/><br>
							
					<label for="email_address">Email Address:</label>
			<input type="text" id="email_address" name="register_email_address" required value="<?php echo set_value('register_email_address');?>" class="tooltip_trigger"
	                title="This demo requires that upon registration, you will need to activate your account via clicking a link that is sent to your email address."
			/>		
				
            </div>
			
			
		</div>
		<div class="span4">
		
				<div class="well">
                <h3>Fitness Details</h3><hr/>
				<label for="username">Gender:</label>
			<input type="radio" name="sex" value="male">Male<br>
			<input type="radio" name="sex" value="female">Female
			<label for="username">Date of birth:</label>
			<input type="text" id="username" name="register_username" required value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
			title="Set a username that can be used to login with."/>
			
                        
			<label for="username">current weight:</label>
			<input type="text" id="username" name="register_username" required value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
			title="Set a username that can be used to login with."/>
			
			<label for="username">your goal weight:</label>
			<input type="text" id="username" name="register_username" required value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
			title="Set a username that can be used to login with."/></br>
			<input type="submit" name="register_user" id="submit" value="Submit" class="btn btn-large btn-primary"/>
			</div>
			
			<?php echo form_close();?>
            </div>
		</div>
	</div>
</div>




	<?php $this->load->view('templates/footer'); ?> 

</body>
</html>
