
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

      


      

<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="container" style="width: 100%">

     
<link href="css/powerService.css" rel="stylesheet">



<!-- <script src="/static/notifications/mainPush.json"></script> -->


<h2 id="header" class="reveal-text2">Power Service</h2>

<hr>




<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6">
      
      <div class="power-section">
        <div class="power-content">
          <div class="power-text">
            <h1 id="likesLeftCounter">POWER LIKES: 0</h1>
            <p>Receive powerful likes from 100+ million combined followers!</p>
          </div>
          <button id="likesStateBut" style="background-color: #a94442;" onclick="showLoading(); /*toggle*/sendAjaxRequest('likes', '', '', '', '', '', '');"> 
            <span id="likesStateSpan">OFF</span>
          </button>
          <div class="power-left-but">
            <button id="addPowerLikesBut" onclick="modalPaymentFunc('likes');">
              <span class="fa fa-bolt"></span>
            </button>
          </div>
        </div>
      </div>

    </div> <!-- col-xs-6 -->

    <div class="col-sm-6">
      
      <div class="power-section">
        <div class="power-content">
          <div class="power-text">
            <h1 id="commentsLeftCounter">POWER COMMENTS: 0</h1>
            <p>Get power comments that are related to your niche!</p>
          </div>
          <button id="commentsStateBut" style="background-color: #a94442;" onclick="showLoading(); /*toggle*/sendAjaxRequest('comments', '', '', '', '', '', '');"> 
            <span id="commentsStateSpan">OFF</span>
          </button>
          <div class="power-left-but">
            <button id="addPowercommentsBut" onclick="modalPaymentFunc('comments');">
              <span class="fa fa-comment"></span>
            </button>
          </div>
        </div>
      </div>

    </div> <!-- col-xs-6 -->

  </div> <!-- row -->

  <div class="row">
    <div class="col-sm-6">
      
      <div class="power-section">
        <div class="power-content">
          <div class="power-text">
            <h1 id="viewsLeftCounter">POWER VIEWS: 0</h1>
            <p>Push your videos to the explore page with powerviews &amp; impressions! <!-- <strong>*COMMING SOON*</strong> --></p>
          </div>
          <button id="viewsStateBut" style="background-color: #a94442;" onclick="showLoading(); /*toggle*/sendAjaxRequest('views', '', '', '', '', '', '');">
            <span id="viewsStateSpan">OFF</span>
          </button>
          <div class="power-left-but">
            <button id="addPowerViewsBut" class="power-left-but" onclick="modalPaymentFunc('views');"> <!-- style="right: 303px; -->
              <span class="fa fa-eye"></span>
            </button>
          </div>
        </div>
      </div>

    </div> <!-- col-xs-6 -->
    
  </div> <!-- row -->
</div> <!-- container -->



<br>
<hr>
<br>

<!-- pods Goes here -->
<div class="pods">
</div>


<script type="text/javascript">
  $('button').click(function(){
  $('button').toggleClass('active');
  $('.title').toggleClass('active');
  $('nav').toggleClass('active');
});
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
<a id="helpBut" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color-text--white"  href="#" data-upgraded=",MaterialButton,MaterialRipple">
    <i class="material-icons fa fa-help"></i>
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
<a id="helpBut2" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color-text--white" href="#" data-upgraded=",MaterialButton,MaterialRipple">
    <i class="material-icons fa fa-comments"></i>
<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>

    

<!-- EXPANDING CARD MODAL  -->
<div class="form-container">

  <div class="container2" style="background-color: #1f5a81;"><span class="expand_button button" id="modalPodYes">+</span>
    <div class="content2">
      <div class="head">
        <h6>Power Service</h6>
        <!-- <p2 class="sub">Add <a href="#/dashboard/" target="_blank">More Accounts</a></p2> -->
        <p2 class="sub">Add your <em>receiving account</em>  below.</p2>
      </div>

      <div class="body">
        <div class="modal-body" style="padding: 0;">
          <form>
            <div class="form-group">

              <div class="tabs">
                <!-- Radio button and lable for #tab-content1 -->
                <input type="radio" name="tabs" id="tab1" checked="">
                <label for="tab1">
                    <i class="fa fa-user"></i><span>ACCOUNT</span>
                </label>
                <!-- Radio buttn and lable for #tab-content2 -->
                <input type="radio" name="tabs" id="tab2">
                <label for="tab2">
                    <i class="fa fa-gear"></i><span>SETTINGS</span>
                </label>
                <!-- <input type="radio" name="tabs" id="tab3">
                <label for="tab3">
                    <i class="fa fa-hashtag"></i><span>HASHTAGS</span>
                </label>
