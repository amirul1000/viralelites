<!DOCTYPE html>
<!-- saved from url=(0029)/t/info -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">



<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>viralelites - Knowledge Base</title> 
    
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/start_here_but.css" id="styleshit"> <!-- Resource style -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <?php
	
	if(isset($_GET['type'])){
		
		$type = $_GET['type'];
		
	}
		
		
		?>
        
    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

        @media screen and (max-width: 480px) {
            /* What it does: Forces Gmail app to display email full width */
            div > u ~ div .gmail {
                min-width: 100vw;
            }
        }

        .tdStyle {
            padding: 20px 10px; 
            font-family: sans-serif; 
            font-size: 18px; 
            line-height: 140%; 
            color: #555555;
        }

        h1 {
            margin: 0 0 10px 0; 
            font-family: sans-serif; 
            font-size: 20px; 
            line-height: 125%; 
            color: #1f8dd7; 
            font-weight: normal;
        }

        h2 {
            margin: 0 0 10px 0; 
            font-family: sans-serif; 
            font-size: 18px; 
            line-height: 125%; 
            color: #003D6E; 
            font-weight: bold;
        }

        h4 {
            font-size: 20px; 
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

    /* What it does: Hover styles for buttons */
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }

    /* Media Queries */
    @media screen and (max-width: 600px) {

        /* What it does: Adjust typography on small screens to improve readability */
        .email-container p {
            font-size: 17px !important;
        }

    }



 

.tabs {
    max-width: 100%;
    float: none;
    list-style: none;
    padding: 0;
    margin: 75px auto;
    border-bottom: 4px solid #ccc;
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
    /*SPLIT OVER HERE*/
    /*SPLIT OVER HERE*/
    /*SPLIT OVER HERE*/
    /*SPLIT OVER HERE*/
    /*SPLIT OVER HERE*/
    width: 20%;
    color: #ccc;
    font-size: 24px;
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
.tabs span {
    font-size: 22px;
}
.tabs label span {
    display: none;
}
.tabs label i {
    padding: 5px;
    margin-right: 0;
}
.tabs label:hover {
    color: #1f8dd7;
    box-shadow: inset 0 4px #1f8dd7;
    border-bottom: 4px solid #1f8dd7;
}
.tab-content {
    display: none;
    width: 100%;
    float: left;
    padding: -5px 15px;
    box-sizing: border-box;
    background-color:#ffffff;
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
    margin: 50px auto;
    }
}

