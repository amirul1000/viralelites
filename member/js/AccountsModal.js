
function addAccount(account, picUrl, following, followers, showToast) {
    $(".accounts").before(''+
      '<div class="container col-xs-12 col-sm-6" id="'+account+'DEL">'+
        '<div class="panel widget">'+
          '<div class="mdl-shadow--4dp">'+
            '<div class="widget-header bg-purple">'+
              '<div class="widget-bg list-group-item pad-all pod-left mdl-color--light-blue-200 mdl-color-text--blue-600"> </div>'+
              
              '<button id="'+account+'_Menu" class="mdl-button mdl-js-button mdl-button--icon mdl-color-text--blue-900 pull-right" style="width: 46px; height: 46px; min-width: initial;">'+
                '<i class="material-icons" style="font-size:28px;">more_vert</i>'+
              '</button>'+
              
              '<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="'+account+'_Menu">'+
                '<li class="mdl-menu__item" onclick="removeButFunc(\''+account+'\')">Remove Account</li>'+
                '<li class="mdl-menu__item" onclick="editButFunc(\''+account+'\')">Relogin (only when asked to)</li>'+
              '</ul>'+
            '</div>'+
            
            '<div id="pop_'+account+'" data-toggle="popover" data-placement="top" data-content="'+'Remember to join the engagement group by navigating to Pods menu.'+'"></div>'+
            
            '<div class="widget-body text-center">'+
              '<img alt="Profile Picture" class="widget-img img-border-light" src="'+picUrl+'">'+
              
              '<h4 class="mar-no pad-top2">'+account+'</h4>'+
              '<hr>'+
              '<ul class="list-unstyled text-center pad-top  mar-no ">'+
                '<li class="col-xs-6">'+
                  '<span class="text-xl">'+following+'</span>'+
                  '<p class="text-muted text-uppercase">'+
                    '<small>Following</small>'+
                  '</p>'+
                '</li>'+

                '<li class="col-xs-6">'+
                  '<span class="text-xl">'+followers+'</span>'+
                  '<p class="text-muted text-uppercase">'+
                    '<small>Followers</small>'+
                  '</p>'+
                '</li>'+
              '</ul>'+
            '</div>'+

            '<br><br><br>'+
          '</div>'+
        '</div>'+
      '</div>');


    if(showToast){
        displayToast('success', account+' added.');
    }

    componentHandler.upgradeDom();
}

function removeAccount(account) {
    //document.getElementById(account).remove();
    $('#'+account+'DEL').remove();
    displayToast('success', account+' is successfully removed.');
}

var LOCATION = '';
//Communicate with the server Encrypted
function sendAjaxRequest(command, username, password, twoFacLogin) {
	
	alert(username);
    $.ajax({
            data : {
                command : command,
                username : username,
                password : password,
                twoFacLogin : twoFacLogin,
                location : LOCATION
            }, 
            type : 'POST',
            //url : '/accountBgProcess/'
			url : 'index.php'
        })
        .done(function(data) {

            //hide the loading
            hideLoading();

            //report error
            if (data.error) {
                displayToast('danger', data.error);
            }
            else if (data.warning) {
                displayToast('warning', data.warning);
            }
            else if (data.twoFac) {
                displayToast('danger', '2 Factor Authentication is not supported at the moment. Please turn it off and try again.')
                // $('#selectInput').appendTo("body").modal('show');
                // $('#selectInput').modal('show');
            }
            //remove/add account
            else {
                  //remove account
                  if(command == 'REMOVE'){
                    removeAccount(data.success);
                  } 
              //add account
                  else {
                      //close the dialog
                      $('.button').parent().toggleClass('expand');
                      //success[0] contains account name
                      //success[1] contains url for account pic
                      //success[1] contains following
                      //success[1] contains followers
                      if (command == 'NEW')
                        addAccount(data.success[0], data.success[1], data.success[2], data.success[3], true);
                      else
                        displayToast('success', data.success)
                      
                      setTimeout(function() {
                      $('#pop_'+username).popover('show');
                      }, 400);

                      $("#pop_"+username).delay(10000).slideUp(200, function() {
                        $(this).popover('hide');
                      });
                      // displayToast('success', data.success[1]);
                      // displayToast('success', data.success[2]);
                  }
            }
          });
}





function addAccounts(userAccounts){
    // displayToast('info', userAccounts)
    for(key in userAccounts){
        var value = userAccounts[key];
        addAccount(key, value[0], value[1], value[2], false);
        /* use key/value for intended purpose */
    }  
}





