//global input variables
function fullNicheName(val){
    switch(val) {
        case 'viral':
            return ['Viral & Others', 'star-half-o'];
        case 'mens':
            return ['Mensfashion & Lifestyle', 'male'];
        case 'womens':
            return ['Womensfashion & Lifestyle', 'female'];
        case 'fashion':
            return ['Personal, Entrepreneur & Motivational', 'universal-access'];
        case 'fitness':
            return ['Fitness & health', 'heartbeat'];
        case 'lux':
            return ['Luxery & motors', 'money'];
        case 'travel':
            return ['Travel & Vacation/Nature', 'globe'];
        case 'art':
            return ['Art & Abstract', 'connectdevelop'];
        case 'food':
            return ['Food & Nutrition', 'spoon'];
        case 'pet':
            return ['Pet & Animals', 'paw'];
        case 'drinks':
            return ['Drinks & Wine', 'glass'];
    } 
}


function addPod(podId, selAccountVal, selNicheVal, selSizeVal, selTypeVal, recieverVal, picUrl, isEnabled, showToast) {
    if (isEnabled == 'OFF'){ 
        btnType = 'danger';
        btnText = 'DISABLED';
    }
    else{
        btnType = 'success';
        btnText = 'ENABLED';
    }
    
    if(selTypeVal == 'Both'){
        selTypeNewVal = 'Likes + Comments';
    }
    else if(selTypeVal == 'Comment'){
        selTypeNewVal = 'Comments Only';
    }
    else {
        selTypeNewVal = 'Likes Only';
    }
    //get the full niche name and icon
    var nichN = fullNicheName(selNicheVal);

    $(".pods").after(''+
        '<div class=" col-xs-12 col-sm-6" id="'+podId+'">'+
            '<div class="panel widget">'+
                '<div class="mdl-shadow--4dp">'+
                    '<div class="widget-header bg-purple">'+
                        
                        '<div class="widget-bg list-group-item pad-all pod-left " style="background-color: #1f5a81; color: #FFFFFF;">'+
                            '<i id="'+podId+'_ICON" class="fa fa-'+nichN[1]+' fa-3x"></i>'+
                        '</div>'+
                        
                        '<button id="'+podId+'_Menu" class="mdl-button mdl-js-button mdl-button--icon mdl-color-text--blue-50 pull-right" style="width: 46px; height: 46px; min-width: initial;">'+
                            '<i class="material-icons" style="font-size:28px;">more_vert</i>'+
                        '</button> '+
                        
                        '<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="'+podId+'_Menu">'+
                            '<li class="mdl-menu__item" onclick="editButFunc(\''+podId+'\')">Edit Pod</li>'+
                            '<li class="mdl-menu__item" onclick="removeButFunc(\''+podId+'\')">Remove Pod</li>'+
                        '</ul>'+
                    '</div>'+
                    '<div class="widget-body text-center">'+
                        '<img id="pic_url_'+podId+'" alt="Profile Picture" class="widget-img img-border-light" src="'+picUrl+'">'+
                        '<h4 class="mar-no pad-top2" id="'+podId+'_selAccountVal">'+selAccountVal+'</h4>'+
                        
                        '<hr>'+
                        
                        '<h4 class="mar-no" id="'+podId+'_selSizeVal">'+selSizeVal+'</h4>'+
                        
                        '<br>'+
                        
                        '<div class="row">'+ 
                            '<p class="text-muted text-uppercase pull-left pod-left">'+
                                '<small>Reciever:</small>'+
                            '</p>'+
                            '<span class="text-xl pull-right pad-top pod-right" id="'+podId+'_recieverVal">'+recieverVal+'</span>'+
                        '</div>'+
                    
                        '<div class="row">'+
                            '<p class="text-muted text-uppercase pull-left pod-left">'+
                                '<small>Niche:</small>'+
                            '</p>'+
                            '<span class="text-xl pull-right pad-top pod-right" id="'+podId+'_selNicheVal">'+nichN[0]+'</span>'+
                        '</div>'+

                        '<div class="row">'+
                            '<p class="text-muted text-uppercase pull-left pod-left">'+
                                '<small>Type:</small>'+
                            '</p> <span class="text-xl pull-right pad-top pod-right" id="'+podId+'_selTypeVal">'+selTypeNewVal+'</span>'+
                        '</div>'+
                    '</div>'+

                    '<div id="'+podId+'_Enablebut" class="btn-block list-group-item-'+btnType+' mdl-button mdl-js-button mdl-js-ripple-effect" onclick="enableButFunc(\''+podId+'\')">'+
                        btnText+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>');

    componentHandler.upgradeDom();


    if(showToast){
        displayToast('success', 'Power Pod is added. You can now recieve engagement on your future posts.');
    }
}

function removePod(podId) {
    //document.getElementById(account).remove();
    $('#'+podId).remove();
}


//Communicate with the server Encrypted podBgProcess
function sendAjaxRequest(command, podId, selAccountVal, selNicheVal, selSizeVal, selTypeVal, recieverVal) {            
    
    // if (command == 'TOGGLE_VIEWS'){
        // displayToast('info', 'Power Views are comming soon. Stay tuned!');
        // return;
    // }

    // if (command != 'TOGGLE_VIEWS' || command != 'TOGGLE_LIKES'){
        var userMaxLikes = document.querySelector('#numLikes').innerHTML;
        var userMaxComments = document.querySelector('#numComments').innerHTML;
        var userMaxViews = Number(document.querySelector('#numViews').innerHTML);

        var radios = document.getElementsByName('options');
        var deliverTime = '10';
        for (var i = 0, length = radios.length; i < length; i++) {
            if (radios[i].checked) {
                // do whatever you want with the checked radio
                deliverTime = radios[i].value;
                // only one radio can be logically checked, don't check the rest
                break;
            }
        }
        // console.log(userMaxLikes);
        // console.log(userMaxViews);
    // }
    // else{
    //     var userMaxLikes = '';
    //     var userMaxComments = '';
    //     var userMaxViews = '';

    //     var radios = '';
    //     var deliverTime = '';
    // }

    $.ajax({
            data : {
                command : command,
                podId : podId,
                selAccountVal : selAccountVal,
                selNicheVal : selNicheVal,
                selSizeVal : selSizeVal,
                selTypeVal : selTypeVal,
                recieverVal : recieverVal,
                userMaxLikes : userMaxLikes,
                userMaxComments : userMaxComments,
                userMaxViews : userMaxViews,
                deliverTime : deliverTime
            }, 
                type : 'POST',
                url : '/powerBgProcess/'
            })
            .done(function(data) {

            //report error
            if (data.error) {
                displayToast('danger', data.error);
                hideLoading();
            }
            
            // when user does not have any powers left
            else if (data.power) {
                displayToast('danger', data.power);

                if (command == 'TOGGLE_VIEWS')
                    modalPaymentFunc('views');
                else
                    modalPaymentFunc('likes');

                hideLoading();
            }
            else {
                //add bot
                if(command == 'NEW' && data.success[7] != 'EDIT'){
                    var pod = data.success;
                    addPod(pod[0], pod[1], pod[2], pod[3], pod[4], pod[5], pod[6], true, true);
                        
                    $('.button').parent().toggleClass('expand');
                }
                //edit bot
                // else if(command == 'EDIT' || data.success[7] == 'EDIT'){
                else if(command == 'EDIT'){
                    // nichN = fullNicheName(selNicheVal);
                    removePod(podId);
                    var pod = data.success;
                    addPod(pod[0], pod[1], pod[2], pod[3], pod[4], pod[5], pod[6], true, false);

                    // $('#'+data.success[0]+'_selAccountVal').text(selAccountVal);
                    // $('#'+data.success[0]+'_selSizeVal').text(selSizeVal);

                    // if (selTypeVal == 'Like') {
                    //     $('#'+data.success[0]+'_selTypeVal').text('Likes Only');
                    // }
                    // else if (selTypeVal == 'Comment') {
                    //     $('#'+data.success[0]+'_selTypeVal').text('Comments Only');
                    // }
                    // else if (selTypeVal == 'Both') {
                    //     $('#'+data.success[0]+'_selTypeVal').text('Likes + Comments');
                    // }
                    
                    // $('#'+data.success[0]+'_selNicheVal').text(nichN[0]);
                    // $('#'+data.success[0]+'_recieverVal').text(recieverVal);

                    // $('#'+data.success[0]+'_recieverVal').text(recieverVal);
                    
                    // //change icon too
                    // $('#'+data.success[0]+'_ICON').removeClass();
                    // $('#'+data.success[0]+'_ICON').addClass('fa fa-'+nichN[1]+' fa-3x');

                    // //make it active
                    // $('#'+data.success[0]+'_Enablebut').text('Enabled');
                    // $('#'+data.success[0]+'_Enablebut').removeClass('list-group-item-danger').addClass('list-group-item-success');
                    componentHandler.upgradeDom();

                    displayToast('success', 'Power Pod successfully edited. Note, it might look like your changes are reset next time you edit your Power Pod, but they are saved in the server.'); 
                    
                    $('.button').parent().toggleClass('expand');
                }
                else if(command == 'DEL'){
                    removePod(podId);
                    displayToast('success', 'Power Pod is successfully removed.');
                    hideLoading();
                }
                else if (command == 'TOGGLE'){
                    if (data.success == 'stop'){
                        $('#'+podId+'_Enablebut').text('DISABLED');
                        $('#'+podId+'_Enablebut').removeClass('list-group-item-success').addClass('list-group-item-danger');
                        displayToast('success', 'Power Pod is deactivated.');
                    }
                    else if (data.success == 'start'){
                        $('#'+podId+'_Enablebut').text('Enabled');
                        $('#'+podId+'_Enablebut').removeClass('list-group-item-danger').addClass('list-group-item-success');
                        displayToast('success', 'Power Pod is now active, wait 5 min. before posting.');
                    }
                    componentHandler.upgradeDom();
                }
                else if (command == 'likes'){
                    if (data.success == 'ON'){
                        $('#likesStateSpan').text('ON');
                        $('#likesStateBut').css('background-color', '#3c763d');
                        displayToast('success', 'Power Likes are now activated.');
                        console.log(data.receivers);
                        if (data.receivers){
                            displayToast('warning', 'Note: following receiving account(s) are deactivated: '+data.receivers+'. Scroll down to ACTIVATE your receving account(s) before posting.');
                        }
                    }
                    else {
                        $('#likesStateSpan').text('OFF');
                        $('#likesStateBut').css('background-color', '#a94442');
                        displayToast('success', 'Power Likes are now deactivated.');
                    }
                    componentHandler.upgradeDom();
                }
                else if (command == 'views'){
                    if (data.success == 'ON'){
                        $('#viewsStateSpan').text('ON');
                        $('#viewsStateBut').css('background-color', '#3c763d');
                        displayToast('success', 'Power Views are now activated.');
                        if (data.receivers){
                            displayToast('warning', 'Note: following receiving account(s) are deactivated: '+data.receivers+'. Scroll down to ACTIVATE your receving account(s) before posting.');
                        }
                    }
                    else {
                        $('#viewsStateSpan').text('OFF');
                        $('#viewsStateBut').css('background-color', '#a94442');
                        displayToast('success', 'Power Views are now deactivated.');
                    }
                    componentHandler.upgradeDom();
                }
                else if (command == 'comments'){
                    if (data.success == 'ON'){
                        $('#commentsStateSpan').text('ON');
                        $('#commentsStateBut').css('background-color', '#3c763d');
                        displayToast('success', 'Power Comments are now activated.');
                        if (data.receivers){
                            displayToast('warning', 'Note: following receiving account(s) are deactivated: '+data.receivers+'. Scroll down to ACTIVATE your receving account(s) before posting.');
                        }
                    }
                    else {
                        $('#commentsStateSpan').text('OFF');
                        $('#commentsStateBut').css('background-color', '#a94442');
                        displayToast('success', 'Power Comments are now deactivated.');
                    }
                    componentHandler.upgradeDom();
                }
                //close the dialog
                hideLoading();
            }
          });
}



var likesLeft = null;
var likesState = null;
var viewsLeft = null;
var viewsState = null;
var commentsLeft = null;
var commentsState = null;
function loadPods(pods, power){
    
    likesLeft = powers[0];
    likesState = powers[1];
    viewsLeft = powers[2];
    viewsState = powers[3];
    commentsLeft = powers[4];
    commentsState = powers[5];

    // displayToast('info', powers);
    // displayToast('info', viewsState);
    if (likesState == true){   
        $('#likesStateSpan').text('ON');
        $('#likesStateBut').css('background-color', '#3c763d');
    }
    if (viewsState == true){
        $('#viewsStateSpan').text('ON');
        $('#viewsStateBut').css('background-color', '#3c763d');
    }
    if (commentsState == true){
        $('#commentsStateSpan').text('ON');
        $('#commentsStateBut').css('background-color', '#3c763d');
    }

    for(key in pods){
        var value = pods[key];
        addPod(key, value[0], value[1], value[2], value[3], value[4], value[5], value[6], false);
    }
}
 




//Handles the add new account
$('#selType').on('hidden.bs.select', function (e) {
    // do something...
    data = $('#selType').val();
    if (data == 'Both' && commentsLeft <= 0) {
        displayToast('warning', 'You need to purchase more power comments before using this option.')
        $('#selType').val('Like');
        $('.selectpicker').selectpicker('refresh');
        // var selType = document.getElementById('selType');
        // selType.value = 'Like';
    }
});

var ringBell = false;
// // Get the accounts from the JINJA
$(document).ready(function() {

    var input = document.getElementById("reciever");
    input.addEventListener("keydown", function(event) {
      if (event.keyCode === 13) 
        event.preventDefault();
      });
    input.addEventListener("keyup", function(event) {

      if (event.keyCode === 13) {
        document.getElementById("submit").click();
        }
      });

    // run the tour or not
    if($('#tour').data('tour') == 'YES'){
        runTour();
    }
    
    var radios = document.getElementsByName('options');
    
    //always view the first tab when opening the modal for the first time
    $("#tab1").click();

    $('#helpVideo').on('hidden.bs.modal', function () {
        // do something…
        $('iframe').contents().find('video').each(function () 
        {
            this.pause();
        });
    })
    
    setTimeout(function() { 
      $('#pop').popover('show');
      console.log('show pop')
    }, 300);

    $("#pop").delay(8000).slideUp(200, function() {
      $(this).popover('hide');
    });
    

    // setTimeout(function () {
    //     location.reload(true);
    // }, 3000);
    
    // var pushData = JSON.parse(mainPush);
    
    // $.getJSON( "https://InfiniCore.net/static/notifications/mainPush.json", {
    //         format: "json"
    //     }).done(function( pushData ) {
    //         console.log(pushData);
    //         for (var i = 0; i < pushData.length; i++) {
    //             notfiyContent += ''+
    //             '<h5>'+pushData[i].message+'</h5>'+
    //             '<img class="img-responsive" src="https://InfiniCore.net/static/images/mails/'+pushData[i].img+'">'+
    //             '<div class="pipover-splitline"></div>';
    //             ringBell = true;
    //         }

    //         console.log(notfiyContent);

    //         $('#notifications_pop').popover({
    //             trigger: 'click',
    //             viewport: {
    //               selector: 'body',
    //               padding: 2
    //             },
    //             html: true,
    //             placement: "bottom",
    //             title: 'Notifications',
    //             content: notfiyContent
    //         });

    //         var el = document.querySelector('.notification');
    //         var count = pushData.length;
    //         el.setAttribute('data-count', count);
    //         el.classList.add('show-count');
    //     });


});



function openDemoVideo(){

  $('#pop').popover('hide');

  document.getElementById('demo1').src = 'https://infinicore.net/static/images/videos/power_guide.mp4';
  $('#helpVideo').appendTo("body").modal('show');
  $('iframe').contents().find('video').each(function () 
  {
      this.currentTime = 0;
      this.play();
  })
}





function enableButFunc(podId) {
    showLoading();

    var selReceiver = document.getElementById('reciever');
    var selType = document.getElementById('selType');
    var selNiche = document.getElementById('selNiche');

    selections['giver'] = 'POWER';
    selections['niche'] = selNiche.value;
    selections['receiver'] = selReceiver.value;
    selections['type'] = selType.value;
    selections['size'] = '';

    sendAjaxRequest('TOGGLE', podId, selections.giver, selections.niche, selections.size, 
        selections.type, selections.receiver);

}



$('.button').click(function () {
  $(this).parent().toggleClass('expand');
  addPodFunc();     
});

var accounts = [] //global variable, available to the HTML as well
//Handles submit on the modal
function addPodFunc() {
    ////scroll to the top
    // $('html, body').animate({scrollTop:0},'slow');
    
    //enable the account selector
    $('#selAccount').attr('disabled', false);
    setOrResetInfo('RESET', '');

    submitByEdit = false;
}

$('#add_btn').on('click', function(){
        $('html,body').animate({scrollTop:0}, 500);
        return false;
});

submitByEdit = false;
latest_podId = ''
function editButFunc(podId) {
    ////scroll to the top
    // $('html, body').animate({scrollTop:0},'slow');

    //disable the account selector
    $('#selAccount').attr('disabled', true);
    $('.selectpicker').selectpicker('refresh');

    $('.button').parent().toggleClass('expand');
    
    setOrResetInfo('SET', podId);

    submitByEdit = true;
    latest_podId = podId;
}

function idNicheName(val){
    switch(val) {
    case 'Viral & Others':
        return 'viral';
    case 'Mensfashion & Lifestyle':
        return 'mens';
    case 'Womensfashion & Lifestyle':
        return 'womens';
    case 'Personal, Entrepreneur & Motivational':
        return 'fashion';
    case 'Fitness & health':
        return 'fitness';
    case 'Luxery & motors':
        return 'lux';
    case 'Travel & Vacation/Nature':
        return 'travel';
    case 'Art & Abstract':
        return 'art';
    case 'Food & Nutrition':
        return 'food';
    case 'Pet & Animals':
        return 'pet';
    case 'Drinks & Wine':
        return 'drinks';
    } 
}

//scrooling up
// function scrolear(destino){
// return false;
//     var stop = $(destino).offset().top;
//     var delay = 1000;
//     $('body,html').animate({scrollTop: stop}, delay);
//     return false;
// }




function removeButFunc(podId) {
    showLoading(); 

    var selReceiver = document.getElementById('reciever');
    var selType = document.getElementById('selType');
    var selNiche = document.getElementById('selNiche');

    selections['giver'] = 'POWER';
    selections['niche'] = selNiche.value;
    selections['receiver'] = selReceiver.value;
    selections['type'] = selType.value;
    selections['size'] = '';

    sendAjaxRequest('DEL', podId, selections.giver, selections.niche, selections.size, 
        selections.type, selections.receiver);
}


var elemLikes = document.querySelector('#rangeLikes');
var elemComments = document.querySelector('#rangeComments');
var elemViews = document.querySelector('#rangeViews');

var rangeLikes = function(){
  var newValue = elemLikes.value;
  var target = document.querySelector('#numLikes');
  target.innerHTML = newValue;
}

var rangeComments = function(){
  var newValue2 = elemComments.value;
  var target = document.querySelector('#numComments');
  target.innerHTML = newValue2;
}

var rangeViews = function(){
  var newValue3 = elemViews.value;
  var target = document.querySelector('#numViews');
  target.innerHTML = newValue3;
}


elemLikes.addEventListener("input", rangeLikes);
elemComments.addEventListener("input", rangeComments);
elemViews.addEventListener("input", rangeViews);


var prevRadio = null;
function radioSel(currRadio){
    // currRadio.classList.add('radioSel');
    if (prevRadio != null)
        prevRadio.setAttribute('style', '');

    currRadio.setAttribute('style', 'background-color: #1f5a81; color: white;');
    prevRadio = currRadio;
}


var selections = {};
function okBut(){
    // vals = setOrResetInfo('GETMODAL', '');
    var selReceiver = document.getElementById('reciever');
    var selType = document.getElementById('selType');
    var selNiche = document.getElementById('selNiche');

    selections['receiver'] = selReceiver.value;
    selections['niche'] = selNiche.value;
    selections['type'] = selType.value;

    // accSel == 'No accounts added yet.'
    if(selections.giver == '' || selections.receiver == ''){
        displayToast('danger', 'Your giver or receiver account is missing, please complete your selections before continuing.');
        return;
    }

    document.getElementById("tab2").disabled = false;
    // document.getElementById("rangeComments").disabled = true;
    // document.querySelector('#numComments').innerHTML = 'No Comments';
    // elemComments.style.backgroundColor = '#bdc3c7';

    $("#tab2").click();
    // $('#selectPref').appendTo('body').modal('show');
}

//Handles submit on the modal
var vals = null;
function modalSubmitFunc() { 
    var selReceiver = document.getElementById('reciever');
    var selType = document.getElementById('selType');
    var selNiche = document.getElementById('selNiche');

    selections['giver'] = 'POWER';
    selections['niche'] = selNiche.value;
    selections['receiver'] = selReceiver.value;
    selections['type'] = selType.value;
    selections['size'] = '';

    if (selections.giver == '' || selections.niche == '' || selections.type == '' || selections.receiver == '')
        {
            displayToast('danger', 'Some arguments are missing, please complete your selections before continuing.');
            return;
        }
    // vals = [selAccount.value, selNiche.value, selSize.value, selType.value, document.getElementById('reciever').value];
    //edit this pod
    // console.log(selections.giver+ selections.niche+ selections.size+ 
            // selections.type+ selections.receiver)

    if (likesLeft < 1 && commentsLeft < 1 && viewsLeft < 1){
        modalPaymentFunc('likes');
        return;
    }

    if (submitByEdit){
        sendAjaxRequest('EDIT', latest_podId, selections.giver, selections.niche, selections.size, 
            selections.type, selections.receiver);
    }
    else{
        sendAjaxRequest('NEW', makeid(), selections.giver, selections.niche, selections.size, 
            selections.type, selections.receiver);
    }

    showLoading();
}


//creates a random and unique bot id
function makeid() {
  var text = "POD_";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 8; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}




//sets or rests the modal info
function setOrResetInfo(command, podId) {
    // MODAL ELLEMENTS
    var selNiche = document.getElementById('selNiche');
    var selType = document.getElementById('selType');

    if(command == 'SET'){

        niche = idNicheName($('#'+podId+'_selNicheVal').text());
        // niche = '';

        selNiche.value = niche;

        if ($('#'+podId+'_selTypeVal').text() == 'Like Only') {
            selType.value = 'Like';
        }
        else if ($('#'+podId+'_selTypeVal').text() == 'Like + Comment') {
            selType.value = 'Both';
        }
        
        $('.selectpicker').selectpicker('refresh');
        
        document.getElementById('reciever').value = $('#'+podId+'_recieverVal').text();

        return;
    } 
    else if(command == 'RESET'){
        selNiche.value = '';
        selType.value = '';
        document.getElementById('reciever').value = '';
        $('.selectpicker').selectpicker('refresh');
        $("#tab1").click();
        return;
    }
    else if(command == 'GETMODAL'){
        // displayToast('info', [selAccount.value, selNiche.value, selSize.value, selType.value, 
        // document.getElementById('reciever').value]);
        return [selNiche.value, selType.value, 
        document.getElementById('reciever').value];
    }
    else if(command == 'GETCARD'){
        
        // niche = idNicheName($('#'+podId+'_selNicheVal').text());
        niche = '';
        
        seleType = $('#'+podId+'_selTypeVal').text();
        
        if (seleType == 'Like Only') {
            selType = 'Like';
        }
        else if (seleType == 'Comment Only') {
            selType = 'Comment';
        }
        else {
            selType = 'Both';
        }
        rec = $('#'+podId+'_recieverVal').text();

        return [niche, selType, rec];
    }
}







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
          title: "Welcome to InfiniCore's Power Service!",
          content: "InfiniCore's most awaited feature introduces a powerful network of <code> 110+ million!</code>"+
          "<br><br> This service includes <strong>Power Likes, Power Comments & Power Views</strong>"+
          "<br><br> The powerlikes are mixed niche, but the comments are niche specifc."+
          "<br><br> <a href='#0' onlick='openDemoVideo();'>CLICK HERE</a> to watch the short getting started video!",
          target: "header",
          fixedElement: true,
          placement: "bottom",
          // showSkip: false,
          zindex: 3,
          width: 250
        },
        {
          title: "Power Likes Remaining",
          content: "This indicator shows how many Power Likes you have left.",
          target: "likesLeftCounter",
          placement: "bottom",
          fixedElement: true,
          showNextButton: true,
          showCTAButton: true,
          ctaLabel: 'Skip',
          // showSkip: true,
          width: 200,
          xOffset: 2,
          onCTA: function(){
            hopscotch.endTour([false]);
            sendAjaxRequest('END_TOUR', '', '', '', '', '', '', '');
          },
          yOffset: 0
        },
        {
          title: "Refuel Your Power Likes & Turn ON/OFF Your Power Likes",
          content: "In case you run out of Power Likes, you can always purchase more by clicking this button. Same goes with Power Comments (the speech bubble icon) and Power Views (the eye icon)."+
          "<br><br>"+
          "Also, in case you want to use Power Comments and/or Power Views only. You can toggle around through the different power services by pressing the button on the right. However, make sure that your service of interest is ON before you post.",
          target: "addPowerLikesBut",
          fixedElement: true,
          placement: "bottom",
          showNextButton: true,
          showCTAButton: true,
          ctaLabel: 'Skip',
          // showSkip: true,
          zindex: 21,
          onCTA: function(){
            hopscotch.endTour([false]);
            sendAjaxRequest('END_TOUR', '', '', '', '', '', '', '');
          },
          width: 250
        },
        // {
        //   title: "",
        //   content: "",
        //   target: "likesStateBut",
        //   fixedElement: true,
        //   placement: "top",
        //   showNextButton: true,
        //   showCTAButton: true,
        //   ctaLabel: 'Skip',
        //   // showSkip: true,
        //   zindex: 21,
        //   onCTA: function(){
        //     hopscotch.endTour([false]);
        //     sendAjaxRequest('END_TOUR', '', '', '', '', '', '', '');
        //   },
        //   width: 250
        // },
        // {
        //   title: "Power Comments Remaining",
        //   content: "And this indicates how many Power Comments you have left.",
        //   target: "commentsLeftCounter",
        //   placement: "bottom",
        //   fixedElement: true,
        //   showNextButton: true,
        //   showCTAButton: true,
        //   ctaLabel: 'Skip',
        //   // showSkip: true,
        //   width: 200,
        //   xOffset: 2,
        //   onCTA: function(){
        //     hopscotch.endTour([false]);
        //     sendAjaxRequest('END_TOUR', '', '', '', '', '', '', '');
        //   },
        //   yOffset: 0
        // },
        // {
        //   title: "Refuel and Turn ON/OFF Your Power Comments",
        //   content: "When running out of Power Comments, same as Power Likes, press the blue button (comment symbol) to order more. Press the button on the right to toggle ON/OFF your Power Comments.",
        //   target: "commentsLeftCounter",
        //   fixedElement: true,
        //   placement: "top",
        //   showNextButton: true,
        //   showCTAButton: true,
        //   ctaLabel: 'Skip',
        //   // showSkip: true,
        //   zindex: 21,
        //   onCTA: function(){
        //     hopscotch.endTour([false]);
        //     sendAjaxRequest('END_TOUR', '', '', '', '', '', '', '');
        //   },
        //   width: 250
        // },
        // {
        //   title: "Same with Power Views",
        //   content: "Same goes with power views as well as Power Likes and Comments.",
        //   target: "viewsLeftCounter",
        //   placement: "bottom",
        //   fixedElement: true,
        //   showNextButton: true,
        //   showCTAButton: true,
        //   ctaLabel: 'Skip',
        //   // showSkip: true,
        //   width: 200,
        //   xOffset: 2,
        //   onCTA: function(){
        //     hopscotch.endTour([false]);
        //     sendAjaxRequest('END_TOUR', '', '', '', '', '', '', '');
        //   },
        //   yOffset: 0
        // },
        {
          title: "Add Your Receiver",
          content: "With Power Service, you do not need a giver account, <strong>only a receiver</strong>."+
          "<br><br> Ones you have added your receiving account and selected your preferred settings, you will then receive powerlikes/powercomments whenever you make a new post."+
          "<br><br> If you have questions/comments, feel free to reach out to support: <a href='/send_feecback'>support@InfiniCore.net</a>.",
          fixedElement: true,
          target: "modalPodYes",
          placement: "left",
          showNextButton: true,
          showCTAButton: true,
          ctaLabel: 'Skip',
          // nextOnTargetClick: true,
          // showSkip: true,
          width: 200,
          xOffset: 2,
          onCTA: function(){
            hopscotch.endTour([false]); 
// function sendAjaxRequest(command, podId, selAccountVal, selNicheVal, selSizeVal, selTypeVal, recieverVal) {            
            sendAjaxRequest('END_TOUR', '', '', '', '', '', '');
          },
          yOffset: 0
        }
      ],
      onEnd: function() {
        sendAjaxRequest('END_TOUR', '', '', '', '', '', '');
      }
    };

    // Start the tour!
    hopscotch.startTour(tour);
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
        delay: 10000,
        z_index: 99999,
        type: type

    });
};

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


