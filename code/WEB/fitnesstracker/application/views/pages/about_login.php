<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 50px auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
<?php $this->load->view('templates/header'); ?> 
<div class="container">
      <div class="form-signin">
          <?php if (! empty($message)) { ?>
				<div id="message">
			<font color="red"><?php echo $message; ?></font>
                                </div>
			<?php } ?>
				
				<?php echo form_open(current_url(), 'class="parallel"');?>  	
	  <form action="http://www.curesocially.com/CribelloAmit/FlexiAuthAmit/index.php?/auth/login" method="post" accept-charset="utf-8">        <h2 class="form-signin-heading">Please sign in</h2><hr>
        <input type="text" name="login_identity" class="input-block-level" placeholder="Email or Username">
        <input type="password" name="login_password" class="input-block-level" placeholder="Password">
        <?php 						
							if (isset($captcha)) 
							{ 
								echo "<li>\n";
								echo $captcha;
								echo "</li>\n";
							}							
						?>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <input class="btn btn-large btn-primary" type="submit" name="login_user" value="Sign in" />
        </form>
<!--        <H6><a href="index.php?/auth/forgotten_password">Reset Forgotten Password</a></H6>				
	<H6><a href="index.php?/auth/resend_activation_token">Resend Account Activation Token</a></H6>-->
        <hr><a href="index.php?/auth/register_account" class="link_button large">Register New Account</a>
      </div>
</div>