<?php $this->load->view('templates/header'); ?> 
<body id="register">

<div class="container">
    <div class="row">

        <div class="span12">
		<center>
			<div class="well">
                <h3>Record Activity</h3>
                <h4> Target to lose : 3456 Calory </h4>
				
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
	 <div class="span4">
						
		<?php echo form_open(current_url()); ?>  
			<div class="well">
                <h3>Activity Details</h3><hr/>
                        <label for="last_name">Activity type :</label>
                        <select class="span3" name='type' required>
                                <option> Meal </option>
                                <option> Light Food </option>
                                <option> Water </option>
                                <option> Exercise </option>
                                <option> Walk </option>
                                
                                <option> Others </option>
                            </select>		
							
				<label for="last_name">Quantity :</label>
				<input type="text" id="last_name" name="register_last_name" required value="<?php echo set_value('register_last_name');?>"/>
				<label for="username">Calory :</label>
			<input type="text" id="username" name="register_username" required value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
			title="Set a username that can be used to login with."/><br>
			<input type="submit" name="register_user" id="submit" value="Submit" class="btn btn-large btn-primary"/>
			
            </div>
			
	 </div>					
			
			
		
		<div class="span4">
		
				<div class="well">
                <h3>Activity type : </h3>Water<hr/>
				<label for="last_name">Quantity : 500 ml</label>
			<label for="username">Calory : 24 (+)</label>
			
                        
			
			
			</div>
			
			<?php echo form_close();?>
            </div>
            
            
            
            
            		<div class="span4">
		
				<div class="well">
                <h3>Activity type : </h3>Walk<hr/>
				<label for="last_name">Quantity : 500 m</label>
			<label for="username">Calory : 389 (-)</label>
			
                        
			
			
			</div>
			
			<?php echo form_close();?>
            </div>
            
            
		
	</div>

       

</div>



	<?php $this->load->view('templates/footer'); ?> 

</body>
</html>