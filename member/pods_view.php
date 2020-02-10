
<?php include("header.php"); ?>
   

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

      


      


<style type="text/css">	


.profile {
  max-width: 250px;
  /*min-width: 230px;*/
  height: 58px;
  border: 2px solid #40c4ff;

  width: 100%;
  /*position: absolute;*/

  overflow: hidden;

  /*margin: 30px 30px;*/
  margin-bottom: 30px;
  margin-left: 30px;
  position: relative;
/*  top: 50%;
  left: 50%;*/
  /*transform: translate(-50%, -50%);*/
  border-radius: 35px;
  background-color: #fafafa;
  box-shadow: 0 0 1rem #babbbc;
  animation: show-profile 0.5s forwards ease-in-out;
}
@keyframes show-profile {
  0% {
    width: 0;
  }
}



.profile .photo, .profile .content {
  box-sizing: border-box;
}
.profile .photo {
  z-index: 1;
  width: 58px;
  height: 58px;
  border-radius: 50%;
	text-align: center;
  border: 2px solid #40c4ff;
  background-color: #81d4fa;
  margin: -2px -2px;
  box-shadow: 0 0 0.5rem #babbbc;
  /*animation: rotate-photo 0.5s forwards ease-in-out;*/
}
@keyframes rotate-photo {
  100% {
    transform: rotate(-360deg);
  }
}

.center {
	position: relative;
  overflow: hidden;

	/*text-align: center;*/
    top: 10%;
    /*left: 15%;*/
}

.profile .content {
  padding: 10px;
  /*overflow: hidden !important; */
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
/*.profile .content::before {
  content: "";
  position: absolute;
  width: 230px;
  height: 150px;
  background-color: #e9f3e6;
  left: 0;
  top: -30px;
  z-index: 1;
  transform: rotate(-8deg);
}*/
.profile .content .text {
  margin-top: 20px;
  margin-left: 50px;
}
.profile .content .text h3, .profile .content .text h6 {
  font-weight: normal;
  letter-spacing: -0.4px;
  white-space: nowrap;
}

.profile h3 {
	position: relative;
  z-index: 2;
	font-size: 20px;
  	margin: -23px 5px;
}
.profile h6 {
	position: relative;
  z-index: 2;
	font-size: 16px;
  	margin: 24px -15px;
}

.profile .content .btn {
  background-color: #abc;
  width: 50px;
  height: 50px;
  position: absolute;
  right: 25px;
  top: 25px;
  border-radius: 50%;
  z-index: 1;
  cursor: pointer;
  transition-duration: 0.3s;
  animation: pop-btn 0.3s both ease-in-out 0.5s;
}
@keyframes pop-btn {
  0% {
    transform: scale(0);
  }
  80% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  }
}
.profile .content .btn:hover {
  box-shadow: 0 0 0 5px rgba(170, 187, 204, 0.5);
}








.waves {
  z-index: 1;
  position: relative;
  background: rgba(255, 55, 255, 0.3);
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.waves:before {
  position: absolute;
  background: #81d4fa;
  /*margin-left: -12px;*/
  /*margin-top: -12px;*/

  height: 100%;
  width: 100%;

  content: "";
  display: block;
  border-radius: 50%;
  -webkit-animation: wave 3s infinite linear;
          animation: wave 3s infinite linear;
}


@-webkit-keyframes wave {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(6.5);
            transform: scale(6.5);
    opacity: 0;
  }
}

@keyframes wave {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(6.5);
            transform: scale(6.5);
    opacity: 0;
  }
}

