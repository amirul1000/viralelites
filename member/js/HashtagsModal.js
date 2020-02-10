//global input variables

//Communicate with the server Encrypted
function sendAjaxRequest(tags, acc) {
    $.ajax({
            data : {
                tags : tags,
                account : acc
            }, 
            type : 'POST',
            url : '/hashtagsBg/'
        })
        .done(function(data) {

            //hide the loading
            // hideLoading();
            $('#selectLoading').modal('hide');

            //report error
            if (data.error) {
                displayToast('danger', data.error);
            }
            //remove/add account
            else { 
                lis = data.success;

                $('#rows').empty();
                
                displayToast('success', 'Hashtag research completed. '+(lis[0].length)+' hashtags researched.');
                // first data is the user's own likes
                $('#userAverage').text(lis[0].length + ' hashtags were researched:')
                // $('#userAverage').text('Average likes for '+acc+': '+ lis[1])
                // $('#userAverage').text('Average Likes for ['+acc+']: '+ lis[1])

                // $('#table_tags').append('<tr id="rows" class="table-danger"> <td ><strong>'+lis[0][0]+'</strong></td> <td><strong>'+lis[0][1]+'</strong></td> </tr>');

                makeTable(lis[0]);
                // for (var d = 1, len = lis[0].length; d < len; d++) {
                //     $('#table_tags').append('<tr id="rows"> <td>'+lis[0][d][0]+'</td> <td>'+lis[0][d][1]+'</td> </tr>');
                // }
            }
          });
}

function makeTable(data){ 

    var table = $('#table_tags');

    ///
    /// Table data
    ///
    if (table.html() != ''){
        table.DataTable().destroy();
        table.empty();
        table.html("");
    } 

     // table.html("");
    var html = ''

    ///
    /// Table head
    ///
    var headers = '';

    headers += '<th> Hashtags </th>';
    headers += '<th> Total Posts </th>';
    headers += '<th> Average Likes </th>';
    headers += '<th> Average Comments </th>';
    headers += '<th> Average Video Views </th>';


    html = "<thead>" +
           "    <tr>" +
                    headers + 
           "     </tr>" +
           "</thead>";

    var tableHead = $(html);
    table.append(tableHead);

    table.DataTable().clear();
    table.DataTable().destroy();

    table.DataTable( {
        data: data,
        paging: false,
        scrollX: true
    } );

    

    // table.DataTable().draw();

}







var choseAccount = '';
var hashies = '';
function next(command){
    switch(command) {
        case 'selAccount':
            value = selAccounts.options[selAccounts.selectedIndex].value;
            if (value == ''){
                displayToast('danger', 'Please select an account first.');
                return;
            }
            
            $('#selectAccount').modal('hide');
            $('#selectInput').appendTo('body').modal('show');
    // var e = document.getElementById('selAccounts');
    // var value = e.options[e.selectedIndex].value;
        // var selSize = $('#selAccounts').val();
            // var seleAccount = $('#selAccounts :selected').text();
            // displayToast('info', value);
            choseAccount = value;
            break;

        case 'hashtags':
            hashies = document.getElementsByName('tags-input')[0].value;
            if (hashies == ''){
                displayToast('danger', 'Please type/paste at least 1 hashtag.');
                return;
            }

            $('#selectInput').modal('hide');
            $('#selectStart').appendTo('body').modal('show');
            // displayToast('info', hashies);
            break;

        case 'start':
            $('#selectStart').modal('hide');
            // showLoading();
            $('#selectLoading').appendTo('body').modal('show');
            sendAjaxRequest(hashies, choseAccount);
            break;
        } 
}





//Handles the add new account
$('#selAccount').on('hidden.bs.select', function (e) {
    // do something...
            // displayToast('info', accounts);
    if (data == 'NEWACCOUNT') {
        window.location = "/accounts/";
    }
});







// displayToast('info', accounts)
// $(document.body).on('show.bs.modal,shown.bs.modal', function () {
            
//     });

