
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
              
            
                      

            <script type="text/javascript">
              // For DEBUG
              function onClickDebug(command){
                  $.getJSON('/debug/', {
                        command : command
                      }, 
                      function(data) {

                      //report error
                      if (data.error) {
                          displayToast('danger', data.error);
                      }
                      //remove/add account
                      else {
                          displayToast('info', data.success)
                      }
                    });
              }



              // notification
              // notification
              var ringBell = false;
              function fetchNotifications(command){
                  $.ajax({
                          data : {command : command},
                          type : 'POST',
                          url : '/notifications/'
                      })
                      .done(function(data) {

                      // console.log(data);
                      // report error
                      if (data.success) {
                          // displayToast('success', data.success);
                          
                          var notificationsSeen = data.success[0];
                          var notifications = data.success[1];

                          var notfiyContent = '';
                          var img = '';
                          if (notifications.length == 0){
                              notfiyContent = '<h4>No New Notifications</h4>';
                          }
                          else{
                              for (var i = 0; i < notifications.length; i++) {
                                  if (notifications[i].img == ''){
                                    img = '';
                                  }
                                  else{
                                    img = '<img class="img-responsive" src="https://InfiniCore.net/static/images/notifications/'+notifications[i].img+'">';
                                  }
                                  notfiyContent += ''+

                                  // '<h4>'+notifications[i].message+'</h4>'+
                                  ''+notifications[i].message+''+
                                  img+
                                  '<div class="pipover-splitline"></div>';
                              }
                          }

                          $('#notifications_pop').popover({
                              trigger: 'click',
                              container: 'body',
                              template: '<div class="popover notes-popover" role="tooltip"><div class="arrow notes-arrow"></div><h3 class="popover-title notes-popover-header"></h3><div class="popover-content notes-popover-body"></div>',
                              viewport: {
                                selector: 'body',
                                padding: 2
                              },
                              html: true,
                              placement: "bottom",
                              title: 'Notifications',
                              content: notfiyContent
                          });

                          if (!notificationsSeen && notifications.length != 0){
                              var el = document.querySelector('.notification');
                              var count = notifications.length;
                              el.setAttribute('data-count', count);
                              el.classList.add('show-count');
                              ringBell = true;
                          }


                      }
                      else {
                          displayToast('danger', data.error);
                      }
                  });
              }
              
              fetchNotifications('FETCH');

              function openedNotifications(){
                  var el = document.querySelector('.notification');
                  var count =  0;
                  el.setAttribute('data-count', count);
                  el.classList.add('show-count');
                  ringBell = false;
                  el.classList.remove('notify');
                  el.offsetWidth = el.offsetWidth;
                  el.classList.add('notify');

                  fetchNotifications('SEEN');
              }


              var el = document.querySelector('.notification');
              window.setInterval(function(){
                  if (ringBell){
                      el.classList.remove('notify');
                      el.offsetWidth = el.offsetWidth;
                      el.classList.add('notify');
                  }
              }, 3700);

            </script>

      


      



<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="container">

      <div class="text-left" id="header">
        <h2 class="reveal-text">Feedback</h2>
      </div> 

<hr>


<!-- <div class="col-lg-12"> -->
  <!--<form method="POST">-->
    <div class="form-group">
      

      <h4><span class="label label-default">Topic</span></h4>
      <input class="form-control" id="topic" name="topic" type="text" value=""> <br>
      <!-- <input class="form-control" type="text" placeholder="Without '@'" id="username"> -->

      
      <h4><span class="label label-default">Message</span></h4>
      <label for="textbox">Feedback/Problems/Bugs/Support</label> <textarea class="form-control" id="textbox" name="textbox" rows="10"></textarea> 

    </div>

    <button type="submit" id="btn" name="btn" class="btn-block list-group-item-info mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
      Send
    <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>

  <!--</form>-->

  <!-- </div> -->

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
	    if($("#topic").val()=="")
		{
			 toastr.options.timeOut = 1500;
             toastr.error("Topic is a requied field");
			 error("Topic is a requied field");
			 return;
		}
		if($("#textbox").val()=="")
		{
			
			 toastr.options.timeOut = 1500;
             toastr.error("Message is a requied field");
			 error("Message is a requied field");
			 return;
		}
		
		
	     
		$.ajax({
					 headers: {
						 "Access-Control-Allow-Origin": "*",
						 "Access-Control-Allow-Methods": "GET, POST, PUT",
						 "Access-Control-Allow-Headers": "Content-Type"
					 },
					 method: "POST",
					 url: 'send_feedback.php',
					 data: {
						 'cmd'                : 'send_feedback', 
						 'topic'              : $("#topic").val(),
						 'message'            : $("#textbox").val()
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