/*********************TABS*********************/
/*********************TABS*********************/
/*********************TABS*********************/
/*********************TABS*********************/
/*********************TABS*********************/
.tabs {
    /*max-width: 90%;*/
    float: none;
    list-style: none;
    padding: 0;
    /*margin: 75px auto;*/
    margin: auto;
    /*border-bottom: 4px solid #ccc;*/
}
.tabs:after {
    content: '';
    display: table;
    clear: both;
}
.tabs input[type=radio] {
    display:none;
}
.tabs label {
    display: block;
    float: left;
    /*width: 33.3333%;*/
    width: 50%;
    color: #ccc;
    font-size: 26px;
    font-weight: normal;
    text-decoration: none;
    text-align: center;
    line-height: 2;
    cursor: pointer;
    box-shadow: inset 0 4px #ccc;
    border-bottom: 4px solid #ccc;
    -webkit-transition: all 0.5s; /* Safari 3.1 to 6.0 */
    transition: all 0.5s;
}
.tabs label span {
    display: none;
}
.tabs label i {
    padding: 5px;
    margin-right: 0;
}
.tabs label:hover {
    color: #4fc3f7;
    box-shadow: inset 0 4px #4fc3f7;
    border-bottom: 4px solid #4fc3f7;
}
.tab-content {
    display: none;
    width: 100%;
    float: left;
    padding: 5px 10px;
    box-sizing: border-box;
    background-color:#ffffff;
    clear: both;

}


.tab-content * {
    -webkit-animation: scale 0.7s ease-in-out;
    -moz-animation: scale 0.7s ease-in-out;
    animation: scale 0.7s ease-in-out;
}
@keyframes scale {
  0% {
    transform: scale(0.9);
    opacity: 0;
    }
  50% {
    transform: scale(1.01);
    opacity: 0.5;
    }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

@media (min-width: 768px) {
    .tabs i {
        padding: 5px;
        margin-right: 10px;
    }
    .tabs label span {
        display: inline-block;
    }
    .tabs {
    max-width: 750px;
    margin: 5px auto;
    }
}

.tabs [id^="tab"]:checked + label {
    background: #FFF;
    box-shadow: inset 0 4px #4fc3f7;
    border-bottom: 4px solid #4fc3f7;
    color: #4fc3f7;
}
#tab1:checked ~ #tab-content1,
#tab2:checked ~ #tab-content2{
/*#tab3:checked ~ #tab-content3 {*/
    display: block;
}



/*SLIDER*/
/*SLIDER*/
/*SLIDER*/
/*SLIDER*/
input[type="range"] {
  display: block;
  -webkit-appearance: none;
  background-color: #4fc3f7;
  width: 100%;
  height: 5px;
  border-radius: 5px;
  margin: 20px auto;
  outline: 0;
}
input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  background-color: #4fc3f7;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border: 2px solid white;
  cursor: pointer;
  transition: 0.3s ease-in-out;
}
​ input[type="range"]::-webkit-slider-thumb:hover {
  background-color: white;
  border: 2px solid #4fc3f7;
}
input[type="range"]::-webkit-slider-thumb:active {
  transform: scale(1.6);
}

/*devides the deliverTime into 3 equal parts (as it takes from the top tabs)*/
.deliverTimeRadios label {
  width: 33.333%;
  font-size: 15px;
  margin: 10px auto;
}

.optBigger, .dropdown-menu>li>a{
  height: 50px;
  padding-top: 15px;
  font-size: 1em;
}

</style>