.tabs [id^="tab"]:checked + label {
    background: #FFF;
    box-shadow: inset 0 4px #1f8dd7;
    border-bottom: 4px solid #1f8dd7;
    color: #1f8dd7;

}
#tab1:checked ~ #tab-content1,
#tab2:checked ~ #tab-content2,
#tab3:checked ~ #tab-content3,
#tab4:checked ~ #tab-content4,
#tab5:checked ~ #tab-content5 {
    display: block;
}
    </style>

 
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width="100%" bgcolor="#222222" style="margin: 0; mso-line-height-rule: exactly;">
    <center style="width: 100%; background: #fff; text-align: left;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            InfiniCore - Níche Specific Growing Platform.
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!--
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 600px.
            2. MSO tags for Desktop Windows Outlook enforce a 600px width.
        -->
        <div style="max-width: 900px; margin: auto;" class="email-container">
            <!--[if mso]>
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" align="center">
            <tr>
            <td>
            <![endif]-->

            <!-- Email Header : BEGIN -->
            <!-- Email Header : END -->

            <!-- Email Body : BEGIN -->
            <div class="modal fade" id="helpVideo">
      <!-- popover -->
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <div class="modal-dialog modal-dialog-center">
        <div class="embed-responsive embed-responsive-4by3"> <!-- 16by9 -->
            <iframe id="demo1" autoplay="false" class="embed-responsive-item" width="740" height="580" src="saved_resource.html" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>
    </div><table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 800px;">

                <!-- Hero Image, Flush : BEGIN -->
                <tbody><tr>
                    <td bgcolor="#ffffff" align="center">
                        <br>
                        <img src="images/MainLogo.png" width="200" height="" border="0" align="center" style="width: 100%; max-width: 200px; height: auto; background: #fff; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; margin: auto;" class="g-img">
                        <h1 style="font-weight: bold;">viralelites</h1>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td>
                        <div class="tabs" style="margin: 15px;">
                        <!-- Radio button and lable for #tab-content1 -->
                        <input type="radio" name="tabs" id="tab1" checked="">
                        <label for="tab1">
                            <i class="fa fa-info"></i><span>INFO</span>
                        </label>
                        <!-- Radio button and lable for #tab-content2 -->
                        <input type="radio" name="tabs" id="tab2">
                        <label for="tab2">
                            <i class="fa fa-puzzle-piece"></i><span>TIPS</span>
                        </label>
                        <!-- Radio button and lable for #tab-content3 -->
                        <input type="radio" name="tabs" id="tab3">
                        <label for="tab3">
                            <!-- <i class="fa fa-code"></i><span>jQuery</span> -->
                            <i class="fa fa-hashtag"></i><span>HASHT..</span>
                            <!-- <i class="fa fa-hashtag"><span>HASHTAGS</span> -->
                        </label>
                        <!-- Radio button and lable for #tab-content4 -->
                        <input type="radio" name="tabs" id="tab4">
                        <label for="tab4">
                            <!-- <i class="fa fa-code"></i><span>jQuery</span> -->
                            <i class="fa fa-comments"></i><span>COMM..</span>
                            <!-- <i class="fa fa-hashtag"><span>HASHTAGS</span> -->
                        </label>
                        <!-- Radio button and lable for #tab-content5 -->
                        <input type="radio" name="tabs" id="tab5">
                        <label for="tab5">
                            <!-- <i class="fa fa-code"></i><span>jQuery</span> -->
                            <i class="fa fa-bolt"></i><span>POWER</span>
                            <!-- <i class="fa fa-hashtag"><span>HASHTAGS</span> -->
                        </label>

                        <!-- #TAB -->
                        <!-- #TAB -->
                        <!-- #TAB -->
                        <!-- #TAB -->
                        <!-- #TAB -->
                        <div id="tab-content1" class="tab-content">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody><tr>
        <td class="tdStyle">
            <!-- <p> Hej  </p> -->
            <!-- <br> -->
            <p style="margin: 0;">
                Thank you very much for taking part in InfiniCore Beta-test - A niche specific growing platform for going viral.
            </p>
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>About the platform</h1>
            <p style="margin: 0;">
                Imagine getting likes and comments from accounts that are in the same niche as you, all done automatically as soon as you make a new post. InfiniCore brings niche specific accounts together, so they can exchange their followers and grow viral.
            </p>
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>Why is that important?</h1>
            <p style="margin: 0;">
                When you join InfiniCore, all other accounts within your niche, will like and comment on your post. This leads your post to go viral and makes you more visible to other people that already showed interest in your niche.
                <br>
                <br>
                That is the organic engagement boost needed to go viral and attract more followers - all done automatically.
            </p>
        </td>
    </tr>

    <tr>
      <td align="center" style=" padding: 25px 40px;">
        <button type="button" onclick="changeText();" id="changeText" class="button button3">How big is InfiniCore?</button>
      </td>

      <script type="text/javascript">
        var totalFollowers = '138747383';
        var totalAccounts = '4920';
        var btn = document.getElementById('changeText');


        var txtPosition = 0;

        // Text

        var btnTxt = [
          // '187.342 samlet følgere',
          totalFollowers+' total network',
          'spread over '+totalAccounts+' accounts!',
          'How big is InfiniCore?'
        ];

        function changeText(){
          if(txtPosition !== btnTxt.length){
            btn.innerHTML = btnTxt[txtPosition];
            txtPosition += 1;
          }
          else{
            txtPosition = 0;
            btn.innerHTML = btnTxt[txtPosition];
            txtPosition += 1;
          }
        }
      </script>
    </tr>

    <tr>
        <td class="tdStyle">
            <h2>Claim your FREE-beta slot now:</h2>
            <ol style="margin: 0;">
              <li><strong>Add Your Accounts</strong> - Add the Instagram accounts that you want to grow/return with.</li>
              <br>
              <li><strong>Verify Account</strong> - Verify your Instagram accound by logging into Instagram.com or Instagram App and press "It Was Me". Afterwards, submit your account again. <strong>Only if you are asked to.</strong></li>
              <br>
              <li><strong>Choose Niche</strong> - Goto "Pods" page and join the pod that are relevant for you. <strong>Note: Giver and Receiver must be within the same niche.</strong></li>
              <br>
              <li><strong>Done!</strong> - Once done, you will receive engagement by all other members within your niche as soon as you make a new post. Enjoy :)</li>
            </ol> 
        </td>
    </tr>
    <!-- 1 Column Text + Button : END -->

    <!-- Clear Spacer : END -->

    <tr>
        <td bgcolor="#ffffff">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tbody><tr>
                    <td class="tdStyle">
                        <h1>Feedback</h1>
                        <p style="margin: 0;">Some functionality during the beta-test may not work properly or as suppose to. Therefore, you are more than welcome to contact support directly on Facebook: <a href="https://www.facebook.com/viralelites/">@Haydar</a> or <a href="https://www.facebook.com/viralelites/">@Jennifer</a> if you experience some issues with logins, accounts not working or not receiving anything. 
                        <br>
                        <br>
                        We would appreciate constructive feedback.
                        Thank you for joining team InfiniCore.
                        <br>
                        </p><p>Consider joining our <strong>Facebook Group:</strong>  <a href="https://www.facebook.com/viralelites/" class="pass-forgot">InfiniCore: Social Media Platform</a></p>
                        <br>
                        <br>
                        <strong>Note: Adding accounts with fake followers or if giver and receiver (inside pods) are not within the same niche, the user might get a permanent ban from InfiniCore.</strong>
                        <p></p>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
    <!-- 1 Column Text : END -->

    <!-- 1 Column Text : BEGIN -->
    <tr>
        <td bgcolor="#ffffff">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tbody><tr>
                    <td class="tdStyle">
                        <h1>FAQ</h1>

                        <h4><span class="label label-default"></span></h4>
                        <br>

                          <div class="panel-group mdl-shadow--2dp" id="accordion">

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#1">What is InfiniCore?</a> 
                                </h4>
                              </div>
                              <div id="1" class="panel-collapse collapse"> <!-- in -->
                                <div class="panel-body">
                                  InfiniCore is your number 1 tool to go viral within your niche. Networking is the fastest and only way to gather organic followers on Instagram, therefore we have Pods in InfiniCore (read more below about Pods) 
                                  <br>
                                  <br>
                                  Besides that, the platform offers Hashtag Research which helps you choose the correct hashtags for your specific account, so you will rank (SEO) among the top 9 pictures on the hashtags explore page. Read more about Hashtag Research below
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#2">I dont understand how Pods work</a>
                                </h4>
                              </div>
                              <div id="2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Imagine if you and 500 other people made a niche specific group and made a deal that anytime each of you made a post on Instagram, then every one of you would like and/or comment the picture within 30-45 minutes. This would mean your posts would be spread out to all the other peoples' followers, and gain more visibility. That way you would attract many new organic followers.
                                  <br>
                                  <br>

                                  Now imagine you would have to manually like ALL 500 accounts - now InfiniCore will do this for you, therefore your main focus would only be to make top quality content.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="info.php">That is the "4/4 posts left?" and when are they reset?</a>
                                </h4>
                              </div>
                              <div id="15" class="panel-collapse collapse">
                                <div class="panel-body">
                                  It means that you have 4 out of posts remaining. 

                                  <br><br>
                                  We limit our members to 4 posts per day so that everyone gets a chance. The posts are reset midnight, Amsterdam time.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#002">How do I edit or remove my Pod/Account?</a>
                                </h4>
                              </div>
                              <div id="002" class="panel-collapse collapse">
                                <div class="panel-body">
                                  
                                  You just click/tap on the 3 dots and you will be greeted with a menu. See screenshot below: 
                                  <br>
                                  <br>
                                  <img src="images/info/edit.png" alt="Insane Viral" style="width:70%;margin-left:12.5%;">

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#0002">Is there a limit to how many likes/comments my account will give?</a>
                                </h4>
                              </div>
                              <div id="0002" class="panel-collapse collapse">
                                <div class="panel-body">
                                  
                                  Yes, to ensure maximum safety, all accounts are limited to give a certain amount of likes per second, hour and day.
                                  <br>
                                  <br>
                                  If your account exceeds its limits, it will not like/comment until its limits are reset. However, you will still receive likes and comments meanwhile. 
                                  <br>
                                  Daily limits are 1100 for likes and 100 for comments.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#02">I want to share InfiniCore with my network, but whats in it for me?</a>
                                </h4>
                              </div>
                              <div id="02" class="panel-collapse collapse">
                                <div class="panel-body">
                                  
                                  If you know anyone in your network that would benefit from InfiniCore, please consider visiting our <a href="about.php">Referral Zone</a>. By inviting friends using your personal link will will give you access to lots of exiting bonuses, such as free access to one month membership of free Hashtag Research, free likes and other.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#3">I can't add my Instagram account?</a>
                                </h4>
                              </div>
                              <div id="3" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Sometimes problems with the network between the server and Instagram will occur. Try again after a few minutes, preferably from different devices, and make sure you have entered the correct username and password and do not use "@" in front of the account name.
                                  <br>
                                  <br>

                                  If the problem still persist, please contact support@InfiniCore.net, or send a private message through Facebook to <a href="https://www.facebook.com/viralelites/">Haydar from support.</a>.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#4">Can I add more than one account?</a>
                                </h4>
                              </div>
                              <div id="4" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Yes, you can add up to 5 accounts.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#5">Does InfiniCore support two step authentification?</a>
                                </h4>
                              </div>
                              <div id="5" class="panel-collapse collapse">
                                <div class="panel-body">
                                  It is known as two-factor authentification. Sadly not yet, but it is in our todo list.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#6">What does 0k mean?</a>
                                </h4>
                              </div>
                              <div id="6" class="panel-collapse collapse">
                                <div class="panel-body">
                                  It means that the pod is open to everyone, including the people which are below 1000 (1k) followers.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#7">Why don't I get any likes?</a>
                                </h4>
                              </div>
                              <div id="7" class="panel-collapse collapse">
                                <div class="panel-body">
                                  InfiniCore is still at its early stages, therefore some troubles may occur. We are currently working on optimising the server, to make sure everyone gets the correct amount of likes. The system is undergoing constant development to give the best possible service. 
                                  <br>
                                  <br>

                                  If troubles still occur, please check if your account is activated in "Pods". Otherwise contact support@InfiniCore.net. Or send a private message through Facebook for <a href="https://www.facebook.com/viralelites/">Haydar from support.</a>.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#8">Which accounts are part of the Pods?</a>
                                </h4>
                              </div>
                              <div id="8" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Active accounts with organic followers are part of InfiniCore. That is because there are no available tools to help you go viral within your own specific niche, on the market. The method of going viral is proven to be the most effective, the cheapest and safiest to gain more visibility and invite organic followers.
                                  <br><br>
                                  All accounts are checked at least once a week, to make sure there are no fake accounts that can potentially harm the other members.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#9">Will I like accounts that I can not approve of?</a>
                                </h4>
                              </div>
                              <div id="9" class="panel-collapse collapse">
                                <div class="panel-body">
                                  All accounts are checked thoroughly at least once a week. The accounts that have bought followers or are posting inappropriate content or accounts that have not neutral posts (such as political- or religious content, which is promoting drugs- or arms and other posts that is agains the policy of Instagram TOS) will permanently be expelled from InfiniCore without a warning. 

                                  <br><br>
                                  Actually, there is a built-in function in InfiniCore, so that if you have 2 accounts, you can make one of them the "giver account" and the other can be the "receiver account" so that only one receive likes and the other only gives likes. That way you will solve the problem of not knowing what you like.
                                  <br><br>

                                  Creating a new account and using that as the giver will give no value to others, since it does not have any network behind and therefore it has no purchasing power. If you want to do this setup, you must have another account with a network behind that can give likes back. Then you have a setup where you only receive likes and don’t just like everything.

                                </div>
                              </div>
                            </div>


                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#9-2">Why did my account get banned from InfiniCore?</a>
                                </h4>
                              </div>
                              <div id="9-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  In order to maintain a high quality service, we go through all of the accounts inside InfiniCore and make sure that they follow the ground rules.
                                  <br><br>

                                  All members of InfiniCore has to follow these ground rules in order to not get banned:
                                  <br>
                                  <ul>
                                    <li>You are NOT allowed to buy fake followers for your account.</li>
                                    <li>You have to be active and post at least once a week.</li>
                                    <li>You are not allowed to buy fake likes/comments to your posts.</li>
                                    <li>Your account HAS TO comply with Instagram Posts Regulations, that means not promoting drugs or firearms, as well as no pornographic content.</li>
                                  </ul>
                                  <br>
                                  Fake and dead accounts will be filteret out once a week. We believe in quality over quantity.

                                  <br><br>
                                  If you believe you were mistakenly removed, please contact the support (by mail or Jenny).

                                </div>
                              </div>
                            </div>


                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#11">What is the price for a membership in InfiniCore?</a>
                                </h4>
                              </div>
                              <div id="11" class="panel-collapse collapse">
                                <div class="panel-body">
                                  InfiniCore is currently for free for all pods above 0k sizes (15k, 45k and 100k).
                                  <br><br>

                                  Also, we do offer other additional features that will require payment, that will aid your Instagram growth. Such tools are Power Service and Viral Finder.
                                  <!-- But when it is launched the prices will be as follows (not 100%, might be less):
                                  <br>
                                  <ul>
                                    <li>16$/monthly per account if you choose 1 month.</li>
                                    <li>14.5$/montlhy per account if you choose 3 months.</li>
                                    <li>13$/monthly per account if you choose 6 months.</li>
                                  </ul>
                                  <br> -->

                                  <!-- If you choose not to invest in the service during the launch, your account(s) will automatically become inactive. -->

                                </div>
                              </div>
                            </div>

                            
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#13">Is it secure?</a>
                                </h4>
                              </div>
                              <div id="13" class="panel-collapse collapse">
                                <div class="panel-body">
                                  All information goes through permanent encryption (SHA-256) before it is added to the database. That means all sensitive information are not shown again, even for the developers. 
                                  <br><br>

                                  Also, we are using the highest quality of proxy (1 IP address per account). That is to make sure no account is shadowbanned. So it is very important for you to validate your account by pressing the “Yes It Was Me” button, through the Instagram app on your mobile or through the Instagram homepage.
                                  <br>This procedure is only required the first time you add an Instagram account to InfiniCore. However, sometimes it is not required at all.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#13-2">Are you going to need my Instagram password?</a>
                                </h4>
                              </div>
                              <div id="13-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  We understand your concern and that is exactly why we don’t save our users Instagram passwords. In case someone hacks into our database, they will find nothing.

                                  <br><br>
                                  This has a cost though, meaning that you might have to relogin once every few months because the cookies will get expired. But you will receive an email when it happens
                                
                                <!-- 
                                  <br><br>
                                  No we are not. You only make an ordinary login procedure to Instagram through the platform so that the program can give likes for you to the rest of the members. That way you wont have to like 300 others manually. Remember this is a perfect mutual agreement.
                                  <br><br>
                                  Of course we will not keep any kind of personal passwords, since it is against the security policy of Instagram. 
                                -->
                                
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#14">Will InfiniCore eventually have more niches?</a>
                                </h4>
                              </div>
                              <div id="14" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Yes, we have just added the pet and animals niche and will be adding more in the future.

                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#15-2">How many members/likes can I expect?</a>
                                </h4>
                              </div>
                              <div id="15-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  You can see the total number of InfiniCore members using the button above.

                                  <br><br>
                                  The expected likes are listed in the Pods section as members along side the total network for the specific niche. Remember that all members are limited to 4 posts per day.

                                </div>
                              </div>
                            </div>


                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#16-2">Does this conflict with the rules of Instagram or TOS?</a>
                                </h4>
                              </div>
                              <div id="16-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  The short answer is yes and no. Yes because it is an automation software, no because we make sure that robots/fake accounts with fake followers/engagement, that can potentially  ruin everything for the rest of the members are perioducally removed.
                                  <br><br>

                                  All members of InfiniCore has to follow these ground rules in order to not get banned:
                                  <br>
                                  <ul>
                                    <li>You are NOT allowed to buy fake followers for your account.</li>
                                    <li>You have to be active and post at least once a week.</li>
                                    <li>You are not allowed to buy fake likes/comments to your posts.</li>
                                    <li>Your account HAS TO comply with Instagram Posts Regulations, that means not promoting drugs or firearms, as well as no pornographic content.</li>
                                  </ul>
                                  <br>
                                  Fake and dead accounts will be filteret out once a week. We do this in order to maintain the high quality of our service. Also, if you want to be safe, do not use other services besides InfiniCore.

                                </div>
                              </div>
                            </div>


                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#17">Hashtag Research?</a>
                                </h4>
                              </div>
                              <div id="17" class="panel-collapse collapse">
                                <div class="panel-body">
                                  You know the importance of using the correct hashtags whenever you want to rank among the top 9 pictures in the hashtag explore page, and attract more organic traffic to your account.
                                  <br><br>

                                  With the Hashtag Research you will cut down the manual working procedure. All you have to do is insert the niche specific hashtags to your posts and the platform will take care of the rest. Based on your account it will tell you in average how many likes you need to rank/SEO among the 200 inserted hashtags. That way you can delete useless hashtags you don’t rank in.
                                  <br><br>

                                  We recommend running the Hashtag Research once a month to ensure optimal results, since you eventually will grow bigger and then you can use more general hashtags.

                                </div>
                              </div>
                            </div>
                          </div> 
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
    <!-- 1 Column Text : END -->