/*https://github.com/skidding/dragdealer*/
(function(root,factory){if(typeof define==="function"&&define.amd){define(factory)}else{root.Dragdealer=factory()}})(this,function(){var Dragdealer=function(wrapper,options){this.bindMethods();this.options=this.applyDefaults(options||{});this.wrapper=this.getWrapperElement(wrapper);if(!this.wrapper){return}this.handle=this.getHandleElement(this.wrapper,this.options.handleClass);if(!this.handle){return}this.init();this.bindEventListeners()};Dragdealer.prototype={defaults:{disabled:false,horizontal:true,vertical:false,slide:true,steps:0,snap:false,loose:false,speed:.1,xPrecision:0,yPrecision:0,handleClass:"handle"},init:function(){this.value={prev:[-1,-1],current:[this.options.x||0,this.options.y||0],target:[this.options.x||0,this.options.y||0]};this.offset={wrapper:[0,0],mouse:[0,0],prev:[-999999,-999999],current:[0,0],target:[0,0]};this.change=[0,0];this.stepRatios=this.calculateStepRatios();this.activity=false;this.dragging=false;this.tapping=false;this.reflow();if(this.options.disabled){this.disable()}},applyDefaults:function(options){for(var k in this.defaults){if(!options.hasOwnProperty(k)){options[k]=this.defaults[k]}}return options},getWrapperElement:function(wrapper){if(typeof wrapper=="string"){return document.getElementById(wrapper)}else{return wrapper}},getHandleElement:function(wrapper,handleClass){var childElements=wrapper.getElementsByTagName("div"),handleClassMatcher=new RegExp("(^|\\s)"+handleClass+"(\\s|$)"),i;for(i=0;i<childElements.length;i++){if(handleClassMatcher.test(childElements[i].className)){return childElements[i]}}},calculateStepRatios:function(){var stepRatios=[];if(this.options.steps>1){for(var i=0;i<=this.options.steps-1;i++){stepRatios[i]=i/(this.options.steps-1)}}return stepRatios},setWrapperOffset:function(){this.offset.wrapper=Position.get(this.wrapper)},calculateBounds:function(){var bounds={top:this.options.top||0,bottom:-(this.options.bottom||0)+this.wrapper.offsetHeight,left:this.options.left||0,right:-(this.options.right||0)+this.wrapper.offsetWidth};bounds.availWidth=bounds.right-bounds.left-this.handle.offsetWidth;bounds.availHeight=bounds.bottom-bounds.top-this.handle.offsetHeight;return bounds},calculateValuePrecision:function(){var xPrecision=this.options.xPrecision||Math.abs(this.bounds.availWidth),yPrecision=this.options.yPrecision||Math.abs(this.bounds.availHeight);return[xPrecision?1/xPrecision:0,yPrecision?1/yPrecision:0]},bindMethods:function(){this.onHandleMouseDown=bind(this.onHandleMouseDown,this);this.onHandleTouchStart=bind(this.onHandleTouchStart,this);this.onDocumentMouseMove=bind(this.onDocumentMouseMove,this);this.onWrapperTouchMove=bind(this.onWrapperTouchMove,this);this.onWrapperMouseDown=bind(this.onWrapperMouseDown,this);this.onWrapperTouchStart=bind(this.onWrapperTouchStart,this);this.onDocumentMouseUp=bind(this.onDocumentMouseUp,this);this.onDocumentTouchEnd=bind(this.onDocumentTouchEnd,this);this.onHandleClick=bind(this.onHandleClick,this);this.onWindowResize=bind(this.onWindowResize,this)},bindEventListeners:function(){addEventListener(this.handle,"mousedown",this.onHandleMouseDown);addEventListener(this.handle,"touchstart",this.onHandleTouchStart);addEventListener(document,"mousemove",this.onDocumentMouseMove);addEventListener(this.wrapper,"touchmove",this.onWrapperTouchMove);addEventListener(this.wrapper,"mousedown",this.onWrapperMouseDown);addEventListener(this.wrapper,"touchstart",this.onWrapperTouchStart);addEventListener(document,"mouseup",this.onDocumentMouseUp);addEventListener(document,"touchend",this.onDocumentTouchEnd);addEventListener(this.handle,"click",this.onHandleClick);addEventListener(window,"resize",this.onWindowResize);var _this=this;this.interval=setInterval(function(){_this.animate()},25);this.animate(false,true)},unbindEventListeners:function(){removeEventListener(this.handle,"mousedown",this.onHandleMouseDown);removeEventListener(this.handle,"touchstart",this.onHandleTouchStart);removeEventListener(document,"mousemove",this.onDocumentMouseMove);removeEventListener(this.wrapper,"touchmove",this.onWrapperTouchMove);removeEventListener(this.wrapper,"mousedown",this.onWrapperMouseDown);removeEventListener(this.wrapper,"touchstart",this.onWrapperTouchStart);removeEventListener(document,"mouseup",this.onDocumentMouseUp);removeEventListener(document,"touchend",this.onDocumentTouchEnd);removeEventListener(this.handle,"click",this.onHandleClick);removeEventListener(window,"resize",this.onWindowResize);clearInterval(this.interval)},onHandleMouseDown:function(e){Cursor.refresh(e);preventEventDefaults(e);stopEventPropagation(e);this.activity=false;this.startDrag()},onHandleTouchStart:function(e){Cursor.refresh(e);stopEventPropagation(e);this.activity=false;this.startDrag()},onDocumentMouseMove:function(e){Cursor.refresh(e);if(this.dragging){this.activity=true}},onWrapperTouchMove:function(e){Cursor.refresh(e);if(!this.activity&&this.draggingOnDisabledAxis()){if(this.dragging){this.stopDrag()}return}preventEventDefaults(e);this.activity=true},onWrapperMouseDown:function(e){Cursor.refresh(e);preventEventDefaults(e);this.startTap()},onWrapperTouchStart:function(e){Cursor.refresh(e);preventEventDefaults(e);this.startTap()},onDocumentMouseUp:function(e){this.stopDrag();this.stopTap()},onDocumentTouchEnd:function(e){this.stopDrag();this.stopTap()},onHandleClick:function(e){if(this.activity){preventEventDefaults(e);stopEventPropagation(e)}},onWindowResize:function(e){this.reflow()},enable:function(){this.disabled=false;this.handle.className=this.handle.className.replace(/\s?disabled/g,"")},disable:function(){this.disabled=true;this.handle.className+=" disabled"},reflow:function(){this.setWrapperOffset();this.bounds=this.calculateBounds();this.valuePrecision=this.calculateValuePrecision();this.updateOffsetFromValue()},getStep:function(){return[this.getStepNumber(this.value.target[0]),this.getStepNumber(this.value.target[1])]},getValue:function(){return this.value.target},setStep:function(x,y,snap){this.setValue(this.options.steps&&x>1?(x-1)/(this.options.steps-1):0,this.options.steps&&y>1?(y-1)/(this.options.steps-1):0,snap)},setValue:function(x,y,snap){this.setTargetValue([x,y||0]);if(snap){this.groupCopy(this.value.current,this.value.target);this.updateOffsetFromValue();this.callAnimationCallback()}},startTap:function(){if(this.disabled){return}this.tapping=true;this.setWrapperOffset();this.setTargetValueByOffset([Cursor.x-this.offset.wrapper[0]-this.handle.offsetWidth/2,Cursor.y-this.offset.wrapper[1]-this.handle.offsetHeight/2])},stopTap:function(){if(this.disabled||!this.tapping){return}this.tapping=false;this.setTargetValue(this.value.current)},startDrag:function(){if(this.disabled){return}this.dragging=true;this.setWrapperOffset();this.offset.mouse=[Cursor.x-Position.get(this.handle)[0],Cursor.y-Position.get(this.handle)[1]]},stopDrag:function(){if(this.disabled||!this.dragging){return}this.dragging=false;var target=this.groupClone(this.value.current);if(this.options.slide){var ratioChange=this.change;target[0]+=ratioChange[0]*4;target[1]+=ratioChange[1]*4}this.setTargetValue(target)},callAnimationCallback:function(){var value=this.value.current;if(this.options.snap&&this.options.steps>1){value=this.getClosestSteps(value)}if(!this.groupCompare(value,this.value.prev)){if(typeof this.options.animationCallback=="function"){this.options.animationCallback.call(this,value[0],value[1])}this.groupCopy(this.value.prev,value)}},callTargetCallback:function(){if(typeof this.options.callback=="function"){this.options.callback.call(this,this.value.target[0],this.value.target[1])}},animate:function(direct,first){if(direct&&!this.dragging){return}if(this.dragging){var prevTarget=this.groupClone(this.value.target);var offset=[Cursor.x-this.offset.wrapper[0]-this.offset.mouse[0],Cursor.y-this.offset.wrapper[1]-this.offset.mouse[1]];this.setTargetValueByOffset(offset,this.options.loose);this.change=[this.value.target[0]-prevTarget[0],this.value.target[1]-prevTarget[1]]}if(this.dragging||first){this.groupCopy(this.value.current,this.value.target)}if(this.dragging||this.glide()||first){this.updateOffsetFromValue();this.callAnimationCallback()}},glide:function(){var diff=[this.value.target[0]-this.value.current[0],this.value.target[1]-this.value.current[1]];if(!diff[0]&&!diff[1]){return false}if(Math.abs(diff[0])>this.valuePrecision[0]||Math.abs(diff[1])>this.valuePrecision[1]){this.value.current[0]+=diff[0]*this.options.speed;this.value.current[1]+=diff[1]*this.options.speed}else{this.groupCopy(this.value.current,this.value.target)}return true},updateOffsetFromValue:function(){if(!this.options.snap){this.offset.current=this.getOffsetsByRatios(this.value.current)}else{this.offset.current=this.getOffsetsByRatios(this.getClosestSteps(this.value.current))}if(!this.groupCompare(this.offset.current,this.offset.prev)){this.renderHandlePosition();this.groupCopy(this.offset.prev,this.offset.current)}},renderHandlePosition:function(){if(this.options.horizontal){this.handle.style.left=String(this.offset.current[0])+"px"}if(this.options.vertical){this.handle.style.top=String(this.offset.current[1])+"px"}},setTargetValue:function(value,loose){var target=loose?this.getLooseValue(value):this.getProperValue(value);this.groupCopy(this.value.target,target);this.offset.target=this.getOffsetsByRatios(target);this.callTargetCallback()},setTargetValueByOffset:function(offset,loose){var value=this.getRatiosByOffsets(offset);var target=loose?this.getLooseValue(value):this.getProperValue(value);this.groupCopy(this.value.target,target);this.offset.target=this.getOffsetsByRatios(target)},getLooseValue:function(value){var proper=this.getProperValue(value);return[proper[0]+(value[0]-proper[0])/4,proper[1]+(value[1]-proper[1])/4]},getProperValue:function(value){var proper=this.groupClone(value);proper[0]=Math.max(proper[0],0);proper[1]=Math.max(proper[1],0);proper[0]=Math.min(proper[0],1);proper[1]=Math.min(proper[1],1);if(!this.dragging&&!this.tapping||this.options.snap){if(this.options.steps>1){proper=this.getClosestSteps(proper)}}return proper},getRatiosByOffsets:function(group){return[this.getRatioByOffset(group[0],this.bounds.availWidth,this.bounds.left),this.getRatioByOffset(group[1],this.bounds.availHeight,this.bounds.top)]},getRatioByOffset:function(offset,range,padding){return range?(offset-padding)/range:0},getOffsetsByRatios:function(group){return[this.getOffsetByRatio(group[0],this.bounds.availWidth,this.bounds.left),this.getOffsetByRatio(group[1],this.bounds.availHeight,this.bounds.top)]},getOffsetByRatio:function(ratio,range,padding){return Math.round(ratio*range)+padding},getStepNumber:function(value){return this.getClosestStep(value)*(this.options.steps-1)+1},getClosestSteps:function(group){return[this.getClosestStep(group[0]),this.getClosestStep(group[1])]},getClosestStep:function(value){var k=0;var min=1;for(var i=0;i<=this.options.steps-1;i++){if(Math.abs(this.stepRatios[i]-value)<min){min=Math.abs(this.stepRatios[i]-value);k=i}}return this.stepRatios[k]},groupCompare:function(a,b){return a[0]==b[0]&&a[1]==b[1]},groupCopy:function(a,b){a[0]=b[0];a[1]=b[1]},groupClone:function(a){return[a[0],a[1]]},draggingOnDisabledAxis:function(){return!this.options.horizontal&&Cursor.xDiff>Cursor.yDiff||!this.options.vertical&&Cursor.yDiff>Cursor.xDiff}};var bind=function(fn,context){return function(){return fn.apply(context,arguments)}};var addEventListener=function(element,type,callback){if(element.addEventListener){element.addEventListener(type,callback,false)}else if(element.attachEvent){element.attachEvent("on"+type,callback)}};var removeEventListener=function(element,type,callback){if(element.removeEventListener){element.removeEventListener(type,callback,false)}else if(element.detachEvent){element.detachEvent("on"+type,callback)}};var preventEventDefaults=function(e){if(!e){e=window.event}if(e.preventDefault){e.preventDefault()}e.returnValue=false};var stopEventPropagation=function(e){if(!e){e=window.event}if(e.stopPropagation){e.stopPropagation()}e.cancelBubble=true};var Cursor={x:0,y:0,xDiff:0,yDiff:0,refresh:function(e){if(!e){e=window.event}if(e.type=="mousemove"){this.set(e)}else if(e.touches){this.set(e.touches[0])}},set:function(e){var lastX=this.x,lastY=this.y;if(e.pageX||e.pageY){this.x=e.pageX;this.y=e.pageY}else if(e.clientX||e.clientY){this.x=e.clientX+document.body.scrollLeft+document.documentElement.scrollLeft;this.y=e.clientY+document.body.scrollTop+document.documentElement.scrollTop}this.xDiff=Math.abs(this.x-lastX);this.yDiff=Math.abs(this.y-lastY)}};var Position={get:function(obj){var curleft=0,curtop=0;if(obj.offsetParent){do{curleft+=obj.offsetLeft;curtop+=obj.offsetTop}while(obj=obj.offsetParent)}return[curleft,curtop]}};return Dragdealer});
    



