
<?php include("header.php"); ?>
   



    <!-- Main -->
    <main class="mdl-layout__content mdl-color--grey-100">
      <div class="mdl-grid demo-content">
        <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid"> -->
          <!-- flashes sent from the server with a page reload -->
          <div class="container1" style="padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto">
            <br>
              <!-- <strong>NEW: 15 and 45k groups are now open for Travel only niche.</strong> -->
            
            <!-- <div class="alert alert-warning alert-dismissible text-center" role="alert"> -->
              <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
              <!-- <strong>Due to the high number of members, InfiniCore's servers are getting overwhelmed. That is why it is going so slow. We are very much aware of this problem and are doing our best to combat this. We will be investing in much bigger servers during this weekend. Thank you all for your patience.</strong> -->
              <!-- <strong>InfiniCore servers is upgrading to a newer firmware. Some funtionalities inside the platform is therefore affected. We are very sorry for any inconvenience.</strong> -->
            <!-- </div> -->

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
                                    img = '<img class="img-responsive" src="#/static/images/notifications/'+notifications[i].img+'">';
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
      <h2 class="reveal-text">Manage Your Accounts</h2>
    </div> 
    
    <?php
	 $info["table"] = "account";
	 $info["fields"] = array("account.*"); 
	 $info["where"]   = "1 AND users_id='".$_SESSION['users_id']."'";
	$arr =  $db->select($info);
	for($i=0;$i<count($arr);$i++)
	{
		
		$userobj = getUserInfo($arr[$i]['username'],$arr[$i]['password']);
		
		//debug($userobj );

		
	?>
    
    <!--rabi html -->
    <div class="container col-xs-12 col-sm-6" id="albertmardirosDEL"><div class="panel widget">
    <div class="mdl-shadow--4dp">
    <div class="widget-header bg-purple">
    <div class="widget-bg list-group-item pad-all pod-left mdl-color--light-blue-200 mdl-color-text--blue-600"> </div>
        <button id="albertmardiros_Menu" class="mdl-button mdl-js-button mdl-button--icon mdl-color-text--blue-900 pull-right" style="width: 46px; height: 46px; min-width: initial;" data-upgraded=",MaterialButton"><i class="material-icons" style="font-size:28px;">more_vert</i>
        </button>
    <div class="mdl-menu__container is-upgraded">
    <div class="mdl-menu__outline mdl-menu--bottom-right"></div>
        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" for="albertmardiros_Menu" data-upgraded=",MaterialMenu,MaterialRipple">
            <li class="mdl-menu__item mdl-js-ripple-effect" onclick="removeButFunc('albertmardiros')" tabindex="-1" data-upgraded=",MaterialRipple">Remove Account<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
            <li class="mdl-menu__item mdl-js-ripple-effect" onclick="editButFunc('albertmardiros')" tabindex="-1" data-upgraded=",MaterialRipple">Relogin (only when asked to)<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
        </ul>
    </div>
    </div>
    <div id="pop_albertmardiros" data-toggle="popover" data-placement="top" data-content="Remember to join the engagement group by navigating to Pods menu."></div>
    		<div class="widget-body text-center">
                 <img alt="Profile Picture" class="widget-img img-border-light" src="<?=$userobj->user->profile_pic_url?>">
                 <h4 class="mar-no pad-top2"><?=$userobj->user->username?></h4>
                 <hr>
                 <ul class="list-unstyled text-center pad-top  mar-no ">
                     <li class="col-xs-6"><span class="text-xl"><?=$userobj->user->following_count?></span><p class="text-muted text-uppercase"><small>Following</small></p></li>
                     <li class="col-xs-6"><span class="text-xl"><?=$userobj->user->follower_count?></span><p class="text-muted text-uppercase"><small>Followers</small></p></li>
                 </ul>
             </div>
             <br><br><br>
    </div>
    </div>
    </div>
    
     <!--rabi html close -->
    <?php
	 }
	?>
     
     
     
    
    <!------------>
    <table class="table" style="display:none">
            <tr bgcolor="#ABCAE0">
                <td>Username</td>
                <td>Password</td>
                <td>Date Created</td>
                <td>Status</td>
                <!--<td>Action</td>-->
            </tr>
         <?php
                
                if($_SESSION["search"]=="yes")
                  {
                    $whrstr = " AND ".$_SESSION['field_name']." LIKE '%".$_SESSION["field_value"]."%'";
                  }
                  else
                  {
                    $whrstr = "";
                  }
				  
				$whrstr = "AND users_id='".$_SESSION['users_id']."'";   
         
                $rowsPerPage = 10;
                $pageNum = 1;
                if(isset($_REQUEST['page']))
                {
                    $pageNum = $_REQUEST['page'];
                }
                $offset = ($pageNum - 1) * $rowsPerPage;  
         
         
                              
                $info["table"] = "account";
                $info["fields"] = array("account.*"); 
                $info["where"]   = "1   $whrstr ORDER BY id DESC  LIMIT $offset, $rowsPerPage";
                                    
                
                $arr =  $db->select($info);
                
                for($i=0;$i<count($arr);$i++)
                {
                
                   $rowColor;
        
                    if($i % 2 == 0)
                    {
                        
                        $row="#C8C8C8";
                    }
                    else
                    {
                        
                        $row="#FFFFFF";
                    }
                
         ?>
            <tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
                <td><?=$arr[$i]['username']?></td>
                <td><?=$arr[$i]['password']?></td>
                <td><?=$arr[$i]['date_created']?></td>
                <td><?=$arr[$i]['status']?></td>
                <!--<td nowrap >
                      <a href="index.php?cmd=edit&id=<?=$arr[$i]['id']?>"  class="btn default btn-xs purple"><i class="fa fa-edit"></i>Edit</a>
                      <a href="index.php?cmd=delete&id=<?=$arr[$i]['id']?>" class="btn btn-sm red filter-cancel"  onClick=" return confirm('Are you sure to delete this item ?');"><i class="fa fa-times"></i>Delete</a> 
                 </td>-->
        
            </tr>
        <?php
                  }
        ?>
        
        <tr>
           <td colspan="10" align="center">
               <style>
					#navlist li
					{
						float:left;
						display: inline;
						list-style-type: none;
						padding-right: 20px;
					}
				</style>
              <?php              
                      unset($info);
    
                       $info["table"] = "account";
                       $info["fields"] = array("count(*) as total_rows"); 
                       $info["where"]   = "1  $whrstr ORDER BY id DESC";
                      
                       $res  = $db->select($info);  
    
                                
                        $numrows = $res[0]['total_rows'];
                        $maxPage = ceil($numrows/$rowsPerPage);
                        $self = 'index.php?cmd=list';
                        $nav  = '';
                        
                        $start    = ceil($pageNum/5)*5-5+1;
                        $end      = ceil($pageNum/5)*5;
                        
                        if($maxPage<$end)
                        {
                          $end  = $maxPage;
                        }
                        
                        for($page = $start; $page <= $end; $page++)
                        //for($page = 1; $page <= $maxPage; $page++)
                        {
                            if ($page == $pageNum)
                            {
                                $nav .= "<li>$page</li>"; 
                            }
                            else
                            {
                                $nav .= "<li><a href=\"$self&&page=$page\" class=\"nav\">$page</a></li>";
                            } 
                        }
                        if ($pageNum > 1)
                        {
                            $page  = $pageNum - 1;
                            $prev  = "<li><a href=\"$self&&page=$page\" class=\"nav\">[Prev]</a></li>";
                    
                           $first = "<li><a href=\"$self&&page=1\" class=\"nav\">[First Page]</a></li>";
                        } 
                        else
                        {
                            $prev  = '<li>&nbsp;</li>'; 
                            $first = '<li>&nbsp;</li>'; 
                        }
                    
                        if ($pageNum < $maxPage)
                        {
                            $page = $pageNum + 1;
                            $next = "<li><a href=\"$self&&page=$page\" class=\"nav\">[Next]</a></li>";
                    
                            $last = "<li><a href=\"$self&&page=$maxPage\" class=\"nav\">[Last Page]</a></li>";
                        } 
                        else
                        {
                            $next = '<li>&nbsp;</li>'; 
                            $last = '<li>&nbsp;</li>'; 
                        }
                        
                        if($numrows>1)
                        {
                          echo '<ul id="navlist">';
                           echo $first . $prev . $nav . $next . $last;
                          echo '</ul>';
                        }
                    ?>     
           </td>
        </tr>
        </table>
    
    <!------------->
    
    <hr>

    <div class="form-container">
      <div class="containerAccount"><span class="expand_button button" id="modalPodYes">+</span>
        <div class="content2">
          <div class="head">
            <h6 id="modalTitle">Add an Account</h6>
            <p2 class="sub">Add your <em>Instagram account</em></p2>
          </div>
            <div class="body">
              <div class="modal-body">
                  <div class="form-group">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 receivingAccount">
                                <h5 class="text-muted"><span class="glyphicon glyphicon-user"></span>&nbsp;  Username</h5>
                                <input class="form-control" spellcheck="false" autocapitalize="none" autocomplete="off" type="text" placeholder="Without &#39;@&#39;" id="username">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 receivingAccount">
                                <h5 class="text-muted"><span class="glyphicon glyphicon-upload"></span>&nbsp; Password</h5>
                                 <input type="password" class="form-control " placeholder="" id="password">
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <br>
                        <button type="submit" id="submit" class="btn-block list-group-item-info mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial;" onclick="onClickSubmitFunc1()" data-upgraded=",MaterialButton,MaterialRipple">
                        <span style="padding-top: 5px">Submit</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                    </div>
                </div>
                </div>
              </div>

            <!-- <div class="action-bar"></div> -->


          </div>
        </div>
      </div>

    </div>



    <!--Proxy Tag for tour data-->
    <meta id="tour" data-tour="NO">


    <hr>
    <br>
    <!-- Accounts Goes here -->
    <div class="accounts" id="accounts"></div>


    <br>
    
  </div>
</div>

</div><!---continer-->
</div>

      </main>
      
      <div class="mdl-layout__obfuscator"></div>
    
<script>
   function onClickSubmitFunc1()
   {
	     saveAccount();
   }
   
   
    function saveAccount()
     {
	    if($("#username").val()=="")
		{
			 toastr.options.timeOut = 1500;
             toastr.error("username is a requied field");
			 error("username is a requied field");
			 return;
		}
		if($("#password").val()=="")
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
					 url: 'index.php',
					 data: {
						 'cmd'                 : 'NEW', 
						 'username'            : $("#username").val(),
						 'password'            : $("#password").val()
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
						   
						   setInterval(function(){ 
						   
						     window.location.reload(true);

						   
						    }, 5000);
	
						   
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