var curpage = 4;
var sliding = false;
var click = true;
var left = document.getElementById("left");
var right = document.getElementById("right");
var pagePrefix = "slide";
var pageShift = 500;
var transitionPrefix = "circle";
var svg = true;

function leftSlide() {
    if (click) {
        if (curpage == 1) curpage = 5;
        console.log("woek");
        sliding = true;
        curpage--;
        svg = true;
        click = false;
        for (k = 1; k <= 4; k++) {
            var a1 = document.getElementById(pagePrefix + k);
            a1.className += " tran";
        }
        setTimeout(() => {
            move();
        }, 200);
        setTimeout(() => {
            for (k = 1; k <= 4; k++) {
                var a1 = document.getElementById(pagePrefix + k);
                a1.classList.remove("tran");
            }
        }, 1400);
    }
}

function rightSlide() {
    if (click) {
        if (curpage == 4) curpage = 0;
        console.log("woek");
        sliding = true;
        curpage++;
        svg = false;
        click = false;
        for (k = 1; k <= 4; k++) {
            var a1 = document.getElementById(pagePrefix + k);
            a1.className += " tran";
        }
        setTimeout(() => {
            move();
        }, 200);
        setTimeout(() => {
            for (k = 1; k <= 4; k++) {
                var a1 = document.getElementById(pagePrefix + k);
                a1.classList.remove("tran");
            }
        }, 1400);
    }
}

function move() {
    if (sliding) {
        sliding = false;
        if (svg) {
            for (j = 1; j <= 9; j++) {
                var c = document.getElementById(transitionPrefix + j);
                c.classList.remove("steap");
                c.setAttribute("class", transitionPrefix + j + " streak");
                console.log("streak");
            }
        } else {
            for (j = 10; j <= 18; j++) {
                var c = document.getElementById(transitionPrefix + j);
                c.classList.remove("steap");
                c.setAttribute("class", transitionPrefix + j + " streak");
                console.log("streak");
            }
        }

        // for(k=1;k<=4;k++){
        //   var a1 = document.getElementById(pagePrefix + k);
        //   a1.className += ' tran';
        // }

        setTimeout(() => {
            for (i = 1; i <= 4; i++) {
                if (i == curpage) {
                    var a = document.getElementById(pagePrefix + i);
                    a.className += " up1";
                } else {
                    var b = document.getElementById(pagePrefix + i);
                    b.classList.remove("up1");
                }
            }
            sliding = true;
        }, 600);
        setTimeout(() => {
            click = true;
        }, 1700);

        setTimeout(() => {
            if (svg) {
                for (j = 1; j <= 9; j++) {
                    var c = document.getElementById(transitionPrefix + j);
                    c.classList.remove("streak");
                    c.setAttribute("class", transitionPrefix + j + " steap");
                }
            } else {
                for (j = 10; j <= 18; j++) {
                    var c = document.getElementById(transitionPrefix + j);
                    c.classList.remove("streak");
                    c.setAttribute("class", transitionPrefix + j + " steap");
                }
                sliding = true;
            }
        }, 850);
        setTimeout(() => {
            click = true;
        }, 1700);
    }
}

if (hashGuide) {
    left.onmousedown = () => {
        leftSlide();
    };

    right.onmousedown = () => {
        rightSlide();
    };

    document.onkeydown = e => {
        if (e.keyCode == 37) {
            leftSlide();
        } else if (e.keyCode == 39) {
            rightSlide();
        }
    };

    //for codepen header
    setTimeout(() => {
        rightSlide();
    }, 500);
}




