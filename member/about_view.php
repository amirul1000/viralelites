
<?php include("header.php"); ?>
    <main class="mdl-layout__content mdl-color--grey-100">
      <div class="mdl-grid demo-content">
        <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid"> -->
          <!-- flashes sent from the server with a page reload -->
          <div class="container">
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

      


      

<link href="css/referral_boxes.css" rel="stylesheet">

<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid referral_bg">
  <div class="card option">
    <div class="fa fa-mouse-pointer icon"></div>
    <div class="price">0</div>
    <div class="title">Link Clicks</div>
  </div>
</div>

<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid referral_bg">
  <div class="card option">
    <div class="fa fa-users icon"></div>
    <div class="price">0</div>
    <div class="title">User Signups</div>
  </div>
</div>

<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid referral_bg">
  <div class="card option">
    <div class="fa fa-instagram icon"></div>
    <div class="price">0</div>
    <div class="title">Accounts Added</div>
  </div>
</div>




<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="container">

    <h2 class="reveal-text">Referral Zone</h2>

    <hr>

    Don't keep us a secret, use your unique referral link to invite your friends and get outstanding rewards. We offer great bonuses in terms of free access to growing tools such as Hashtag Research, Viral Finder and Analytics (coming soon). 

    <br><br>
    If you invite 20+ <strong>Instagram</strong> accounts you'll receive powerlikes and if you manage to get 50+ members, then you'll get 35% for every purchase they make, up to 6 months! 
    <br><br>
    The amount of free power likes depends on the size and quality of accounts that you invite. However, the more you invite, the more free power likes you will earn!

    <br><br>
    Let's earn together promoting the best social media growing platform in the industry. Use your link below:
    <br><br>


    <section class="portfolio-experiment">
      <a onmouseover="mouseOver();" onmouseout="mouseOut();" onclick="copy();">
        <span id="referral_link" class="text">viralelites.net/rabi</span>
        <span class="line -right"></span>
        <span class="line -top"></span>
        <span class="line -left"></span>
        <span class="line -bottom"></span>
      </a>
    </section>

    <br>
    <br>
  </div>
</div>

<script type="text/javascript">
  var link = document.getElementById('referral_link').innerHTML;

  function mouseOver(){
    setTimeout(function(){ 
      document.getElementById('referral_link').innerHTML = 'Click To Copy To Clipboard';
    }, 700);
  }

  function mouseOut(){
    setTimeout(function(){ 
      document.getElementById('referral_link').innerHTML = link;
    }, 700);
  }

  function copy(){

      var textArea = document.createElement("textarea");
      textArea.value = link;
      document.body.appendChild(textArea);
      textArea.focus();
      textArea.select();

      try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'Copied To Clipboard' : 'Could Not Copy';
        // console.log('Fallback: Copying text command was ' + msg);
      } catch (err) {
        console.error('Fallback: Oops, unable to copy', err);
      }

      document.getElementById('referral_link').innerHTML = msg;
  }
</script>






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
     


  	  
<?php include("footer.php"); ?>