
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

      


      


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<style type="text/css"> 


:root {
    font-family: Arial, Helvetica, sans-serif;
}

.tags-input {
    border: 1px solid #333;
    display: inline-block;
}

.tags-input .tag {
    font-size: 85%;
    padding: 0.5em 0.75em;
    margin: 0.25em 0.1em;
    display: inline-block;
    background-color: #ddd;
    transition: all 0.1s linear;
    cursor: pointer;
}

.tags-input .tag:hover {
    background-color: #3af;
    color: white;
}

.tags-input .tag .close::after {
    content: '×';
    font-weight: bold;
    display: inline-block;
    transform: scale(1.4);
    margin-left: 0.75em;
}

.tags-input .tag .close:hover::after {
    color: red;
}

.tags-input .main-input {
    border: 0;
    outline: 0;
    padding: 0.5em 0.1em;  
}




/*loader*/
.loader-wrap {
  z-index: 99999;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  background-color: rgba(50, 50, 50, .85);
  overflow: hidden;
}
 /*#292929;*/

.loader-circles {
  position: absolute;
  left: 0;
  right: 0;
  top: 320px;
  bottom: 0;
  margin: auto;
  transform: rotate(45deg);
  width: 400px;
  height: 400px;
}

@media screen and (max-width: 468px) { 
  .loader-circles {
    left: -40px;
  }
}

@media screen and (max-width: 328px) { 
  .loader-circles {
    left: -60px;
  }
}

.loader-circles .circle {
  box-sizing: border-box;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  background-color: transparent;
  border: 6.6666666667px solid #ffffff;
  border-radius: 50%;
  border-bottom-color: transparent;
  border-right-color: transparent;
  text-align: center;
}
.loader-circles .circle:nth-child(even) {
  border-color: #40C4FF;
  border-bottom-color: transparent;
  border-right-color: transparent;
}
.loader-circles .circle:nth-child(odd) {
  border-color: #D65B60;
  border-bottom-color: transparent;
  border-right-color: transparent;
}
.loader-circles .circle:nth-child(1) {
  width: 20px;
  height: 20px;
  animation: rotate-circle linear infinite;
  animation-duration: 12s;
}
.loader-circles .circle:nth-child(2) {
  width: 40px;
  height: 40px;
  animation: rotate-circle linear infinite;
  animation-duration: 6s;
}
.loader-circles .circle:nth-child(3) {
  width: 60px;
  height: 60px;
  animation: rotate-circle linear infinite;
  animation-duration: 4s;
}
.loader-circles .circle:nth-child(4) {
  width: 80px;
  height: 80px;
  animation: rotate-circle linear infinite;
  animation-duration: 3s;
}
.loader-circles .circle:nth-child(5) {
  width: 100px;
  height: 100px;
  animation: rotate-circle linear infinite;
  animation-duration: 2.4s;
}
.loader-circles .circle:nth-child(6) {
  width: 120px;
  height: 120px;
  animation: rotate-circle linear infinite;
  animation-duration: 2s;
}
.loader-circles .circle:nth-child(7) {
  width: 140px;
  height: 140px;
  animation: rotate-circle linear infinite;
  animation-duration: 1.7142857143s;
}
.loader-circles .circle:nth-child(8) {
  width: 160px;
  height: 160px;
  animation: rotate-circle linear infinite;
  animation-duration: 1.5s;
}
.loader-circles .circle:nth-child(9) {
  width: 180px;
  height: 180px;
  animation: rotate-circle linear infinite;
  animation-duration: 1.3333333333s;
}
.loader-circles .circle:nth-child(10) {
  width: 200px;
  height: 200px;
  animation: rotate-circle linear infinite;
  animation-duration: 1.2s;
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate-circle {
  100% {
    transform: rotate(360deg);
  }
}










@import url("https://fonts.googleapis.com/css?family=Heebo:800");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.parent {
  max-width: 681px;
  width: 100%;
  max-height: 484px;
  height: 100%;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto auto;
  overflow: hidden;
  position: absolute;
  -webkit-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
  box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
}

svg {
  position: absolute;
  z-index: 1;
  max-width: 681px;
  width: 100%;
  max-height: 484px;
  height: 100%;
}

button {
  position: absolute;
  z-index: 4;
  /*z-index: 50;*/
  width: 40px;
  overflow: hidden;
  height: 40px;
  border: none;
  border-radius: 50%;
  background: #fff;
  cursor: pointer;
  /*-webkit-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);*/
  /*-moz-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);*/
  /*box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);*/
}
button:focus {
  outline-width: 0;
}

circle {
  stroke: #fff;
  fill: none;
  transition: 0.3s;
}

#svg1 circle {
  transition-timing-function: linear;
}