</tbody></table>
                        </div> <!-- #tab-content1 -->

                        <div id="tab-content2" class="tab-content">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
<tbody><tr>
    <td class="tdStyle">
        <!-- <br> -->
        <p style="margin: 0;">

            InfiniCore is an automatic engagement platform that helps you go viral on Instagram and attract more organic followers to your account. 
            <br><br>
            It simply creates visibility and traffic to your profile on a micro budget.
            <br>
            <br>
            This blog post is made in order for you to fully understand the technique and the theory behind and why InfiniCore works and how to make the most out of its services.
            
            <br><br>
            Do you want to know how you can get similar results as in the picture below? Max 2 min. read.
            <br><br>
        </p>

        <!-- <img src="http://willyminiatures.com/wp-content/uploads/2015/04/work-in-progress.png" alt="Flowers" style="width:35%; margin-left: 35%;"> -->

        <img src="images/info/results.png" alt="Sizes" style="width:55%;margin-left:22.5%;">
    </td> 
</tr>

<tr>
    <td class="tdStyle">
        <!-- <br> -->
        <h1>Stuck with your Instagram growth?</h1>
        <p style="margin: 0;">
            Some of you have just started using Instagram and are curious of how it works. However, most of you, as we were, are very frustrated by the poor reach and engagement you've been getting from the hard work you put into your content, thereby affecting your followers count.
            
            <br><br>
            Remember, with follow/unfollow method, you will successfully destroy your account and have low to zero engagement on future posts.
            
            <br><br>
            Furthermore, many think that the likes on posts = more followers. That is an incorrect assumption.! Here is the 3 steps to go viral on Instagram, that everyone has kept a secret.
        </p>

        <br>
        
        <h2>3 simple steps to go viral on Instagram</h2>
        <ol style="margin: 0;">
          <li>
            In order to make you're posts go viral and appear on other peoples explore page, you need to find content that already went viral or study viral content so you can create your own.
        </li>
          
          <br>
          <li>
            You need likes and comments from accounts that have a high number of followers, i.e. big accounts WITHIN 10-45 min. your post, also referred to as powerlikes.
            <br><br>
            When an account likes your post, it will be displayed on the accounts' followers <strong>Explorepage</strong> (the small magnifying glass in the instagram app). For instance, if you get a like from an account with 10,000 followers, your post can be displayed on the Explorepage of 10,000 accounts.
          </li>
          
          <br>
          <li>
            Instagram's new algorithm displays content to its users by interest, therefore make sure the aforementioned account who liked your post have the same interest as you (same niche). 
            <br><br>
            Besides that, the higher you are on others' Explorepage, the more you will be seen. So make sure that you (1) invest in quality powerlikes that boosts your post to the top, and (2) are part of an engagement pod wihtin your niche to hit the right audience.
          </li>
          <br>
        </ol> 

        The followers you will receive from Explorepage choose to follow you because you have a nice page and good content. - They are therefore easier and convert into traffic and  buyers.
    </td>
