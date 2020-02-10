<?php
//https://stackoverflow.com/questions/36914462/instagram-login-using-curl-php


function instagram_login($data_sent_username, $data_sent_password){
  $data_filtered_data = instagram_gettoken();
  echo "<pre>";
  print_r($data_filtered_data);
  echo "</pre>";
  $data_rec_token = $data_filtered_data[0];
  $data_rec_mid = $data_filtered_data[1];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/login/ajax/');
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.urlencode($data_sent_username).'&password='.urlencode($data_sent_password));
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Host: www.instagram.com',
  'Connection: keep-alive',
  'Content-Length: 25',
  'Origin: https://www.instagram.com',
  'X-Instagram-AJAX: 1',
  'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
  'Accept: */*',
  'X-Requested-With: XMLHttpRequest',
  'X-CSRFToken: '.$data_rec_token.'',
  'DNT: 1',
  'Referer: https://www.instagram.com/accounts/login/',
  'Accept-Encoding: gzip,deflate',
  'Accept-Language: en-US',
  'Cookie: mid='.$data_rec_mid.'; ig_pr=1; ig_vw=1319; csrftoken='.$data_rec_token.''));
  curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/instagram_cookie.txt');
  curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/instagram_cookie.txt');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31");
  $data_rec_page = curl_exec($ch) or die(curl_error($ch));
  echo $data_rec_page;
}
function instagram_gettoken(){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/login/');
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('application/x-www-form-urlencoded', 'charset=UTF-8'));
  curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/instagram_cookie.txt');
  curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/instagram_cookie.txt');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31");
  curl_setopt($ch, CURLOPT_REFERER, "https://www.instagram.com/");
  $data_local_lines = file('instagram_cookie.txt');
  foreach($data_local_lines as $data_local_line) {
    if($data_local_line[0] != '#' && substr_count($data_local_line, "\t") == 6) {
      $data_filter_tokens = explode("\t", $data_local_line);
      $data_filter_tokens = array_map('trim', $data_filter_tokens);
      $data_filtered_data[] = $data_filter_tokens[6]; 
    }
  }
  return $data_filtered_data;
}
instagram_login("viralweedtv","vegas123");
?>