#svg2 circle {
  transition-timing-function: linear;
}

#Capa_1 {
  position: absolute;
  width: 16px;
  height: 16px;
  transform: translate(-7px, -8px);
}

#Capa_2 {
  position: absolute;
  width: 16px;
  height: 16px;
  transform: translate(-9px, -8px);
}

.right {
  /*margin-left: 628px;*/
  margin-left: 23%;
  margin-top: 220px;
  border: 1px solid #849494;
  background-color: transparent;
  transition: .5s;
}
.right:hover {
  background-color: #fff;
}

.left {
  margin-left: 0.5%;
  margin-top: 220px;
  border: 1px solid #849494;
  background-color: transparent;
  transition: .5s;
}
.left:hover {
  background-color: #fff;
}

.circle1 {
  transition-delay: 0.05s;
}

.circle2 {
  transition-delay: 0.1s;
}

.circle3 {
  transition-delay: 0.15s;
}

.circle4 {
  transition-delay: 0.2s;
}

.circle5 {
  transition-delay: 0.25s;
}

.circle6 {
  transition-delay: 0.3s;
}

.circle7 {
  transition-delay: 0.35s;
}

.circle8 {
  transition-delay: 0.4s;
}

.circle9 {
  transition-delay: 0.45s;
}

.circle10 {
  transition-delay: 0.05s;
}

.circle11 {
  transition-delay: 0.1s;
}

.circle12 {
  transition-delay: 0.15s;
}

.circle13 {
  transition-delay: 0.2s;
}

.circle14 {
  transition-delay: 0.25s;
}

.circle15 {
  transition-delay: 0.3s;
}

.circle16 {
  transition-delay: 0.35s;
}

.circle17 {
  transition-delay: 0.4s;
}

.circle18 {
  transition-delay: 0.45s;
}

.slide0 {
  background-image: url("images/hashtags/slide1.jpg");
}

.slide1 {
  background-image: url("images/hashtags/slide4.jpg");
}

.slide2 {
  background-image: url("images/hashtags/slide2.jpg");
}

.slide3 {
  background-image: url("images/hashtags/slide3.jpg");
}

.slide4 {
  background-image: url("images/hashtags/slide0.jpg");
}

.slider {
  position: absolute;
  width: 400%;
  height: 100%;
  background: #000;
  display: inline-flex;
  overflow: hidden;
}

.sss, .slide0, .slide1, .slide2, .slide3, .slide4 {
  position: absolute;
  background-position: center;
  background-size: cover;
  color: #fff;
  font-size: 40px;
  padding-top: 160px;
  font-weight: 750;
  font-family: 'Heebo', sans-serif;
  text-align: center;
  width: 25%;
  height: 100%;
  z-index: 1;
  /*z-index: 10;*/
  transition: 1.4s;
}

.sss {
  margin-left: 15%;
  padding-top: 8px;
  width: 70%;
  line-height: 120%;
  font-size: 24px;
  font-weight: 400;
  /*font-family: 'Heebo', sans-serif;*/
  /*transition: 1.4s;*/
}

.tran {
  transform: scale(1.3);
}

.up1 {
  z-index: 2;
  /*z-index: 20;*/
}