</tr>

<tr>
    <td class="tdStyle">
        <!-- <br> -->
        <h1>How do you rank at the top of Explorepage and get more followers who have chosen to follow you?</h1>
        <p><strong>Here's how you can do it:</strong></p>
        <h2>Your account must be set up properly: be mail and phone verified and niche categorized.</h2>
        <ol style="margin: 0;">
          <li>To categorize your account in a specific niche, you need to interact - i.e. view, like and comment on content from within your niche.</li>
          <br>
          <li>You can see if your account is categorized correctly if your entire Explorepage only shows posts from your own niche.</li>
        </ol> 
        
          <br>
        <h2>You must ensure quality viral content that your audience loves.</h2>
        <ol style="margin: 0;">
          <li>If the people who see your post on their Explorepage do not like it, you will not go virally. It's essential that your posts in themselves can attract likes and comments to go virally. "Content is king".</li>
          <br>
          <li>Make sure to take a look and cop... analyze your successful competitors.</li>
        </ol> 

          <br>
        <h2>Engagement boost.</h2>
        <ol style="margin: 0;">
          <li>This is where InfiniCore comes into the picture. InfiniCore boosts your post, so that it can rank high on Explorepage. InfiniCore is both a quality powerlike service and niche specific engagement pod.</li>
          <br>
          <li>If the frist two steps are not met, InfiniCore will have little to no effect on your account. Therefore, make sure to be different, and stay within your niche / target group!</li>
        </ol> 
    </td>
