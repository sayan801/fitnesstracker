<!-- Header -->  
<?php $this->load->view('templates/header'); ?> 


<div class="container">

<div class="row">  
<div class="span12">  
<div class="well">
<center><h3>User Login</h3></center>
</div>
	</div>
</div>
    <div class="row">  
	<div class="span4">  
	</div>
		<div class="span4">   
			<div class="well">
               <label for="identity">Username:</label>
			<input type="text" id="identity" name="login_identity" value="" class="tooltip_parent" required/>
			<label for="password">Password:</label>
			<input type="password" id="password" name="login_password" value="" required/>
			<label class="checkbox">
          <input type="checkbox" id="remember_me" name="remember_me" value="1" <?php echo set_checkbox('remember_me', 1); ?>/> Remember me
        </label>
							
							
	<input type="submit" name="login_user" id="submit" value="Submit" class="btn btn-large btn-primary"/><br>
				
            </div>
			
		</div>
	</div>
</div>
   