.up2 {
  z-index: 3;
  /*z-index: 40;*/
}

.steap {
  stroke-width: 0;
}

.streak {
  stroke-width: 82px;
}

/*@media (max-width: 700px) {*/
/*  .parent {
    margin-left: 1%;
    margin-right: 1%;
    width: 80%;
  }*/
/*}*/

@media (max-width: 500px) {
  .right {
    margin-left: 21%;
  }
  .slide1, .slide2, .slide3, .slide4 {
    font-size: 30px;
    /*padding-top: 120px;*/
  }
  .sss {
    font-size: 16px;
    font-weight: 200;
    /*padding-top: 120px;*/
  }

}

</style>


<script type="text/javascript">
  var hashGuide = false;
</script>


  
  <script type="text/javascript">
    hashGuide = true;
  </script>

 <div class="parent">
  <div class="slider">
   <button type="button" id="right" class="right" name="button">

       <svg version="1.1" id="Capa_1" width="40px" height="40px " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
       <g>
        <path style="fill: #9d9d9d;" d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
          c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
          "></path>
       </g>

       </svg>

       </button>
   <button type="button" id="left" class="left" name="button">
       <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
       <g>
        <path style="fill: #9d9d9d;" d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
          c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
       </g>
       </svg>
       </button>
   <svg id="svg2" class="up2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <circle id="circle1" class="circle1 steap" cx="34px" cy="49%" r="20"></circle>
      <circle id="circle2" class="circle2 steap" cx="34px" cy="49%" r="100"></circle>
      <circle id="circle3" class="circle3 steap" cx="34px" cy="49%" r="180"></circle>
      <circle id="circle4" class="circle4 steap" cx="34px" cy="49%" r="260"></circle>
      <circle id="circle5" class="circle5 steap" cx="34px" cy="49%" r="340"></circle>
      <circle id="circle6" class="circle6 steap" cx="34px" cy="49%" r="420"></circle>
      <circle id="circle7" class="circle7 steap" cx="34px" cy="49%" r="500"></circle>
      <circle id="circle8" class="circle8 steap" cx="34px" cy="49%" r="580"></circle>
      <circle id="circle9" class="circle9 steap" cx="34px" cy="49%" r="660"></circle>
    </svg>
   <svg id="svg1" class="up2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <circle id="circle10" class="circle10 steap" cx="648px" cy="49%" r="20"></circle>
      <circle id="circle11" class="circle11 steap" cx="648px" cy="49%" r="100"></circle>
      <circle id="circle12" class="circle12 steap" cx="648px" cy="49%" r="180"></circle>
      <circle id="circle13" class="circle13 steap" cx="648px" cy="49%" r="260"></circle>
      <circle id="circle14" class="circle14 steap" cx="648px" cy="49%" r="340"></circle>
      <circle id="circle15" class="circle15 steap" cx="648px" cy="49%" r="420"></circle>
      <circle id="circle16" class="circle16 steap" cx="648px" cy="49%" r="500"></circle>
      <circle id="circle17" class="circle17 steap" cx="648px" cy="49%" r="580"></circle>
      <circle id="circle18" class="circle18 steap" cx="648px" cy="49%" r="660"></circle>
    </svg>
<!--    
   <div id='slide0' class='slide0 up1'>NOW AVAILABLE
    <p class="sss">Hashtag Research. Click on the right arrow to know more</p>
   </div> -->

   <div id="slide1" class="slide1 up1">
    HASHTAG RESEARCH
    <p class="sss">Instagram hashtag research feels like hard work, it’s time consuming, and it breaks the otherwise enjoyable flow of posting to Instagram</p>

   </div>
   
   <div id="slide2" class="slide2">
    DISCOVER &amp; AVOID
    <p class="sss">Discover the hashtags that give you a competitative advantage and avoid the ones that are flagged as spammy</p>

   </div>
   
   <div id="slide3" class="slide3">
    APPEAR ON TOP
    <p class="sss">With the right hashtags, you can be featured among the top 9 posts, thus increasing visibility and organic traffic to your side</p>

   </div>
   
   <div id="slide4" class="slide4">
    REFER 3 ACCOUNTS
    <p class="sss">Refer 3 of your friends and get permanent access! Use your referral link: www.infiniCore.net/rabi</p>

   </div>


 </div>
 </div>







