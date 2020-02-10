
<!-- begin snippet: js hide: false console: true babel: false -->

<!-- language: lang-html -->

     <?PHP
        
        $username = '';
    	
    	// Add your own access token bellow to make this script work
    	$accesstoken = '';
        $apiurl = 'https://api.instagram.com/v1/users/search?q='.$username.'&access_token='.$accesstoken;
    	
    	//API call to grab profile pic, username, bio, website, full name, and id
    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL, $apiurl);
    	curl_setopt($curl, CURLOPT_HEADER, false);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    	$response = curl_exec($curl);
    	curl_close($curl);
    	$json = json_decode($response, true);
    	$pic = $json{'data'}[0]{'profile_picture'};
    	$username = $json{'data'}[0]{'username'};
    	$bio = $json{'data'}[0]{'bio'};
    	$website = $json{'data'}[0]{'website'};
    	$full_name = $json{'data'}[0]{'full_name'};
    	$id = $json{'data'}[0]{'id'};
    	
    	
    	// API call to grab Follows, Followed By, and amount of pics upload.  
    	// Delete this if you don't need this info.
    	$apiurl = 'https://api.instagram.com/v1/users/'.$id.'/?access_token='.$accesstoken;
    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL, $apiurl);
    	curl_setopt($curl, CURLOPT_HEADER, false);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    	$response = curl_exec($curl);
    	curl_close($curl);
    	$json = json_decode($response, true);
    	$pics = $json{'data'}{'counts'}{'media'};
    	$follows = $json{'data'}{'counts'}{'follows'};
    	$followed_by = $json{'data'}{'counts'}{'followed_by'};

    	
    	
    ?>

    <!DOCTYPE html>
    <html>
    <Head>
    <title>IG LP</title>
    </Head>
    <body>
    <center>
    <img src = "<?php echo $pic; ?>">
    <p>Username: <?php echo $username; ?></p>
    <p>Bio: <?php echo $bio; ?></p>
    <p>Website: <?php echo $website; ?></p>
    <p>Full Name: <?php echo $full_name; ?></p>
    <p>ID: <?php echo $id; ?></p>
    <p>Pics Uploaded: <?php echo $pics; ?></p>
    <p>Following: <?php echo $follows; ?></p>
    <p>Followed By: <?php echo $followed_by; ?></p>
    </center>
    </body>
    </html>

<!-- end snippet -->