<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="container col-xs-12">
      <div id="header">
        <h2 class="reveal-text">Network Size</h2>
      </div> 
    <hr>
  </div>

  <div class="network"></div><div class="profile" id="pop_geek" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 14K - 10 accs.<br><strong>15k</strong>: 16K - 1 accs.<br><strong>45k</strong>: 258K - 1 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-gamepad fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>288K - 13 accs.</h3>            <h6 style="padding: 0 20px;">Geek Culture (Memes...</h6>        </div>    </div></div><div class="profile" id="pop_photo" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 243K - 52 accs.<br><strong>15k</strong>: 42K - 2 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-camera-retro fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>285K - 55 accs.</h3>            <h6 style="padding: 0 20px;">Photography &amp; Video...</h6>        </div>    </div></div><div class="profile" id="pop_drinks" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 169K - 25 accs.<br><strong>15k</strong>: 16K - 1 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-glass fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>185K - 27 accs.</h3>            <h6 style="padding: 0 20px;">Drinks &amp; Wine</h6>        </div>    </div></div><div class="profile" id="pop_makaveli" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>100k</strong>: 78M - 278 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-star-half-o fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>78M - 279 accs.</h3>            <h6 style="padding: 0 20px;">Makaveli</h6>        </div>    </div></div><div class="profile" id="pop_pet" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 401K - 67 accs.<br><strong>15k</strong>: 56K - 2 accs.<br><strong>45k</strong>: 505K - 6 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-paw fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>962K - 76 accs.</h3>            <h6 style="padding: 0 20px;">Pet &amp; Animals</h6>        </div>    </div></div><div class="profile" id="pop_food" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 852K - 70 accs.<br><strong>15k</strong>: 97K - 4 accs.<br><strong>45k</strong>: 93K - 1 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-spoon fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>1M - 76 accs.</h3>            <h6 style="padding: 0 20px;">Food &amp; Nutrition</h6>        </div>    </div></div><div class="profile" id="pop_art" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 374K - 63 accs.<br><strong>15k</strong>: 126K - 5 accs.<br><strong>45k</strong>: 52K - 1 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-connectdevelop fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>552K - 70 accs.</h3>            <h6 style="padding: 0 20px;">Art &amp; Abstract</h6>        </div>    </div></div><div class="profile" id="pop_travel" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 4M - 702 accs.<br><strong>100k</strong>: 10M - 43 accs.<br><strong>15k</strong>: 5M - 146 accs.<br><strong>45k</strong>: 8M - 105 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-globe fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>27M - 997 accs.</h3>            <h6 style="padding: 0 20px;">Travel &amp; Vacation/Nature</h6>        </div>    </div></div><div class="profile" id="pop_lux" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 2M - 126 accs.<br><strong>15k</strong>: 194K - 7 accs.<br><strong>45k</strong>: 660K - 8 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-money fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>3M - 142 accs.</h3>            <h6 style="padding: 0 20px;">Luxery &amp; motors</h6>        </div>    </div></div><div class="profile" id="pop_fitness" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 2M - 246 accs.<br><strong>15k</strong>: 706K - 21 accs.<br><strong>45k</strong>: 1M - 13 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-heartbeat fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>4M - 281 accs.</h3>            <h6 style="padding: 0 20px;">Fitness &amp; health</h6>        </div>    </div></div><div class="profile" id="pop_fashion" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 2M - 455 accs.<br><strong>15k</strong>: 407K - 15 accs.<br><strong>45k</strong>: 758K - 9 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-universal-access fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>4M - 480 accs.</h3>            <h6 style="padding: 0 20px;">Personal, Entrepreneur...</h6>        </div>    </div></div><div class="profile" id="pop_womens" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 2M - 248 accs.<br><strong>15k</strong>: 1M - 34 accs.<br><strong>45k</strong>: 434K - 7 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-female fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>3M - 290 accs.</h3>            <h6 style="padding: 0 20px;">Womensfashion ...</h6>        </div>    </div></div><div class="profile" id="pop_mens" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 2M - 148 accs.<br><strong>15k</strong>: 396K - 12 accs.<br><strong>45k</strong>: 886K - 10 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-male fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>3M - 171 accs.</h3>            <h6 style="padding: 0 20px;">Mensfashion &amp; Lifestyle</h6>        </div>    </div></div><div class="profile" id="pop_viral" data-trigger="hover" data-toggle="popover" data-html="true" data-placement="top" data-content="Detailed Info:<br><strong>0k</strong>: 3M - 605 accs.<br><strong>15k</strong>: 2M - 72 accs.<br><strong>45k</strong>: 4M - 38 accs.<br>" data-original-title="" title="">    <div class="photo waves dl-color--light-blue-200 mdl-color-text--blue-600">        <span class="center fa fa-star-half-o fa-3x"></span>    </div>    <div class="content">        <div class="text">            <h3>10M - 716 accs.</h3>            <h6 style="padding: 0 20px;">Viral &amp; Others</h6>        </div>    </div></div>

</div>



<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="container" style="width: 100%">

        <h2 class="reveal-text">Manage Your Pods</h2>


      <hr>
      <!-- <br> -->
      <!-- <br> -->

      <!-- pods Goes here -->
      <div class="pods"></div>


    <div class="form-container">

      <div class="container2"><span class="expand_button button" onclick="selectAcc();" id="modalPodYes">+</span>
        <div class="content2">
          <div class="head">
            <h6>Join a Pod</h6>
            <!-- <p2 class="sub">Add <a href="#/dashboard/" target="_blank">More Accounts</a></p2> -->
            <p2 class="sub">
              Note: <em>Max 4 posts per day</em>.
            </p2>
          </div>
          <div class="body">
            <div class="modal-body" style="padding: 0; margin-bottom: 28px;">
             <!-- <form>-->
                <div class="form-group">

                  <div class="tabs">
                    <!-- Radio button and lable for #tab-content1 -->
                    <input type="radio" name="tabs" id="tab1" checked="">
                    <label for="tab1">
                        <i class="fa fa-info-circle"></i><span>ACCOUNT</span>
                    </label>
                    <!-- Radio buttn and lable for #tab-content2 -->
                    <input type="radio" name="tabs" id="tab2">
                    <label for="tab2">
                        <i class="fa fa-puzzle-piece"></i><span>SETTINGS</span>
                    </label>
                    <!-- <input type="radio" name="tabs" id="tab3">
                    <label for="tab3">
                        <i class="fa fa-hashtag"></i><span>HASHTAGS</span>
                    </label>
    -->

                    <div id="tab-content1" class="tab-content">

                      <div class="container-fluid">
                        <div class="row">
                          
                          <div class="col-xs-12 providesAccount" style="margin-bottom: 28px;">
                            <h5 id="tAccount" class="text-expanded"><span class="glyphicon glyphicon-user"></span>&nbsp;  Giver Account</h5>
                            <div class="btn-group bootstrap-select form-control input-padding"> 
                             <select class="selectpicker form-control input-padding selAccount" data-style="mdl-color--light-blue-300 mdl-color-text--white" data-container="body" id="selAccount" name="selAccount" data-size="6" tabindex="-98">
                             
                               <option value="" class="optBigger"></option>
                               <option data-divider="true" value=""></option>
                               <option value="NEWACCOUNT">Add Account</option>
                              
                              
                              </select>
                             </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 providesAccount" style="margin-bottom: 28px;"> 
                            <h5 id="tAccount" class="text-expanded"><span class="glyphicon glyphicon-user"></span>&nbsp;  Select Your Niche</h5>
                            <div class="btn-group bootstrap-select form-control input-padding">  <select class="selectpicker form-control input-padding selNiche" data-style="mdl-color--grey-300 mdl-color-text--black" data-container="body" id="selNiche" name="selNiche" data-size="8" tabindex="-98">
                            <!-- <option value=""></option> -->
                              <option value="makaveli" data-icon="fa fa-star-half-o">&nbsp; Makaveli Exclusive</option>
                              <option value="viral" data-icon="fa fa-star-half-o">&nbsp; Viral &amp; Others</option>
                              <option value="mens" data-icon="fa fa-male">&nbsp; Mensfashion &amp; Lifestyle</option>
                              <option value="womens" data-icon="fa fa-female">&nbsp; Womensfashion &amp; Lifestyle</option>
                              <option value="fashion" data-icon="fa fa-universal-access">&nbsp; Personal, Entrepreneur &amp; Motivational</option>
                              <option value="geek" data-icon="fa fa-gamepad">&nbsp; Geek Culture (Cosplay, Memes, Fan pages etc.)</option>
                              <option value="fitness" data-icon="fa fa-heartbeat">&nbsp; Fitness &amp; health</option>
                              <option value="lux" data-icon="fa fa-money">&nbsp; Luxury &amp; motors</option>
                              <option value="travel" data-icon="fa fa-globe">&nbsp; Travel &amp; Vacation/Nature</option>
                              <option value="art" data-icon="fa fa-connectdevelop">&nbsp; Art &amp; Abstract</option>
                              <option value="food" data-icon="fa fa-spoon">&nbsp; Food &amp; Nutrition</option>
                              <option value="photo" data-icon="fa fa-camera-retro">&nbsp; Photography &amp; Videography</option>
                              <option value="pet" data-icon="fa fa-paw">&nbsp; Pet &amp; Animals</option>
                              <option value="drinks" data-icon="fa fa-glass">&nbsp; Drinks &amp; Wine</option>
                            </select></div>
                          </div>
                        </div>

                              
                        <div class="row">
                          <div class="col-xs-12 receivingAccount">
                            <h5 id="tReciever" class="text-expanded"><span class="glyphicon glyphicon-upload"></span>&nbsp; Receiving Account</h5>
                            <input class="form-control reciever" spellcheck="false" autocapitalize="none" autocomplete="off" type="text" placeholder="Without '@'" id="reciever">
                          </div>
                        </div>

                        

                        <div class="row">
                          <div id="submit" class="btn-block list-group-item-info mdl-button mdl-js-button pods_join" style="margin-top: 4px; height: 50px; min-height: initial; background-color: #4fc3f7; color: #FFFFFF;"  data-upgraded=",MaterialButton">
                            <div style="padding-top: 5px">NEXT</div>
                          </div>
                        </div>
                      </div>

                    </div> <!-- #tab-content1 -->

                    <div id="tab-content2" class="tab-content">

                      <div class="container-fluid">
                        
                        <div class="row">
                          <div class="col-xs-3 followers">
                            <h5 id="tSize" class="text-expanded"><span class="glyphicon glyphicon-user"></span>&nbsp; Size</h5>
                            <div class="btn-group bootstrap-select form-control">  <select class="selectpicker form-control" data-style="mdl-color--light-blue-300 mdl-color-text--white" data-container="body" id="selSize" name="selSize" tabindex="-98"><option value="100k" class="optBigger">100k</option></select></div>
                          </div>

                          <div class="col-xs-12 col-xs-9 chooseLikeType">
                            <h5 id="tType" class="text-expanded"><span class="glyphicon glyphicon-cog"></span>&nbsp; Type</h5>
                            <div class="btn-group bootstrap-select form-control">  <select class="selectpicker form-control" data-style="mdl-color--grey-300 mdl-color-text--black" data-container="body" id="selType" name="selType" tabindex="-98">
                              <option value="Like" data-icon="fa fa-heart">&nbsp; Likes Only</option>
                              <option value="Both" data-icon="fa fa-comment">&nbsp; Likes + Comments</option>
                            </select></div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12">
                            <!-- <h5 id="tAccount" class="text-expanded"><span class="fa fa-heart"></span>&nbsp;  Likes: 
                              <span class="text-muted" id="numLikes">300</span>
                            </h5>
                            <input id="rangeLikes" type="range" min="100" max="500" step="5" value="300"> -->
                          </div>
                            <br>
                            <div class="col-xs-12">
                            <h5 id="tAccount" class="text-expanded"><span class="fa fa-comments"></span>&nbsp;  Comments (only if chosen): 
                              <span class="text-muted" id="numComments">10</span>
                            </h5>
                            <input id="rangeComments" type="range" min="1" max="25" step="1" value="10">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-xs-12">
                            <h5 id="tAccount" class="text-expanded" style="margin-bottom: 5%;">
                              <span class="fa fa-hourglass"></span>&nbsp;  The receiving account should receive engagement in a time span of: 
                            </h5>
                           
                            <div class="deliverTimeRadios">
                              <label class="btn active" checked="" onclick="radioSel(this);">
                                <input type="radio" name="options" value="10"> 10 min.
                              </label>
                              <label class="btn " onclick="radioSel(this);">
                                <input type="radio" name="options" value="30"> 30 min.
                              </label>
                              <label class="btn " onclick="radioSel(this);">
                                <input type="radio" name="options" value="60"> 60 min.
                              </label>
                            </div>
                          </div>
                        </div>
                         
                        <!-- <div class="row">
                          <button href='#' id="submit" class="btn-block  mdl-button mdl-js-button " style="height: 50px; min-height: initial; background-color: #4fc3f7; color: #FFFFFF;" onclick="modalSubmitFunc();">
                            <span style="padding-top: 5px">SUBMIT</span> 
                          </button>
                        </div>
                      </div>  -->

                      <div class="row">
                          <!-- <br> -->
                          <div id="submit" type="submit" class="btn-block list-group-item-info mdl-button mdl-js-button pods_join" style="margin-top: 10px; height: 50px; min-height: initial; background-color: #4fc3f7; color: #FFFFFF;" data-upgraded=",MaterialButton">
                            <div style="padding-top: 5px">SUBMIT</div>
                          </div>
                        </div>

                          <!-- <div class="action-bar"></div> -->
                    </div><!-- #tab-content2 -->
                  </div><!-- tabs end -->
                </div><!-- form-group end -->
              
            </div><!--</form>--><!-- modal-body end -->
          </div><!-- body end -->
        </div><!-- content2 end -->
      </div> <!-- container2 end -->

    </div><!-- form-container end -->

      <br>
  </div>
</div>


  <script src="js/PodsModal.js"></script>
  
  
  <script>
  
   // =============== for news click count js start ==================  
    jQuery('#submit').click( function() {
		
		
		
	    if($("#selectpicker").val()=="")
		{
			 toastr.options.timeOut = 1500;
             toastr.error("selectpicker is a requied field");
			 error("selectpicker is a requied field");
			 return;
		}
		if($("#selNiche").val()=="")
		{
			
			 toastr.options.timeOut = 1500;
             toastr.error("selNiche is a requied field");
			 error("selNiche is a requied field");
			 return;
		}
		
		
	     
		$.ajax({
					 headers: {
						 "Access-Control-Allow-Origin": "*",
						 "Access-Control-Allow-Methods": "GET, POST, PUT",
						 "Access-Control-Allow-Headers": "Content-Type"
					 },
					 method: "POST",
					 url: 'pods.php',
					 data: {
								'cmd' : 'add_pod',
								'selectpicker': $('#selectpicker').val(),
								'selNiche'  : $( "#selNiche" ).val(),
								'reciever' : $('#reciever').val()
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
     
		
	});
	
	 function error(msg)
	 {
		 str = '<div class="alert alert-info alert-dismissible" role="alert">'+
			'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+msg+
			'</div>';
			
		$('.container1').html(str);		 
	 }	 
	
	</script>


  <!--Proxy Tag for tour data-->
  <meta id="tour" data-tour="YES">

  <script type="text/javascript">
    accounts = JSON.parse('[""]');
    pods = JSON.parse('{}');
    data = JSON.parse('[["viral", "10M", 716, {"0k": ["3M", 605], "15k": ["2M", 72], "45k": ["4M", 38]}], ["mens", "3M", 171, {"0k": ["2M", 148], "15k": ["396K", 12], "45k": ["886K", 10]}], ["womens", "3M", 290, {"0k": ["2M", 248], "15k": ["1M", 34], "45k": ["434K", 7]}], ["fashion", "4M", 480, {"0k": ["2M", 455], "15k": ["407K", 15], "45k": ["758K", 9]}], ["fitness", "4M", 281, {"0k": ["2M", 246], "15k": ["706K", 21], "45k": ["1M", 13]}], ["lux", "3M", 142, {"0k": ["2M", 126], "15k": ["194K", 7], "45k": ["660K", 8]}], ["travel", "27M", 997, {"0k": ["4M", 702], "100k": ["10M", 43], "15k": ["5M", 146], "45k": ["8M", 105]}], ["art", "552K", 70, {"0k": ["374K", 63], "15k": ["126K", 5], "45k": ["52K", 1]}], ["food", "1M", 76, {"0k": ["852K", 70], "15k": ["97K", 4], "45k": ["93K", 1]}], ["pet", "962K", 76, {"0k": ["401K", 67], "15k": ["56K", 2], "45k": ["505K", 6]}], ["makaveli", "78M", 279, {"100k": ["78M", 278]}], ["drinks", "185K", 27, {"0k": ["169K", 25], "15k": ["16K", 1]}], ["photo", "285K", 55, {"0k": ["243K", 52], "15k": ["42K", 2]}], ["geek", "288K", 13, {"0k": ["14K", 10], "15k": ["16K", 1], "45k": ["258K", 1]}]]');

    loadPods(pods, data);
  </script>


<style>
    #helpBut {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 30px;
      margin-bottom: 50px;
      /*z-index: 900;*/
    }
</style>
<!-- HELP -->
<a id="helpBut" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color-text--white" target="_blank" href="/t/tips" data-upgraded=",MaterialButton,MaterialRipple">
    <i class="material-icons">help_outline</i>
<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>

<style>
    #helpBut2 {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 30px;
      margin-bottom: 120px;
      /*z-index: 900;*/
    }
</style>
<!-- HELP -->
<a id="helpBut2" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color-text--white" target="_blank" href="info.php?type=comments" data-upgraded=",MaterialButton,MaterialRipple">
    <i class="material-icons fa fa-comments"></i>
<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>

<!-- Modal Input -->
<div class="modal fade" id="selectPref" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <div class="col-xs-6">
          <h5 class="modal-title" id="selectCountryTitle"><span class="glyphicon glyphicon-time"></span>&nbsp; Your Preferences</h5>
        </div>

        <div class="col-xs-6">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>  
        </div>
        
      </div>

      <div class="modal-body">
        
        <div class="container">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <h5 class="text-muted">The receiving account should recceive engagement in a time span of:</h5>
            <label class="btn btn-info active" style="font-size: 14px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;">
              <input type="radio" name="options" value="10" autocomplete="off" checked=""> 10 min.
            </label>
            <label class="btn btn-info" style="font-size: 14px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;">
              <input type="radio" name="options" value="30" autocomplete="off"> 30 min.
            </label>
            <label class="btn btn-info" style="font-size: 14px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;">
              <input type="radio" name="options" value="60" autocomplete="off"> 60 min.
            </label>
          </div>
        </div>

      <!-- <div class="modal-footer"> -->
        <button type="submit" id="submit" data-dismiss="modal" class="btn-block  mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;" onclick="modalSubmitFunc();" data-upgraded=",MaterialButton,MaterialRipple">
         <span style="padding-top: 5px">SUBMIT</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Input -->
<div class="modal fade" id="confirmation" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <div class="col-xs-6">
          <h5 class="modal-title" id="selectCountryTitle"><span class="glyphicon glyphicon-time"></span>&nbsp; Are you sure?</h5>
        </div>

        <div class="col-xs-6">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>  
        </div>
        
      </div>

      <div class="modal-body">
        
          <h5 class="text-muted">In order to prevent leeching, this action will cause the giver account to be disabled for <strong>48 hours</strong> if you continue.</h5>

      </div>
      <!-- <div class="modal-footer"> -->
        <!-- <div class="col-xs-6"> -->
          <button type="submit" id="submit" data-dismiss="modal" class="btn-block mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;" data-upgraded=",MaterialButton,MaterialRipple">
         <span style="padding-top: 5px">No Stay Active</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
        <!-- </div> -->

        <!-- <div class="col-xs-6"> -->
          <button type="submit" id="submit" data-dismiss="modal" class="btn-block mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial; background-color: #dfdfdf; color: #000;" onclick="confirmationModal(false, '', '');" data-upgraded=",MaterialButton,MaterialRipple">
         <span style="padding-top: 5px">Yes I'm Sure</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
        <!-- </div> -->
      <!-- </div> -->
        
    </div>
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
    </div></main>
    
    

     


  	  
<?php include("footer.php"); ?>