-->

                <div id="tab-content1" class="tab-content">

                  <div class="container-fluid">
                    <div class="row">
                      
                      <div class="col-xs-12 receivingAccount">
                        <h5 id="tReciever" class="text-expanded"><span class="glyphicon glyphicon-upload"></span>&nbsp; Receiving Account</h5>
                        <input class="form-control" spellcheck="false" autocapitalize="none" autocomplete="off" type="text" placeholder="Uden '@'" id="reciever">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12 chooseLikeType" style="margin-bottom: 30px;">
                        <h5 id="tType" class="text-expanded"><span class="glyphicon glyphicon-cog"></span>&nbsp; Type</h5>
                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle mdl-color--light-blue-400 mdl-color-text--white" data-toggle="dropdown" role="button" data-id="selType" title="&amp;nbsp; Likes Only"><span class="filter-option pull-left"><i class="glyphicon fa fa-heart"></i> &nbsp; Likes Only</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="glyphicon fa fa-heart"></span> <span class="text">&nbsp; Likes Only</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-comment"></span> <span class="text">&nbsp; Likes + Comments</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" data-container="body" id="selType" name="selType" data-style="mdl-color--light-blue-400 mdl-color-text--white" tabindex="-98">
                          <option value="Like" data-icon="fa fa-heart">&nbsp; Likes Only</option>
                          <option value="Both" data-icon="fa fa-comment">&nbsp; Likes + Comments</option>
                        </select></div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12 providesAccount" style="margin-bottom: 20px;">
                        <h5 id="tAccount" class="text-expanded"><span class="glyphicon glyphicon-user"></span>&nbsp;  Choose Your Niche (for comments only)</h5>
                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle mdl-color--grey-100 mdl-color-text--black" data-toggle="dropdown" role="button" data-id="selNiche" title="&amp;nbsp; Viral &amp; Others"><span class="filter-option pull-left"><i class="glyphicon fa fa-star-half-o"></i> &nbsp; Viral &amp; Others</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="glyphicon fa fa-star-half-o"></span> <span class="text">&nbsp; Viral &amp; Others</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-male"></span> <span class="text">&nbsp; Mensfashion &amp; Lifestyle</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-female"></span> <span class="text">&nbsp; Womensfashion &amp; Lifestyle</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-universal-access"></span> <span class="text">&nbsp; Personal, Entrepreneur &amp; Motivational</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-heartbeat"></span> <span class="text">&nbsp; Fitness &amp; health</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-money"></span> <span class="text">&nbsp; Luxury &amp; motors</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-globe"></span> <span class="text">&nbsp; Travel &amp; Vacation/Nature</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-connectdevelop"></span> <span class="text">&nbsp; Art &amp; Abstract</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-spoon"></span> <span class="text">&nbsp; Food &amp; Nutrition</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-glass"></span> <span class="text">&nbsp; Drinks &amp; Wine</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="glyphicon fa fa-paw"></span> <span class="text">&nbsp; Pet &amp; Animals</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" data-style="mdl-color--grey-100 mdl-color-text--black" data-container="body" id="selNiche" name="selNiche" data-size="6" tabindex="-98">
                          <option value="viral" data-icon="fa fa-star-half-o">&nbsp; Viral &amp; Others</option>
                          <option value="mens" data-icon="fa fa-male">&nbsp; Mensfashion &amp; Lifestyle</option>
                          <option value="womens" data-icon="fa fa-female">&nbsp; Womensfashion &amp; Lifestyle</option>
                          <option value="fashion" data-icon="fa fa-universal-access">&nbsp; Personal, Entrepreneur &amp; Motivational</option>
                          <option value="fitness" data-icon="fa fa-heartbeat">&nbsp; Fitness &amp; health</option>

                          <option value="lux" data-icon="fa fa-money">&nbsp; Luxury &amp; motors</option>
                          <option value="travel" data-icon="fa fa-globe">&nbsp; Travel &amp; Vacation/Nature</option>
                          <option value="art" data-icon="fa fa-connectdevelop">&nbsp; Art &amp; Abstract</option>
                          <option value="food" data-icon="fa fa-spoon">&nbsp; Food &amp; Nutrition</option>
                          <option value="drinks" data-icon="fa fa-glass">&nbsp; Drinks &amp; Wine</option>
                          <option value="pet" data-icon="fa fa-paw">&nbsp; Pet &amp; Animals</option>
                        </select></div>
                      </div>
                    </div>

                          
                    
                    <div class="row">
                      <div id="submit" class="btn-block list-group-item-info mdl-button mdl-js-button" style="margin-top: 15px; height: 50px; min-height: initial; background-color: #1f5a81; color: #FFFFFF;" onclick="okBut();" data-upgraded=",MaterialButton">
                      <div style="padding-top: 6px">NEXT</div>
                    </div>
                  </div>
                </div>

                </div> <!-- #tab-content1 -->

                <div id="tab-content2" class="tab-content">

                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-12">
                        <h5 id="slider_likes" class="text-expanded"><span class="fa fa-heart"></span>&nbsp;  Likes: 
                          <span class="text-muted" id="numLikes">300</span>
                        </h5>
                        <input id="rangeLikes" type="range" min="100" max="600" step="5" value="300">
                      </div>
                    </div>

                    <!-- <br> -->
                        
                    <div class="row">
                      <div class="col-xs-12">
                        <h5 id="slider_comments" class="text-expanded"><span class="fa fa-comments"></span>&nbsp;  Comments (only if chosen): 
                        <span class="text-muted" id="numComments">10</span>
                        </h5>
                        <input id="rangeComments" type="range" min="1" max="30" step="1" value="10">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12">
                        <h5 id="slider_views" class="text-expanded"><span class="fa fa-comments"></span>&nbsp;  Views (only if activated): 
                        <span class="text-muted" id="numViews">15</span><span class="text-muted">k</span>
                        </h5>
                        <input id="rangeViews" type="range" min="1" max="40" step="1" value="5">
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-xs-12">
                      <!-- <br> -->
                        <h5 id="tAccount" class="text-expanded" style="margin-bottom: -1.45%;">
                          <span class="fa fa-hourglass"></span>&nbsp;  Receiving time: 
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
                      
                    <div class="row">
                        <div id="submit" class="btn-block list-group-item-info mdl-button mdl-js-button " style="margin-top: -2%; height: 50px; min-height: initial; background-color: #1f5a81; color: #FFFFFF;" onclick="modalSubmitFunc();" data-upgraded=",MaterialButton">
                          <div style="padding-top: 6px">SUBMIT</div>
                      </div>
                      <!-- <div class="action-bar"></div> -->
                    </div>
                  </div> 

                </div><!-- #tab-content2 -->
              </div><!-- tabs end -->
            </div><!-- form-group end -->
          </form>
        </div><!-- modal-body end -->
      </div><!-- body end -->
    </div><!-- content2 end -->
  </div> <!-- container2 end -->