// Add new account
$('.button').click(function () {
  $(this).parent().toggleClass('expand');

    setOrResetInfo('RESET', '', '');

    // edit the title of the modal
    document.getElementById('modalTitle').innerHTML = 'Add Account';

    submitByEdit = false;
});

// Edit account 
function editButFunc(username) {
    ////scroll to the top
    // $('html, body').animate({scrollTop:0},'slow');

    $('.button').parent().toggleClass('expand');
    
    document.getElementById('modalTitle').innerHTML = 'Edit Account';
    
    setOrResetInfo('SET', username);

    submitByEdit = true;
}


function twoFacSubmit(){
  $('#selectInput').modal('hide');
  var twoFacCode = $('#inputVal').val();
  // displayToast('warning', twoFacCode);
  vals = setOrResetInfo('GET', '', '');
  sendAjaxRequest('twoFac', vals[0], vals[1], twoFacCode);
  showLoading();
}

//used as a global variable to control wether its a edit submit or a new
//submit of an account as both are using the same submit button
submitByEdit = false;
enableSubmit = false;
function onClickSubmitFunc(){
    
    // if (!enableSubmit){
    //     displayToast('info', 'Please take time to read the guide-lines first. Press "Next" to continue.')
    //     return;
    // }

    if  (($("#selectCountry").data('bs.modal') || {}).isShown ){
      var selectCountry = document.getElementById('selCountry');
      // LOCATION = "{country_code:"+selectCountry.value+"}";
      LOCATION = JSON.stringify({country_code:selectCountry.value});
      $('#selectCountry').modal('hide');
    }
    else if( LOCATION == null || LOCATION == ''){ 
        $('#selectCountry').modal('show');
        return
    }


    // displayToast('info', LOCATION);
    vals = setOrResetInfo('GET', '', '');

    if(vals[0] == '' || vals[1] == ''){
        displayToast('danger', 'Username and/or password are missing.');
        return;
    }
    
    showLoading();

    // edit this acc
    if (submitByEdit){
        sendAjaxRequest('EDIT', vals[0], vals[1], null);
    }
    else{
        sendAjaxRequest('NEW', vals[0], vals[1], null);
    }
}

function removeButFunc(username){
    showLoading();
    sendAjaxRequest("REMOVE", username, '', null);
}



//sets or rests the modal info
function setOrResetInfo(command, usname, psword) {

    if(command == 'SET'){
        document.getElementById('username').value = usname;
        document.getElementById('password').value = '';
    } 
    else if(command == 'RESET'){
        document.getElementById('username').value = '';
        document.getElementById('password').value = '';
        return;
    }
    else if(command == 'GET'){
        return [document.getElementById('username').value, 
        document.getElementById('password').value];
    }
}

 







$(document).ready(function() {

    var input = document.getElementById("password");
    input.addEventListener("keyup", function(event) {
      event.preventDefault();
      if (event.keyCode === 13) {
        // displayToast('warning', 'asd')
          document.getElementById("submit").click();
        }
      });

    // run the tour or not
    if($('#tour').data('tour') == 'YES'){
        runTour();
    }
    else{
        enableSubmit = true;
    }

        
    // try {
    //   LOCATION = [geoplugin_countryCode(), geoplugin_city()]; 
    //   console.log(LOCATION)
    // }
    // catch (err){
    //   LOCATION = '';
    //   console.log(err);
    //   // displayToast('error', err)
    // }

    try {
      // $.getJSON('//freegeoip.net/json/?callback=?', function(data) {
        // $.getJSON('https://api.ipstack.com/check?access_key=35c041d16901a0a304d20cadd03f8614', function(data) {
        $.getJSON('https://geoip.nekudo.com/api/{ip}/{language}/{type}', function(data) {
        // $.getJSON('http://smart-ip.net/geoip-json?callback=?', function(data) {
        // LOCATION = JSON.stringify(data, null, 2);
        // console.log(data['city']);
        // LOCATION = data['country']['code'];
        LOCATION = JSON.stringify([data['country']['code'], data['city']]);
        // displayToast('error', LOCATION)
      });
    }
    catch (err){
      LOCATION = '';
        // console.log(err);
      // displayToast('error', err)
    }
    
});