var dragger = null;
var paymentType = null;
var originalPrice = 0;
var price = 0;
var quantity = 0;
var prices = [
    {'likes':4, 'comments':4, 'views':20, 'combined':25}, //normal price
    {'likes':3.5, 'comments':3, 'views':17, 'combined':23}, // medium discount
    {'likes':3, 'comments':2, 'views':15, 'combined':20} // large discount
    ];

function modalPaymentFunc(type){
    dragger = paymentType = type;

    price = prices[0][dragger];

    originalPrice = price;

    $('#selectPref').appendTo('body').modal('show');

    //set defaults
    var basicLastWidth = 29;
    var busniessLastWidth = 64;

    quantity = 1;

    // if ($('#selectPref').hasClass('in')){
    // clear out the old paypal button
    $("#paypal-button-container").html("");

    setTimeout(function(){ 

        //packages
        document.getElementById('powerName').innerHTML = paymentType + ' ONLY';
        document.getElementById('powerName2').innerHTML = paymentType + ' ONLY';

        var toggle = document.getElementById('toggleContainer');
        var toggleContainer = document.getElementById('toggle-container-on');
        var toggleNumber;

        toggleContainer.classList.remove("clip1");
        toggleContainer.classList.add("clip2");

        toggle.addEventListener('click', function() {
            toggleNumber = !toggleNumber;
            if (toggleNumber){
                if(quantity > 0 && quantity < 30)
                    price = prices[0]['combined'];
                if(quantity > 29 && quantity < 65) 
                    price = prices[1]['combined'];
                if(quantity > 64 && quantity < 101) 
                    price = prices[2]['combined'];

                originalPrice = prices[0]['combined'] + 5;

                $(".info-quantity").html('Num. of Posts: '+quantity); 
                $(".info-price").html('Total: '+quantity*price+'$'); 
                $(".perpost-price").html(price+'$');
                $("#save").html(quantity*(originalPrice-price)+'$');

                dragger = 'combined';

                toggleContainer.classList.remove("clip2");
                toggleContainer.classList.add("clip1");
                // toggleContainer.style.clipPath = 'inset(0 0 0 40%)';
                // toggleContainer.style.backgroundColor = '#ca5127';
            } 
            else {
                toggleContainer.classList.remove("clip1");
                toggleContainer.classList.add("clip2");
                // toggleContainer.style.clipPath = 'inset(0 60% 0 0)';
                // toggleContainer.style.backgroundColor = '#1f5a81';
                
                dragger = paymentType;

                if(quantity > 0 && quantity < 30)
                    price = prices[0][dragger];
                if(quantity > 29 && quantity < 65) 
                    price = prices[1][dragger];
                if(quantity > 64 && quantity < 101) 
                    price = prices[2][dragger];

                originalPrice = prices[0][dragger];

                $(".info-quantity").html('Num. of Posts: '+quantity); 
                $(".info-price").html('Total: '+quantity*price+'$'); 
                $(".perpost-price").html(price+'$');
                $("#save").html(quantity*(originalPrice-price)+'$');
            }
            // console.log(toggleNumber)
        });

        

        new Dragdealer('pr-slider', {
        animationCallback: function(x, y) {
            var slider_value = ((Math.round(x * 100)));
            
            if (slider_value == 0)
                slider_value += 1;

            quantity = slider_value;
            // Quantity holder
            $("#quantity-holder").text(slider_value);

            $(".info-quantity").html('Num. of Posts: '+slider_value); 
            $(".info-price").html('Total: '+slider_value*price+'$'); 
            $(".perpost-price").html(price+'$');
            $("#save").html(quantity*(originalPrice-price)+'$');

            price = prices[0][dragger];

            //set basic
            if(slider_value > 0 && slider_value < 30) {
                
                $("#plan-holder").text('BASIC');
                
                $("#orange-highlight").hide();
                $("#blue-highlight").hide();
                $("#green-highlight").show();
                // $("#green-highlight").css("width", ""+(slider_value+40.5)+"%");
                $("#green-highlight").css("width", ""+(slider_value)+"%");
            }
            

            //set business
            if(slider_value > 29 && slider_value < 65) {
                price = prices[1][dragger];
                
                $("#green-highlight").css("width", ""+(basicLastWidth)+"%");
                
                $("#plan-holder").text('PREMIUM');

                $("#orange-highlight").show();
                $("#blue-highlight").hide();
                
                $("#orange-highlight").css("width", ""+(slider_value-basicLastWidth)+"%");
                $("#orange-highlight").css("left", ""+(basicLastWidth)+"%");
              }
              
            //set enterprise
            if(slider_value > 64 && slider_value < 101) {
                price = prices[2][dragger];
                
                $("#orange-highlight").css("width", ""+(busniessLastWidth-basicLastWidth)+"%");
                $("#orange-highlight").css("left", ""+(basicLastWidth)+"%");
                
                $("#plan-holder").text('ULTIMATE');

                $("#blue-highlight").show();

                $("#blue-highlight").css("width", ""+(slider_value-busniessLastWidth)+"%");
                $("#blue-highlight").css("left", ""+(busniessLastWidth)+"%");
              }
            

            //set bulk orders
            // if(slider_value > 100 && slider_value < 102){
            //     $("#blue-highlight").css("width", ""+(100-busniessLastWidth)+"%");
            //     $("#blue-highlight").css("left", ""+(busniessLastWidth)+"%");

            //     // $("#plan-holder").text('Ultimate:');
            //     $("#quantity-holder").text('Bulk Order');
            //     $(".info-price").html('Contact us'); 
            //     $(".annual-label").html('Support@InfiniCore.net');
            //     $(".annual-price").html('');
            // } 
        }});

        paymentType = dragger;

        paypal.Button.render({

            env: 'production', // sandbox | production
              
              // Specify the style of the button
            style: {
                label: 'paypal',
                size:  'responsive',    // small | medium | large | responsive
                shape: 'rect',     // pill | rect
                color: 'blue',     // gold | blue | silver | black
                tagline: false    
            },
          
            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked 
            payment: function() {

                // Set up a url on your server to create the payment
                var CREATE_URL = '/power_payment/';

                // Make a call to your server to set up the payment

                var data = {
                    quantity: quantity,
                    paymentType: dragger,
                    price: price
                };

                return paypal.request.post(CREATE_URL, data)
                    .then(function(res) {
                        console.log(res);
                        if (res.paymentID[0] == false){
                            displayToast('danger', 'Invalid Arguments, please reload your page and try again.');
                            return;
                        }
                        return res.paymentID;
                    });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {

                // Set up a url on your server to execute the payment
                var EXECUTE_URL = '/power_execute/';

                // Set up the data you need to pass to your server
                var data = {
                    paymentID: data.paymentID,
                    payerID: data.payerID,
                    paymentType: dragger
                };

                // Make a call to your server to execute the payment
                return paypal.request.post(EXECUTE_URL, data)
                    .then(function (res) {
                        if (res.error){
                          displayToast('danger', 'Something went wrong: '+ res.error);
                        }
                        else if (res.success) {
                            // if the add power modal is opened, then close it
                            element = document.getElementsByClassName('container2');
                            if (element[0].classList.contains('expand'))
                                $('.button').parent().toggleClass('expand');
                            
                            // close the popup payment modal
                            document.getElementById("closePaymentModal").click();
                            displayToast('success', 'Thank you for your purchase.');
                            //displayToast('warning', 'Remember to scroll down and make sure your receiving accounts are ACTIVATED before posting.');
                            if (res.receivers){
                                displayToast('warning', 'Note: following receiving account(s) are deactivated: '+res.receivers+'. Scroll down to ACTIVATE your receving account(s) before posting.');
                            }
                            
                            if (dragger == 'likes'){
                                likesLeft = Number(quantity) + Number(likesLeft);
                                likesState = true;
                                document.getElementById('likesLeftCounter').innerHTML = 'POWER LIKES: '+likesLeft;
                                $('#likesStateSpan').text('ON');
                                $('#likesStateBut').css('background-color', '#3c763d');
                            }
                            
                            else if(dragger == 'views'){
                                viewsLeft = Number(quantity) + Number(viewsLeft);
                                viewsState = true;
                                document.getElementById('viewsLeftCounter').innerHTML = 'POWER VIEWS: '+viewsLeft;
                                $('#viewsStateSpan').text('ON');
                                $('#viewsStateBut').css('background-color', '#3c763d');
                            }
                            
                            else if(dragger == 'comments'){
                                commentsLeft = Number(quantity) + Number(commentsLeft);
                                commentsState = true;
                                document.getElementById('commentsLeftCounter').innerHTML = 'POWER COMMENTS: '+commentsLeft;
                                $('#commentsStateSpan').text('ON');
                                $('#commentsStateBut').css('background-color', '#3c763d');
                            }
                            
                            else if(dragger == 'combined'){

                                likesLeft = Number(quantity) + Number(likesLeft);
                                likesState = true;
                                document.getElementById('likesLeftCounter').innerHTML = 'POWER LIKES: '+likesLeft;
                                $('#likesStateSpan').text('ON');
                                $('#likesStateBut').css('background-color', '#3c763d');
                                
                                viewsLeft = Number(quantity) + Number(viewsLeft);
                                viewsState = true;
                                document.getElementById('viewsLeftCounter').innerHTML = 'POWER VIEWS: '+viewsLeft;
                                $('#viewsStateSpan').text('ON');
                                $('#viewsStateBut').css('background-color', '#3c763d');

                                commentsLeft = Number(quantity) + Number(commentsLeft);
                                commentsState = true;
                                document.getElementById('commentsLeftCounter').innerHTML = 'POWER COMMENTS: '+commentsLeft;
                                $('#commentsStateSpan').text('ON');
                                $('#commentsStateBut').css('background-color', '#3c763d');
                            }
                        }
                        else {
                            displayToast('error', 'An error has occured. Please try again or contact support.');

                        }
                    });
                }

            }, '#paypal-button-container');

    }, 250);
    // paymentType = dagger;
}