</tr>

<tr>
    <td class="tdStyle">
        <!-- <br> -->
        <h1>To sum up</h1>
        <p style="margin: 0;">
            To rank at the top of Explorepage and go viral, hereby appearing to your audience on a micro budget, your account must be correctly categorized. And most importantly, you will need to boost your engagement using InfiniCore.

            <br>
            <br>

            InfiniCore is a automated niche specific exchange platform. Meaning there are no fake accounts and no fake likes. For every like InfiniCore makes on your behald, it also mimics a user input. Instagram tracks whether the like is organic (double tapped) or botted. Therefore InfiniCore simulates double tap, scrolling around and alternating viewing time on each post.
            
            <br>
            <br>

            Bonus tip: stay consistent and don't let poor results demotivate you. Normally it will take 7-15 days for an account to start going viral using the aforementioned tools.
        </p>

        
    </td>
</tr>


</tbody></table>
                        </div> <!-- #tab-content2 -->
                        
                        <div id="tab-content3" class="tab-content">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody><tr>
        <td class="tdStyle">
            <!-- <p> Hej  </p> -->
            <!-- <br> -->
            <p style="margin: 0;">
                You may already know the importance of using the right hashtags when you want to rank (SEO) among the top  posts on the Hashtags Explore page, thereby attracting organic traffic to your account.
            </p>
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>Get featured on top posts</h1>
            <p style="margin: 0;">
                With Hashtag Research, you cut down on all manual work. Simply insert / enter the hashtags relevant to your niche and let the platform handle the rest.
                
                <br><br>
                The research will tell you 2 things: how many likes your account receives on average and how many average likes you need to get to in order to rank / SEO among the entered hashtags. That way, you get a greater chance of getting featured on the top posts in the Hashtag Explore page.
            </p>
            
            <br>
            <img src="images/info/hash_intro1.jpg" alt="Flowers" style="width:70%;margin-left:12.5%;">
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>Avoid bad hashtags</h1>
            <p style="margin: 0;">
                In addition, you will easily find the hashtags that are flagged as spam so you avoid using them and getting shadowbanned.

                This way you can filter out useless hashtags ie. hashtags that gives you no visability or benefit.
            </p>

            <br>
            <h1>Upgraded Hashtag Research V2</h1>
            <p style="margin: 0;">
                The Hashtag Research have been upgraded as well. You will now receive a <strong>FULL</strong> and complete overview of your hashtags at the tips of your fingers! 

                <br><br>
               
                Now Hashtag Research provides you information about how many <strong>posts</strong> each hashtag has, how many average <strong>likes</strong>, average <strong>comments</strong> and even, how many average <strong>views</strong>! If you can beat the average count presented by the Hashtag Research, your chances of appearing in the TOP hashtags explore page are 99.999%!

                <br><br>
                
                Below you will find a screenshot of the upgraded Hashtag Research.
                <br>
            </p>
            <img src="images/info/hashtagsV2.png" alt="Hashtag Research V2" style="width:75%;margin-left:12.5%;">
            <p style="margin: 0;">
                <br><br>
                We greatly value your feedback, because your feedback made Hashtags Research V2 come to life. If you have any other comments/feedback/issues, feel free to reach out to us.
            </p>
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>How do I gain access?</h1>
            <p style="margin: 0;">
                By referring 3 of your fellow colleagues and friends into InfiniCore, you will get PERMANENT access to Hashtag Research V2.

                <br><br>
                Your referral link is located in the Hashtag Research menu, the last slide inside the gallery.
                
                <br><br>
                By referring others through your referral link, the person will be redirected to InfiniCore.net for processing. However, <strong>InfiniCore will only register the referral when the person has added his Instagram account and joined a Pod</strong>. 
                
                <br><br>
                PS: The more people you successfully refer to InfiniCore, the bigger the network will be and the more enjoyable bonuses you will experience.

                <br><br>
                PS: The more people you successfully refer to InfiniCore, the bigger the network will be and the more enjoyable bonuses you will experience.

                <br><br>
                PPS: As many of you guys already have requested, we have created a <strong>Referral Zone</strong> that shows you your progress (how many people have <strong>clicked</strong>, <strong>registered</strong> and how many Instagram <strong>accounts</strong> were added using your link. <a href="about.php">Click here to go to your referral page.</a>
                <br><br>
                <br>
            </p>
        </td>
    </tr>
</tbody></table>
                        </div> <!-- #tab-content3 -->

                        <div id="tab-content4" class="tab-content">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody><tr>
        <td class="tdStyle">
            <!-- <p> Hej  </p> -->
            <!-- <br> -->
            <p style="margin: 0;">
                Let us talk about the importance of comments. Likes alone will not do much if you want to go viral. Comments help a great deal, especially if the comments are related to your posts. Having this in mind, InfiniCore proudly introduces its latest comments feature: Comment Triggers.
            </p>
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>The Comment Triggers</h1>
            <p style="margin: 0;">
                Comments are quite an important part of the going-viral-equation, however if you get too many comments that are unrelated to your post, it will look un-natural and might scare potential new followers away.
                
                <br><br>
                Therefore, we have created Comment Triggers. You just have to write the trigger in your caption of your new post and let the platform handle the rest. 

                <br><br>
                The triggers are actual hashtags that you can place anywhere in your caption. This allows you to get comments that are related to the trigger that you have placed. See below example picture: 
            </p>
            
            <br>
            <img src="images/info/hotnot.jpg" alt="Flowers" style="width:75%;margin-left:12.5%;">
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>Supported Triggers</h1>
            <p style="margin: 0;">
                You can combine and use more than 1 trigger to get some variation. Below you will see current supported Comment Triggers:
                <br>
                <br>
                </p><ol style="margin: 0;">
                  <li><strong>#hotnot</strong> Contains Hot or Not comments.</li>
                  <br>
                  <li><strong>#realfake</strong> Contains Real vs. Fake comments.</li>
                  <br>
                  <li><strong>#yaynay</strong> The typical Yay and Nay comments.</li>
                  <br>
                  <li><strong>#rate</strong> Rating comments, typically 1-10.</li>
                  <br>
                  <li><strong>#yesno</strong> Yes or No comments.</li>
                  <br>
                  <li><strong>#congrats</strong> Congratulations comments.</li>
                  <br>
                </ol> 
            <p></p>
            <br>
            We are adding more triggers to the list, however, if there are some triggers that you would like to include, please do not hesitate to contact directly on Facebook: <a href="https://www.facebook.com/viralelites/">@Haydar</a> or <a href="https://www.facebook.com/viralelites/">@Jennifer</a> or send an email to support@infinicore.net.

            <br>
            <br>
            Here is another example:
            <br>
            <br>
            <img src="images/info/realfake.jpg" alt="Flowers" style="width:75%;margin-left:12.5%;">
        </td>
    </tr>

</tbody></table>
                        </div> <!-- #tab-content4 -->

                        <div id="tab-content5" class="tab-content">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody><tr>
        <td class="tdStyle">
            <!-- <p> Hej  </p> -->
            <!-- <br> -->
            <p style="margin: 0;">
                <strong>Overwhelmed by the new Instagram algorithm?</strong>
                <br>
                You’re not alone.

                <br><br>
				The rules of Instagram have changed, and plenty of businesses are stressing over how badly it’s affecting their social media game. In the past couple of years Instagram has underwent a ton of changes in their algorithm which has sparked a lot of confusion and desperation to its users.

                <br><br>
				But don’t worry. We are here to unveil for you the ultimate growth secrets for Instagram. Some Instagram accounts emerge out of nowhere and take off like wildfire! They capture the world’s attention and get everyone talking about them. The buzz never truly dies off. 

                <br><br>
				We have collaborated with some of the owners of these accounts and perfected <strong>tools</strong> that can give you the exact same <strong>results</strong>! See below.
            </p>
			
			<br>
            <img src="images/info/power1.png" alt="Insane Viral" style="width:70%;margin-left:12.5%;">

        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>Introducing Power Service</h1>
            <p style="margin: 0;">
                We have always known that Instagram algorithm is mainly based on engagement. This includes number of likes, comments, video views, saves, shared posts, DM’s and any other type of interactions a post gets. Ofcourse some interactions are better than others, however, we have managed to find the sweetspot. Here is how.
                
                <br><br>
                When a post receives a ton of likes and comments, this signals Instagram algorithm that your post is quality, containing engaging content that more people will want to see.

                <br><br>
                Not only does the algorithm care about how much engagement your post gets, it also cares about the quality of engagement and how quickly you get that engagement.

                <br><br>
                If your post gets a lot of high value likes and comments shortly after it is posted, it will be flagged as viral (yes a positive flag) by the algorithm, which in turn will expose your post to even more people, including your own followers.

                <br><br>
                We call those high value likes and comments <strong>Power Likes</strong> and <strong>Power Comments</strong>.
            </p>
            
            <br>
            <img src="images/info/power3.png" alt="Power Service" style="width:80%;margin-left:10.5%;">
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>Power Likes &amp; Comments With Network of 110 Million!</h1>
            <p style="margin: 0;">
                Power Likes and Power Comments are basically ‘likes &amp; comments’ performed by influential accounts on Instagram, or people who have a very large following. In case of InfiniCore, the total number of following network is <strong>110 Million</strong>!
            </p>

            <br>
            <strong>Here is how that works:</strong>
            <p style="margin: 0;">
                Notice how your Explore page shows a lot of posts that are liked or commented by people you are following. That is because the new Instagram algorithm takes relationships and relevancy into account. This means getting Power Likes and Power Comments on your posts can expose you to a lot of people following those influential accounts!

                <br><br>
                However, there is one more interesting factor to take into account: Views. This means that beside Power Likes and Comments, the new algorithm rewards/ranks the post based on duration of engagement, i.e. if your audience views your posts for a longer periode of time, your posts are more likely to show up at the top of the expore page. That is why we have included <strong>Power Views</strong> into the mix.
            </p>
        </td>
    </tr>

    <tr>
        <td class="tdStyle">
            <h1>Power Views For Videos</h1>
            <p style="margin: 0;">
                A combination of a unique research and experimentation. InfiniCore crack down the code on how to go ultra viral on videos and reach more audience. After 6 months of hard work and research, we are proud to introduce our very own Power Views. 

                <br><br>
                As Instagram launched its new feature igtv, we do believe that videos is at the top of there algorithm and that is exactly why we have spend so much time on figuring out how to record video views. If you post a viral video and combine Power Likes, Comments and Views, here is the results you should be expecting:
                
                <br><br>
            	
            	<img src="images/info/power2.png" alt="Perfect Combination: The sweetspot" style="width:70%;margin-left:12.5%;">
                
                <br><br>
				Enjoy and do not hesitate to contact us if you want to buy in bulks, have questions, comments etc. regarding this topic.
            </p>
        </td>
    </tr>



    <!-- 1 Column Text : BEGIN -->
    <tr>
        <td bgcolor="#ffffff">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tbody><tr>
                    <td class="tdStyle">
                        <h1>FAQ</h1>

                        <h4><span class="label label-default"></span></h4>
                        <br>

                          <div class="panel-group mdl-shadow--2dp" id="accordion">

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power1">What is Power Service?</a> 
                                </h4>
                              </div>
                              <div id="power1" class="panel-collapse collapse"> <!-- in -->
                                <div class="panel-body">
                                  Power Service is InfiniCore's new service that will push you towards going viral with Power Likes, Power Comments and Power Views.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power2">What are the benifits?</a>
                                </h4>
                              </div>
                              <div id="power2" class="panel-collapse collapse">
                                <div class="panel-body">
                                 	There are many benenifts, you will get exposore to a network of 110+ Million combined followers! This will attract tons of traffic and visitors towards your page.

                                 	<br><br>
									All these algorithm secrets combined can provide you with a very effective toolbox against engagement drops. These hacks will help you get your IG account back up to speed, if they are used daily, combined with your usually activities. The final results after using Powerservices combined with amazing content these hacks were phenomenal.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power15">How does it work?</a>
                                </h4>
                              </div>
                              <div id="power15" class="panel-collapse collapse">
                                <div class="panel-body">
                                  	You purchase the engagement that you need (power likes, comments or views or all 3 of them). You add your receiving account and post. Thats it. 

                                  	<br><br>
									If you want to save your views, let's say because you want to post a normal picture, you can press on the "ON" button to turn the views mementarily off. Same goes with the likes and comments.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power02">Are you going to have specific niche powerlikes?</a>
                                </h4>
                              </div>
                              <div id="power02" class="panel-collapse collapse">
                                <div class="panel-body">
                                  At the moment only the comments are niche specific, but in the future when we have a bigger network in the different niches, we will release niche specific power likes.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power3">Can I still use the comment triggers, like #hotnot?</a>
                                </h4>
                              </div>
                              <div id="power3" class="panel-collapse collapse">
                                <div class="panel-body">
                                	Yes you can.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power4">How long do they take to come in?</a>
                                </h4>
                              </div>
                              <div id="power4" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Between 4-10 min.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power5">What size accounts?</a>
                                </h4>
                              </div>
                              <div id="power5" class="panel-collapse collapse">
                                <div class="panel-body">
                                  110 Million total followers, varying from 20k up to 4m per account.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power6">Is it safe?</a>
                                </h4>
                              </div>
                              <div id="power6" class="panel-collapse collapse">
                                <div class="panel-body">
                                  It has been thoroughly  tested and analyzed. So yes, it is safe.  
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power7">I'm not getting my likes/comments/views?</a>
                                </h4>
                              </div>
                              <div id="power7" class="panel-collapse collapse">
                                <div class="panel-body">
                                  If 10 min. have passed and you still have not received your engagement, please double check if you have set your engagement to 'ON' and your receiver is active.

                                  <br><br>
                                  Otherwise please contact support@InfiniCore.net. Or send a private message through Facebook to <a href="https://www.facebook.com/viralelites/">Jennifer from support.</a>. We will be more than happy to compensate for lost points. Remember to state your account name.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power8">If I choose 200 or less likes, will I still get 110M network?</a>
                                </h4>
                              </div>
                              <div id="power8" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Yes, because the less likes you want to receive, the more concentrated the network will be. Meaning only the biggest accounts will deliver.
                                </div>
                              </div>
                            </div>

                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="/t/info#power9">How much does it cost?</a>
                                </h4>
                              </div>
                              <div id="power9" class="panel-collapse collapse">
                                <div class="panel-body">
                                  The prices are viewed by pressing the blue button for each respective power service, in your Power Service page.
                                </div>
                              </div>
                            </div>

                      </div> 
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>


</tbody></table>




                        </div> <!-- #tab-content5 -->
                    </div>
                    </td>
                </tr>

                

                


                 
  <script src="js/jquery.min.js" type="text/javascript" ></script>

  <script src="js/bootstrap.min.js" type="text/javascript" ></script>

  <script src="js/material.min.js" type="text/javascript" ></script>

  <script type="text/javascript">
    // var tab = JSON.parse('info');
    var tab = 'info';
    
    // $("#tab5").click();

    if (tab == 'info')
        $("#tab1").click();
    else if (tab == 'tips')
        $("#tab2").click();
    else if (tab == 'hashtags')
        $("#tab3").click();
    else if (tab == 'comments')
        $("#tab4").click();
    else if (tab == 'power')
        $("#tab5").click(); 
		

  </script>
  <?php 
  
  if($type =='info'){ ?>
  <script> $("#tab1").click();</script> 
  <?php }else if($type =='tips'){?>
  <script> $("#tab2").click();</script> 
  <?php }else if($type =='hashtags'){?>
  <script> $("#tab3").click();</script> 
  <?php }else if($type =='comments'){?>
  <script> $("#tab4").click();</script> 
  <?php }else if($tab4 =='power'){?>
  <script> $("#tab5").click();</script> 
  <?php }?>
 


    <!-- Modal Input -->
    
            

            </tbody></table>

            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; font-size: 14px; line-height: 140%;">
                <tbody><tr>
                    <td style="padding: 40px 10px; width: 100%; font-family: sans-serif; font-size: 14px; line-height: 140%; text-align: center; color: #888888;" class="x-gmail-data-detectors">
                        <webversion style="color: #cccccc; text-decoration: underline; font-weight: bold;">Enjoy</webversion>
                        <br><br>
                        viralelites.com
                        <!-- <br>123 Fake Street, SpringField, OR, 97477 US<br>(123) 456-7890 -->
                        <br>Support@viralelites.com
                                                <br><br>
                        <!-- <unsubscribe style="color: #888888; text-decoration: underline;">unsubscribe</unsubscribe> -->
                    </td>
                </tr>
            </tbody></table>

        </div>

    </center>

</body></html>