$(document).ready(function() {

    // run the tour or not
    if($('#tour').data('tour') == 'YES'){
        runTour();
    }


    selAccounts.innerHTML = '';
            
    for (var op = 0, len = accounts.length; op < len; op++){
        var newOption = document.createElement('option');
        newOption.value = accounts[op]; 
        newOption.innerHTML = accounts[op]; 
        selAccounts.options.add(newOption);
    }

    // add a line
    var newOption = document.createElement('option');
    newOption.setAttribute('data-divider','true');
    newOption.value = ''; 
    selAccounts.options.add(newOption);

    // add the new account choice
    var newOption = document.createElement('option');
    newOption.value = 'NEWACCOUNT'; 
    newOption.innerHTML = 'Tilføj en konto'; 
    selAccounts.options.add(newOption);

    //refresh so the accounts are displayed
    $('.selectpicker').selectpicker('refresh');



    // #hashtags
    [].forEach.call(document.getElementsByClassName('tags-input'), function (el) {
        let hiddenInput = document.createElement('input'),
            mainInput = document.createElement('input'),
            tags = [];
        
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', el.getAttribute('data-name'));

        mainInput.setAttribute('type', 'text');
        mainInput.classList.add('main-input');
        
        // Enter tag by pressing comma
        mainInput.addEventListener('input', function () {
            let enteredTags = mainInput.value.split(',');
            if (enteredTags.length > 1) {
                enteredTags.forEach(function (t) {
                    let filteredTag = filterTag(t);
                    if (filteredTag.length > 0)
                        addTag(filteredTag);
                });
                mainInput.value = '';
            }
        });

        //Enter tag by pressing space
        mainInput.addEventListener('input', function () {
            let enteredTags = mainInput.value.split(' ');
            if (enteredTags.length > 1) {
                enteredTags.forEach(function (t) {
                    let filteredTag = filterTag(t);
                    if (filteredTag.length > 0)
                        addTag(filteredTag);
                });
                mainInput.value = '';
            }
        });

        //Enter tag by pressing enter
        mainInput.addEventListener('input', function () {
            let enteredTags = mainInput.value.split('\n');
            if (enteredTags.length > 1) {
                enteredTags.forEach(function (t) {
                    let filteredTag = filterTag(t);
                    if (filteredTag.length > 0)
                        addTag(filteredTag);
                });
                mainInput.value = '';
            }
        });

        mainInput.addEventListener('keydown', function (e) {
            let keyCode = e.which || e.keyCode;
            if (keyCode === 8 && mainInput.value.length === 0 && tags.length > 0) {
                removeTag(tags.length - 1);
            }
        });

        el.appendChild(mainInput);
        el.appendChild(hiddenInput);


        addTag('hashtags');


        function addTag (text) {
            let tag = {
                text: text,
                element: document.createElement('span'),
            };

            tag.element.classList.add('tag');
            tag.element.textContent = tag.text;

            let closeBtn = document.createElement('span');
            closeBtn.classList.add('close');
            closeBtn.addEventListener('click', function () {
                removeTag(tags.indexOf(tag));
            });
            tag.element.appendChild(closeBtn);

            tags.push(tag);

            el.insertBefore(tag.element, mainInput);

            refreshTags();
        }

        function removeTag (index) {
            let tag = tags[index];
            tags.splice(index, 1);
            el.removeChild(tag.element);
            refreshTags();
        }

        function refreshTags () {
            let tagsList = [];
            tags.forEach(function (t) {
                tagsList.push(t.text);
            });
            hiddenInput.value = tagsList.join(',');
        }

        function filterTag (tag) {
            // return tag.replace(/[^\w -]/g, '').trim().replace(/\W+/g, '-');
            return tag
        }
    });
});
























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
    // $('<div id="orrsLoader" class="loading-container"><div><div class="mdl-spinner mdl-js-spinner is-active"></div></div></div>').appendTo("body");
    
    $('<div id="orrsLoader">'+
    '<div class="loader-wrap">'+
    '  <div class="loader-circles">'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '    <div class="circle"></div>'+
    '  </div>'+
    '</div>'+
    '</div>').appendTo("html");

    $('#orrsLoader').addClass('animated fadeIn');
}

function hideLoading() {
    $('#orrsLoader').addClass('animated fadeOut');
    setTimeout(function () {
        $('#orrsLoader').remove();
    }, 2000);
}



//success, danger, primary
var displayToast = function(type, msg) {
        if (type == 'danger'){
            icon = 'glyphicon glyphicon-remove';
        } else {
            icon = 'glyphicon glyphicon-ok'
        }

        $.notify({
        // options
        icon: icon,
        message: msg 
    },{
        // settings
        z_index: 9031,
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







