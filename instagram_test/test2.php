<?php
    $username = "";
    $password = "";
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $cookie=$username.".txt";
	

    $url="https://instagram.com/accounts/login/?force_classic_login";

  
	$page = file_get_contents($url);
	
	

    // try to find the actual login form
    if (!preg_match('/<form method="POST" id="login-form" class="adjacent".*?<\/form>/is', $page, $form)) {
        //throw Instagram_Manager('Failed to find log in form!');
    }

    $form = $form[0];
	
	

    // find the action of the login form
    if (!preg_match('/action="([^"]+)"/i', $form, $action)) {
       // throw Instagram_Manager('Failed to find login form url');
    }

    $url2 = $action[1]; // this is our new post url
    // find all hidden fields which we need to send with our login, this includes security tokens
    $count = preg_match_all('/<input type="hidden"\s*name="([^"]*)"\s*value="([^"]*)"/i', $form, $hiddenFields);

    $postFields = array();

    // turn the hidden fields into an array
    for ($i = 0; $i < $count; ++$i) {
        $postFields[$hiddenFields[1][$i]] = $hiddenFields[2][$i];
    }

    // add our login values
    $postFields['username'] = $username;
    $postFields['password'] = $password;

    $post = '';

    // convert to string, this won't work as an array, form will not accept multipart/form-data, only application/x-www-form-urlencoded
    foreach($postFields as $key => $value) {
        $post .= $key . '=' . urlencode($value) . '&';
    }

    $post = substr($post, 0, -1);
	
	

    // set additional curl options using our previous options
	$ch  = curl_init();        

    curl_setopt($ch, CURLOPT_URL, "https://instagram.com/".$url2);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_REFERER, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $page = curl_exec($ch);
   
    echo $page;

    // connect to profile edit page
	$ch  = curl_init();
    $url="https://instagram.com/accounts/edit/";
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    echo curl_exec($ch);  
?>