<!-- Modal SelAccount -->
<div class="modal fade" id="selectAccount">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <div class="col-xs-10">
          <h5 class="modal-title" id="selectCountryTitle"><span class="glyphicon glyphicon-user"></span>&nbsp; Choose Account</h5>
        </div>

        <div class="col-xs-2">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>  
        </div>

        <br>
        
      </div>

      <div class="modal-body">
        <p>Choose the account you want to use for the research.</p>
        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder mdl-color--light-blue-300 mdl-color-text--white" data-toggle="dropdown" role="button" data-id="selAccounts" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text"></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="1"></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Tilføj en konto</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" data-style="mdl-color--light-blue-300 mdl-color-text--white" data-container="body" id="selAccounts" data-size="6" tabindex="-98"><option value=""></option><option data-divider="true" value=""></option><option value="NEWACCOUNT">Tilføj en konto</option></select></div>
      </div> 
        
        <br>
      <!-- <div class="modal-footer"> -->
        <button type="submit" id="submit" class="btn-block list-group-item-info mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;" onclick="next('selAccount')" data-upgraded=",MaterialButton,MaterialRipple">
         <span style="padding-top: 5px;">NEXT</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
    </div>
  </div>
</div>



<!-- Modal Input -->
<div class="modal fade" id="selectInput" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <div class="col-xs-10">
          <h5 class="modal-title" id="selectCountryTitle"><span class="glyphicon glyphicon-time"></span>&nbsp; Hashtags</h5>
        </div>

        <div class="col-xs-2">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>  
        </div>
        
        <br>

      </div>

      <div class="modal-body">
        <h4><span class="label label-default">Type/Paste Hashtags (without '#')</span></h4>
        <div class="tags-input" data-name="tags-input"><span class="tag">hashtags<span class="close"></span></span><input type="text" class="main-input"><input type="hidden" name="tags-input" value="hashtags"></div>
      </div>

        <br>

      <!-- <div class="modal-footer"> -->
        <button type="submit" id="submit" class="btn-block list-group-item-info mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;" onclick="next('hashtags')" data-upgraded=",MaterialButton,MaterialRipple">
         <span style="padding-top: 5px;">NEXT</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
    </div>
  </div>
</div>



<!-- Modal Input -->
<div class="modal fade" id="selectStart" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <div class="col-xs-10">
          <h5 class="modal-title" id="selectCountryTitle"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Ready</h5>
        </div>

        <div class="col-xs-2">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>  
        </div>
        
        <br>

      </div>

      <div class="modal-body">
        <p><code>Note:</code> Depending on the number of hashtags you have, the research process may take more than 10 min.<bold> Do not close or reload this page.</bold></p>
      </div>
      <!-- <div class="modal-footer"> -->
        <button type="submit" id="submit" class="btn-block list-group-item-info mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;" onclick="next('start')" data-upgraded=",MaterialButton,MaterialRipple">
         <span style="padding-top: 5px;">START RESEARCH</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
    </div>
  </div>
</div>


<style>
    #helpBut {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 30px;
      margin-bottom: 60px;
      /*z-index: 900;*/
    }
</style>
<!-- HELP -->
<a id="helpBut" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color-text--white" target="_blank" href="/t/hashtags" data-upgraded=",MaterialButton,MaterialRipple">
    <i class="material-icons">help_outline</i>
<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>



<!-- Modal Input -->
<div class="modal fade" id="selectLoading" data-backdrop="static">
  <div class="modal-dialog modal-dialog-center">
        <div class="loader-circles">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
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
    </main>


  	  
<?php include("footer.php"); ?>