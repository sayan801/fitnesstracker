











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











<!--<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h3 id="myModalLabel">Your Valuable Feedback</h3>
  </div>
  <div class="modal-body">
      <?php //echo form_open('feedback/');?>
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
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Submit</button>
  </div>
</div>
<?php //echo form_close();?>
-->

<div id="footer">
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
                                                                       
                                                                    </div>
                                                                </form>
                                                            </div><!-- nav-collapse -->
                                                        </div><!-- container -->
                                                    </div><!-- navbar-inner -->
    </div>
</div>



</body>
</html>