function runTour(){

    try {
        hopscotch.endTour();
    }
    catch(err) {
        
    }

    // var expandModal = document.getElementById("modalPodYes");
    // expandModal.style.visibility = "hidden";

    // Define the tour!
    var tour = {
      id: "welcome_tour",
      steps: [
        {
          title: "Welcome!",
          content: "Thank you for using InfiniCore. <br><br> This very small tour will guide you on the basics of how to use InfiniCore in the optimal way.",
          target: "header",
          placement: "bottom",
          showSkip: false,
          zindex: 1,
          width: 250
        },
        {
          title: "Add Account",
          content: "In order to start using InfiniCore, you need to add the account you want to grow by pressing this button.",
          target: "modalPodYes",
          placement: "left",
          showNextButton: false,
          nextOnTargetClick: true,
          width: 200,
          xOffset: 2,
          zindex: 1,
          yOffset: 0
        },
        // {
        //   title: "Username",
        //   content: "Enter your Instagram username.",
        //   target: "username",
        //   placement: "bottom",
        //   // showNextButton: false,
        //   nextOnTargetClick: true,
        //   showSkip: true,
        //   delay: 500,
        //   zindex: 1,
        //   width: 250
        // },
        // {
        //   title: "Password",
        //   content: "Make sure that 2-factor login is disabled.",
        //   target: "password",
        //   placement: "bottom",
        //   // showNextButton: false,
        //   nextOnTargetClick: true,
        //   showSkip: true,
        //   delay: 500,
        //   zindex: 1,
        //   width: 250
        // },
        // {
        //   title: "Submit",
        //   content: "",
        //   target: "submit",
        //   placement: "bottom",
        //   showNextButton: false,
        //   nextOnTargetClick: true,
        //   showSkip: true,
        //   delay: 500,
        //   zindex: 1,
        //   width: 250
        // },
        {
          title: "Final Step!",
          content: 'If the login is rejected, log into your account though your phone or computer press "It Was Me" (as we are a global network): <br> <br>  <img src="/static/images/popup_guide/ig_validation_sm.jpg" width="235">',
          target: "header",
          placement: "bottom",
          width: 250,
          zindex: 1,
          delay: 8250
        }
      ],
      onEnd: function() {
        sendAjaxRequest('END_TOUR', '', '', '');
      },
      // onNext: function() {
      //   if (expandModal.style.visibility === "hidden") {
      //       expandModal.style.visibility = "visible";
      //   }
      //   var pops = hopscotch.getCurrStepNum();
        
      //   if (pops == 4){
      //       enableSubmit = true;
      //   }
      // }
    };

    // Start the tour!
    hopscotch.startTour(tour);
}








$('#show-loading').click(function () {
    showLoading();
    setTimeout(function () {
        hideLoading();
    }, 3000);
});


/* library */
function showLoading() {
    // remove existing loaders
    $('.loading-container').remove();
    $('<div id="orrsLoader" class="loading-container"><div><div class="mdl-spinner mdl-js-spinner is-active"></div></div></div>').appendTo("body");

    componentHandler.upgradeElements($('.mdl-spinner').get());
    setTimeout(function () {
        $('#orrsLoader').css({opacity: 1});
    }, 1);
}

function hideLoading() {
    $('#orrsLoader').css({opacity: 0});
    setTimeout(function () {
        $('#orrsLoader').remove();
    }, 400);
}



//success, danger, primary
var displayToast = function(type, msg) {
        if (type == 'danger'){
            icon = 'glyphicon glyphicon-remove';
        } else if (type == 'warning') {
            icon = 'glyphicon glyphicon-info-sign';
        } else {
            icon = 'glyphicon glyphicon-ok'
        }

        $.notify({
        // options
        icon: icon,
        message: msg 
    },{
        // settings
        type: type
    });
};




// NOTIFICATION SETTINGS
// $.notify({
//     // options
//     icon: 'glyphicon glyphicon-warning-sign',
//     title: 'Bootstrap notify',
//     message: 'Turning standard Bootstrap alerts into "notify" like notifications',
//     url: 'https://github.com/mouse0270/bootstrap-notify',
//     target: '_blank'
// },{
//     // settings
//     element: 'body',
//     position: null,
//     type: "info",
//     allow_dismiss: true,
//     newest_on_top: false,
//     showProgressbar: false,
    // placement: {
    //     from: "top",
    //     align: "right"
    // },
//     offset: 20,
//     spacing: 10,
//     z_index: 1031,
//     delay: 5000,
//     timer: 1000,
//     url_target: '_blank',
//     mouse_over: null,
//     animate: {
//         enter: 'animated fadeInDown',
//         exit: 'animated fadeOutUp'
//     },
//     onShow: null,
//     onShown: null,
//     onClose: null,
//     onClosed: null,
//     icon_type: 'class',
//     template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
//         '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
//         '<span data-notify="icon"></span> ' +
//         '<span data-notify="title">{1}</span> ' +
//         '<span data-notify="message">{2}</span>' +
//         '<div class="progress" data-notify="progressbar">' +
//             '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
//         '</div>' +
//         '<a href="{3}" target="{4}" data-notify="url"></a>' +
//     '</div>' 
// });