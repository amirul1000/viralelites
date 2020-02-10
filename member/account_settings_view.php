
<?php include("header.php"); ?>
   
 <main class="mdl-layout__content mdl-color--grey-100">
      <div class="mdl-grid demo-content">
        <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid"> -->
          <!-- flashes sent from the server with a page reload -->
          <div class="container1" style="padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto">
            <br>
        
              
            
          </div>
        
            <script type="text/javascript">
              $("#alerto").delay(9000).slideUp(200, function() {
                $(this).alert('close');
              });
            </script>

            <style>
              #add_btn2 {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 100px;
                z-index: 900;
              }
            </style>
              

            <style>
              #add_btn3 {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 160px;
                z-index: 900;
              }
            </style>
              
            
                      

            

      


      


<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="container">

      <div class="text-left" id="header">
        <h2 class="reveal-text">Account Settings</h2>
      </div> 

      <hr>


<div class="content">
  <!--<form method="POST" action="/account_settings/">-->
    <div class="form-group">
      <h4><span class="label label-default">Username</span></h4>
      <!--<input class="form-control" type="text" id="username" value="username" hidden=""> -->
      <input class="form-control" type="text" id="username" value="<?=$_SESSION['username']?>" disabled=""> 
       

  	<h4><span class="label label-default">Email</span></h4>
		<input class="form-control" id="email" name="email" placeholder="Email" type="text" value="<?=$_SESSION['email']?>"> 

	 

 
      <hr>
       

  	<h4><span class="label label-default">Current Password</span></h4>
		<input class="form-control" id="cur_password" name="cur_password" placeholder="Current Password" type="password" value=""> 

	 

 
       

  	<h4><span class="label label-default">New Password</span></h4>
		<input class="form-control" id="password" name="password" placeholder="New Password" type="password" value=""> 

	 

 
       

  	<h4><span class="label label-default">Confirm Password</span></h4>
		<input class="form-control" id="confirm" name="confirm" placeholder="Confirm Password" type="password" value=""> 

	 

 
      <!-- <h4><span class="label label-default">Username</span></h4> -->

      <!-- <h5 class="text-muted"><span class="glyphicon glyphicon-user"></span>&nbsp;  Username</h5> -->
      <!-- <input class="form-control" type="text" placeholder="Without '@'" id="username"> -->

    </div>

    <button type="submit" id="btn" name="btn" class="btn-block list-group-item-info mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
      Submit
    <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>

  <!--</form>-->

  </div>
    <br>
  </div>
</div>




      <!-- prevent page from loading twice -->
      <script type="text/javascript">
        componentHandler.upgradeDom();
      </script>

      <br>
      <br>
          
      <!-- </div> -->
      <!-- </div> -->
      </div>
    </main>
     
<script language="javascript">

   $("#btn").on('click',function(){
	     ChangePassword()
   });


     function ChangePassword()
     {
	    if($("#username").val()=="")
		{
			 toastr.options.timeOut = 1500;
             toastr.error("Username is a requied field");
			 error("Username is a requied field");
			 return;
		}
		if($("#email").val()=="")
		{
			
			 toastr.options.timeOut = 1500;
             toastr.error("Email is a requied field");
			 error("Email is a requied field");
			 return;
		}
		
		if($("#cur_password").val()=="")
		{
			 toastr.options.timeOut = 1500;
             toastr.error("Current password is a requied field");
			 error("Current password is a requied field");
			 return;
		}
		if($("#password").val()=="")
		{
			
			 toastr.options.timeOut = 1500;
             toastr.error("Password is a requied field");
			 error("Password is a requied field");
			 return;
		}
		
		if($("#confirm").val()!=$("#password").val())
		{
			
			 toastr.options.timeOut = 1500;
             toastr.error("Password & Confirm Password has been mismatched");
			 error("Password & Confirm Password has been mismatched");
			 return;
		}
	     
		$.ajax({
					 headers: {
						 "Access-Control-Allow-Origin": "*",
						 "Access-Control-Allow-Methods": "GET, POST, PUT",
						 "Access-Control-Allow-Headers": "Content-Type"
					 },
					 method: "POST",
					 url: 'account_settings.php',
					 data: {
						 'cmd'                : 'change_password', 
						 'email'              : $("#email").val(),
						 'username'           : $("#username").val(),
						 'password'           : $("#password").val(),
						 'old_password'       : $("#cur_password").val()
					 },
					 dataType: 'html',
					 timeout: 10000,
					 async : true,
					 success: function (results) {
						 
						 if(results == 'success')
						 {
						   toastr.options.timeOut = 1500;
						   toastr.success(results);
						   error(results);	
						   
						 }
						 else
						 {
					   
							toastr.options.timeOut = 1500;
							toastr.error(results);
							error(results);			
							
							
						 }
	
					 },
					 error: function (jqXHR, exception) {
								
								 if(jqXHR.status==0)
								 {
								   
								 }
							 }
			});
     }
	 
 function error(msg)
 {
	 str = '<div class="alert alert-info alert-dismissible" role="alert">'+
		'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+msg+
		'</div>';
		
	$('.container1').html(str);		 
 }	 
</script>

  	  
<?php include("footer.php"); ?>