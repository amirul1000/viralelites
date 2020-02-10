
<!-- BEGIN LOGIN -->
<div class="content" align="center">
	<!-- BEGIN LOGIN FORM -->
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form  action="" method="post">
        <?php
		  if(isset($message))
		  {
		?>
        <code><?=$message?></code>
        <?php
		  }
		?>
		<h3>Resend verification code?</h3>
		<p>
			 Enter your e-mail address below to resend your code.
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
		</div>
		<div class="form-actions">
            <input type="hidden" name="cmd" value="resend_code"/>  
			<button type="button" id="back-btn" class="btn btn-default" onClick="window.location.href='../register';">Back</button>
			<button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	
</div>