</div><!-- form-container end -->











  <script src="js/PowerModal.js"></script>
  <!-- <script src="https://InfiniCore.net/static/js/PowerModal.js?ver<%=DateTime.Now.Ticks.ToString()%>"></script> -->
  <!-- <script src="https://InfiniCore.net/static/js/PowerModal.js?t=<?=time()?>"></script> -->


  <!--Proxy Tag for tour data-->
  <meta id="tour" data-tour="YES">

  <script type="text/javascript">
    pods = JSON.parse('{}');
    var powers = JSON.parse('[0, false, 0, false, 0, false, 0, false]');
    loadPods(pods, powers);
  </script>
  
<script src="https://www.paypalobjects.com/api/checkout.js"></script>





<style>
    #playVideo {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 30px;
      margin-bottom: 200px;
      /*z-index: 900;*/
    }

  </style>

  <!-- Add accounts button -->
  

  <button id="playVideo" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color-text--white" onclick="openDemoVideo();" data-upgraded=",MaterialButton,MaterialRipple">
    <div id="pop" data-container="body" data-toggle="popover" data-placement="left" data-content="Want to watch a short getting started video? Click play." data-original-title="" title="" style="display: none;">
  </div>
    <i class="material-icons fa fa-play"></i>
  <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>




<!-- Modal Input -->
<div class="modal fade" id="selectPref" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <div class="col-xs-9">
          <h5 class="modal-title" id="selectCountryTitle"><span class="glyphicon glyphicon-flash"></span>&nbsp; Select Your Power Plan</h5>
        </div>

        <div class="col-xs-3">
          <button type="button" id="closePaymentModal" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>  
        </div>

        <br>
        
      </div>


     

      <div class="modal-body">

          <br>
            <div class="infobox">
              <div class="titlebar">
                <!-- <span id="plan-holder"></span>  -->
                <!-- <span id="plan2-holder">PLAN</span> -->

                <div id="toggleContainer">
                    <div class="inner-container">
                        <div class="toggle">
                            <p>Likes+Views+Comments</p>
                        </div>
                        <div class="toggle" style="width: 40%">
                            <p id="powerName">Single Power</p>
                        </div>
                    </div>
                    <div class="inner-container clip2" id="toggle-container-on">
                        <div class="toggle">
                            <p>Likes+Views+Comments</p>
                        </div>
                        <div class="toggle" style="width: 40%">
                            <p id="powerName2">Single Power</p>
                        </div>
                    </div>
                </div>


              </div>
              <div class="innerbox">
                <div class="info-quantity"></div>
                <div class="info-price"></div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-6" style="padding-left: 0px;">
                      <div class="perpost-label">PER POST:</div>
                      <div class="perpost-price" style="color: #ca5127;"></div>
                    </div>
                    <div class="col-xs-6">
                      <div class="perpost-label">SAVE TOTAL:</div>
                      <div class="perpost-price" style="color: #505054;" id="save"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            <div class="range-holder">
            <div id="pr-slider" class="dragdealer">
            <!-- <input class="dragdealer" type="range" min="100" max="500" step="5" value="300"> -->
            
              <div class="stripe">

                <div id="green-highlight"></div>
                <div id="orange-highlight"></div>
                <div id="blue-highlight"></div>

                <div class="handle">
                  <div class="infobox-arrow">
                    <!-- <div class="titlebar"><span id="plan-holder"></span> <span id="quantity-holder"></span></div> -->
<!--                     <div class="innerbox">
                      <div class="info-price"></div>
                      <div class="perpost-label">Per Post:</div>
                      <div class="perpost-price"></div>
                    </div> -->
                  </div>  

                  <div class="square">
                    <span class="value"></span>
                    <span class="menu-line"></span>
                    <span class="menu-line"></span>
                    <span class="menu-line"></span>
                  </div> <!-- square -->  
                </div> <!-- handle -->
                    
              </div> <!-- stripe -->
            </div> <!-- pr-slider dragdealer -->
          </div> <!-- range-holder -->

      </div> <!-- modal-body end -->
      <!-- <div class="modal-footer"> -->
        <br>
        <div id="paypal-button-container"></div>
        <!-- <button id="paypal-button-container" data-dismiss="modal" class="btn-block  mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial; background-color: #1f5a81; color: #FFFFFF;" onclick="modalSubmitFunc();">
         <span style="padding-top: 5px">PLACE ORDER</span> </button> -->

      </div>
    </div>
  </div>
</div>




<!-- Modal Input -->
<div class="modal fade" id="helpVideo">
  <!-- popover -->

  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <div class="modal-dialog modal-dialog-center">
    <div class="embed-responsive embed-responsive-4by3"> <!-- 4by3 -->
        <iframe id="demo1" autoplay="false" class="embed-responsive-item" width="886" height="1520" src="" frameborder="0" allowfullscreen=""></iframe>
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